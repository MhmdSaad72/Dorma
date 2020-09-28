<?php

use Illuminate\Database\Seeder;
use App\Home\HeroSection;
use App\Home\ContactSection;
use App\Home\FaqQuestion;
use App\Home\FeatureBody;
use App\Home\FeatureHead;
use App\Home\NavBar;
use App\Home\Partner;
use App\Home\PartnerHead;
use App\Home\Pricing;
use App\Home\Question;
use App\Home\ServiceBlock;
use App\Home\MainImage;
use App\Home\ServiceBody;
use App\Home\ServiceHead;
use App\Home\SideFeature;
use App\Home\SinglePrice;
use App\Home\SubscribeSection;
use App\Home\Team;
use App\Home\TeamHead;
use App\Home\Testimonial;
use App\Home\TestimonialHead;
use App\Home\WhoWe;
use App\Home\WhoWeFeature;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.';


        // Menu Titles
        NavBar::create([
          'logo' => '',
          'logo_name' => 'Dorma',
          'home' => 'Home',
          'home_style_1' => 'Home Style 1',
          'home_style_2' => 'Home Style 2',
          'home_style_3' => 'Home Style 3',
          'about_us' => 'About Us',
          'services' => 'Services',
          'faq' => 'FAQ',
          'pricing' => 'Pricing',
          'contact' => 'Contact'
        ]);

        //  Hero-Section Data
        HeroSection::create([
          'sub_title' => 'Business grow strategy is our mission',
          'title' => 'Let’s Create Something new and awesome Togeather ',
          'description' => $description,
        ]);

        //  Advantages Data
        SideFeature::create([
          'description' => 'Simplicity and Choice',
          'content' => $description,
          'feature_1' => 'All PHP Apps Supported',
          'feature_2' => 'Innovative Control Panel',
          'feature_3' => 'Unlimited Applications',
        ]);

        SideFeature::create([
          'description' => 'Worry-Free Experience',
          'content' => $description,
          'feature_1' => 'All PHP Apps Supported',
          'feature_2' => 'Innovative Control Panel',
          'feature_3' => 'Unlimited Applications',
        ]);

        SideFeature::create([
          'description' => 'Performance That Scale',
          'content' => $description,
          'feature_1' => 'All PHP Apps Supported',
          'feature_2' => 'Innovative Control Panel',
          'feature_3' => 'Unlimited Applications',
        ]);

        // ABout Us Data
        WhoWe::create([
          'sub_title' => ' WORKING COSELY TOGEATHER ',
          'title' => 'Our platform takes away the hard process of creating your website',
          'description' => $description,
        ]);
        for ($i=0; $i <6 ; $i++) {
          WhoWeFeature::create([
            'title' => 'Managed Sucre Backups',
            'who_id' => 1,
          ]);
        }

        // Subscribe Section Data
        SubscribeSection::create([
          'sub_title' => ' CONTACT US NOW IF YOU HAVE ANY QUESTION ',
          'title' => 'Get in Touch with us so Easy.',
          'placeholder' => 'Enter Your Mail',
          'description' => $description,
        ]);

        // Services Data
        ServiceHead::create([
          'sub_title' => ' OUR SERVICES ',
          'title' => 'What we Offer',
          'description' => $description,
        ]);

        for ($i=0; $i <6 ; $i++) {
          ServiceBody::create([
            'description' => 'Investment Advise',
            'content' => $description,
          ]);
        }

        // Features Data
        FeatureHead::create([
          'sub_title' => ' OUR FEATURES ',
          'title' => ' Why Choose Us',
          'description' => $description,
        ]);

        for ($i=0; $i <3 ; $i++) {
          FeatureBody::create([
            'description' => 'Go Live in Minutes',
            'content' => $description,
          ]);
        }

        // FAQ Data
        MainImage::create([
          'image' => 'image',
        ]);
        for ($i=0; $i <3 ; $i++) {
          ServiceBlock::create([
            'title' => ' Register / Login to our Platform',
            'description' => $description,
          ]);
        }

        for ($i=0; $i <4 ; $i++) {
          FaqQuestion::create([
            'question' => 'What are the business advisory company?',
            'answer' => $description,
          ]);
        }

        Question::create([
          'sub_title' => ' REPEATED QUESTIONS ',
          'title' => ' Frequently Questions',
          'description' => $description,
        ]);

        // Pricing Plans Data
        Pricing::create([
          'sub_title' => ' PRICING PLANS ',
          'title' => ' Our Pricing Plans',
          'description' => $description,
        ]);

        for ($i=0; $i <3 ; $i++) {
          SinglePrice::create([
            'type' => 'Begginer',
            'price' => '0',
            'period' => 'Always',
            'detail_1' => '250GB Bandwidth',
            'detail_2' => '08 Email Account',
            'detail_3' => 'Unlimited Database ',
            'detail_4' => '10GB Free Disk ',
            'detail_5' => '24/7 Support '
          ]);
        }


        // Team Data
        TeamHead::create([
          'sub_title' => ' Our Creative Team ',
          'title' => 'Our Awesome Team',
          'description' => $description,
        ]);

        for ($i=0; $i <4 ; $i++) {
          Team::create([
            'name' => 'Monica Ashker',
            'position' => ' Web Developer',
            'facebook' => 'http://www.facebook.com',
            'twitter' => 'http://www.twitter.com',
            'linkedin' => 'http://www.linkedin.com',
          ]);
        }


        // Partners Data
        PartnerHead::create([
          'sub_title' => ' Our Main Partners ',
          'title' => 'Our powerful Partners',
          'description' => $description,
        ]);

        for ($i=0; $i <6 ; $i++) {
          Partner::create([
            'logo' => 'logo',
          ]);
        }


        // Testimonials Data
        TestimonialHead::create([
          'sub_title' => '  OUR TESTIMONIALS  ',
          'title' => 'Loved By Our Clients',
          'description' => $description,
        ]);

        for ($i=0; $i <3 ; $i++) {
          Testimonial::create([
            'name' => 'Sunny Khan',
            'position' => 'Head of Design,Company CEO',
            'description' => $description,
          ]);
        }

        // Contact Us Data
        ContactSection::create([
          'sub_title' => ' CONTACT US ',
          'title' => 'Contact With Us',
          'description' => $description,
        ]);

    }
}
