<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\BusinessSector;

class CreateProfileResource extends JsonResource
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
'firstname'=>$this->firstname,
'lastname'=>$this->lastname,
'email'=>$this->email,
'created_at'=>$this->created_at,
'category'=>BusinessSector::orderby('name','ASC')->get()
];
}
}
