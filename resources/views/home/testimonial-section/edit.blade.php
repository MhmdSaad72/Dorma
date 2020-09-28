@extends('adminlte::page')

@section('title', 'Edit Testimonial')

@section('content_header')
    <h1>Edit Testimonial</h1>
    <p class="text-muted">Edit all the information exists in testimonial section</p>
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

                        <form method="POST" action="{{ url('/home/testimonial-section/' . $testimonial->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('home.testimonial-section.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
