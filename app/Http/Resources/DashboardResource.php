<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Profile;
use App\Models\UserEmissionModel;
use App\Http\Resources\EmissionSummaryResource;
use App\Models\UserEmissionEquivalentModel;
use Carbon\Carbon;
use App\Http\Controllers\Calculator\Conversions;



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
$dollars=Conversions::convert_co2e_dollars($co2e);
$shs=Conversions::convert_dollars_shillings($dollars);





return [
'id'=>$this->id,
'firstname'=>$this->firstname,
'lastname'=>$this->lastname,
'email'=>$this->email,
'role'=>$this->role,
'total_emission'=>['date'=>$since!=null?$since->created_at->format('d-M-Y'):$this->created_at->format('d-M-Y'),'amount'=>round($amount,10)],
'emission_summary'=>EmissionSummaryResource::collection(UserEmissionModel::where('user_id',$this->id)->limit(10)->orderby('created_at','Desc')->get()),
'co2e_tonne'=>$co2e,
'dollars'=>round($dollars,5),
'shillings'=>round($shs,0),









];
}
}
