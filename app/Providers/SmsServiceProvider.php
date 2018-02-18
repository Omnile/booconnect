<?php

namespace App\Providers;

use App\BooConnect\Notifcation\Contracts\SmsNotifierInterface;
use App\BooConnect\Notifcation\Sms\SmsClientNotifier;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('App\BooConnect\Notifcation\Contracts\SmsNotifierInterface', function(){
            return new SmsClientNotifier();
        });
    }
}
