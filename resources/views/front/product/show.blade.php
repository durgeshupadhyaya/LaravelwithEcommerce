@extends('layouts.front')

@section('title', $product->name)


@section('content')
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-shop pt-lg-4 pt-3">
                <div class="row">
                    <div class="col-lg-4 single-right-left ">
                        <div class="grid images_3_of_2">
                            <div class="flexslider1">

                                <ul class="slides">
                                    <li data-thumb="{{ url('public/images/'.$product->image) }}">
                                        <div class="thumb-image"> <img src="{{ url('public/images/'.$product->image) }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                        <h3>{{ $product->name }}</h3>
                        <p>
                            @if(!empty($product->discount))
                            <span class="item_price">Rs. {{ number_format($product->discount) }}</span>
                            <del>Rs. {{ number_format($product->price) }}</del>
                            @else
                                <span class="item_price">Rs. {{ number_format($product->price) }}</span>
                            @endif
                        </p>


                        <div class="occasion-cart">
                            <div class="googles single-item singlepage">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="googles_item" value="{{ $product->name }}">
                                    <input type="hidden" name="amount" value="{{ !empty($product->discount) ? $product->discount : $product->price }}">
                                    <button type="submit" class="googles-cart pgoogles-cart">
                                        Add to Cart
                                    </button>

                                </form>

                            </div>
                        </div>


                    </div>
                    <div class="clearfix"> </div>
                    <!--/tabs-->
                    <div class="responsive_tabs">
                        <div id="horizontalTab">
                            <ul class="resp-tabs-list">
                                <li>Description</li>
                            </ul>
                            <div class="resp-tabs-container">
                                <!--/tab_one-->
                                <div class="tab1">

                                    <div class="single_page">
                                        {{ $product->description }}
                                    </div>
                                </div>
                                <!--//tab_one-->
                            </div>
                        </div>
                    </div>
                    <!--//tabs-->

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!--/slide-->
            <div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
                <!--//banner-sec-->
                <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
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
            </div>
            <!--//slider-->
        </div>
    </section>
@endsection
