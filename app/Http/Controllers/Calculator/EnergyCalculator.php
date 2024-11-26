<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmissionFactorModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Tools\Portifolio;
use App\Models\UserEmissionModel;
use App\Models\UserEmissionLog;
use App\Http\Controllers\Calculator\EmissionEquivalent;


class EnergyCalculator extends Controller
{

public function storeHydropower(Request $request){
$validattion=$request->validate([
'source'=>'required',
'appliance'=>'required',
'number_of_items'=>'required',
'consumption'=>'required',
'hours'=>'required'],['required'=>'*Required*']);
$factor=EmissionFactorModel::where('name','electricity')->first()->value;
//convert consumption from one item in to kilowatt
$kW=1000;
$device=$request->consumption;
$time=$request->hours;
$numberDevices=$request->number_of_items;
//get consumption for a single device
$convert=$device/$kW;
$cons=$convert*$time;
$devices=$cons*$numberDevices;

$input=[
'user_id'=>Auth::user()->id,
'emission_activity'=>'energy consumption',
'type'=>$request->source,
'emitter'=>$request->appliance,
'number_of_emitters'=>$request->number_of_items,
'consumption_rate'=>$request->consumption,
'usage_time'=>$request->hours,
'emission_factor'=>$factor,
'carbon_emission'=>$devices,
];

$model=UserEmissionModel::create($input);
$log=[
'user_id'=>Auth::user()->id,
'emission_id'=>$model->id,
'type'=>$request->source,
'emission_activity'=>$model->emission_activity,
'emitter'=>$model->emitter,
'annual_emission'=>$model->carbon_emission
];
UserEmissionLog::create($log);
$segment=str_replace(' ','-',$model->emission_activity);
EmissionEquivalent::create_user_emission_equivalent($model->carbon_emission);
return redirect('/user/calculator/emission/'.$segment.'/'.$model->id)->with('success','Record saved');
}



//delete hydropower
public function destroyHydropower(Request $request){
UserEmissionModel::destroy($request->id);
return redirect('/user/emission/summary')->with('success','Record deleted');
}




public function createEnergyPortifolio(Request $request){
$id=$request->id;
$status=$request->segment(4);
$model=new UserEmissionModel;
$res=Portifolio::createPortifolio($model,$id);
$item=$model::find($request->id);
$segment=str_replace(' ','-',$item->emission_activity);
return redirect('/user/calculator/emission/'.$segment.'/'.$res->id)->with('success','Energy portifolio has been updated.');
}





}
