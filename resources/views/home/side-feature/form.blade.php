<div class="form-group {{ $errors->has('icon') ? 'has-error' : ''}}">
    <label for="icon" class="control-label">{{ '*Icon' }}</label>
    <input class="form-control" name="icon" type="file" id="icon" >

    {!! $errors->first('icon', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ '*Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($sidefeature->description) ? $sidefeature->description : old('description')}}" >

    {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ '*Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($sidefeature->content) ? $sidefeature->content : old('content')}}</textarea>

    {!! $errors->first('content', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('feature_1') ? 'has-error' : ''}}">
    <label for="feature_1" class="control-label">{{ 'Feature 1' }}</label>
    <input class="form-control" name="feature_1" type="text" id="feature_1" value="{{ isset($sidefeature->feature_1) ? $sidefeature->feature_1 : old('feature_1')}}" >

    {!! $errors->first('feature_1', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('feature_2') ? 'has-error' : ''}}">
    <label for="feature_2" class="control-label">{{ 'Feature 2' }}</label>
    <input class="form-control" name="feature_2" type="text" id="feature_2" value="{{ isset($sidefeature->feature_2) ? $sidefeature->feature_2 : old('feature_2')}}" >

    {!! $errors->first('feature_2', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('feature_3') ? 'has-error' : ''}}">
    <label for="feature_3" class="control-label">{{ 'Feature 3' }}</label>
    <input class="form-control" name="feature_3" type="text" id="feature_3" value="{{ isset($sidefeature->feature_3) ? $sidefeature->feature_3 : old('feature_3')}}" >

    {!! $errors->first('feature_3', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
