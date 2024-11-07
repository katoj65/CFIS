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
    ->orderby('districts.name','ASC')
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
    public function show(Request $request)
    {
        //
if(Gate::allows('is_admin')){
$result='';
$district=District::select('districts.name as title',
'districts.id as id',
'regions.name as subtitle',
'districts.region_id as region_id')
->join('regions','districts.region_id','=','regions.id')
->where('districts.id',$request->segment(3))
->get();
if(count($district)==1){
foreach($district as $result);
}





$data['title']='';
$data['response']=[
'district'=>$result,






];

return Inertia::render('Admin/ShowDistrictPage',$data);

}else{
return redirect('/');
}
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit(Request $request)
{
//

if(Gate::allows('is_admin')){

$result='';
$district=District::select('districts.name as district',
'districts.id as id',
'regions.name as region',
'districts.region_id as region_id')
->join('regions','districts.region_id','=','regions.id')
->where('districts.id',$request->segment(3))
->get();
if(count($district)==1){
foreach($district as $result);
}


$data['title']='Edit District Information';
$data['response']=[
'region'=>Region::orderby('name','ASC')->get(),
'district'=>$result,

];

return Inertia::render('Admin/EditDistrictPage',$data);
}else{
return redirect('/');
}



}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
$validate=$request->validate([
'name'=>'required',
'region_id'=>'required'
],['required'=>'Field is required.']);
$district=District::find($request->id);
//compare
if($district->name==$request->name and $district->region_id==$request->region_id){
return redirect('/admin/district/'.$request->id.'/edit')->with('warning',$district->name.' district was not changed');
}else{
$district->name=$request->name;
$district->region_id=$request->region_id;
$district->save();
return redirect('/admin/district/'.$request->id)->with('success',$district->name.' district has been edited');
}

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
return redirect('/admin/administration-units')->with('success',$create->name.' district has been added');
}










}
