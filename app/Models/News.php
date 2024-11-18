<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table='news';
    protected $fillable=['user_id','title','description','file'];
    protected $dateFormat = 'Y-m-d';
    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
    ];
}
