<!-- Welcome Content -->
<div class="col-12 col-lg-6 col-md-12">
    <div class="welcome-content">
        <div class="promo-section">
            <h3 class="special-head gradient-text cyan">{{ $herosection->sub_title ?? '' }}</h3>
        </div>
        <h1 class="w-text wow fadeInUp" data-wow-delay="0.2s">{{ $herosection->title ?? ''}} </h1>
        <p class="g-text wow fadeInUp" data-wow-delay="0.3s">{{ $herosection->description ?? ''}}</p>
        <div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s">
            <a href="{{ route('contact-us-page') }}" class="btn more-btn mr-3">contact us</a>
            <a href="#" class="btn more-btn"> Learn more</a>
        </div>
    </div>
</div>
