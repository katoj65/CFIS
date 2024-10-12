<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GreenhouseGas extends Model
{
    use HasFactory;
    protected $table='greenhouse_gases';
    protected $fillable=['name','code'];
}
