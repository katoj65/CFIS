<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HourlyConverterModel extends Model
{
    use HasFactory;
    protected $table='hourly_converter';
    protected $fillable=['name','value'];
}
