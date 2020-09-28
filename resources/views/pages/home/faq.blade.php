@extends('layouts.master')
@section('title' , $navbar->faq ?? 'FAQ')
@section('content')

<!-- ##### Welcome Area Start ##### -->
<div class="breadcumb-area">
    <!-- breadcumb content -->
    <div class="breadcumb-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">{{ $navbar->faq ?? '' }}</h2>
                        <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                            <li class="breadcrumb-item"><a href="{{ route('home-page.index_1') }}">{{ $navbar->home ?? '' }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $navbar->faq ?? '' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Welcome Area End ##### -->

<!-- ##### FAQ & Timeline Area Start ##### -->
@include('includes.questions')
<!-- ##### FAQ & Timeline Area End ##### -->

<!-- ##### Informations Area Start ##### -->
@include('includes.informations')
<!-- ##### Informations Area End ##### -->

<!-- ##### Our Features Area Start ##### -->
@include('includes.features')
<!-- ##### Our Features Area End ##### -->

@endsection
