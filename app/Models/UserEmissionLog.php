<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmissionLog extends Model
{
    use HasFactory;
    protected $table='user_emission_log';
    protected $fillable=['user_id','emission_id','type','emission_activity','emitter','annual_emission'];
}
