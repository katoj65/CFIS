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

class ShowEmissionTargetResource extends JsonResource
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

//
$pt=[
'from_date'=>Auth::user()->created_at->format('d-m-Y'),
'to_date'=>date('d-m-Y'),
'amount'=>$p_carbon
];

//
if($previous_target){
$p_carbon=UserEmissionModel::where('created_at','>=',$previous_target->from_date)
->where('created_at','<=',$previous_target->to_date)
->where('emission_activity',$this->name)
->sum('carbon_emission');

$pt=['from_date'=>$previous_target->from_date,
'to_date'=>$previous_target->to_date,
'amount'=>$p_carbon];
}

//current target amount
$current_target_amount=UserEmissionModel::where('created_at','>=',$this->from_date)
->where('created_at','<=',$this->to_date)
->where('emission_activity',$this->name)
->sum('carbon_emission');
//compute the curent percentage reduced
//carbon_reduced = benchmark_percentage - current_carbon
$benchmark_percentage=Conversions::percentage_of_a_number($p_carbon,$this->emission_percentage);
$emission_reduced=$benchmark_percentage - $current_target_amount;
//percentage reduced
$percentage_reduced = $emission_reduced/$benchmark_percentage*100;
//get the current emission
$ce=$current_target_amount/$benchmark_percentage*100;


return[
'id'=>$this->id,
'activity_id'=>$this->activity_id,
'name'=>$this->name,
'user_id'=>$this->user_id,
'from_date'=>$this->from_date,
'to_date'=>$this->to_date,
'emission_percentage'=>$this->emission_percentage,
'created_at'=>$this->created_at->format('d-m-Y'),
'baseline'=>Conversions::convert_tn_kg($baseline),
'previous_target'=>$pt,
'current_target'=>[
'from_date'=>$this->from_date,
'to_date'=>$this->to_date,
'amount'=>$current_target_amount,
],
'benchmarks'=>[
'benchmark_percentage'=>Conversions::percentage_of_a_number($p_carbon,$this->emission_percentage),
'carbon_reducced'=>$emission_reduced,
'percentage_reduced'=>$percentage_reduced,
'current_percentage'=>round($ce,10)


]



];
}
}
