<?php

namespace Gaurav\Pack;

use Illuminate\Support\ServiceProvider;

class GauravPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() // bootstraping
    {
        require __DIR__."/routes/routes.php";
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('gaurav-message',function(){ 
            // here gaura-message is facade name which will be return from Facades/Message.php file
            return new Message();
        });
    }
}
