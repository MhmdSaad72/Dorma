<div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
    <label for="logo" class="control-label">{{ '*Logo' }}</label>
    <input class="form-control" name="logo" type="file" id="logo" >

    {!! $errors->first('logo', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('logo_name') ? 'has-error' : ''}}">
    <label for="logo_name" class="control-label">{{ '*Logo Name' }}</label>
    <input class="form-control" name="logo_name" type="text" id="logo_name" value="{{ isset($footer->logo_name) ? $footer->logo_name : old('logo_name')}}" >

    {!! $errors->first('logo_name', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ '*Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($footer->description) ? $footer->description : old('description')}}</textarea>

    {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mail_address') ? 'has-error' : ''}}" >
    <label for="mail_address" class="control-label">{{ '*Mail Address' }}</label>
    <input class="form-control" name="mail_address" type="text" id="mail_address" value="{{ isset($footer->mail_address) ? $footer->mail_address : old('mail_address')}}" >

    {!! $errors->first('mail_address', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}" >
    <label for="address" class="control-label">{{ '*Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($footer->address) ? $footer->address : old('address')}}" >

    {!! $errors->first('address', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}" >
    <label for="phone" class="control-label">{{ '*Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($footer->phone) ? $footer->phone : old('phone')}}" >

    {!! $errors->first('phone', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}" >
    <label for="email" class="control-label">{{ '*E-Mail' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($footer->email) ? $footer->email : old('email')}}" >

    {!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('facebook') ? 'has-error' : ''}}" >
    <label for="facebook" class="control-label">{{ '*Facebook' }}</label>
    <input class="form-control" name="facebook" type="text" id="facebook" value="{{ isset($footer->facebook) ? $footer->facebook : old('facebook')}}" >

    {!! $errors->first('facebook', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('twitter') ? 'has-error' : ''}}" >
    <label for="twitter" class="control-label">{{ '*Twitter' }}</label>
    <input class="form-control" name="twitter" type="text" id="twitter" value="{{ isset($footer->twitter) ? $footer->twitter : old('twitter')}}" >

    {!! $errors->first('twitter', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('instagram') ? 'has-error' : ''}}" >
    <label for="instagram" class="control-label">{{ '*Instagram' }}</label>
    <input class="form-control" name="instagram" type="text" id="instagram" value="{{ isset($footer->instagram) ? $footer->instagram : old('instagram')}}" >

    {!! $errors->first('instagram', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('google_plus') ? 'has-error' : ''}}" >
    <label for="google_plus" class="control-label">{{ '*Google+' }}</label>
    <input class="form-control" name="google_plus" type="text" id="google_plus" value="{{ isset($footer->google_plus) ? $footer->google_plus : old('google_plus')}}" >

    {!! $errors->first('google_plus', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('linkedin') ? 'has-error' : ''}}" >
    <label for="linkedin" class="control-label">{{ '*Linkedin' }}</label>
    <input class="form-control" name="linkedin" type="text" id="linkedin" value="{{ isset($footer->linkedin) ? $footer->linkedin : old('linkedin')}}" >

    {!! $errors->first('linkedin', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
