<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportGasEmission extends Model
{
    use HasFactory;
    protected $table='report_gas_emissions';
    protected $fillable=[
'name',
'amount',
'measurement',
'order_by'

    ];
}
