<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnergyConsumptionModel extends Model
{
    use HasFactory;
    protected $table='energy_consumption';
    protected $fillable=[
    'energy_source',
    'appliance',
    'number_of_appliances',
    'consumption',
    'usage_time',
    'user_id',
    'emission_factor',
    'carbon_emission',


    ];
}
