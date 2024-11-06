<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Profile;
use App\Models\BusinessProfileModel;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //define roles

Gate::define('is_admin',function(User $user){

    return $user->role=='admin';

});

Gate::define('is_user',function(User $user){
return $user->role=='user';
});


Gate::define('is_organisation',function(User $user){
return $user->role=='organisation';
});


Gate::define('is_government',function(User $user){
return $user->role=='government';
});

Gate::define('is_business',function(User $user){
return $user->role=='business';
});

Gate::define('has_role',function(User $user,$role){
return $user->role==$role;
});


//user activity status
Gate::define('is_active',function(User $user){
return $user->user_status=='active';
});

Gate::define('user_status',function(User $user,$status){
return $user->user_status==$status;
});

// check if is logged in
Gate::define('is_login',function(User $user){
return $user->id!=null;
});

//check if account has user profile
Gate::define('is_user_profile',function(User $user){
$profile=Profile::where('user_id',$user->id)->first();
$user_id=0;
if($profile!=null){
$user_id=$profile->user_id;
}
return $user->id==$user_id;
});


//check if account has organisation profile
Gate::define('is_business_profile',function(User $user){
$profile=BusinessProfileModel::where('user_id',$user->id)->first();
$user_id=0;
if($profile!=null){
$user_id=$profile->id;
}
return $user->id==$user_id;
});





}
}
