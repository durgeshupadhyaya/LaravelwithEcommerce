<?php

namespace App\Providers;

use App\MainCategory;
use App\Page;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.includes.nav', function($view) {
            $main_categories = MainCategory::get();

            $view->with(compact('main_categories'));
        });

        view()->composer('front.includes.footer', function($view) {
            $pages = Page::get();

            $view->with(compact('pages'));
        });
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
