<?php

namespace App\Http\Controllers\Emission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\EmissionTargetResource;
use App\Http\Resources\EmissionActivityResource;
use App\Models\EmissionActivityModel;
use App\Models\EmissionTargetModel;
use App\Http\Resources\ShowEmissionTargetResource;
use Illuminate\Support\Facades\Gate;
use Carbon\Carbon;


class EmissionTrargetsController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
//
$data['response']=new EmissionTargetResource(Auth::user());
return Inertia::render('EmissionTargetsPage',$data);
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
$validation = $request->validate([
'emission_activity'=>'required',
'from_date'=>'required',
'to_date'=>'required',
'percentage'=>'required|integer'
],['required'=>'*Required*']);
$input=[
'user_id'=>Auth::user()->id,
'emission_activity_id'=>EmissionActivityModel::where('name',$request->emission_activity)->first()->id,
'emission_activity'=>$request->emission_activity,
'from_date'=>$request->from_date,
'to_date'=>$request->to_date,
'emission_percentage'=>$request->percentage
];
$model=EmissionTargetModel::create($input);
return redirect('/emission/target/'.$model->id)->with('success','Your record has been saved.');

}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show(Request $request)
{
//
$model=EmissionTargetModel::select('emission_target.id',
'emission_target.user_id',
'emission_activity.name',
'emission_target.emission_percentage',
'from_date',
'to_date',
'emission_activity.id',
'emission_target.created_at')
->join('emission_activity',
'emission_activity.id','=',
'emission_target.emission_activity_id')
->where('emission_target.user_id',Auth::user()->id)
->where('emission_target.id',$request->segment(3))
->first();

if($model){
if(Gate::allows('has_access',$model->user_id)){
$data['response']=new ShowEmissionTargetResource($model);
return Inertia::render('ShowEmissionTargetPage',$data);
}else{
abort('404');
}
}else{
abort('404');
}


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


public function createEmissionTarget()
{
//
$data['response']=EmissionActivityResource::collection(EmissionActivityModel::all());
return Inertia::render('CreateEmissionGoal',$data);

}








}
