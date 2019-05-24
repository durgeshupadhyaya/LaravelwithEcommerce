@extends('layouts.front')

@section('title', 'Home')


@section('content')
    <!--//banner-sec-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4">Featured Products</h3>
                <div class="row">
                    <!-- /womens -->

                    @foreach($featuredProducts as $product)
                    <div class="col-md-3 product-men women_two">
                        <div class="product-googles-info googles">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <div class="product-thumb" style="background-image: url('{{ url('public/images/'.$product->image) }}')"></div>
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ action('Front\ProductController@show', $product->id) }}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info-product">
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <h4>
                                                    <a href="{{ action('Front\ProductController@show', $product->id) }}">{{ $product->name }}</a>
                                                </h4>
                                                <div class="grid-price mt-2">
                                                    <span class="money ">Rs. {{ !empty($product->discount) ? number_format($product->discount, 2) : number_format($product->price, 2) }}</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="googles single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="googles_item" value="{{ $product->name }}">
                                                <input type="hidden" name="amount" value="{{ !empty($product->discount) ? $product->discount : $product->price }}">
                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                    <i class="fas fa-cart-plus"></i>
                                                </button>


                                            </form>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- //womens -->

            </div>

            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4">Latest Products</h3>
                <div class="row">
                    <!-- /womens -->
                    @foreach($latestProducts as $product)
                        <div class="col-md-3 product-men women_two">
                            <div class="product-googles-info googles">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <div class="product-thumb" style="background-image: url('{{ url('public/images/'.$product->image) }}')"></div>
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{ action('Front\ProductController@show', $product->id) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <h4>
                                                        <a href="{{ action('Front\ProductController@show', $product->id) }}">{{ $product->name }}</a>
                                                    </h4>
                                                    <div class="grid-price mt-2">
                                                        <span class="money ">Rs. {{ !empty($product->discount) ? number_format($product->discount, 2) : number_format($product->price, 2) }}</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="googles single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="googles_item" value="{{ $product->name }}">
                                                    <input type="hidden" name="amount" value="{{ !empty($product->discount) ? $product->discount : $product->price }}">
                                                    <button type="submit" class="googles-cart pgoogles-cart">
                                                        <i class="fas fa-cart-plus"></i>
                                                    </button>


                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- //womens -->

            </div>

            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4">Top Selling Products</h3>
                <div class="row">
                    <!-- /womens -->
                    @foreach($topProducts as $product)
                        <div class="col-md-3 product-men women_two">
                            <div class="product-googles-info googles">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <div class="product-thumb" style="background-image: url('{{ url('public/images/'.$product->image) }}')"></div>
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{ action('Front\ProductController@show', $product->id) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product">
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <h4>
                                                        <a href="{{ action('Front\ProductController@show', $product->id) }}">{{ $product->name }}</a>
                                                    </h4>
                                                    <div class="grid-price mt-2">
                                                        <span class="money ">Rs. {{ !empty($product->discount) ? number_format($product->discount, 2) : number_format($product->price, 2) }}</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="googles single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="googles_item" value="{{ $product->name }}">
                                                    <input type="hidden" name="amount" value="{{ !empty($product->discount) ? $product->discount : $product->price }}">
                                                    <button type="submit" class="googles-cart pgoogles-cart">
                                                        <i class="fas fa-cart-plus"></i>
                                                    </button>


                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- //womens -->

            </div>

        </div>
    </section>
    <!-- about -->
@endsection
