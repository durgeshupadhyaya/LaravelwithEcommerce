<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('main_category_id', 'Main Category') }}
    {{ Form::select('main_category_id', $main_categories, null, ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">Save</button>
</div>
