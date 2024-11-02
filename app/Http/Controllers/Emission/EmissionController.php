<?php

namespace App\Http\Controllers\Emission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


public function emissionCalculator(){
$data['title']='Emission Calculator';
$data['response']=[];
return Inertia::render('EmissionCalculatorInstructionPage',$data);
}



public function carbonEmissionsInUganda(){
$data['title']='Carbon Emissions in Uganda';
$data['response']=[];
return Inertia::render('UgandaEmissionsPage',$data);
}


public function carbonEmissionStrategy(){
$data['title']='Emission Reduction Strategies';
$data['response']=[];
return Inertia::render('EmissionStrategyPage',$data);
}









}
