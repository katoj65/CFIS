<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\EmissionActivityModel;
use App\Models\EmissionTargetModel;
use App\Http\Resources\UserEmissionTargetResource;

class EmissionTargetResource extends JsonResource
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
'title'=>'Emission Targets',
'target'=>UserEmissionTargetResource::collection(EmissionTargetModel::select('emission_target.id',
'user_id',
'emission_activity.name',
'emission_target.emission_percentage',
'from_date',
'to_date',
'emission_activity.id',
'emission_target.created_at')
->join('emission_activity',
'emission_activity.id','=',
'emission_target.emission_activity_id')
->where('user_id',$this->id)
->orderby('created_at','DESC')->get()),

];
}
}
