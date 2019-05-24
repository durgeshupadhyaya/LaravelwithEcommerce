@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3 bg-white">
            <div class="row">
                <div class="col">
                    <h1>Brands</h1>
                </div>
                <div class="col-auto">
                    <a href="{{ action('Back\BrandsController@create') }}" class="btn btn-primary">Create Brand</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if($brands->isNotEmpty())
                        <table class="table table-striped table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $brand->name }}</td>
                                
                                      
                                    <td>
                                        {{ $brand->created_at->format('j M, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ $brand->updated_at->format('j M, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ Form::open(['method' => 'delete', 'action' => ['Back\BrandsController@destroy', $brand->id]]) }}
                                        <a href="{{ action('Back\BrandsController@edit', $brand->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="text-center">No Brands added.</h4>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {{ $brands->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
