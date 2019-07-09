<?php

namespace Discuss\Contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    	$this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');


    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    	
    }
}