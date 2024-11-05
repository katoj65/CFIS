<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProfileModel extends Model
{
    use HasFactory;
    protected $table='business_profile';
    protected $fillable=[
    'user_id',
    'name',
    'business_category',
    'business_type',
    'address',
    'tel',
    'email',
    'founded_at',
    'origin'

    ];
}
