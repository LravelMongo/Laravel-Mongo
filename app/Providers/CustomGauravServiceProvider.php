<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\SocialMedia\Facebook;

class CustomGauravServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('FB',function(){
            return new Facebook(Config('services.mailgun'));
        });
    }
}
