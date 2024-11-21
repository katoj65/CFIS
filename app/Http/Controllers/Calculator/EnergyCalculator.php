<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmissionFactorModel;
use Illuminate\Support\Facades\Auth;
use App\models\EnergyConsumptionModel;
use App\Http\Controllers\Tools\Portifolio;

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
$input=[
'energy_source'=>$request->source,
'appliance'=>$request->appliance,
'number_of_appliances'=>$request->number_of_items,
'consumption'=>$request->consumption,
'usage_time'=>$request->hours,
'emission_factor'=>$factor,
'user_id'=>Auth::user()->id,
'carbon_emission'=>$total_emission
];
$model=EnergyConsumptionModel::create($input);
return redirect('/user/calculator/energy/hydropower/'.$model->id)->with('success','Record saved');
}

//delete hydropower
public function destroyHydropower(Request $request){
EnergyConsumptionModel::destroy($request->id);
return redirect('/user/calculator/energy/hydropower/')->with('success','Record deleted');
}


public function createEnergyPortifolio(Request $request){
$id=$request->id;
$status=$request->segment(4);
$model=new EnergyConsumptionModel;
$res=Portifolio::createPortifolio($model,$id);
return redirect('/user/calculator/energy/hydropower/'.$res->id)->with('success','Energy portifolio has been updated.');
}





}
