<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PropsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 
        require_once app_path() . 'Lib/LogProp.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
