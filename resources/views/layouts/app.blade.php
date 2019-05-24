<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ url('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ url('public/css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ action('Back\UsersController@index') }}" class="nav-link">Users</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('Back\PagesController@index') }}" class="nav-link">Pages</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('Back\BrandsController@index') }}" class="nav-link">Brands</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('Back\MainCategoryController@index') }}" class="nav-link">Main Categories</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('Back\CategoryController@index') }}" class="nav-link">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('Back\ProductsController@index') }}" class="nav-link">Products</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('Back\CustomersController@index') }}" class="nav-link">Customers</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('Back\OrdersController@index') }}" class="nav-link">Orders</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ action('Back\ProfileController@editProfile') }}" class="dropdown-item">Edit Profile</a>
                                    <a href="{{ action('Back\ProfileController@editPassword') }}" class="dropdown-item">Change Password</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @include('flash::message')
        @include('errors.list')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
