@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-3 bg-white">
                <div class="row">
                    <div class="col">
                        <h1>Category</h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{ action('Back\CategoryController@create') }}" class="btn btn-primary">Create Category</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if($categories->isNotEmpty())
                            <table class="table table-striped table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Main Category</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->main_category->name }}</td>
                                        <td>
                                            {{ $category->created_at->format('j M, Y h:i A') }}
                                        </td>
                                        <td>
                                            {{ $category->updated_at->format('j M, Y h:i A') }}
                                        </td>
                                        <td>
                                            {{ Form::open(['method' => 'delete', 'action' => ['Back\CategoryController@destroy', $category->id]]) }}
                                            <a href="{{ action('Back\CategoryController@edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4 class="text-center">No Category added.</h4>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
