<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisationProfile extends Model
{
    use HasFactory;
    protected $table='organisation_profiles';
    protected $fillable=[
    'name',
    'type_of_organisation',
    'business_type',
    'address',
    'tel',
    'email',
    'date_founded',
    'country_of_origin'
    ];
}
