<?php

namespace Kelechukw\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    
    public function register()
    {
        //
        $this->app->make('Kelechukw\Calculator\CC');
         $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
?>