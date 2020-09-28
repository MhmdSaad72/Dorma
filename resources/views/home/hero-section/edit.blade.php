@extends('adminlte::page')

@section('title', 'Edit Home Page')

@section('content_header')
    <h1>Edit Home Page</h1>
    <p class="text-muted">Edit all the information exists in home pages's hero section</p>
@stop

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <br />
                        @if (session('flash_message'))
                        <ul class="alert alert-success">
                            {{session('flash_message')}}
                        </ul>
                        @endif

                        <form method="POST" action="{{ url('/home/hero-section/' . $herosection->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('home.hero-section.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
