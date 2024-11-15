<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use App\Models\CarbonFootprintParameter;
use App\Models\EmissionSourceItem;



class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

$data['title']='Emission Calculator';
$data['response']=[
'sources'=>CarbonFootprintParameter::all(),
'role'=>''
];


//type of calculator to display
$page='CarbonCalculatorPage';
if(Gate::allows('is_business')){
$page='BusinessCarbonCalculatorPage';
}




return Inertia::render($page,$data);
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






public function energyView(Request $request){
$count=CarbonFootprintParameter::where('url',$request->segment(2))->first();
if($count==null){
return redirect('/dashboard');
}

$data['title']='Energy consumption';
$data['carbon_footprint_parameter']=CarbonFootprintParameter::all();
$data['emission_source']=EmissionSourceItem::select(['name','id','usage'])->where('source_id',$count->id)->get();
return Inertia::render('EnergyView',$data);

}




public function wasteView(Request $request){
$count=CarbonFootprintParameter::where('url',$request->segment(2))->first();
if($count==null){
return redirect('/dashboard');
}

$data['title']='Energy consumption';
$data['carbon_footprint_parameter']=CarbonFootprintParameter::all();
$data['emission_source']=EmissionSourceItem::select(['name','id','usage'])->where('source_id',$count->id)->get();
return Inertia::render('calculator/EnergyConsumption',$data);

}


//user view emission calculator
public function guest_emission_calculator(){
$data['title']='Carbon Emission Calculator';
return Inertia::render('EmissionCalculatorPage',$data);
}
















}
