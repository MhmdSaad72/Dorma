  <section class="about-us-area special section-padding-0-70 clearfix " >
      <div class="container">
          <div class="row align-items-center">

              <div class="services-column col-lg-6 col-xs-12">
                @foreach ($informations as $key => $info)
                  <!--Services Block Four-->
                  <div class="services-block-four how">
                    <div class="inner-box">
                      <div class="step">1</div>
                      <h3><a class="normal" href="#">{{ $info->title ?? '' }}</a></h3>
                      <div class="text">{{ $info->description ?? '' }}</div>

                    </div>
                  </div>
                @endforeach

              </div>
              <div class="col-12 col-lg-6 no-padding-right">
                  <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                      <img class="img-responsive center-block mb-30" alt="" src="{{ isset($info_image->image) ? asset('storage/' . $info_image->image) : 'img/core-img/digital-4.png'}}">
                  </div>
              </div>

          </div>
      </div>
  </section>
