<?php

namespace App\Providers;

use App\Models\System;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        //NUNCA SE ESQUECER DE RODAR O ARTISAN DB:SEED.
        if(Schema::hasTable('system')){
            $system = System::find(1);
            if(isset($system) && !is_null($system)){
                config()->set('app.name', $system->name);
                config()->set('app.logo', $system->logo);
                View::share('system',$system);
            }
        }

    }
}
