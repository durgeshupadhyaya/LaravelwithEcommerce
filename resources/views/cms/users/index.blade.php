@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-3 bg-white">
                <div class="row">
                    <div class="col">
                        <h1>Users</h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{ action('Back\UsersController@create') }}" class="btn btn-primary">Create User</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if($users->isNotEmpty())
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
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>

                                        <td>{{ $user->email }}</td>




                                        <td>
                                            {{ $user->created_at->format('j M, Y h:i A') }}
                                        </td>
                                        <td>
                                            {{ $user->updated_at->format('j M, Y h:i A') }}
                                        </td>
                                        <td>
                                            @if($user->id != auth()->id())
                                            {{ Form::open(['method' => 'delete', 'action' => ['Back\UsersController@destroy', $user->id]]) }}
                                            <a href="{{ action('Back\UsersController@edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                                            {{ Form::close() }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4 class="text-center">No Users added.</h4>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
