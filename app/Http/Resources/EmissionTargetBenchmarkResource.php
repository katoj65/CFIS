<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
use App\Models\UserEmissionModel;
use App\Http\Resources\EmissionResource;
use Illuminate\Support\Facades\Auth;
use App\Models\EmissionBaselineModel;
use App\http\Controllers\Calculator\Conversions;
use App\models\EmissionTargetModel;

class EmissionTargetBenchmarkResource extends JsonResource
{
/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
 */
public function toArray($request)
{
//how emission target works
//get current emission  target and compare with emission baseline.
//get current target and compare with previous target

$baseline=EmissionBaselineModel::where('user_role',Auth::user()->role)->where('emission_activity_id',$this->activity_id)->first()->amount;
//previous emission target
$previous_target=EmissionTargetModel::where('id','<',$this->id)
->where('emission_activity_id',$this->activity_id)
->where('user_id',$this->user_id)
->orderby('created_at','DESC')
->first();
$user_emission=[];
$p_carbon=Conversions::convert_tn_kg($baseline);
$pt=[
'from_date'=>Auth::user()->created_at,
'to_date'=>date('d-m-Y'),
'amount'=>$p_carbon
];

if($previous_target){
$p_carbon=UserEmissionModel::where('created_at','>=',$previous_target->from_date)
->where('created_at','<=',$previous_target->to_date)
->where('emission_activity',$this->name)
->sum('carbon_emission');
$pt=['from_date'=>$previous_target->from_date,
'to_date'=>$previous_target->to_date,
'amount'=>$p_carbon];
}

return[
'id'=>$this->id,
'activity_id'=>$this->activity_id,
'name'=>$this->name,
'user_id'=>$this->user_id,
'from_date'=>$this->from_date,
'to_date'=>$this->to_date,
'emission_percentage'=>$this->emission_percentage,
'created_at'=>$this->created_at->format('d-m-Y'),
'user_emissions'=>EmissionResource::collection(UserEmissionModel::where('emission_activity',$this->name)
->where('user_id',$this->user_id)
->orderby('created_at','DESC')
->get()),
'baseline'=>Conversions::convert_tn_kg($baseline),
'previous_target'=>$pt,
'current_target'=>[
'from_date'=>$this->from_date,
'to_date'=>$this->to_date,
'amount'=>UserEmissionModel::where('created_at','>=',$this->from_date)
->where('created_at','<=',$this->to_date)
->where('emission_activity',$this->name)
->sum('carbon_emission'),
],
];
}
}

