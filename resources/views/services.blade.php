@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

  @section('nav')navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link on no-full @endsection
@section('content')

<!-- start page title section -->
<section class="no-padding one-third-screen position-relative wow fadeIn">
        <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 display-table one-third-screen page-title-large">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <!-- start sub title -->
                        <span class="display-block text-white opacity6 margin-10px-bottom alt-font">We provide innovative solutions to expand business</span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white font-weight-600 width-55 sm-width-80 xs-width-100 center-col no-margin-bottom">SERVIZI</h1>
                        <!-- end page title -->
                    </div>
                </div>
                <div class="down-section text-center"><a href="#section-down" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white bg-deep-pink padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
            </div>
        </div>
        <div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100">
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background one-third-screen" style="background-image:url('{{asset('images/banner2.jpg')}}');"></div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background one-third-screen" style="background-image:url('{{asset('images/banner1.jpg')}}');"></div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background one-third-screen" style="background-image:url('{{asset('images/circuito.jpg')}}');"></div>
                <!-- end slider item -->
            </div>
            <div class="swiper-pagination swiper-auto-pagination display-none"></div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start hero section -->
    <section class="no-padding-bottom wow fadeIn" id="section-down">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9 center-col margin-six-bottom text-center last-paragraph-no-margin">
                    <div class="alt-font text-deep-pink margin-10px-bottom text-uppercase text-small">We combine design, thinking and craft</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600">Beautiful and easy to use UI, professional animations and drag & drop feature</h5>
                    <p class="width-80 center-col display-inline-block xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid wow fadeIn">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="http://placehold.it/1000x501" alt=""/>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->
    <!-- start feature box section -->
    {{-- <section class="parallax wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('http://placehold.it/1920x1080');">
        <div class="container">
            <div class="row">
                <!-- start feature box item -->
                <div class="col-md-4 last-paragraph-no-margin sm-margin-30px-bottom wow fadeInRight">
                    <div class="padding-50px-all md-padding-40px-all xs-padding-30px-all bg-white box-shadow text-center">
                        <div class="padding-35px-all display-inline-block border-radius-100 margin-40px-bottom xs-margin-30px-bottom bg-light-gray"><img src="images/image-icon4.png" alt=""/></div>
                        <div class="text-small alt-font text-medium-gray text-uppercase">Creative People</div>
                        <span class="alt-font text-extra-dark-gray font-weight-600 display-block margin-20px-bottom">Creative Thinking & Design</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text.</p>
                    </div>                    
                </div>
                <!-- end feature box block -->
                <!-- start feature box item -->
                <div class="col-md-4 last-paragraph-no-margin sm-margin-30px-bottom wow fadeInRight" data-wow-delay="0.2s">
                    <div class="padding-50px-all md-padding-40px-all xs-padding-30px-all bg-white box-shadow text-center">
                        <div class="padding-35px-all display-inline-block border-radius-100 margin-40px-bottom xs-margin-30px-bottom bg-light-gray"><img src="images/image-icon2.png" alt=""/></div>
                        <div class="text-small alt-font text-medium-gray text-uppercase">Digital Marketing</div>
                        <span class="alt-font text-extra-dark-gray font-weight-600 display-block margin-20px-bottom">Digital Branding & Marketing</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>                    
                </div>
                <!-- end feature box block -->
                <!-- start feature box item -->
                <div class="col-md-4 last-paragraph-no-margin wow fadeInRight" data-wow-delay="0.4s">
                    <div class="padding-50px-all md-padding-40px-all xs-padding-30px-all bg-white box-shadow text-center">
                        <div class="padding-35px-all display-inline-block border-radius-100 margin-40px-bottom xs-margin-30px-bottom bg-light-gray"><img src="images/image-icon3.png" alt=""/></div>
                        <div class="text-small alt-font text-medium-gray text-uppercase">Amazing Analytics</div>
                        <span class="alt-font text-extra-dark-gray font-weight-600 display-block margin-20px-bottom">Search Analytics & Marketing</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>                    
                </div>
                <!-- end feature box block -->
            </div>
        </div>
    </section> --}}
    <!-- end feature box section -->
    <!-- start feature box section -->
    <section class="wow fadeIn md-padding-two-lr">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9 center-col margin-eight-bottom text-center last-paragraph-no-margin">
                    <div class="alt-font text-deep-pink margin-10px-bottom text-uppercase text-small">Find more creative ideas for your projects</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600">Build perfect websites, Beautifully handcrafted templates for your website</h5>                        
                </div>
            </div>
            <div class="row equalize">
                <!-- start feature box item -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 margin-six-bottom md-margin-six-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                    <div class="feature-box-5 position-relative">
                        <i class="icon-desktop text-medium-gray icon-medium"></i>
                        <div class="feature-content">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Web Development</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 margin-six-bottom md-margin-six-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                    <div class="feature-box-5 position-relative">
                        <i class="icon-pricetags text-medium-gray icon-medium"></i>
                        <div class="feature-content">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Logo and Identity</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item-->
                <!-- start feature box item-->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 margin-six-bottom md-margin-six-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                    <div class="feature-box-5 position-relative">
                        <i class="icon-pictures text-medium-gray icon-medium"></i>
                        <div class="feature-content">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Graphics Design</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item-->
                <!-- start feature box item-->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sm-margin-six-bottom md-margin-six-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                    <div class="feature-box-5 position-relative ">
                        <i class="icon-mobile text-medium-gray icon-medium"></i>
                        <div class="feature-content">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">App Development</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item-->
                <!-- start feature box item-->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                    <div class="feature-box-5 position-relative">
                        <i class="icon-target text-medium-gray icon-medium"></i>
                        <div class="feature-content">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Social Marketing</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item-->
                <!-- start feature box item-->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                    <div class="feature-box-5 position-relative">
                        <i class="icon-tools text-medium-gray icon-medium"></i>
                        <div class="feature-content">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Content Creation</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item-->
            </div>
        </div>
    </section>
    <!-- end feature box section -->
    <!-- start parallax section -->
    <section class="parallax big-section wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1080');">
        <div class="opacity-extra-medium bg-black"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center center-col">
                    <a href="https://www.youtube.com/watch?v=nrJtHemSPW4" class="popup-youtube"><img src="images/icon-play.png" class="width-30" alt=""/></a>
                    <h5 class="alt-font text-white">Unique. Powerful. Creative.</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end parallax section -->
    <!-- start feature box section -->
    <section class="wow fadeIn last-paragraph-no-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9 center-col margin-eight-bottom text-center last-paragraph-no-margin">
                    <div class="alt-font text-deep-pink margin-10px-bottom text-uppercase text-small">Technology Expert Analysis</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600">We provide high quality and cost effective offshore web development services</h5>                        
                </div>
            </div>
            <div class="row">
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom wow fadeInUp">
                    <div class="feature-box-16 xs-width-100">
                        <img src="http://placehold.it/750x950" alt="">
                        <div class="feature-box-content text-center">
                            <div class="opacity-full-dark bg-extra-dark-gray"></div>
                            <div class="display-table height-100 width-100 position-relative">
                                <div class="vertical-align-middle display-table-cell padding-15px-lr padding-20px-tb">
                                    <div class="text-white alt-font text-medium margin-15px-bottom">We believe in creativity</div> 
                                    <p class="width-85 center-col text-extra-light-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom wow fadeInUp" data-wow-delay="0.25s">
                    <div class="feature-box-16 xs-width-100">
                        <img src="http://placehold.it/750x950" alt="">
                        <div class="feature-box-content text-center text-white">
                            <div class="opacity-full-dark bg-extra-dark-gray"></div>
                            <div class="display-table height-100 width-100 position-relative">
                                <div class="vertical-align-middle display-table-cell padding-15px-lr padding-20px-tb">
                                    <div class="text-white alt-font text-medium margin-15px-bottom">We believe in quality</div> 
                                    <p class="width-85 center-col text-extra-light-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-box-16 xs-width-100">
                        <img src="http://placehold.it/750x950" alt="">
                        <div class="feature-box-content text-center text-white">
                            <div class="opacity-full-dark bg-extra-dark-gray"></div>
                            <div class="display-table height-100 width-100 position-relative">
                                <div class="vertical-align-middle display-table-cell padding-15px-lr padding-20px-tb">
                                    <div class="text-white alt-font text-medium margin-15px-bottom">We believe in relation</div> 
                                    <p class="width-85 center-col text-extra-light-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div> 
        </div>
    </section>
    <!-- end feature box section -->
    <!-- start feature box section  -->
    <section class="bg-extra-dark-gray">
        <div class="container-fluid">
            <div class="row">
                <!-- start feature box item -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin md-margin-30px-bottom wow fadeInLeft" data-wow-delay="0.6s">
                    <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray md-no-border-right xs-padding-15px-lr">
                        <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">01</h3>
                        <span class="alt-font display-block text-uppercase text-small">Save your Time</span>
                        <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Best Services</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin md-margin-30px-bottom wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray md-no-border-right xs-padding-15px-lr">
                        <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">02</h3>
                        <span class="alt-font display-block text-uppercase text-small">All you Need</span>
                        <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Professional</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin sm-margin-30px-bottom wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray md-no-border-right xs-padding-15px-lr">
                        <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">03</h3>
                        <span class="alt-font display-block text-uppercase text-small">Dedicated Supports</span>
                        <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Support</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin wow fadeInLeft">
                    <div class="padding-40px-lr text-center xs-padding-15px-lr">
                        <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">04</h3>
                        <span class="alt-font display-block text-uppercase text-small">Creative Thinking</span>
                        <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Digital Marketing</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- end feature box section  -->
    <!-- start feature box section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="images/image-right.png" alt=""/>
                </div>
            </div>
        </div>
        <div class="container margin-one-top md-margin-three-top sm-no-margin-top">  
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 sm-text-center sm-margin-40px-bottom xs-margin-30px-bottom">
                    <h5 class="text-extra-dark-gray font-weight-600 alt-font no-margin">The world's most powerful wordpress website builder</h5>
                </div>
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-6 col-xs-12 sm-text-center xs-margin-30px-bottom wow fadeIn last-paragraph-no-margin" data-wow-delay="0.2s">
                    <div class="col-md-3 text-center xs-no-padding-lr">
                        <h2 class="text-light-gray alt-font letter-spacing-minus-3 no-margin-bottom sm-margin-10px-bottom">01</h2>
                    </div>
                    <div class="col-md-9 margin-5px-top sm-text-center xs-no-padding-lr">
                        <span class="alt-font text-medium text-extra-dark-gray margin-5px-bottom display-block">Modern Framework</span>
                        <p class="width-80 md-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-6 col-xs-12 sm-text-center wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                    <div class="col-md-3 text-center xs-no-padding-lr">
                        <h2 class="text-light-gray alt-font letter-spacing-minus-3 no-margin-bottom sm-margin-10px-bottom">02</h2>
                    </div>
                    <div class="col-md-9 margin-5px-top sm-text-center xs-no-padding-lr">
                        <span class="alt-font text-medium text-extra-dark-gray margin-5px-bottom display-block">Live Website Builder</span>
                        <p class="width-80 md-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- start feature box section -->
    <!-- start subscribe section -->
    <section class="bg-light-gray wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8 center-col col-sm-12 text-center">
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray">Subscribe to our newsletter</h4>
                    <p class="width-65 center-col sm-width-100"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                    <form id="subscribenewsletterform" action="javascript:void(0)" method="post" class="position-relative">
                        <div id="success-subscribe-newsletter" class="no-margin-lr"></div>
                        <div class="input-group margin-40px-tb">
                            
                            <input name="email" id="email" data-email="required" type="text" placeholder="* Email Address" class="extra-big-input border-none" />
                            <div class="input-group-btn">
                                <button id="button-subscribe-newsletter" type="submit" class="btn btn-large bg-white text-deep-pink"><i class="ti-email icon-small  no-margin "></i></button>
                             
                            </div>
                        </div>
                    </form>
                    <span class="text-extra-small">* We don't share your personal info with anyone. Check out our <a href="#" class=" text-decoration-underline">Privacy Policy</a> for more information.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end subscribe section -->

    <!-- start footer --> 
    @include('layouts.footer')
    <!-- end footer -->

@endsection