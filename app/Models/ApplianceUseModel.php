<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplianceUseModel extends Model
{
    use HasFactory;
    protected $table='appliance_use';
    protected $fillable=['name'];
}
