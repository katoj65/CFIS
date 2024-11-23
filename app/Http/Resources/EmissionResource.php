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
'consumption_rate'=>$this->consumption_rate,
'usage_time'=>$this->usage_time,
'emission_factor'=>$this->emission_factor,
'carbon_emission'=>$this->carbon_emission,
'portifolio'=>$this->portifolio,
'created_at'=>$this->created_at
];
}
}
