<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlaModel extends Model
{
    use HasFactory;
    protected $table='article';
    protected $fillable=['title','content','topic','tag','status'];
}
