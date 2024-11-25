<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Profile;
use App\Models\UserEmissionModel;
use App\Http\Resources\EmissionSummaryResource;
use Carbon\Carbon;

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
$amount=UserEmissionModel::select('carbon_emission')
->where('user_id',$this->id)
->sum('carbon_emission');



return [
'id'=>$this->id,
'firstname'=>$this->firstname,
'lastname'=>$this->lastname,
'email'=>$this->email,
'role'=>$this->role,
'total_emission'=>['date'=>$since!=null?$since->created_at->format('d-M-Y'):$this->created_at->format('d-M-Y'),'amount'=>round($amount,10)],
'emission_summary'=>EmissionSummaryResource::collection(UserEmissionModel::where('user_id',$this->id)->limit(10)->orderby('created_at','Desc')->get()),









];
}
}
