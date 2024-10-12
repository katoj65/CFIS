<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\CarbonFootprintParameter;


class HandleInertiaRequests extends Middleware
{
/**
 * The root template that's loaded on the first page visit.
 *
 * @see https://inertiajs.com/server-side-setup#root-template
 * @var string
 */
protected $rootView = 'app';

/**
 * Determines the current asset version.
 *
 * @see https://inertiajs.com/asset-versioning
 * @param  \Illuminate\Http\Request  $request
 * @return string|null
 */
public function version(Request $request)
{
return parent::version($request);
}

/**
 * Defines the props that are shared by default.
 *
 * @see https://inertiajs.com/shared-data
 * @param  \Illuminate\Http\Request  $request
 * @return array
 */

static function getUserPofile($user){
return Profile::where('user_id',$user->id)->first();
}






public function share(Request $request)
{
return array_merge(parent::share($request), [
//authenticated user information.
'auth'=> function() use($request){
$user=$request->user() ? $request->user() : null;
$profile=$request->user() ? HandleInertiaRequests::getUserPofile(Auth::user()) : null;
return [
'user'=>$user,'profile'=>$profile];
},

//system details
'system'=>function() use($request){
return[
'url'=>'http://localhost/carbon/',
'carbon_footprint_parameters'=>CarbonFootprintParameter::all(),
];
},




//flash data.
'flash'=> function() use($request){
return[
'success'=>$request->session()->get('success'),
'error'=>$request->session()->get('error'),
'warning'=>$request->session()->get('warning'),
'notice'=>$request->session()->get('notice')

];
}















]);
}
}
