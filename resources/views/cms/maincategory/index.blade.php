@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3 bg-white">
            <div class="row">
                <div class="col">
                    <h1>Main Category</h1>
                </div>
                <div class="col-auto">
                    <a href="{{ action('Back\MainCategoryController@create') }}" class="btn btn-primary">Create Main Category</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if($main_categories->isNotEmpty())
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
                            @foreach($main_categories as $main_category)
                                <tr>
                                    <td>{{ $main_category->name }}</td>

                                    <td>
                                        {{ $main_category->created_at->format('j M, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ $main_category->updated_at->format('j M, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ Form::open(['method' => 'delete', 'action' => ['Back\MainCategoryController@destroy', $main_category->id]]) }}
                                        <a href="{{ action('Back\MainCategoryController@edit', $main_category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="text-center">No Main Category added.</h4>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {{ $main_categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
