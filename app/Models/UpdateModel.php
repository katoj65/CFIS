<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateModel extends Model
{
    use HasFactory;
    protected $table='update';
    protected $fillable=['title','subtitle','message','image','url','display_at','status'];
}
