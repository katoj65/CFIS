<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnergyConsumptionModel extends Model
{
    use HasFactory;
    protected $table='energy_consumption';
    protected $fillables=[
    'energy_source',
    'equipment',
    'quantity',
    'hours'
    ];
}
