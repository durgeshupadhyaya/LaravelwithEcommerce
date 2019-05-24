@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3 bg-white">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h1>Edit Main Category</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    {{ Form::model($maincategory, ['method' => 'patch', 'action' => ['Back\MainCategoryController@update', $maincategory->id]]) }}
                        @include('cms.maincategory.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
