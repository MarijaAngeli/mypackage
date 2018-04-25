<?php
/**
 * Created by PhpStorm.
 * User: MarijaAngeli
 * Date: 4/25/18
 * Time: 10:02 AM
 */

namespace Maria\Nova;


use Illuminate\Support\ServiceProvider;

class NovaServiceProvider extends ServiceProvider
{
    public function boot(){
        if(!$this->app->routesAreCached()){
            require __DIR__.'/routes.php';
        }
        $this->mergeConfigFrom(__DIR__.'/config/nova.php', 'nova');
        $this->loadViewsFrom(__DIR__.'/views', 'nova');
        $this->loadMigrationsFrom(__DIR__.'/migrations','nova');
    }
    //    Within a service provider, you always have access to the container via $this->>app
    //    property. We can register a binding using the bind method, passing the class or
    //    interface name that we want to register along with Closure that returns an instance
    //    of the class:
    public function register(){
        $this->app->bind('nova',function(){
            return new Nova();
        });
    }
}