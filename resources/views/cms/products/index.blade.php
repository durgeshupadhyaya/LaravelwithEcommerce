@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-3 bg-white">
                <div class="row">
                    <div class="col">
                        <h1>Product</h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{ action('Back\ProductsController@create') }}" class="btn btn-primary">Create Product</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if($products->isNotEmpty())
                            <table class="table table-striped table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Quantity</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Featured</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ !empty($product->discount) ? $product->discount : 'n/a' }}</td>
                                        <td>{{ $product->qty }}</td>
                                        <td>
                                            <img src="{{ url('public/images/'.$product->image) }}" class="img-fluid small">
                                        </td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->brand->name }}</td>
                                        <td>{{ $product->featured }}</td>
                                        <td>
                                            {{ $product->created_at->format('j M, Y h:i A') }}
                                        </td>
                                        <td>
                                            {{ $product->updated_at->format('j M, Y h:i A') }}
                                        </td>
                                        <td>
                                            {{ Form::open(['method' => 'delete', 'action' => ['Back\ProductsController@destroy', $product->id]]) }}
                                            <a href="{{ action('Back\ProductsController@edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4 class="text-center">No Product added.</h4>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
