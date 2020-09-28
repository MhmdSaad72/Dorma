<section class="about-us-area hero-bg section-padding-100 clearfix" style="background: url({{ isset($subscribe->image) ? asset('storage/' . $subscribe->image) : 'img/bg-img/hero-bg.png'}}) no-repeat center;">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-lg-6 col-sm-12">
                <div class="who-we-contant">
                    <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                        <span class="gradient-text cyan">{{ $subscribe->sub_title ?? '' }}</span>
                    </div>
                    <h4 class="w-text bold fadeInUp" data-wow-delay="0.3s">{{ $subscribe->title ?? '' }}</h4>
                    <p class="g-text fadeInUp" data-wow-delay="0.5s">{{ $subscribe->description ?? '' }}</p>
                    <form action="{{route('subscribe.store')}}" method="post">
                      {{ csrf_field() }}
                      <div class="subscribe-section has-shadow mt-30">
                        <div class="input-wrapper">
                          <i class="fa fa-home"></i>
                          <input type="email" name="email" placeholder="{{ $subscribe->placeholder ?? '' }}">
                        </div>
                        <button type="submit" class="btn more-btn orange mt-sm-15 ml-15">subscribe</button>
                      </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
