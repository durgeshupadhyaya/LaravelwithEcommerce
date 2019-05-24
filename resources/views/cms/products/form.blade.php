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
    @if(!empty($product->image))
        <img src="{{ url('public/images/'.$product->image) }}" class="img-fluid mt-3">
    @endif
</div>
<div class="form-group">
    {{ Form::label('price', 'Price') }}
    {{ Form::text('price', null, ['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('discount', 'Price after Discount') }}
    {{ Form::text('discount', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('qty', 'Quantity') }}
    {{ Form::text('qty', null, ['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('featured', 'Featured') }}
    {{ Form::select('featured', ['no' => 'No', 'yes' => 'Yes'], null, ['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('brand_id', 'Brand') }}
    {{ Form::select('brand_id', $brands, null, ['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('category_id', 'Category') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">Save</button>
</div>
