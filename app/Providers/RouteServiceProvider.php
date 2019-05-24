<?php

namespace App\Providers;

use App\Category;
use App\Customer;
use App\Order;
use App\Page;
use App\Brand;
use App\MainCategory;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        Route::bind('page', function($term) {
            return Page::find($term);
        });

        Route::bind('maincategory', function($term) {
            return MainCategory::find($term);
        });

        Route::bind('brand', function($term) {
            return Brand::find($term);
        });

        Route::bind('user', function($term) {
            return User::find($term);
        });

        Route::bind('customer', function($term) {
            return Customer::find($term);
        });

        Route::bind('category', function($term) {
            return Category::find($term);
        });

        Route::bind('product', function($term) {
            return Product::find($term);
        });

        Route::bind('order', function($term) {
            return Order::find($term);
        });

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
