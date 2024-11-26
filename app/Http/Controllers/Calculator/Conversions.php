<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmissionEquivalentModel;
use App\Models\ExchangeRateModel;

class Conversions extends Controller
{

//convert kilogram to tonne
static function convert_kg_tn($kg){
$tonne=1000;
return $kg/$tonne;
}

//convert tonne to kilogram
static function convert_tn_kg($tn){
$tonne=1000;
return $tonne*$tn;
}


//convert cost of each Kg in dollars
static function convert_co2e_dollars($co2e){
$model=EmissionEquivalentModel::where('name','CO2e')->first();
$value=$model->value;
$equivalent=$model->equivalent;
$kg=$equivalent/1000;
$sum=$co2e*$kg;
return round($sum,10);
}


//convert dollars in to shillings
static function convert_dollars_shillings($dollars){
$usd=ExchangeRateModel::where('name','dollar')->first()->equivalent;
$amount=$usd*$dollars;
return round($amount,0);
}















}
