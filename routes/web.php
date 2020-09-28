<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth' , 'role:Administrator' ]], function () {

  Route::get('/dashboard' , 'Pages\\HomeController@dashboard')->name('dashboard');

  // Hero Section
  Route::get('home/hero-section/{id}/edit', 'Home\\HeroSectionController@edit' )->name('hero-section.edit');
  Route::patch('home/hero-section/{id}', 'Home\\HeroSectionController@update' )->name('hero-section.update');

  // Contact Section
  Route::get('home/contact-section/{id}/edit', 'Home\\ContactSectionController@edit' )->name('contact-section.edit');
  Route::patch('home/contact-section/{id}', 'Home\\ContactSectionController@update' )->name('contact-section.update');

  // Testimonial Section
  Route::get('home/testimonial-section/{id}/edit', 'Home\\TestimonialHeadController@edit' )->name('testimonial-section.edit');
  Route::patch('home/testimonial-section/{id}', 'Home\\TestimonialHeadController@update' )->name('testimonial-section.update');
  Route::resource('home/testimonials', 'Home\\TestimonialController');

  // Who We Section
  Route::get('home/who-we', 'Home\\WhoWeController@index' )->name('who-we.index');
  Route::get('home/who-we/{id}/edit', 'Home\\WhoWeController@edit' )->name('who-we.edit');
  Route::patch('home/who-we/{id}', 'Home\\WhoWeController@update' )->name('who-we.update');
  Route::resource('home/who-we-feature', 'Home\\WhoWeFeatureController');

  // Service Section
  Route::get('home/service-head/{id}/edit', 'Home\\ServiceHeadController@edit' )->name('service-head.edit');
  Route::patch('home/service-head/{id}', 'Home\\ServiceHeadController@update' )->name('service-head.update');
  Route::resource('home/service-body', 'Home\\ServiceBodyController');

  // Feature Section
  Route::get('home/feature-head/{id}/edit', 'Home\\FeatureHeadController@edit' )->name('feature-head.edit');
  Route::patch('home/feature-head/{id}', 'Home\\FeatureHeadController@update' )->name('feature-head.update');
  Route::resource('home/feature-body', 'Home\\FeatureBodyController');

  // Side Feature Section
  Route::resource('home/side-feature', 'Home\\SideFeatureController');

  // Navbar Section
  Route::get('home/nav-bar/{id}/edit', 'Home\\NavBarController@edit' )->name('nav-bar.edit');
  Route::patch('home/nav-bar/{id}', 'Home\\NavBarController@update' )->name('nav-bar.update');

  // Subscribe Section
  Route::get('home/subscribe-section/{id}/edit', 'Home\\SubscribeSectionController@edit' )->name('subscribe-section.edit');
  Route::patch('home/subscribe-section/{id}', 'Home\\SubscribeSectionController@update' )->name('subscribe-section.update');
  Route::get('home/subscribe', 'Home\\SubscribeSectionController@subscribes' )->name('subscribe.index');
  Route::post('home/subscribe', 'Home\\SubscribeSectionController@store' )->name('subscribe.store');

  // Question Section
  Route::get('home/question/{id}/edit', 'Home\\QuestionController@edit' )->name('question.edit');
  Route::patch('home/question/{id}', 'Home\\QuestionController@update' )->name('question.update');
  Route::resource('home/faq-question', 'Home\\FaqQuestionController');

  // Pricing Section
  Route::get('home/pricing/{id}/edit', 'Home\\PricingController@edit' )->name('pricing.edit');
  Route::patch('home/pricing/{id}', 'Home\\PricingController@update' )->name('pricing.update');
  Route::resource('home/single-price', 'Home\\SinglePriceController');

  // Team Section
  Route::get('home/team-head/{id}/edit', 'Home\\TeamHeadController@edit' )->name('team-head.edit');
  Route::patch('home/team-head/{id}', 'Home\\TeamHeadController@update' )->name('team-head.update');
  Route::resource('home/team', 'Home\\TeamController');

  // Partner Section
  Route::get('home/partner-head/{id}/edit', 'Home\\PartnerHeadController@edit' )->name('partner-head.edit');
  Route::patch('home/partner-head/{id}', 'Home\\PartnerHeadController@update' )->name('partner-head.update');
  Route::resource('home/partner', 'Home\\PartnerController');

  // Services Block Section
  Route::get('home/main-image/{id}/edit', 'Home\\MainImageController@edit' )->name('main-image.edit');
  Route::patch('home/main-image/{id}', 'Home\\MainImageController@update' )->name('main-image.update');
  Route::resource('home/service-block', 'Home\\ServiceBlockController');

  // User Management
  Route::get('home/users', 'Home\\UserController@index' )->name('users.index');
  Route::get('home/users/{id}/edit', 'Home\\UserController@edit' )->name('users.edit');
  Route::patch('home/users/{id}', 'Home\\UserController@update' )->name('users.update');

  // Contacts Section
  Route::get('home/contacts', 'Home\\ContactUsController@index' )->name('contacts.index');
  Route::post('home/contacts', 'Home\\ContactUsController@store' )->name('contacts.store');
});

/*=============================================================================================================*/

// Website Home Page
Route::get('/' , 'Pages\\HomeController@index')->name('home-page.index');
Route::get('index-demo-1' , 'Pages\\HomeController@index_1')->name('home-page.index_1');
Route::get('index-demo-2' , 'Pages\\HomeController@index_2')->name('home-page.index_2');
Route::get('index-demo-3' , 'Pages\\HomeController@index_3')->name('home-page.index_3');
Route::get('about-us' , 'Pages\\HomeController@about_us')->name('about-us-page');
Route::get('services' , 'Pages\\HomeController@services')->name('services-page');
Route::get('faq' , 'Pages\\HomeController@faq')->name('faq-page');
Route::get('pricing' , 'Pages\\HomeController@pricing')->name('pricing-page');
Route::get('contact-us' , 'Pages\\HomeController@contact_us')->name('contact-us-page');
Route::get('/chart/new-vistors' , 'Pages\\HomeController@chartNewVistors')->name('newVistors');


Auth::routes();
