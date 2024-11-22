<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleCategoryModel extends Model
{
    use HasFactory;
    protected $table='vehicle_category';
    protected $fillable=[
        'category',
        'fuel_type',
        'consumption',
        'emission_factor'
    ];
}
