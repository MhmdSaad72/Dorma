@extends('layouts.master')
@section('title' , 'Dorma - One Page Multipurpose Template')
@section('content')
<!-- ##### Welcome Area Start ##### -->
<section class="hero-section blue-bg relative section-padding" id="home">

    <div class="hero-section-content">

        <div class="container h-100">
            <div class="row h-100 mb-50 align-items-center">

              <!-- Welcome Content -->
              @include('includes.hero-section')

                <div class="col-lg-6 col-md-12">
                    <div class="main-ilustration main-ilustration-5" style="background: url({{ isset($herosection->image) ? asset('storage/' . $herosection->image) : asset('img/core-img/about-5.png')}}) no-repeat center 65%;"></div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ##### Welcome Area End ##### -->

<div class="clearfix"></div>

<!-- ##### Advantages Area Start ##### -->
<section class="section-padding-0-0 relative clearfix" style="margin-top:-50px">
    <div class="container">
        <div class="has-shadow agency-sec">
            <div class="row">
              @foreach ($advantages as $key => $advantage)
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="services-block-four v2">
                    <div class="inner-box">
                      <div class="icon-img-box">
                        <img src="{{ asset('storage/' . $advantage->icon )}}" alt="">
                      </div>
                      <h3><a href="#">{{ $advantage->description }}</a></h3>
                      <div class="text">{{ $advantage->content }}</div>

                      <div class="side-feature-list-item v2 ">
                        <i class="fa fa-check check-mark-icon-font" aria-hidden="true"></i>
                        <div class="foot-c-info">{{ $advantage->feature_1 }}</div>
                      </div>
                      <div class="side-feature-list-item v2 ">
                        <i class="fa fa-check check-mark-icon-font" aria-hidden="true"></i>
                        <div class="foot-c-info">{{ $advantage->feature_2 }}</div>
                      </div>
                      <div class="side-feature-list-item v2 ">
                        <i class="fa fa-check check-mark-icon-font" aria-hidden="true"></i>
                        <div class="foot-c-info">{{ $advantage->feature_3 }}</div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
        </div>

    </div>
</section>
<!-- ##### Advantages Area End ##### -->

<div class="clearfix"></div>
<!-- ##### About Us Area Start ##### -->
@include('includes.about-us')
<!-- ##### About Us Area End ##### -->

<!-- ##### Subscribe Area Start ##### -->
@include('includes.subscribe')
<!-- ##### Subscribe Area End ##### -->

<!-- ##### Services Area Start ##### -->
@include('includes.services')
<!-- ##### Services Area End ##### -->

<!-- ##### Our Features Area Start ##### -->
@include('includes.features')
<!-- ##### Our Features Area End ##### -->

<!-- ##### Informations Area Start ##### -->
@include('includes.informations')
<!-- ##### Informations Area End ##### -->

<!-- ##### FAQ & Timeline Area Start ##### -->
@include('includes.questions')
<!-- ##### FAQ & Timeline Area End ##### -->

<!-- ##### Pricing Area Start ##### -->
@include('includes.pricing-plan')
<!-- ##### Pricing Area End ##### -->

@section('team-content')
  @include('includes.team')
@endsection
@endsection
