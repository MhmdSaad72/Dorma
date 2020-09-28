<div class="faq-timeline-area section-padding-100-85" id="faq">
    <div class="container">
      <div class="section-heading text-center">

          <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
              <span class="gradient-text blue">{{ $question->sub_title ?? '' }}</span>
          </div>
          <h2 class="fadeInUp" data-wow-delay="0.3s">  {{ $question->title ?? '' }}</h2>
          <p class="fadeInUp" data-wow-delay="0.4s">{{ $question->description ?? '' }}</p>
      </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-12">
                <img src="{{ isset($question->image) ? asset('storage/' . $question->image) : 'img/core-img/digital-3.png'}}" alt="" class="center-block img-responsive">
            </div>
            <div class="col-12 col-lg-6 col-md-12">
                <div class="dream-faq-area mt-s ">
                    <dl style="margin-bottom:0">
                      @foreach ($faq_questions as $key => $faq_question)
                        <!-- Single FAQ Area -->
                        <dt class="v2 wave fadeInUp" data-wow-delay="{{'0.' . ($key + 2) . 's'}}">{{ $faq_question->question }}</dt>
                        <dd class="fadeInUp" data-wow-delay="0.3s">
                          <p>{{ $faq_question->answer }}</p>
                        </dd>
                      @endforeach
                    </dl>
                </div>
            </div>

        </div>
    </div>
</div>
