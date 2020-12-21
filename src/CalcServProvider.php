<?php

namespace Kelechukw\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        //Directory route
        include __DIR__.'/routes.php';
    }

    
    public function register()
    {
        //register services
        $this->app->make('Kelechukw\Calculator\calccontroller');
         $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
?>
