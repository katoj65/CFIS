<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\District;
use App\Models\Region;
use Inertia\Inertia;

class AdministrationUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
if(Gate::allows('is_admin')){
    $data['title']='Administration Units';
    $data['response']=[
    'district'=>District::select('districts.name as district',
    'districts.id as id',
    'regions.name as region',
    'districts.region_id as region_id')
    ->join('regions','districts.region_id','=','regions.id')
    ->get(),





    
    ];

    return Inertia::render('Admin/AdminUnitsPage',$data);


}else{
return redirect('/');
}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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


// create district
public function createDistrict(){
if(Gate::allows('is_admin')){
$data['title']='Add New District';
$data['response']=[
'region'=>Region::orderby('name','ASC')->get(),
];
return Inertia::render('Admin/CreateDistrictPage',$data);
}else{
    return redirect('/');
}
}

//store districts
public function storeDistrict(Request $request){
$validate=$request->validate([
'name'=>'required',
'region_id'=>'required'
],['required'=>'Field is required.']);
$create=District::create($validate);
return $create->id;
//return redirect('/admin/');


}










}
