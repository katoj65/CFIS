<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\ReportSectorEmission;
use App\Models\EmissionSource;
use App\Models\ProjectModel;
use App\Models\User;
use App\Models\News;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\BusinessSector;
use App\Models\UpdateModel;
use App\Http\Resources\CreateProfileResource;



class HomeController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index(Request $request)
{

if(Auth::user()!=''){



if(Gate::allows('is_admin') or Gate::allows('is_user') or Gate::allows('is_business')
 or Gate::allows('is_organisation') or Gate::allows('is_government')){



$role=Auth::user()->role;
if($role=='user'){
$role='home';
}

return redirect('/'.$role);


}else{
$data['title']='Create Profile';
$data['response']=new CreateProfileResource(Auth::user());
//create profile
return Inertia::render('Profile/CreateProfile',$data);
}
}else{

$data['title']='Welcome';
$data['response']=[
'projects'=>ProjectModel::count(),
'developers'=>ProjectModel::select('developer_id')->distinct()->count(),
'clients'=>User::select('id')->where(['user_status'=>'active'])->where(['role'=>'organisation'])->orWhere(['role'=>'user'])
->orWhere(['role'=>'business'])->orWhere(['role'=>'government'])->count(),
'news'=>News::orderby('created_at','DESC')->limit(4)->get(),
'update'=>UpdateModel::where('id',1)->first(),
];

return Inertia::render('LandingPage',$data);

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
}
