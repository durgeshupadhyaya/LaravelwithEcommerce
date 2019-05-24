@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3 bg-white">
            <div class="row">
                <div class="col-12">
                    <h1>Order#{{ $order->id }}</h1>
                </div>
                <div class="col-12">
                    <h4>Customer: {{ $order->customer->name }}</h4>
                </div>
            </div>
            <div class="row">
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
                        @foreach($order->order_details as $detail)
                            <tr>
                                <td>{{ $detail->product->name }}</td>
                                <td>Rs. {{ number_format($detail->price) }}</td>
                                <td>{{ $detail->qty }}</td>
                                @php($amount = $detail->qty * $detail->price)
                                <td>Rs. {{ number_format($amount) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3" class="text-right">Total</th>
                                <th>Rs. {{ number_format($order->total) }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
