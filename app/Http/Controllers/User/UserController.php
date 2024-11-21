<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\ReportGasEmission;
use Illuminate\Support\Facades\Gate;
use App\models\EnergyConsumptionModel;
use Illuminate\Support\Facades\Auth;

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
    'energy'=>EnergyConsumptionModel::where('user_id',$user_id)->first(),



    ];
    return Inertia::render('User/EmissionSummaryPage',$data);
    }else{
    return redirect('/');
    }
    }










}
