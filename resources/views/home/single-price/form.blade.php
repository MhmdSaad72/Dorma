<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ '*Type' }}</label>
    <input class="form-control" name="type" type="text" id="type" value="{{ isset($singleprice->type) ? $singleprice->type : old('type')}}" >

    {!! $errors->first('type', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ '*Price' }}</label>
    <input class="form-control" name="price" type="text" id="price" value="{{ isset($singleprice->price) ? $singleprice->price : old('price')}}" >

    {!! $errors->first('price', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('period') ? 'has-error' : ''}}">
    <label for="period" class="control-label">{{ '*Period' }}</label>
    <input class="form-control" name="period" type="text" id="period" value="{{ isset($singleprice->period) ? $singleprice->period : old('period')}}" >

    {!! $errors->first('period', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail_1') ? 'has-error' : ''}}">
    <label for="detail_1" class="control-label">{{ 'Detail 1' }}</label>
    <input class="form-control" name="detail_1" type="text" id="detail_1" value="{{ isset($singleprice->detail_1) ? $singleprice->detail_1 : old('detail_1')}}" >

    {!! $errors->first('detail_1', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail_2') ? 'has-error' : ''}}">
    <label for="detail_2" class="control-label">{{ 'Detail 2' }}</label>
    <input class="form-control" name="detail_2" type="text" id="detail_2" value="{{ isset($singleprice->detail_2) ? $singleprice->detail_2 : old('detail_2')}}" >

    {!! $errors->first('detail_2', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail_3') ? 'has-error' : ''}}">
    <label for="detail_3" class="control-label">{{ 'Detail 3' }}</label>
    <input class="form-control" name="detail_3" type="text" id="detail_3" value="{{ isset($singleprice->detail_3) ? $singleprice->detail_3 : old('detail_3')}}" >

    {!! $errors->first('detail_3', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail_4') ? 'has-error' : ''}}">
    <label for="detail_4" class="control-label">{{ 'Detail 4' }}</label>
    <input class="form-control" name="detail_4" type="text" id="detail_4" value="{{ isset($singleprice->detail_4) ? $singleprice->detail_4 : old('detail_4')}}" >

    {!! $errors->first('detail_4', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail_5') ? 'has-error' : ''}}">
    <label for="detail_5" class="control-label">{{ 'Detail 5' }}</label>
    <input class="form-control" name="detail_5" type="text" id="detail_5" value="{{ isset($singleprice->detail_5) ? $singleprice->detail_5 : old('detail_5')}}" >

    {!! $errors->first('detail_5', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
