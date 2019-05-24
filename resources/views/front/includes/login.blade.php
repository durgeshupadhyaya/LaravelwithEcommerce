<!---->
<div class="overlay-login text-left">
    <button type="button" class="overlay-close1">
        <i class="fa fa-times" aria-hidden="true"></i>
    </button>
    <div class="wrap">
        <h5 class="text-center mb-4">Login Now</h5>
        <div class="login p-5 bg-dark mx-auto mw-100">
            {{ Form::open(['method' => 'post', 'action' => 'Front\UserController@login']) }}
                <div class="form-group">
                    <label class="mb-2">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label class="mb-2">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="form-check mb-2">
                    <input type="checkbox" name="remember" value="yes" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

            {{ Form::close() }}
            <br>
            <a href="{{ action('Front\UserController@showRegisterForm') }}" class="btn btn-secondary submit mb-4">Register</a>
        </div>
        <!---->
    </div>
</div>
<!---->
