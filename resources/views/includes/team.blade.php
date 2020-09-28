<div class="striples-bg">
  <section class="our_team_area section-padding-100-70 clearfix" id="team">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-heading text-center">

                      <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                          <span>{{ $team_head->sub_title ?? '' }}</span>
                      </div>
                      <h2 class="fadeInUp" data-wow-delay="0.3s">{{ $team_head->title ?? '' }}</h2>
                      <p class="fadeInUp" data-wow-delay="0.4s">{{ $team_head->description ?? '' }} </p>
                  </div>
              </div>
          </div>

          <div class="row">
            @foreach ($team_members as $key => $member)
              <!-- Single Team Member -->
              <div class="col-12 col-sm-6 col-lg-3">
                <div class="our-team ico-team">
                  <div class="team_img">
                    <img src="{{ isset($member->image) ? asset('storage/' . $member->image) : 'img/team-img/member1.png'}}" class="mt-30 width-80" alt="chef-1">
                    <ul class="social">
                      <li><a href="{{ $member->facebook }}"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="{{ $member->twitter }}"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="{{ $member->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                  <div class="team-content">
                    <h4 class="title">{{ $member->name }}</h4>
                    <span class="post">{{ $member->position }}</span>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
      </div>
  </section>
  <!-- ##### Team Area End ##### -->

  <section class="our-partners clearfix section-padding-0-70">
        <div class="container">
            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span>{{ $partner_head->sub_title ?? '' }}</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s">{{ $partner_head->title ?? '' }}</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">{{ $partner_head->description ?? '' }}</p>
            </div>
            <div class="row">
              @foreach ($partners as $key => $partner)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="team-member ">
                    <div class="team-img">
                      <img class="img-responsive center-block" src="{{ isset($partner->logo) ? asset('storage/' . $partner->logo) : 'img/partners/1.png'}}" alt="">
                    </div>
                  </div>
                </div>
              @endforeach


            </div>
        </div>
    </section>
</div>
