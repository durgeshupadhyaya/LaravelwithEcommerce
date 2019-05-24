@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3 bg-white">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h1>Create Page</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    {{ Form::open(['method' => 'post', 'action' => 'Back\PagesController@store', 'files' => true]) }}
                        @include('cms.pages.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

