{{-- @extends('layouts.master')
@section('title' , 'User | ' . $user->name )
@section('content')
  <div class="container">
      <div class="row">

          <div class="col-md-9">
              <div class="card">
                  <div class="card-body">
                      <br />

                      <form method="POST" action="{{ route('edit.user' , $user->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                          {{ method_field('PATCH') }}
                          {{ csrf_field() }}

                          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                              <label for="name" class="control-label">{{ '*Name' }}</label>
                              <input class="form-control" name="name" type="text" id="name" value="{{ isset($name->name) ? $name->name : old('name')}}" >

                              {!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
                          </div>
                          <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                              <label for="email" class="control-label">{{ '*E-Mail Address' }}</label>
                              <input class="form-control" name="email" type="email" id="email" value="{{ isset($email->email) ? $email->email : old('email')}}" >

                              {!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
                          </div>
                          <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                              <label for="password" class="control-label">{{ '*Password' }}</label>
                              <input class="form-control" name="password" type="password" id="password" value="{{ isset($password->password) ? $password->password : old('password')}}" >

                              {!! $errors->first('password', '<p class="help-block text-danger">:message</p>') !!}
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection --}}
