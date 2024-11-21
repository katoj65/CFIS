<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendationModel extends Model
{
    use HasFactory;
    protected $table='recommendation';
    protected $fillable=['source','activity','annual_emission','action','status','link'];
}
