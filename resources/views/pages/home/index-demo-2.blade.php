@extends('layouts.master')
@section('title' , 'Dorma - One Page Multipurpose Template')
@section('content')
<!-- ##### Welcome Area Start ##### -->
<section class="hero-section header2 relative section-padding" id="home">

      <div class="hero-section-content">

          <div class="container h-100">
              <div class="row h-100 mb-50 align-items-center">

                  <!-- Welcome Content -->
                  @include('includes.hero-section')
                  <div class="col-lg-6 col-md-12">
                      <img src="{{ isset($herosection->image) ? asset('storage/' . $herosection->image) : 'img/core-img/banner2.png' }}" class="mt-s" alt="">
                  </div>
              </div>
          </div>
      </div>
  </section>
<!-- ##### Welcome Area End ##### -->

<div class="clearfix"></div>

<!-- ##### Services Area Start ##### -->
@include('includes.services')
<!-- ##### Services Area End ##### -->

<!-- ##### About Us Area Start ##### -->
@include('includes.about-us')
<!-- ##### About Us Area End ##### -->

<!-- ##### Subscribe Area Start ##### -->
@include('includes.subscribe')
<!-- ##### Subscribe Area End ##### -->

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
