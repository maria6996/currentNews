<?php

namespace lightweb\currentsnews;

use Illuminate\Support\ServiceProvider;

class CurrentsNewsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
                __DIR__ . ' /../config/currentsnews.php' =>config_path('currentsnews.php')
          ]);
    }

    public function register()
    {
        $this->app->singleton(CurrentsNews::class,function(){
            return new CurrentsNews();
       });
    }
}

