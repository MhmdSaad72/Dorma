@extends('adminlte::page')

@section('title', 'Feature')

@section('content_header')
<h1>Feature</h1>
@stop

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('/home/who-we') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    @if ($whowefeature->count() < 6)
                      <a href="{{ url('/home/who-we-feature/create') }}" class="btn btn-success btn-sm" title="Add New WhoWeFeature">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                      </a>
                    @endif


                    <br />
                    <br />
                    @if (session('flash_message'))
                    <ul class="alert alert-success">
                        {{session('flash_message')}}
                    </ul>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($whowefeature as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <a href="{{ url('/home/who-we-feature/' . $item->id . '/edit') }}" title="Edit WhoWeFeature"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/home/who-we-feature' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete WhoWeFeature" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $whowefeature->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
