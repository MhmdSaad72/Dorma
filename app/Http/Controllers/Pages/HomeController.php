<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\NavBar;
use App\Home\HeroSection;
use App\Home\SideFeature;
use App\Home\WhoWe;
use App\Home\WhoWeFeature;
use App\Home\SubscribeSection;
use App\Home\ServiceHead;
use App\Home\ServiceBody;
use App\Home\FeatureHead;
use App\Home\FeatureBody;
use App\Home\MainImage;
use App\Home\ServiceBlock;
use App\Home\Question;
use App\Home\FaqQuestion;
use App\Home\Pricing;
use App\Home\SinglePrice;
use App\Home\TeamHead;
use App\Home\Team;
use App\Home\PartnerHead;
use App\Home\Partner;
use App\Home\TestimonialHead;
use App\Home\Testimonial;
use App\Page\Subscribe;
use App\User;
use \Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*===================================
       Display Basic Home Page
    =====================================*/
    public function index()
    {
      $navbar = NavBar::first();
      return view('pages.home.index' , compact('navbar'));
    }


    /*===================================
       Display Dashboard for admin panel
    =====================================*/
    public function dashboard()
    {
      $users = User::whereHas('roles' , function($query){
              $query->where('name', '!=' , 'Administrator');
          })->count();
      $services = ServiceBody::all()->count();
      $pricing = SinglePrice::all()->count();
      $team_members = Team::all()->count();
      $services = ServiceBody::all()->count();
      $subscribes = Subscribe::all()->count();
      $team_member = Team::all();
      return view('admin.dashboard' , compact('users' , 'services' , 'team_members' , 'pricing' , 'subscribes' , 'team_member'));
    }

    /*===================================
       Display Home page For (Demo one)
    =====================================*/
    public function index_1()
    {
      $navbar = NavBar::first();
      $herosection = HeroSection::first();
      $whowe = WhoWe::first();
      $subscribe = SubscribeSection::first();
      $servicehead = ServiceHead::first();
      $featurehead = FeatureHead::first();
      $info_image = MainImage::first();
      $question = Question::first();
      $pricing = Pricing::first();
      $team_head = TeamHead::first();
      $partner_head = PartnerHead::first();
      $advantages = SideFeature::all();
      $whowe_features = WhoWeFeature::all();
      $servicebody = ServiceBody::all();
      $featurebody = FeatureBody::all();
      $informations = ServiceBlock::all();
      $faq_questions = FaqQuestion::all();
      $prices = SinglePrice::all();
      $team_members = Team::all();
      $partners = Partner::all();
      return view('pages.home.index-demo-1' , compact('navbar' , 'herosection' , 'advantages' , 'whowe' ,
       'whowe_features' , 'subscribe' , 'servicehead' , 'servicebody' , 'featurehead' , 'featurebody' , 'info_image' ,
       'informations' , 'faq_questions' , 'question' , 'pricing' , 'prices' , 'team_head' , 'team_members' ,
       'partner_head' , 'partners'
     ));
    }


    /*===================================
       Display Home page For (Demo Two)
    =====================================*/
    public function index_2()
    {
      $navbar = NavBar::first();
      $herosection = HeroSection::first();
      $whowe = WhoWe::first();
      $subscribe = SubscribeSection::first();
      $servicehead = ServiceHead::first();
      $featurehead = FeatureHead::first();
      $info_image = MainImage::first();
      $question = Question::first();
      $pricing = Pricing::first();
      $team_head = TeamHead::first();
      $partner_head = PartnerHead::first();
      $whowe_features = WhoWeFeature::all();
      $servicebody = ServiceBody::all();
      $featurebody = FeatureBody::all();
      $informations = ServiceBlock::all();
      $faq_questions = FaqQuestion::all();
      $prices = SinglePrice::all();
      $team_members = Team::all();
      $partners = Partner::all();
      return view('pages.home.index-demo-2' , compact('navbar' , 'herosection'  , 'whowe' , 'whowe_features' ,
       'subscribe' , 'servicehead' , 'servicebody' , 'featurehead' , 'featurebody' , 'info_image' ,
       'informations' , 'faq_questions' , 'question' , 'pricing' , 'prices' , 'team_head' , 'team_members' ,
       'partner_head' , 'partners'
     ));
    }


    /*===================================
       Display Home page For (Demo three)
    =====================================*/
    public function index_3()
    {
      $navbar = NavBar::first();
      $herosection = HeroSection::first();
      $whowe = WhoWe::first();
      $subscribe = SubscribeSection::first();
      $servicehead = ServiceHead::first();
      $featurehead = FeatureHead::first();
      $info_image = MainImage::first();
      $question = Question::first();
      $pricing = Pricing::first();
      $team_head = TeamHead::first();
      $partner_head = PartnerHead::first();
      $whowe_features = WhoWeFeature::all();
      $servicebody = ServiceBody::all();
      $featurebody = FeatureBody::all();
      $informations = ServiceBlock::all();
      $faq_questions = FaqQuestion::all();
      $prices = SinglePrice::all();
      $team_members = Team::all();
      $partners = Partner::all();
      return view('pages.home.index-demo-3' , compact('navbar' , 'herosection' , 'whowe' , 'whowe_features' ,
       'subscribe' , 'servicehead' , 'servicebody' , 'featurehead' , 'featurebody' , 'info_image' ,
       'informations' , 'faq_questions' , 'question' , 'pricing' , 'prices' , 'team_head' , 'team_members' ,
       'partner_head' , 'partners'
     ));
    }


    /*===================================
           Display About us page
    =====================================*/
    public function about_us()
    {
      $navbar = NavBar::first();
      $whowe = WhoWe::first();
      $subscribe = SubscribeSection::first();
      $team_head = TeamHead::first();
      $whowe_features = WhoWeFeature::all();
      $partner_head = PartnerHead::first();
      $team_members = Team::all();
      $partners = Partner::all();

      return view('pages.home.about-us' , compact('navbar' , 'whowe' , 'whowe_features' , 'subscribe' , 'team_head' ,
       'team_members' , 'partner_head' , 'partners'
    ));
    }


    /*===================================
           Display Services page
    =====================================*/
    public function services()
    {
      $navbar = NavBar::first();
      $servicehead = ServiceHead::first();
      $featurehead = FeatureHead::first();
      $testimonial = TestimonialHead::first();
      $servicebody = ServiceBody::all();
      $featurebody = FeatureBody::all();
      $testimonials = Testimonial::all();

      return view('pages.home.services' , compact('servicehead' , 'featurehead' , 'servicebody' , 'navbar' , 'featurebody' , 'testimonial' , 'testimonials'));
    }


    /*===================================
           Display FAQ page
    =====================================*/
    public function faq()
    {
      $navbar = NavBar::first();
      $question = Question::first();
      $info_image = MainImage::first();
      $informations = ServiceBlock::all();
      $faq_questions = FaqQuestion::all();
      $featurehead = FeatureHead::first();
      $featurebody = FeatureBody::all();

      return view('pages.home.faq' , compact('question' , 'featurehead' , 'faq_questions' , 'navbar' , 'featurebody' ,
      'info_image' , 'informations' ));
    }


    /*===================================
           Display Pricing page
    =====================================*/
    public function pricing()
    {
      $navbar = NavBar::first();
      $pricing = Pricing::first();
      $testimonial = TestimonialHead::first();
      $prices = SinglePrice::all();
      $testimonials = Testimonial::all();
      return view('pages.home.pricing' , compact('pricing' , 'prices' , 'navbar' , 'testimonial' , 'testimonials'));
    }


    /*===================================
           Display Contact Us page
    =====================================*/
    public function contact_us()
    {
      $navbar = NavBar::first();
      return view('pages.home.contact-us' , compact('navbar'));
    }

    /*==================================
         Display chart for new vistors
    =====================================*/
    public function chartNewVistors()
    {
        $dayOfTheWeek = [] ; $newVistors = [] ;

        for ($i=0; $i <7 ; $i++) {
            $dayOfTheWeek[] = Carbon::now()->subDays($i)->format('D');
            $subscribes = Subscribe::all();
            $count = 0 ;
            foreach ($subscribes as $key => $value) {
              if (Carbon::parse($value->created_at)->format('Y-m-d') == Carbon::now()->subDays($i)->format('Y-m-d')) {
                $count += 1 ;
              }
            }
            $newVistors[] = $count;
        }
        return response()->json([ 'dayOfTheWeek' => $dayOfTheWeek , 'newVistors' => $newVistors ]);
    }

}
