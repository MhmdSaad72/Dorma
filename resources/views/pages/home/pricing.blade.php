@extends('layouts.master')
@section('title' , $navbar->pricing ?? 'Pricing')
@section('content')

<!-- ##### Welcome Area Start ##### -->
<div class="breadcumb-area">
    <!-- breadcumb content -->
    <div class="breadcumb-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">{{ $navbar->pricing ?? '' }}</h2>
                        <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                            <li class="breadcrumb-item"><a href="{{ route('home-page.index_1') }}">{{ $navbar->home ?? '' }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $navbar->pricing ?? '' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Welcome Area End ##### -->

<!-- ##### Pricing Area Start ##### -->
@include('includes.pricing-plan')
<!-- ##### Pricing Area End ##### -->

<!-- ##### Our Testimonial Area Start ##### -->
@include('includes.testimonial')
<!-- ##### Our Testimonial Area End ##### -->

@endsection
