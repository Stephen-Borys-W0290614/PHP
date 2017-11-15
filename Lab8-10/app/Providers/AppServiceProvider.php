<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

use \App\Billing\stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */


    protected $defer = true;


    public function boot()
    {

        view()->composer('layouts.sidebar',function ($view){

           $view->with('archives', \App\Post::archives());

           //$view->with('tags', \App\Tag::has('posts')->pluck('name'));


           $tags = \App\Tag::has('posts')->pluck('name');


           $view->with(compact('archives', 'tags'));

            Schema::defaultStringLength(191);

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(stripe::class, function(){

            return new stripe(config('services.stripe.secret'));

        });

    }
}
