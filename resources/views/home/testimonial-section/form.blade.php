<div class="form-group {{ $errors->has('sub_title') ? 'has-error' : ''}}">
    <label for="sub_title" class="control-label">{{ '*Sub Title (Testimonial Section)' }}</label>
    <input class="form-control" name="sub_title" type="text" id="sub_title" value="{{ isset($testimonial->sub_title) ? $testimonial->sub_title : old('sub_title')}}" >

    {!! $errors->first('sub_title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ '*Title (Testimonial Section)' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($testimonial->title) ? $testimonial->title : old('title')}}" >

    {!! $errors->first('title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ '*Description (Testimonial Section)' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($testimonial->description) ? $testimonial->description : old('description')}}</textarea>

    {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
