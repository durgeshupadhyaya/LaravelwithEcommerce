<!-- header -->
<header>
    <div class="row">
        <div class="col-md-3 top-info text-left mt-lg-4">
            <h6>Need Help</h6>
            <ul>
                <li>
                    <i class="fas fa-phone"></i> Call</li>
                <li class="number-phone mt-3">01-2345678</li>
            </ul>
        </div>
        <div class="col-md-6 logo-w3layouts text-center">
            <h1 class="logo-w3layouts">
                <a class="navbar-brand" href="{{ url('/') }}">E-Commerce</a>
            </h1>
        </div>

        <div class="col-md-3 top-info-cart text-right mt-lg-4">
            <ul class="cart-inner-info">
                <li><button id="trigger-overlay" type="button">
                        <i class="fas fa-search"></i>
                    </button></li>
                <li class="button-log">
                    <a class="btn-open" href="{{ auth('customer')->check() ? action('Front\UserController@index') : '#' }}">
                        <span class="fa fa-user" aria-hidden="true"></span>
                    </a>
                </li>
                @auth('customer')
                <li class="button-log">
                    <a class="btn-open" href="{{ action('Front\UserController@logout') }}">
                        <span class="fa fa-sign-out-alt" aria-hidden="true"></span>
                    </a>
                </li>
                @endauth
                <li class="galssescart galssescart2 cart cart box_1">
                    <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="top_googles_cart" type="submit" name="submit" value="">
                            My Cart
                            <i class="fas fa-cart-arrow-down"></i>
                        </button>
                    </form>
                </li>
            </ul>

            @guest('customer')
            @include('front.includes.login')
            @endguest

        </div>
    </div>
    <div class="search">

        @include('front.includes.search')
    </div>
    <label class="top-log mx-auto"></label>

    @include('front.includes.nav')

</header>
<!-- //header -->
