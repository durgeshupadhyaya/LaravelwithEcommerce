@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-3 bg-white">
                <div class="row">
                    <div class="col">
                        <h1>Customer</h1>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if($customers->isNotEmpty())
                            <table class="table table-striped table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>

                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->name }}</td>

                                        <td>{{ $customer->email }}</td>




                                        <td>
                                            {{ $customer->created_at->format('j M, Y h:i A') }}
                                        </td>
                                        <td>
                                            {{ $customer->updated_at->format('j M, Y h:i A') }}
                                        </td>
                                        <td>

                                            {{ Form::open(['method' => 'delete', 'action' => ['Back\CustomersController@destroy', $customer->id]]) }}
                                            <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4 class="text-center">No Customer added.</h4>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{ $customers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
