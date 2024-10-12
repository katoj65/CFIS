<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionSource extends Model
{
    use HasFactory;
    protected $table='emission_sources';
    protected $fillable=['name','description','icon','url'];
    protected $hidden=['created_at','updated_at'];
}
