<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Profile;
use Inertia\Inertia;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

$data['title']='profile';
$data['profile']=Profile::where('user_id',Auth::user()->id)->first();
$data['user']=Auth::user();

return Inertia::render('ProfilePage',$data);

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
$validate=$request->validate([
'dob'=>['required','date'],
'address'=>['required'],
'tel'=>['required'],
'role'=>['required'],
'profession'=>['required'],
'job'=>['required']
]);

Profile::create([
'user_id'=>Auth::user()->id,
'dob'=>$request->dob,
'address'=>$request->address,
'tel'=>$request->tel,
'role'=>$request->role,
'profession'=>$request->profession,
'job'=>$request->job
]);

return redirect('/dashboard')->with(['success'=>'Profile has been created']);

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
}
