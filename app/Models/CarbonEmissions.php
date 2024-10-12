<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarbonEmissions extends Model
{
    use HasFactory;
    protected $table='carbon_emissions';
    protected $fillable=['carbon_footprint_parameters_id','source','hours','number_of_decides'];
}
