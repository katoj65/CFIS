<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmissionEquivalentModel extends Model
{
    use HasFactory;
    protected $table='user_emission_equivalent';
    protected $fillable=[
    'user_id',
    'total_emission'
    ];
}
