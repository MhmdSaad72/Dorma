@extends('adminlte::page')

@section('title', 'Pricing Plan')

@section('content_header')
<h1>Pricing Plan</h1>
@stop

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">

                    <a href="{{ url('/home/single-price') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th> Type </th>
                                    <td> {{ $singleprice->type }} </td>
                                </tr>
                                <tr>
                                    <th> Price </th>
                                    <td> {{ $singleprice->price != 0 ? '$'. $singleprice->price : 'Free' }} </td>
                                </tr>
                                <tr>
                                    <th> Period </th>
                                    <td> {{ $singleprice->period }} </td>
                                </tr>
                                <tr>
                                    <th> Detail 1 </th>
                                    <td> {{ $singleprice->detail_1 }} </td>
                                </tr>
                                <tr>
                                    <th> Detail 2 </th>
                                    <td> {{ $singleprice->detail_2 }} </td>
                                </tr>
                                <tr>
                                    <th> Detail 3 </th>
                                    <td> {{ $singleprice->detail_3 }} </td>
                                </tr>
                                <tr>
                                    <th> Detail 4 </th>
                                    <td> {{ $singleprice->detail_4 }} </td>
                                </tr>
                                <tr>
                                    <th> Detail 5 </th>
                                    <td> {{ $singleprice->detail_5 }} </td>
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
