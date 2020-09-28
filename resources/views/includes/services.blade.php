<section class=" fuel-features features section-padding-100 clearfix" id="services">

    <div class="container has-shadow">
        <div class="section-heading text-center">

            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                <span class="gradient-text blue">{{ $servicehead->sub_title ?? '' }}</span>
            </div>
            <h2 class="wow fadeInUp" data-wow-delay="0.3s">{{ $servicehead->title ?? ''}}</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">{{ $servicehead->description ?? ''}}</p>
        </div>
        <div class="row align-items-center">
          @foreach ($servicebody as $key => $service)
            <div class="col-lg-4 col-md-6 col-sm-12 mt-md-30">
              <div class="services-block-four v2">
                <div class="inner-box">
                  <div class="icon-img-box">
                    <img src="{{ isset($service->icon) ? asset('storage/' . $service->icon) : 'img/icons/1.png'}}" alt="">
                  </div>
                  <h3><a href="#">{{ $service->description ?? '' }}</a></h3>
                  <div class="text">{{ $service->content ?? '' }}</div>
                </div>
                <a href="#" class="icon_foot">
                  <i class="fa fa-long-arrow-right"></i>
                </a>
              </div>
            </div>
          @endforeach
        </div>
</section>
