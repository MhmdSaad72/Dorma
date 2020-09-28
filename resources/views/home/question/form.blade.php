<div class="form-group {{ $errors->has('sub_title') ? 'has-error' : ''}}">
  <label for="sub_title" class="control-label">{{ '*Sub Title' }}</label>
  <input class="form-control" name="sub_title" type="text" id="sub_title" value="{{ isset($question->sub_title) ? $question->sub_title : old('sub_title')}}" >

  {!! $errors->first('sub_title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ '*Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($question->title) ? $question->title : old('title')}}" required>

    {!! $errors->first('title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ '*Content' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($question->description) ? $question->description : old('description')}}</textarea>

    {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($question->image) ? $question->image : old('image')}}" >

    {!! $errors->first('image', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
