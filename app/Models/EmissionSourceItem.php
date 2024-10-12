<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionSourceItem extends Model
{
    use HasFactory;
    protected $table='emission_source_items';
    protected $fillable=['name'];
}
