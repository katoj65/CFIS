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
use App\Models\EmissionActivityModel;

class ShowEmissionTargetResource extends JsonResource
{
/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
 */



//minimum emission target if target not set
public function baseline($activity_id){
return EmissionBaselineModel::where('user_role',Auth::user()->role)
->where('emission_activity_id',$activity_id)
->first()
->amount;
}


//total emission before current target
public function emisison_target_previous($id,$activity_id){
return EmissionTargetModel::where('id','<',$id)
->where('emission_activity_id',$activity_id)
->where('user_id',Auth::user()->id)
->orderby('created_at','DESC')
->first();
}


public function previous_emission_sum($from_date,$to_date,$activity){
return UserEmissionModel::where('created_at','<',$from_date)
->where('emission_activity',$activity)
->where('user_id',Auth::user()->id)
->sum('carbon_emission');
}


public function current_emission_sum($from_date,$to_date,$activity){
return UserEmissionModel::where('created_at','>=',$from_date)
->where('created_at','<=',$to_date)
->where('emission_activity',$activity)
->where('user_id',Auth::user()->id)
->sum('carbon_emission');
}


public function current_emission_list($from_date,$to_date,$activity){
return UserEmissionModel::where('created_at','>=',$from_date)
->where('created_at','<=',$to_date)
->where('emission_activity',$activity)
->where('user_id',Auth::user()->id)
->orderby('created_at','DESC')
->get();
}











public function toArray($request)
{

$minimum_emission=$this->baseline($this->activity_id);
$previous_emission_target=$this->emisison_target_previous($this->id,$this->activity_id);
$previous_sum=$this->previous_emission_sum($this->from_date,$this->to_date,$this->name);
$current_sum=$this->current_emission_sum($this->from_date,$this->to_date,$this->name);


$f_date=Auth::user()->created_at->format('d-m-Y');
$t_date=date('d-m-y');
if($previous_emission_target){
$f_date=$previous_emission_target->from_date;
$t_date=$previous_emission_target->to_date;
}
if($previous_sum==0){
$previous_sum=Conversions::convert_tn_kg($minimum_emission);
}

//target sum
// percentage/100 x previous_sum
$target_sum=$this->emission_percentage/100*$previous_sum;
// calculate current percentage
// part/whole x 100
$current_percentage=$current_sum/$target_sum*100;

return[
'id'=>$this->id,
'activity_id'=>$this->activity_id,
'name'=>$this->name,
'user_id'=>$this->user_id,
'from_date'=>$this->from_date,
'to_date'=>$this->to_date,
'emission_percentage'=>$this->emission_percentage,
'created_at'=>$this->created_at->format('d-m-Y'),
//
'current_target'=>[
'from_date'=>$this->from_date,
'to_date'=>$this->to_date,
'emission_sum'=>$current_sum,
'percentage'=>$current_percentage,
],
//
'benchmarks'=>[
'from_date'=>$f_date,
'to_date'=>$t_date,
'target_sum'=>$target_sum,
'previous_sum'=>$previous_sum,

]

];
}
}
