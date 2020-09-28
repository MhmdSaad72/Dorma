@extends('layouts.master')
@section('title' , 'Dorma - One Page Multipurpose Template')
@section('content')
<!-- ##### Welcome Area Start ##### -->
<section class="hero-section header3 relative section-padding" id="home" style="background: url('{{ isset($herosection->image) ? asset('storage/' . $herosection->image) : 'img/bg-img/bg-3.png' }}') no-repeat center;background-size: cover;">
    <div class="hero-section-content">

        <div class="container h-100">
            <div class="row h-100 mb-50 align-items-center">

                <!-- Welcome Content -->
                @include('includes.hero-section')
                <div class="col-lg-6 col-md-12"> </div>

            </div>
        </div>
    </div>
</section>
<!-- ##### Welcome Area End ##### -->

<div class="clearfix"></div>

<!-- ##### Our Features Area Start ##### -->
@include('includes.features')
<!-- ##### Our Features Area End ##### -->

<!-- ##### Informations Area Start ##### -->
@include('includes.informations')
<!-- ##### Informations Area End ##### -->

<!-- ##### Subscribe Area Start ##### -->
@include('includes.subscribe')
<!-- ##### Subscribe Area End ##### -->

<!-- ##### Services Area Start ##### -->
@include('includes.services')
<!-- ##### Services Area End ##### -->

<!-- ##### About Us Area Start ##### -->
@include('includes.about-us')
<!-- ##### About Us Area End ##### -->

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
