<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmissionModel extends Model
{
    use HasFactory;
    protected $table='user_emission';
    protected $fillable=[
        'user_id',
        'emission_activity',
        'type',
        'emitter',
        'number_of_emitters',
        'consumption_rate',
        'usage_time',
        'emission_factor',
        'carbon_emission',
        'portifolio'
    ];
}
