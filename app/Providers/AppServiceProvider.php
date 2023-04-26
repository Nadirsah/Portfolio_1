<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Models\AyarlarModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('profil',AyarlarModel::first());  

        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
    }
}
