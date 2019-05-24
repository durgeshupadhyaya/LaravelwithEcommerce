<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('image', 'Image') }}
    {{ Form::file('image', ['class' => 'form-control-file']) }}
    @if(!empty($page->image))
        <img src="{{ url('public/images/'.$page->image) }}" class="img-fluid mt-3">
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">Save</button>
</div>
