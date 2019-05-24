@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3 bg-white">
            <div class="row">
                <div class="col">
                    <h1>Orders</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if($orders->isNotEmpty())
                        <table class="table table-striped table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->customer->name }}</td>
                                    <td>Rs. {{ number_format($order->total) }}</td>


                                    <td>
                                        {{ $order->created_at->format('j M, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ $order->updated_at->format('j M, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ Form::open(['method' => 'delete', 'action' => ['Back\OrdersController@destroy', $order->id]]) }}
                                        <a href="{{ action('Back\OrdersController@show', $order->id) }}" class="btn btn-primary btn-sm">Details</a>
                                        <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                                        {{ Form::close() }}
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
            <div class="row">
                <div class="col-12">
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
