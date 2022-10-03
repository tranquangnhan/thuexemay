<?php

namespace App\Providers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
         $this->composerShareConstant();
    }
    public function composerShareConstant(){

        View::composer('*', function($view )
        {
            $view->with('URL_IMG', Controller::URL_IMG);
        }
        );
    }
}
