<section class="pricing section-padding-100-70" style="background: #edf6fd" id="pricing">

    <div class="container">
        <div class="section-heading text-center">

            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                <span class="gradient-text blue">{{ $pricing->sub_title ?? '' }}</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s">{{ $pricing->title ?? '' }}</h2>
            <p class="fadeInUp" data-wow-delay="0.4s">{{ $pricing->description ?? '' }}</p>
        </div>
        <div class="row no-gutters">
          @foreach ($prices as $key => $price)
            <!-- Single Table -->
            <div class="col-lg-4 col-md-6">
              <div class="single_price_table_content text-center wow fadeInUp" data-wow-delay="0.2s" >
                <div class="price_table_text">
                  <h5>{{ $price->type }}</h5>
                  <h1>{{ $price->price != 0 ? '$' . $price->price : 'Free' }}</h1>
                  <p>{{ $price->period }}</p>
                </div>
                <div class="table_text_details">
                  <p>{{ $price->detail_1 }}</p>
                  <p>{{ $price->detail_2 }}</p>
                  <p>{{ $price->detail_3 }} </p>
                  <p>{{ $price->detail_4 }} </p>
                  <p>{{ $price->detail_5 }}</p>
                </div>
                <div class="table_btn mt-50">
                  <a href="#" class="btn more-btn">Start</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>

</section>
