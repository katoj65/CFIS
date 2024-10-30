<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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











}
}
