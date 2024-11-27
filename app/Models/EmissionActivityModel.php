<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionActivityModel extends Model
{
    use HasFactory;
    protected $table='emission_activity';
    protected $fillable=[
        'name'
    ];
}
