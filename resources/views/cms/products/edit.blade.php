@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3 bg-white">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h1>Edit Product</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    {{ Form::model($product, ['method' => 'patch', 'action' => ['Back\ProductsController@update', $product->id], 'files' => true]) }}
                        @include('cms.products.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
