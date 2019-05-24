<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


/**
 * Back-end routes
 */
Route::middleware('auth')->group(function() {

    Route::prefix('cms')->group(function() {

        Route::get('/home', 'Back\HomeController@index');

        Route::resource('/pages', 'Back\PagesController', ['except' => 'show']);
        Route::resource('/maincategories', 'Back\MainCategoryController', ['except' => 'show']);


        Route::get('/edit-profile', 'Back\ProfileController@editProfile');

        Route::patch('/edit-profile', 'Back\ProfileController@updateProfile');

        Route::get('/change-password', 'Back\ProfileController@editPassword');

        Route::patch('/change-password', 'Back\ProfileController@updatePassword');

        Route::resource('/brands', 'Back\BrandsController', ['except' => 'show']);

        Route::resource('/users', 'Back\UsersController', ['except' => 'show']);

        Route::resource('/customers', 'Back\CustomersController', ['only' => ['index','destroy']]);

        Route::resource('/categories', 'Back\CategoryController', ['except' => 'show']);

        Route::resource('/products', 'Back\ProductsController', ['except' => 'show']);

        Route::resource('/orders', 'Back\OrdersController', ['only' => ['index', 'destroy', 'show']]);

        Route::redirect('/', action('Back\HomeController@index'));

    });

});

/**
 * Front-end Routes
 */

Route::get('/product/{product}', 'Front\ProductController@show');

Route::get('/page/{page}', 'Front\PageController@show');

Route::get('/category/{category}', 'Front\CategoryController@show');

Route::get('/search', 'Front\SearchController@show');

Route::prefix('user')->group(function() {

    Route::middleware('user_guest')->group(function() {

        Route::get('/login', 'Front\UserController@showLoginForm');

        Route::post('/login', 'Front\UserController@login');

        Route::get('/register', 'Front\UserController@showRegisterForm');

        Route::post('/register', 'Front\UserController@register');
    });

    Route::middleware('customer')->group(function() {

        Route::get('/logout', 'Front\UserController@logout');

        Route::get('/order/{order}', 'Front\UserController@order');

        Route::get('/', 'Front\UserController@index');

    });

});

Route::middleware('customer')->get('/checkout', 'Front\CheckoutController@index');

Route::middleware('customer')->post('/checkout', 'Front\CheckoutController@checkout');

Route::get('/', 'Front\PagesController@home');
