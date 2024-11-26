<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleCategoryModel;
use App\Models\EmissionfactorModel;
use App\Models\UserEmissionModel;
use App\Models\UserEmissionLog;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Calculator\EmissionEquivalent;

class TransportCalculator extends Controller
{


//
static function distanceEstimate(){
$min=0.5;
$max=500;
$range=5;
$distance=[['from'=>0,'to'=>'Less than 1','value'=>0.5],
['from'=>1,'to'=>5,'value'=>5]];
for($x=0;$x<=$max;$x+=$range){
if($x>1){
array_push($distance,['from'=>$x, 'to'=>$x+$range,'value'=>$x==0?5:$x+$range]);
}
}
return $distance;
}





//store vehicle emission
public function storeVehicleEmission(Request $request){
$validate=$request->validate([
'type'=>'required',
'count'=>'required',
'usage'=>'required',
'distance'=>'required',
'fuel_type'=>'required'],
['required'=>'*Required*']);
$vehicle=VehicleCategoryModel::where('category',$request->type)
->where('fuel_type',$request->fuel_type)->first();
//Calculate consumption of 1 litre per kilometer.
$ltr=$vehicle->consumption/$vehicle->distance;
//Get emission factor.
$emission_factor=EmissionfactorModel::where('name',$request->fuel_type)->first()->value;
//total distance
//total_distance = distance * number_of_times_traveled * number_of_vehicles
$total_distance=$request->distance*$request->usage*$request->count;
//Fuel consumption
//Fuel Consumed (L)=(100 Kilometers Traveled (km))×Fuel Consumption (L/100 km)
$fuel_consumed=$total_distance*$ltr;
//Consumption for a number of vehicles

//emission = total_consumption * emission_factor
$emission=$fuel_consumed*$emission_factor;

//input
$input=[
'user_id'=>Auth::user()->id,
'emission_activity'=>'transportation',
'consumption_rate'=>$ltr,
'type'=>$request->fuel_type,
'emitter'=>$vehicle->category,
'number_of_emitters'=>$request->count,
'usage_time'=>$total_distance,
'emission_factor'=>$emission_factor,
'carbon_emission'=>$emission
];
$model=UserEmissionModel::create($input);
$log=[
'user_id'=>Auth::user()->id,
'emission_id'=>$model->id,
'type'=>$model->type,
'emission_activity'=>$model->emission_activity,
'emitter'=>$model->emitter,
'annual_emission'=>$model->carbon_emission,
];
UserEmissionLog::create($log);
EmissionEquivalent::create_user_emission_equivalent($model->carbon_emission);
return redirect('/user/calculator/emission/transportation/'.$model->id)->with('success','Record saved');
}












































}