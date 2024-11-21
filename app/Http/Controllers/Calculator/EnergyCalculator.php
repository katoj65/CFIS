<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmissionFactorModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Tools\Portifolio;
use App\Models\UserEmissionModel;
use App\Models\UserEmissionLog;


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
//calculate the emission
//consumption for a single item.
//$item=$request->consumption*$request->hours;
//convert in to item consumption kilowatts.
//$kwt=$item/1000;
//calculate the number of items input.
$items=$request->number_of_items*$request->hours*$request->consumption;
//convert consumption to kilowatts for all items
$all_items=$items/1000;
//calculate the emission using emission factor.
$total_emission=$all_items*$factor;
//new input
$input=[
'user_id'=>Auth::user()->id,
'emission_activity'=>'energy consumption',
'type'=>$request->source,
'emitter'=>$request->appliance,
'number_of_emitters'=>$request->number_of_items,
'consumption_rate'=>$request->consumption,
'usage_time'=>$request->hours,
'emission_factor'=>$factor,
'carbon_emission'=>$total_emission,
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
return redirect('/user/calculator/energy/hydropower/'.$model->id)->with('success','Record saved');
}





//delete hydropower
public function destroyHydropower(Request $request){
UserEmissionModel::destroy($request->id);
return redirect('/user/calculator/energy/hydropower/')->with('success','Record deleted');
}


public function createEnergyPortifolio(Request $request){
$id=$request->id;
$status=$request->segment(4);
$model=new UserEmissionModel;
$res=Portifolio::createPortifolio($model,$id);
return redirect('/user/calculator/energy/hydropower/'.$res->id)->with('success','Energy portifolio has been updated.');
}





}
