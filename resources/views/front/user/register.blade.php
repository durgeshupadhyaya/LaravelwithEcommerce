@extends('layouts.front')

@section('title', 'Home')


@section('content')
    <!--//banner-sec-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4 text-center">Registration</h3>
                <div class="row">
                    <!-- /womens -->

                    <div class="col-5 mx-auto">
                        {{ Form::open(['method' => 'post', 'action' => 'Front\UserController@register']) }}
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('password', 'Password') }}
                                {{ Form::password('password', ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('password_confirmation', 'Confirm Password') }}
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                <button class="btn btn-secondary" type="submit">Register</button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
                <!-- //womens -->

            </div>

        </div>
    </section>
    <!-- about -->
@endsection
