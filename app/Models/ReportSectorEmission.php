<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportSectorEmission extends Model
{
    use HasFactory;
    protected $table='report_sector_emissions';
    protected $fillable=['name','amount','measurement','icon','order_by'];

}
