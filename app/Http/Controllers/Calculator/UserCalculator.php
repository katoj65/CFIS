<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use App\Models\ApplianceModel;
use App\Models\EnergySourceModel;
use App\Models\UserEmissionLog;
use App\Models\UserEmissionModel;
use App\Models\EmissionRecommendationModel;

class UserCalculator extends Controller
{
// Hours of usage
static function usageHours(){
$result=[['name'=>'Less than an hour','value'=>0.5]];
$max=24;
for ($i=1; $i<=$max; $i++) {
$hour=$i.' Hours';
if($hour<2){
$hour=$i.' Hour';
}
array_push($result,['name'=>$hour,'value'=>$i]);
}
return $result;
}





public function energyCalculatorPage(){
if(Gate::allows('is_user')){
$data['title']='Calaculate Energy Consumption';
$data['response']=[
'source'=>EnergySourceModel::all(),
];
return Inertia::render('User/EnergyPage',$data);
}else{
return redirect('/');
}
}




//switch energy calculator
public function energyCalculatorForm(Request $request){
$item=strtolower($request->select_source);
return redirect('/user/calculator/energy/'.$item);
}




public function hydropowerForm(Request $request){
if(Gate::allows('is_user')){
$data['title']='Calaculate Energy Consumption';
$data['response']=[
'appliance'=>ApplianceModel::where('category','home')->orwhere('category','all')->get(),
'consumption'=>UserCalculator::usageHours(),
'source'=>EnergySourceModel::where('name',$request->segment(4))->first()->name,
];
return Inertia::render('User/HydropowerForm',$data);
}else{
return redirect('/');
}
}





public function hydropowerUsage(Request $request){
//create permissions
$model=UserEmissionModel::find($request->segment(5));
if($model!=null and Gate::allows('has_access',$model->user_id)){

//log
$log=UserEmissionLog::where('emission_id',$model->id)->first();
$units=$model->consumption_rate;
$usage=$model->usage_time;
$emission=$model->carbon_emission;

// weekly,monthly and annually
$weekly=['consume'=>$units*7,'usage'=>$usage*7,'emissions'=>$emission*7];
$monthly=['consume'=>$units*7*4,'usage'=>$usage*7*4,'emissions'=>$emission*7*4];
$annually=['consume'=>$units*7*4*12,'usage'=>$usage*7*4*12,'emissions'=>$emission*7*4*12];
$data['title']='Your Energy Consumption';
$data['response']=[
'consumption'=>$model,
'weekly'=>$weekly,
'monthly'=>$monthly,
'annually'=>$annually,
'recommendation'=>EmissionRecommendationModel::where('emitter',$model->emitter)
->where('emission_activity',$model->emission_activity)
->orwhere('emitter','all')
->orwhere('emitter',$model->emitter)
->get(),

];

return Inertia::render('User/EnergyUsage',$data);
}else{
abort('404');
}
}












































}
