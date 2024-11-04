<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use App\Models\News;




class NewsController extends Controller
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
$data['title']='News';
$data['response']=[
'news'=>News::get(),


];


return Inertia::render('Admin/NewsPage',$data);
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


if(Gate::allows('is_admin')){
$form=$request->validate([
'title'=>'required|string',
'file'=>'nullable|string',
'description'=>'required|string',
]);

News::create([
'user_id'=>Auth::id(),
'title'=>$request->title,
'description'=>$request->description,
'file'=>null]);

return redirect('/admin/news')->with('success','News article has been created');

}else{
return redirect('/');
}

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
$data['title']='News Article';
$data['response']=[
'article'=>News::where('id',$request->id)->first(),




];

return Inertia::render('Admin/ShowNewsPage',$data);


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


//create news
public function createNews(){
if(Gate::allows('is_admin')){
$data['title']='Create News';
$data['response']=[];

return Inertia::render('Admin/CreateNewsPage',$data);

}else{
return redirect('/');
}
}


}

