<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', null ,['class' => 'form-control', 'required']) }}
</div>

@empty($user)
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('password_confirmation', 'Confirm Password') }}
    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required']) }}
</div>
@endempty

<div class="form-group">
    <button type="submit" class="btn btn-success">Save</button>
</div>
