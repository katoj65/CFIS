<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionBaselineModel extends Model
{
    use HasFactory;
    protected $table='emission_baseline';
    protected $fillable=['emission_activity_id','total_emission'];
}
