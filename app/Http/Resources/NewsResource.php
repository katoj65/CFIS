<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class NewsResource extends JsonResource
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
'title'=>$this->title,
'description'=>Str::length($this->description)>150?Str::substr($this->description,0,150).'...':$this->description,
'file'=>$this->file
];
}
}
