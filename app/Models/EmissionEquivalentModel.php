<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionEquivalentModel extends Model
{
    use HasFactory;
    protected $table='emission_equivalent';
    protected $fillable=[
    'name','value','equivalent','measurement'
    ];
}
