<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\EmissionRecommendationModel;
use App\Models\VehicleCategoryModel;
use Carbon\Carbon;

class TransportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
$vehicle=VehicleCategoryModel::where('fuel_type',$this->type)->where('category',$this->emitter)->first();
$ltr=$vehicle->consumption/$vehicle->distance;
$month=4;


return [
'title'=>'Your Transportation Emission',
'id'=>$this->id,
'user_id'=>$this->user_id,
'emission_activity'=>$this->emission_activity,
'type'=>$this->type,
'emitter'=>$this->emitter,
'number_of_emitters'=>$this->number_of_emitters,
'consumption_rate'=>$ltr,
'usage_time'=>$this->usage_time,
'emission_factor'=>$this->emission_factor,
'carbon_emission'=>$this->carbon_emission,
'portifolio'=>$this->portifolio,
'created_at'=>$this->created_at->format('d-m-Y'),
'recommendation'=>EmissionRecommendationModel::select('action')
->where('emitter',$this->emitter)
->where('emission_activity',$this->emission_activity)
->orwhere('emitter','all')
->orwhere('emitter',$this->emitter)
->get(),
'statistics'=>[
['period'=>'monthly Emission','usage'=>$this->usage_time*$month,'carbon_emission'=>$this->carbon_emission*$month],
['period'=>'annual Emission','usage'=>$this->usage_time*$month*12,'carbon_emission'=>$this->carbon_emission*$month*12],




]
];
    }
}
