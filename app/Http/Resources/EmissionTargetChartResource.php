<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class EmissionTargetChartResource extends JsonResource
{
/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
 */
public function toArray($request)
{
return[
$this->created_at->format('d-m-Y').' ('.$this->number_of_emitters.' '.$this->emitter.')', (int)$this->carbon_emission];
}
}
