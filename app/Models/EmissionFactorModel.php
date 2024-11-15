<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionFactorModel extends Model
{
    use HasFactory;
    protected $table='emission_factor';
    protected $fillable=['name','value'];
}
