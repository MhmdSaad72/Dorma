    <section class="section-padding-100-70 ico-about-bg relative clearfix">
        <div class="container">

            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">{{ $featurehead->sub_title ?? '' }}</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s"> {{ $featurehead->title ?? '' }}</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">{{ $featurehead->description ?? '' }}</p>
            </div>


            <div class="row">
              @foreach ($featurebody as $key => $feature)
                <div class="col-12 col-md-6 col-lg-4">
                  <!-- Content -->
                  <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.2s">
                    <!-- Icon -->
                    <div class="service_icon">
                      <img src="{{ isset($feature->icon) ? asset('storage/' . $feature->icon) : 'img/icons/corporate/1.svg' }}" alt="">
                    </div>
                    <h6>{{ $feature->description ?? '' }}</h6>
                    <p>{{ $feature->content ?? '' }}</p>
                  </div>
                </div>
              @endforeach
            </div>
        </div>
    </section>
