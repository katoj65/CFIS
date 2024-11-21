<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRecommendationModel extends Model
{
    use HasFactory;
    protected $table='user_recommendation';
    protected $fillable=['user_id','source','activity','annual_emission'];
}
