<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
use App\Models\EmissionBaselineModel;
use App\models\EmissionTargetModel;
use Illuminate\Support\Facades\Auth;
use App\Models\UserEmissionModel;
use App\http\Controllers\Calculator\Conversions;

class UserEmissionTargetResource extends JsonResource
{
/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
 */


//benchmack
public function benchmark($id,$activity_id){
return EmissionTargetModel::select('name','emission_activity.id',
'emission_target.emission_activity_id',
'from_date','to_date')
->join('emission_activity',
'emission_activity.id','=',
'emission_target.emission_activity_id')
->where('emission_target.id','<',$id)
->where('emission_target.emission_activity_id',$activity_id)
->where('emission_target.user_id',Auth::user()->id)
->orderby('emission_target.created_at','DESC')
->first();
}

//baseline emission
public function emission_baseline($activity_id){
return EmissionBaselineModel::where('user_role',Auth::user()->role)
->where('emission_activity_id',$activity_id)
->first()->amount;
}


//previous emission
public function previous_emission($from_date,$to_date,$name){
return UserEmissionModel::where('created_at','>=',$from_date)
->where('created_at','<=',$to_date)
->where('emission_activity',$name)
->sum('carbon_emission');
}


//current emission
public function current_emission($from_date,$to_date,$name){
return UserEmissionModel::where('created_at','>=',$from_date)
->where('created_at','<=',$to_date)
->where('emission_activity',$name)
->sum('carbon_emission');
}









public function toArray($request)
{

$benchmark=$this->emission_baseline($this->activity_id)*1000;
$new_benchmark=$this->benchmark($this->id,$this->activity_id);
if($new_benchmark){
$nb=$this->benchmark($this->id,$this->activity_id);
$benchmark=$new_benchmark;
$previous_emission=$this->previous_emission($benchmark->from_date,$benchmark->to_date,$benchmark->name);
$benchmark=$previous_emission;
}

$benchmark_percentage=Conversions::percentage_of_a_number($benchmark,$this->emission_percentage);
$current_emission=$this->current_emission($this->from_date,$this->to_date,$this->name);
//current percentage
$current_percentage=$current_emission/$benchmark_percentage*100;

return [
'id'=>$this->id,
'user_id'=>$this->user_id,
'activity_id'=>$this->activity_id,
'emission_activity'=>$this->name,
'from_date'=>$this->from_date,
'to_date'=>$this->to_date,
'emission_percentage'=>$this->emission_percentage,
'created_at'=>$this->created_at->format('d-m-Y'),
'benchmark'=>$benchmark,
'benchmark_percentage'=>$benchmark_percentage,
'current_emission'=>round($current_emission,10),
'current_percentage'=>round($current_percentage,10),

];
}
}
