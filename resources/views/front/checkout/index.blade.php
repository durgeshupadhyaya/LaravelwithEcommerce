@extends('layouts.front')

@section('title', 'Home')


@section('content')
    <!--//banner-sec-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4 text-center">Checkout</h3>
                <div class="row">
                    <!-- /womens -->

                    <div class="col-7 bg-white py-3 mx-auto">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped table-hover table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($total = 0)
                                    @php($i = 1)
                                    @foreach($cart as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item['product'] }}</td>
                                            <td>Rs. {{ number_format($item['amount']) }}</td>
                                            <td>{{ $item['quantity'] }}</td>
                                            @php($amount = $item['amount'] * $item['quantity'])
                                            <td>Rs. {{ number_format($amount) }}</td>
                                        </tr>
                                        @php($total += $amount)
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="4" class="text-right">Total</th>
                                        <th>Rs. {{ number_format($total) }}</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-12 text-right">
                                {{ Form::open(['method' => 'post', 'action' => 'Front\CheckoutController@checkout', 'id' => 'checkout-form']) }}
                                {{ Form::textarea('cart', json_encode($cart), ['style' => 'display:none']) }}
                                {{ Form::hidden('total', $total) }}
                                <div class="form-group">
                                    <button class="btn btn-success btn-lg" type="submit">Checkout</button>
                                </div>
                                {{ Form::close() }}
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
