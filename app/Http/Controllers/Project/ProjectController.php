<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\ProjectModel;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $data['title']='Carbon Offset Projects';
    $data['response']=[
    'projects'=>ProjectModel::get(),
    
    ];
    return Inertia::render('ProjectsPage',$data);
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
public function show(Request $request){
//
$data['title']='Product Details';
$data['response']=[
'projects'=>ProjectModel::where('id',$request->id)->first(),

];
return Inertia::render('ProjectDetailsPage',$data);

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



    public function developProject()
    {
    $data['title']='Develop a Project';
    $data['response']=[];
    return Inertia::render('DevelopProjectPage',$data);
    }




    public function supportProject()
    {
    $data['title']='Support a Project';
    $data['response']=[];
    return Inertia::render('SupportProjectPage',$data);
    }



    public function helpProject()
    {
    $data['title']='Need Help';
    $data['response']=[];
    return Inertia::render('NeedHelpPage',$data);
    }







}
