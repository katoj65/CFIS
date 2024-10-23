<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSubscriptionModel extends Model
{
    use HasFactory;
    protected $table='email_subscription';
    protected $fillable=['email','status'];
}
