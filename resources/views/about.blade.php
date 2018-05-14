@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

  @section('nav')navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link on no-full @endsection
@section('content')


 <!-- start page title section -->
 <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{asset('images/a.gif')}}');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">About Us</h1>
                    <span class="text-white opacity6 alt-font">Lorem Ipsum is simply dummy text printing</span>
                    <!-- end page title --> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->  


        <!-- start story section -->
        <section class="wow fadeIn animated animated">
            <div class="container"> 
                <div class="row equalize sm-equalize-auto">
                    <div class="col-md-5 col-sm-12 col-xs-12 text-center sm-margin-30px-bottom wow fadeInLeft">
                        <div class="display-table width-100 height-100">
                            <div class="display-table-cell vertical-align-middle width-100 height-100">
                                <img src="http://placehold.it/900x650" alt="" class="border-radius-6 width-100">
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-7 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="display-table width-100 height-100">
                            <div class="display-table-cell vertical-align-middle padding-twelve-lr sm-text-center sm-no-padding width-100">
                                <span class="text-deep-pink alt-font margin-10px-bottom display-inline-block text-medium">Don’t worry, you’re in safe hands.</span>
                                <h6 class="alt-font text-extra-dark-gray">We are committed to our customers’ success from start to finish. Our input helps make their solutions.</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is printing and typesetting simply dummy text.</p>
                                <a href="services-simple.html" class="btn btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-full bg-extra-light-gray margin-seven-bottom margin-eight-top"></div>
                <!-- start feature box -->
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-15px-bottom xs-text-center wow fadeInUp">
                        <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-lr pull-left xs-margin-15px-bottom">
                            <i class="icon-desktop text-medium-gray icon-extra-medium top-6"></i>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12 no-padding">
                            <span class="margin-5px-bottom text-extra-dark-gray alt-font display-block font-weight-600">Digital Solutions</span>
                            <p class="width-75 md-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-15px-bottom xs-text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-lr pull-left xs-margin-15px-bottom">
                            <i class="icon-book-open text-medium-gray icon-extra-medium top-6"></i>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12 no-padding">
                            <span class="margin-5px-bottom text-extra-dark-gray alt-font display-block font-weight-600">SEO Marketing</span>
                            <p class="width-75 md-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-lr pull-left xs-margin-15px-bottom">
                            <i class="icon-gift text-medium-gray icon-extra-medium top-6"></i>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12 no-padding">
                            <span class="margin-5px-bottom text-extra-dark-gray alt-font display-block font-weight-600">Creative Strategy</span>
                            <p class="width-75 md-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
                <!-- start feature box -->
            </div>
        </section>
        <!-- end story section -->
        <!-- start feature box  -->
        <section class="bg-extra-dark-gray wow fadeIn md-padding-two-lr">
            <div class="container">
                <div class="row">
                    <!-- feature box item-->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 feature-box-1 xs-margin-30px-bottom wow fadeInRight">
                        <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom alt-font">
                            <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300">01.</h3>
                            <span class="text-large line-height-22 padding-20px-left sm-padding-15px width-100 display-table-cell vertical-align-middle">Creativity.<br> Discover talent.</span>
                        </div>
                        <p class="width-90 md-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                        <div class="clearfix"></div>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top"></div>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 feature-box-1 xs-margin-30px-bottom  wow fadeInRight" data-wow-delay="0.2s">
                        <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom alt-font">
                            <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300">02.</h3>
                            <span class="text-large line-height-22 padding-20px-left width-100 display-table-cell vertical-align-middle">Technology.<br> Expert analysis.</span>
                        </div>
                        <p class="width-90 md-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                        <div class="clearfix"></div>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top"></div>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 feature-box-1  wow fadeInRight" data-wow-delay="0.4s">
                        <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom alt-font">
                            <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300">03.</h3>
                            <span class="text-large line-height-22 padding-20px-left width-100 display-table-cell vertical-align-middle">Discover.<br> Explore work.</span>
                        </div>
                        <p class="width-90 md-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                        <div class="clearfix"></div>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top"></div>
                    </div>
                    <!-- end feature box item-->
                </div>
            </div>
        </section>
        <!-- end feature box -->
        <!-- start section -->
        <section class="wow fadeIn last-paragraph-no-margin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 text-center center-col margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom">
                        <span class="alt-font text-deep-pink text-medium margin-5px-bottom display-block">We are delivering beautiful digital products</span>
                        <h6 class="font-weight-400 text-extra-dark-gray alt-font">Wide range of web and software development services across the world</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 no-padding margin-eight-bottom sm-margin-30px-bottom">
                        <div class="col-md-8 col-sm-8 col-xs-12 xs-margin-15px-bottom wow fadeInLeft" data-wow-delay="0.2s">
                            <img src="http://placehold.it/1000x700" alt="" class="border-radius-6">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-delay="0.4s">
                            <img src="http://placehold.it/500x730" alt="" class="border-radius-6 xs-width-100">
                        </div>
                    </div>
                </div>
                <div class="row equalize sm-equalize-auto">
                    <div class="col-md-4 display-table sm-margin-15px-bottom">
                        <div class="display-table-cell vertical-align-middle">
                            <span class="text-extra-large text-extra-dark-gray alt-font width-90 display-block">We're fortunate to work with fantastic clients from across the globe in over 11 countries on design and branding.</span>
                        </div>
                    </div>
                    <div class="col-md-4 display-table sm-margin-15px-bottom">
                        <div class="display-table-cell vertical-align-middle">
                            <strong class="font-weight-600 text-extra-dark-gray margin-5px-bottom display-block alt-font">Our approach</strong>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        </div>
                    </div>
                    <div class="col-md-4 display-table">
                        <div class="display-table-cell vertical-align-middle">
                            <strong class="font-weight-600 text-extra-dark-gray margin-5px-bottom display-block alt-font">Our Mission</strong>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start slider section  -->
        <section id="clients" class="parallax wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('http://placehold.it/1920x1200');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container text-center">
                <div class="row">    
                    <div class="swiper-slider-clients swiper-container white-move">
                        <div class="swiper-wrapper">
                            <!-- start slide item--><div class="swiper-slide text-center"><a href="http://envato.com"><img src="images/clients-logo1.png" alt=""></a></div><!-- end slide item -->
                            <!-- start slide item--><div class="swiper-slide text-center"><a href="http://woocommerce.com"><img src="images/clients-logo2.png" alt=""></a></div><!-- end slide item -->
                            <!-- start slide item--><div class="swiper-slide text-center"><a href="http://wordpress.com"><img src="images/clients-logo3.png" alt=""></a></div><!-- end slide item -->
                            <!-- start slide item--><div class="swiper-slide text-center"><a href="http://magento.com"><img src="images/clients-logo4.png" alt=""></a></div><!-- end slide item -->
                            <!-- start slide item--><div class="swiper-slide text-center"><a href="http://envato.com"><img src="images/clients-logo1.png" alt=""></a></div><!-- end slide item -->
                            <!-- start slide item--><div class="swiper-slide text-center"><a href="http://woocommerce.com"><img src="images/clients-logo2.png" alt=""></a></div><!-- end slide item -->
                            <!-- start slide item--><div class="swiper-slide text-center"><a href="http://wordpress.com"><img src="images/clients-logo3.png" alt=""></a></div><!-- end slide item -->
                            <!-- start slide item--><div class="swiper-slide text-center"><a href="http://magento.com"><img src="images/clients-logo4.png" alt=""></a></div><!-- end slide item -->
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- end slider section -->
             
           
        <!-- start team section -->
            @include('module.team')
        <!-- end team section -->
    
        <!-- start divider -->
        <div class="container"><div class="divider-full bg-extra-light-gray"></div></div>
        <!-- end divider -->


        <!-- start footer --> 
        @include('layouts.footer')
        <!-- end footer -->
@endsection

@push('script')
 <!-- skin specific script-->


 <script src="{{ asset('/react') }}/js/skins/min/fuzzy-saturation.min.js"></script>
 @endpush