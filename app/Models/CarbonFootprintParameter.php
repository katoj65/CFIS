<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarbonFootprintParameter extends Model
{
    use HasFactory;
    protected $table='carbon_footprint_parameters';
    protected $fillable=['name','url'];
    protected $hidden=['id','created_at','updated_at'];
}
