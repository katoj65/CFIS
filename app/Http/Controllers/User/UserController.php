<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\ReportGasEmission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\UserEmissionModel;
use App\Models\UserEmissionLog;
use App\Models\VehicleCategoryModel;
use App\Http\Controllers\Calculator\TransportCalculator;
use App\Models\EmissionRecommendationModel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
{

if(Gate::allows('is_user')){
$data['title']='Welcome User';
$data['response']=[];
return Inertia::render('User/DashboardPage',$data);
}else{
return redirect('/');
}
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }





public function emissionSummary()
{
if(Gate::allows('is_user')){
$user_id=Auth::user()->id;
$data['title']='Emission Summary';
$data['response']=[
'log'=>UserEmissionModel::where('user_id',$user_id)
->orderby('portifolio','ASC')->orderBy('id','DESC')->get(),
];
return Inertia::render('User/EmissionSummaryPage',$data);
}else{
return redirect('/');
}
}





public function trasportPage(Request $request)
{
if(Gate::allows('is_user')){
$data['title']='Transport';
$data['response']=[
'fuel'=>VehicleCategoryModel::select('fuel_type')->distinct()->get(),

];
return Inertia::render('User/TransportPage',$data);
}else{
return redirect('/');
}
}




//transport form request
public function transportFormRequest(Request $request){
$fuel=strtolower($request->select_fuel);
return redirect('/user/calculator/transport/'.$fuel);
}




public function transportForm(Request $request){
if(Gate::allows('is_user')){
$data['title']='Vehicles Powered by '.ucfirst($request->segment(4));
$data['response']=[
'distance'=>TransportCalculator::distanceEstimate(),
'vehicle'=>VehicleCategoryModel::where('fuel_type',$request->segment(4))->get(),
'fuel_type'=>$request->segment(4),
];

return Inertia::render('User/VehicleFormPage',$data);
}else{
abort(404);
}
}







public function transportationPage(Request $request){
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

$data['title']='Your Transportation';
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

return Inertia::render('User/TransportationPage',$data);
}else{
abort('404');
}
}







































}
