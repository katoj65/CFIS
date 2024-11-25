<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\EmissionRecommendationModel;
use Carbon\Carbon;


class UserEmissionResource extends JsonResource
{
/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
 */
private function calculate($item,$keyword){
if($keyword=='week'){
$item=$item*7;
}elseif($keyword=='month'){
$item=$item*7*4;
}elseif($keyword=='year'){
$item=$item*7*4*12;
}
return $item;
}




public function toArray($request)
{
return [
'title'=>'Your '.ucfirst($this->emission_activity).' Emission',
'id'=>$this->id,
'user_id'=>$this->user_id,
'emission_activity'=>$this->emission_activity,
'type'=>$this->type,
'emitter'=>$this->emitter,
'number_of_emitters'=>$this->number_of_emitters,
'consumption_rate'=>round($this->consumption_rate,10),
'usage_time'=>$this->usage_time,
'emission_factor'=>$this->emission_factor,
'carbon_emission'=>round($this->carbon_emission,10),
'portifolio'=>$this->portifolio,
'created_at'=>$this->created_at->format('d-m-Y'),
'recommendation'=>EmissionRecommendationModel::select('action')
->where('emitter',$this->emitter)
->where('emission_activity',$this->emission_activity)
->orwhere('emitter','all')
->orwhere('emitter',$this->emitter)
->get(),
'statistics'=>[
['period'=>'Weekly','usage'=>$this->consumption_rate*7,
'usage'=>$this->usage_time*7,
'carbon_emission'=>round($this->calculate($this->carbon_emission,'week'),10)],
['period'=>'Monthly','usage'=>$this->consumption_rate*7*4,
'usage'=>$this->usage_time*7*4,
'carbon_emission'=>round($this->calculate($this->carbon_emission,'month'),10)],
['period'=>'Annual','usage'=>$this->consumption_rate*7*4*12,
'usage'=>$this->usage_time*7*4*12,
'carbon_emission'=>round($this->calculate($this->carbon_emission,'year'),10)],
]
];
}
}
