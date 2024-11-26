<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
use Illuminate\Support\Str;

class EmissionSummaryResource extends JsonResource
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
'user_id'=>$this->user_id,
'emission_activity'=>Str::limit($this->emission_activity,14),
'type'=>$this->type,
'emitter'=>Str::limit($this->emitter,25),
'number_of_emitters'=>$this->number_of_emitters,
'consumption_rate'=>round($this->consumption_rate,10),
'usage_time'=>round($this->usage_time,10),
'emission_factor'=>$this->emission_factor,
'carbon_emission'=>round($this->carbon_emission,10),
'portifolio'=>$this->portifolio,
'created_at'=>$this->created_at->format('d-m-Y'),
'url'=>'user.'.str_replace(' ','-',$this->emission_activity),

];
}
}
