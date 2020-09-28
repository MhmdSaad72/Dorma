@extends('adminlte::page')

@section('title', 'About Us Page')

@section('content_header')
    <h1>About Us Page</h1>
    <p class="text-muted">Edit all the information exists in about us pages's who we section</p>
@stop

@section('content')
  @if ($whowe)
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('who-we.edit' , $whowe->id) }}" title="Edit Who We Section"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                    <a class="btn btn-info" href="{{ route('who-we-feature.index') }}" title="Features"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Features</a>

                    <br/>
                    <br/>
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <th> Sub Title </th><td> {{ $whowe->sub_title }} </td>
                          </tr>
                          <tr>
                            <th> Title </th><td> {{ $whowe->title }} </td>
                          </tr>
                          <tr>
                            <th> Description </th><td> {{ $whowe->description }} </td>
                          </tr>
                          <tr>
                            <th> Image </th><td> <img src="{{asset('storage/' . $whowe->image)}}" > </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endif
@endsection
