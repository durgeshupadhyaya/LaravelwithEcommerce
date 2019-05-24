@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3 bg-white">
            <div class="row">
                <div class="col">
                    <h1>Pages</h1>
                </div>
                <div class="col-auto">
                    <a href="{{ action('Back\PagesController@create') }}" class="btn btn-primary">Create Page</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if($pages->isNotEmpty())
                        <table class="table table-striped table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ $page->name }}</td>
                                    <td>
                                        @if(!empty($page->image))
                                            <img src="{{ url('public/images/'.$page->image) }}" class="img-fluid small">
                                        @endif
                                    </td>
                                    <td>
                                        {{ $page->created_at->format('j M, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ $page->updated_at->format('j M, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ Form::open(['method' => 'delete', 'action' => ['Back\PagesController@destroy', $page->id]]) }}
                                        <a href="{{ action('Back\PagesController@edit', $page->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="text-center">No pages added.</h4>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {{ $pages->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
