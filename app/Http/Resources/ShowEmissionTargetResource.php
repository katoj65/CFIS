<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
use App\Models\UserEmissionModel;
use App\Http\Resources\EmissionResource;

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
return[
'id'=>$this->id,
'name'=>$this->name,
'user_id'=>$this->user_id,
'from_date'=>$this->from_date,
'to_date'=>$this->to_date,
'emission_percentage'=>$this->emission_percentage,
'created_at'=>$this->created_at->format('d-m-Y'),
'user_emissions'=>EmissionResource::collection(UserEmissionModel::where('emission_activity',$this->name)
->where('user_id',$this->user_id)
->orderby('created_at','DESC')
->get()),




];
}
}
