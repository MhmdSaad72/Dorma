@extends('adminlte::page')

@section('title', 'Advantage')

@section('content_header')
<h1>Advantage</h1>
@stop

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">

                    <a href="{{ url('/home/side-feature') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th> Icon </th>
                                    <td> <img src="{{ asset('storage/' . $sidefeature->icon) }}" style="max-width:40px"> </td>
                                </tr>
                                <tr>
                                    <th> Description </th>
                                    <td> {{ $sidefeature->description }} </td>
                                </tr>
                                <tr>
                                    <th> Content </th>
                                    <td> {{ $sidefeature->content }} </td>
                                </tr>
                                <tr>
                                    <th> Feature 1 </th>
                                    <td> {{ $sidefeature->feature_1 }} </td>
                                </tr>
                                <tr>
                                    <th> Feature 2 </th>
                                    <td> {{ $sidefeature->feature_2 }} </td>
                                </tr>
                                <tr>
                                    <th> Feature 3 </th>
                                    <td> {{ $sidefeature->feature_3 }} </td>
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
