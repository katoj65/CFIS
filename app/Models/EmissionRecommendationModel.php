<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionRecommendationModel extends Model
{
    use HasFactory;
    protected $table='emission_recommendation';
    protected $fillable=[
        'emission_activity',
        'type',
        'emitter',
        'carbon_emission',
        'action'


    ];
}
