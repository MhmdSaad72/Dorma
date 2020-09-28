<!-- ##### About Us Area Start ##### -->
    <section class="special section-padding-100-70 clearfix" id="about">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
                    <div class="welcome-meter wow fadeInUp mb-30" data-wow-delay="0.7s">
                        <img src="{{ isset($whowe->image) ? asset('storage/' . $whowe->image) : 'img/core-img/digital-5.png'}}"  alt="">
                    </div>
                </div>

                <div class="col-12 col-lg-6 offset-lg-0">
                    <div class="who-we-contant">
                        <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                            <span class="gradient-text blue">{{ $whowe->sub_title ?? ''}}</span>
                        </div>
                        <h4 class="fadeInUp" data-wow-delay="0.3s">{{ $whowe->title ?? ''}}</h4>
                        <p class="fadeInUp" data-wow-delay="0.4s">{{ $whowe->description ?? ''}}</p>
                        <div class="list-wrap align-items-center mb-20">
                            <div class="row">
                              @foreach ($whowe_features as $key => $feature)
                                <div class="col-md-6">
                                  <div class="side-feature-list-item">
                                    <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                    <div class="foot-c-info">{{ $feature->title ?? ''}}</div>
                                  </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->
