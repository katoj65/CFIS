<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplianceModel extends Model
{
    use HasFactory;
    protected $table='appliance';
    protected $fillable=['name','category','use'];
}
