<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserEmissionEquivalentModel;
use Illuminate\Support\Facades\Auth;

class EmissionEquivalent extends Controller
{
    //

static function create_user_emission_equivalent($emission_amount){
$model=UserEmissionEquivalentModel::where('user_id',Auth::user()->id)->first();
if(!$model){
UserEmissionEquivalentModel::create(['user_id'=>Auth::user()->id,'total_emission'=>$emission_amount]);
}else{
$amount=$model->total_emission+$emission_amount;
$model->total_emission=$amount;
$model->save();
}
return $model;
}

















}
