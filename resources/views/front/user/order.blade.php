@extends('layouts.front')

@section('title', 'Home')


@section('content')
    <!--//banner-sec-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4 text-center">Order #{{ $order->id }}</h3>
                <div class="row">
                    <!-- /womens -->

                    <div class="col-7 mx-auto">
                        <div class="row">
                            <div class="col-12 mt-4">
                                <h5>Order Details</h5>
                            </div>
                            <div class="col-12">

                                <table class="table table-striped table-hover table-sm">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($details as $detail)
                                        <tr>
                                            <td>{{ $detail->product->name }}</td>
                                            <td>Rs. {{ number_format($detail->price) }}</td>
                                            <td>{{ $detail->qty }}</td>
                                            @php($amount = $detail->price * $detail->qty)
                                            <td>Rs. {{ number_format($amount) }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
