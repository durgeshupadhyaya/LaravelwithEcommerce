@extends('layouts.front')

@section('title', 'Home')


@section('content')
    <!--//banner-sec-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4 text-center">{{ $user->name }}</h3>
                <div class="row">
                    <!-- /womens -->

                    <div class="col-7 mx-auto">
                        <div class="row">
                            <div class="col-12 mt-4">
                                <h5>Order History</h5>
                            </div>
                            <div class="col-12">
                                @if($orders->isNotEmpty())
                                    <table class="table table-striped table-hover table-sm">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Amount</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>Rs. {{ number_format($order->total) }}</td>


                                                <td>
                                                    {{ $order->created_at->format('j M, Y h:i A') }}
                                                </td>
                                                <td>
                                                    {{ $order->updated_at->format('j M, Y h:i A') }}
                                                </td>
                                                <td>
                                                    <a href="{{ action('Front\UserController@order', $order->id) }}" class="btn btn-primary btn-sm">Details</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h4 class="text-center">No Orders added.</h4>
                                @endif
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
