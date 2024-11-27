<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DashboardReportResource extends JsonResource
{
/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
 */
public function toArray($request)
{
$url=str_replace(' ','-',$this->emission_activity);
return [
'report'=>$this->emission_activity,
'url'=>$url,
];
}
}
