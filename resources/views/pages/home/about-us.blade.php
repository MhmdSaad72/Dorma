@extends('layouts.master')
@section('title' , $navbar->about_us ?? 'About Us')
@section('content')

<!-- ##### Welcome Area Start ##### -->
<div class="breadcumb-area">
    <!-- breadcumb content -->
    <div class="breadcumb-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">{{ $navbar->about_us ?? '' }}</h2>
                        <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                            <li class="breadcrumb-item"><a href="{{ route('home-page.index_1') }}">{{ $navbar->home ?? '' }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $navbar->about_us ?? '' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Welcome Area End ##### -->

<!-- ##### About Us Area Start ##### -->
@include('includes.about-us')
<!-- ##### About Us Area End ##### -->

<!-- ##### Subscribe Area Start ##### -->
@include('includes.subscribe')
<!-- ##### Subscribe Area End ##### -->

@section('team-content')
  @include('includes.team')
@endsection

@endsection
