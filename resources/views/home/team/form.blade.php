<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ '*Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($team->image) ? $team->image : old('image')}}" >

    {!! $errors->first('image', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ '*Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($team->name) ? $team->name : old('name')}}" >

    {!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
    <label for="position" class="control-label">{{ '*Position' }}</label>
    <input class="form-control" name="position" type="text" id="position" value="{{ isset($team->position) ? $team->position : old('position')}}" >

    {!! $errors->first('position', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('facebook') ? 'has-error' : ''}}">
    <label for="facebook" class="control-label">{{ 'Facebook' }}</label>
    <input class="form-control" name="facebook" type="text" id="facebook" value="{{ isset($team->facebook) ? $team->facebook : old('facebook')}}" >

    {!! $errors->first('facebook', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('twitter') ? 'has-error' : ''}}">
    <label for="twitter" class="control-label">{{ 'Twitter' }}</label>
    <input class="form-control" name="twitter" type="text" id="twitter" value="{{ isset($team->twitter) ? $team->twitter : old('twitter')}}" >

    {!! $errors->first('twitter', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('linkedin') ? 'has-error' : ''}}">
    <label for="linkedin" class="control-label">{{ 'Linkedin' }}</label>
    <input class="form-control" name="linkedin" type="text" id="linkedin" value="{{ isset($team->linkedin) ? $team->linkedin : old('linkedin')}}" >

    {!! $errors->first('linkedin', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
