<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmissionResource extends JsonResource
{
/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
 */
public function toArray($request)
{
return [
'id'=>$this->id,
'emission_activity'=>$this->emission_activity,
'type'=>$this->type,
'emitter'=>$this->emitter,
'number_of_emitters'=>$this->number_of_emitters,
'consumption_rate'=>round($this->consumption_rate,10),
'usage_time'=>$this->usage_time,
'emission_factor'=>$this->emission_factor,
'carbon_emission'=>round($this->carbon_emission,10),
'portifolio'=>$this->portifolio,
'created_at'=>$this->created_at
];
}
}
