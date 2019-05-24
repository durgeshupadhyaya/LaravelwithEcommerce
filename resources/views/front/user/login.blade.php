@extends('layouts.front')

@section('title', 'Home')


@section('content')
    <!--//banner-sec-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4 text-center">Login</h3>
                <div class="row">
                    <!-- /womens -->

                    <div class="col-5 mx-auto">
                        {{ Form::open(['method' => 'post', 'action' => 'Front\UserController@login']) }}
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('password', 'Password') }}
                                {{ Form::password('password', ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                <div class="form-check-inline">
                                    <input type="checkbox" name="remember" value="yes" class="form-check-input" id="remember">
                                    <label for="remember" class="form-check-label">Remember Me</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-secondary" type="submit">Login</button>
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
