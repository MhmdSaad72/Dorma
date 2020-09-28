@extends('adminlte::page')

@section('title', 'Team Member')

@section('content_header')
<h1>Team Member</h1>
@stop

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">

                    <a href="{{ url('/home/team') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th> Image </th>
                                    <td><img src="{{ asset('storage/' . $team->image)}}" style="max-width:60px">  </td>
                                </tr>
                                <tr>
                                    <th> Name </th>
                                    <td> {{ $team->name }} </td>
                                </tr>
                                <tr>
                                    <th> Position </th>
                                    <td> {{ $team->position }} </td>
                                </tr>
                                <tr>
                                    <th> Facebook </th>
                                    <td> {{ $team->facebook }} </td>
                                </tr>
                                <tr>
                                    <th> Twitter </th>
                                    <td> {{ $team->twitter }} </td>
                                </tr>
                                <tr>
                                    <th> Linkedin </th>
                                    <td> {{ $team->linkedin }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
