<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\ReportGasEmission;
use Illuminate\Support\Facades\Gate;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


if(Gate::allows('is_user_profile') or Gate::allows('is_business_profile')){
$role=Auth::user()->role;
if($role=='user'){
$role='home';
}
return redirect('/'.$role);
}else{

$data['title']='Create Profile';
$data['response']=[
'user'=>Auth::user(),

];

//create profile
return Inertia::render('Profile/CreateProfile',$data);

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


function createProfile(Request $request){
$validation=$request->validate([
'gender'=>'required',
'dob'=>'required',
'address'=>'required',
'tel'=>'required',
'profession'=>'required',
'job'=>'required'
]);

return($validation);



}










}
