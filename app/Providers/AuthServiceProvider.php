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

        Gate::define('accessAdmin', function($user) {
            if($user->role == 'admin')
                return true;
            return false;
         });

         Gate::define('accessAuthor', function($user) {
            if($user->role == 'author')
                return true;
            return false;
         });

         Gate::define('accessClient', function($user) {
            if($user->role == 'client')
            return true;
        return false;
         });
        
        Gate::define('accessAdminAuthor', function ($user) {
             if($user->role == 'admin' || $user->role == 'author')
                return true;
            return false;
        });
    }
}
