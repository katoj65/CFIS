<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsModel extends Model
{
    use HasFactory;
    protected $table='settings';
    protected $fillable=['business_name','motto','slogan','address','contact','email','website','image_route','icon_route'];
}
