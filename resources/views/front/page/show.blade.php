@extends('layouts.front')

@section('title', 'Home')


@section('content')
    <!--//banner-sec-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4 text-center">{{ $page->name }}</h3>
                <div class="row">
                    <!-- /womens -->

                    <div class="col-7 mx-auto">
                        <div class="row">
                            @if(!empty($page->image))
                            <div class="col-12 text-center mb-3">
                                <img src="{{ url('public/images/'.$page->image) }}" class="img-fluid">
                            </div>
                            @endif
                            <div class="col-12 text-justify">
                                {!! nl2br($page->description) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //womens -->

            </div>

        </div>
    </section>
    <!-- about -->
@endsection
