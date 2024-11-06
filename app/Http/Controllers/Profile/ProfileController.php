<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Profile;
use Inertia\Inertia;
use App\Models\BusinessProfileModel;
use App\Models\User;

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
'gender'=>'required',
'dob'=>['required','date'],
'address'=>['required'],
'tel'=>['required'],
'profession'=>['required'],
'job'=>['required']
],['required'=>'This field is required.']);

Profile::create([
'user_id'=>Auth::user()->id,
'gender'=>$request->gender,
'dob'=>$request->dob,
'address'=>$request->address,
'tel'=>$request->tel,
'role'=>'personal',
'profession'=>$request->profession,
'job'=>$request->job
]);

return redirect('/dashboard')->with('success','Profile has been created');

}






//store business profile
public function storeBusinessProfile(Request $request){
$validate=$request->validate([
'name'=>'required',
'business_category'=>'required',
'business_type'=>'required',
'address'=>'required',
'tel'=>'required',
'email'=>'required',
'founded_at'=>'required',
'origin'=>'required'
],['required'=>'This field is required']);

BusinessProfileModel::create([
'user_id'=>Auth::user()->id,
'name'=>$request->name,
'business_category'=>$request->business_category,
'business_type'=>$request->business_type,
'address'=>$request->address,
'tel'=>$request->tel,
'email'=>$request->email,
'founded_at'=>$request->founded_at,
'origin'=>$request->origin
]);

$user=User::find(Auth::user()->id);
$user->profile_status='true';
$user->save();
return redirect('/')->with('success','Your profile information has been saved');

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
