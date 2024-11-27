<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionTargetModel extends Model
{
    use HasFactory;
    protected $table='emission_trget';
    protected $fillable=[
    'user_id',
    'emission_activity_id',
    'from_date',
    'to_date',
    'emission_percentage'
    ];
}
