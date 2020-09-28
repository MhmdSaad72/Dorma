@extends('layouts.master')
@section('title' , 'Multipurpose Template')
@section('content')
<!-- ##### Welcome Area Start ##### -->
<section class="hero-section header2 relative section-padding" id="home">

    <div class="hero-section-content">

        <div class="container h-100">
            <div class="row h-100 mb-50 align-items-center">

                <!-- Welcome Content -->
                <div class="col-12 col-lg-8 offset-lg-2 col-md-12">
                    <div class="welcome-content text-center">
                        <div class="promo-section">
                            <h3 class="special-head gradient-text cyan">Version 1.0 is Now Available and more updates are coming</h3>
                        </div>
                        <h1 class="w-text wow fadeInUp" data-wow-delay="0.2s">Dorma - Creative Corporate Business & Digital Agency Template</h1>
                        <p class="g-text wow fadeInUp" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.</p>
                        <div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s">
                            <a href="#" class="btn more-btn mr-3">Choose demo</a>
                            <a href="#" class="btn more-btn"> Buy Now!</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ##### Welcome Area End ##### -->
<section class="demo section-padding-100-0" id="demo">
    <div class="container">
        <div class="section-heading text-center">
            <h2 class="wow fadeInUp" data-wow-delay="0.3s">Choose a demo</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Our Template will be a perfect Template for presenting your Website. This template is insane and got all you need in one place</p>
        </div>
        <div class="row">


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="demo-item">
                    <a href="{{ route('home-page.index_1') }}" target="_blank"><img src="img/demos/demo-1.png" alt="demo" class="img-responsive"></a>
                    <div class="preview-btn-wrapper text-center">
                        <a href="{{ route('home-page.index_1') }}" class="preview-demo" target="_blank">View Demo 1<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="demo-item">
                    <a href="{{ route('home-page.index_2') }}" target="_blank"><img src="img/demos/demo-2.png" alt="demo" class="img-responsive"></a>
                    <div class="preview-btn-wrapper text-center">
                        <a href="{{ route('home-page.index_2') }}" class="preview-demo" target="_blank">View Demo 2<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="demo-item">
                    <a href="{{ route('home-page.index_3') }}" target="_blank"><img src="img/demos/demo-3.png" alt="demo" class="img-responsive"></a>
                    <div class="preview-btn-wrapper text-center">
                        <a href="{{ route('home-page.index_3') }}" class="preview-demo" target="_blank">View Demo 3<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="demo section-padding-70-70" id="demo">
    <div class="container">
        <div class="section-heading text-center">
            <h2 class=" fadeInUp" data-wow-delay="0.3s">Inner Pages</h2>
            <p class=" fadeInUp" data-wow-delay="0.4s">Our Template will be a perfect platform for presenting your Datascience Agency. This Landing Page comes in great and clean design</p>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="demo-item">
                    <a href="{{ route('about-us-page') }}" target="_blank"><img src="img/demos/demo-7.png" alt="demo" class="img-responsive"></a>
                    <div class="preview-btn-wrapper text-center">
                        <a href="{{ route('about-us-page') }}" class="preview-demo" target="_blank">View demo <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="demo-item">
                    <a href="{{ route('services-page') }}" target="_blank"><img src="img/demos/demo-8.png" alt="demo" class="img-responsive"></a>
                    <div class="preview-btn-wrapper text-center">
                        <a href="{{ route('services-page') }}" class="preview-demo" target="_blank">View demo<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="demo-item">
                    <a href="{{ route('faq-page') }}" target="_blank"><img src="img/demos/demo-9.png" alt="demo" class="img-responsive"></a>
                    <div class="preview-btn-wrapper text-center">
                        <a href="{{ route('faq-page') }}" class="preview-demo" target="_blank">View demo<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>7

<div class="clearfix"></div>
@endsection
