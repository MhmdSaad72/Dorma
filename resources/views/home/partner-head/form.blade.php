<div class="form-group {{ $errors->has('sub_title') ? 'has-error' : ''}}">
  <label for="sub_title" class="control-label">{{ '*Sub Title (Partner Section)' }}</label>
  <input class="form-control" name="sub_title" type="text" id="sub_title" value="{{ isset($partnerhead->sub_title) ? $partnerhead->sub_title : old('sub_title')}}" >

  {!! $errors->first('sub_title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ '*Title (Partner Section)' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($partnerhead->title) ? $partnerhead->title : old('title')}}" required>

    {!! $errors->first('title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ '*Description (Partner Section)' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($partnerhead->description) ? $partnerhead->description : old('description')}}</textarea>

    {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
