<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Profile;
use App\Models\UserEmissionModel;
use App\Http\Resources\EmissionSummaryResource;
use App\Models\UserEmissionEquivalentModel;
use Carbon\Carbon;
use App\Http\Controllers\Calculator\Conversions;
use App\Http\Resources\DashboardReportResource;
use App\Http\Resources\UserEmissionTargetResource;
use App\models\EmissionTargetModel;
use Illuminate\Support\Facades\Auth;



class DashboardResource extends JsonResource
{
/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
 */
public function toArray($request)
{

$since=UserEmissionModel::select('created_at')
->where('user_id',$this->id)
->orderby('created_at','ASC')
->first();
$amount=UserEmissionEquivalentModel::select('total_emission')
->where('user_id',$this->id)
->sum('total_emission');

//conversion. Convert total emisson fron KG to TN
$co2e=Conversions::convert_kg_tn(round($amount,0));
$reports=UserEmissionModel::select('emission_activity')
->where('user_id',$this->id)
->groupBy('emission_activity')
->get();


//emission target model
$emission_target_model=EmissionTargetModel::select('emission_target.id',
'emission_target.emission_activity_id as activity_id',
'user_id',
'emission_activity.name',
'emission_target.emission_percentage',
'from_date',
'to_date',
'emission_target.created_at')
->join('emission_activity',
'emission_activity.id','=',
'emission_target.emission_activity_id')
->where('emission_target.user_id',Auth::user()->id)
->orderby('created_at','DESC')->limit(4)->get();



return [
'id'=>$this->id,
'firstname'=>$this->firstname,
'lastname'=>$this->lastname,
'email'=>$this->email,
'role'=>$this->role,
'total_emission'=>['date'=>$since!=null?$since->created_at->format('d-M-Y'):$this->created_at->format('d-M-Y'),'amount'=>round($amount,10)],
'emission_summary'=>EmissionSummaryResource::collection(UserEmissionModel::where('user_id',$this->id)->limit(10)->orderby('created_at','Desc')->get()),
'co2e_tonne'=>$co2e,
'dollars'=>Conversions::emission_to_money($amount)['dollars'],
'shillings'=>Conversions::emission_to_money($amount)['shillings'],
'reports'=>DashboardReportResource::collection($reports),
'target'=>UserEmissionTargetResource::collection($emission_target_model)





];
}
}
