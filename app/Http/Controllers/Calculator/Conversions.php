<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmissionEquivalentModel;
use App\Models\ExchangeRateModel;
use App\Models\EmissionBaselineModel;

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


//baseline conversion
static function emission_baseline($user_role){
$model=EmissionBaselineModel::where('user_role',$user_role)->first();
return $model->amount;
}


//calculate the percentage of a number
static function percentage_of_a_number($number,$precentage){
$ans=$precentage/100*$number;
return $ans;
}



//convert emission to money
static function emission_to_money($emission){
$model=EmissionEquivalentModel::where('name','CO2e')->first();
//unit cost =total cost/weight (uc=28/1000)
$cost=$model->equivalent;
$weight=$model->value;
//total weight
$unit=$weight*1000;
$unit_cost=$cost/$unit;
$money=$unit_cost*$emission;
return['dollars'=>$money,'shillings'=>Conversions::convert_dollars_shillings($money)];
}







































}