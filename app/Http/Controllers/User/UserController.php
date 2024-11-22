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

];

return Inertia::render('User/VehicleFormPage',$data);
    }else{
    abort(404);
    }
}














}
