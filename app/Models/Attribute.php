<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table='attribute';
    protected $fillable=['business_name','address','location','tel1','tel2',
    'email','website','logo','slogan','founded_on','about','mission','vision',
    'objectives','activities'];
}
