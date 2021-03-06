<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-users', function ($user){
            return $user->hasAnyRoles(['admin','author','user']);
        });

        Gate::define('edit-users', function ($user){
            return $user->hasRole('admin');
        });

        //Roles for user account
        Gate::define('account_student', function ($user){
           return $user->hasAccountRole(1);
        });
        Gate::define("account_public", function ($user){
            return $user->hasAccountRole(2);
        });
        Gate::define("account_kid", function ($user){
            return $user->hasAccountRole(3);
        });
        //end Roles for user account
    }
}
