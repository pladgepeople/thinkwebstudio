@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

  @section('nav')navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link on no-full @endsection
@section('content')

<!-- start page title section -->
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{asset('images/lamp.png')}}');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-15px-bottom">SERVIZI</h1>
                    <!-- end page title -->
                    <!-- start sub title -->
                    <span class="text-white opacity6 alt-font">We provide innovative solutions to expand business</span>
                    <!-- end sub title -->
                </div>
            </div>
        </div>
    </div>
  </section>

{{-- <section class="no-padding one-third-screen position-relative wow fadeIn">
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
                <div class="swiper-slide cover-background one-third-screen" style="background-image:url('{{asset('images/dude-sign.png')}}');"></div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background one-third-screen" style="background-image:url('{{asset('images/lamp.png')}}');"></div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background one-third-screen" style="background-image:url('{{asset('images/cloks.png')}}');"></div>
                <!-- end slider item -->
            </div>
            <div class="swiper-pagination swiper-auto-pagination display-none"></div>
        </div>
</section>  --}}
    <!-- end page title section -->
   
     <!-- start feature box section -->
     <section class="wow fadeIn" id="section-down" >
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-10px-bottom text-uppercase text-small">Unlimited customization possibilities</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600">Pixel perfect design and clear code delivered to your projects</h5>
                </div>
            </div>
            <div class="row">
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin xs-text-center">
                    <div class="margin-ten-bottom overflow-hidden image-hover-style-1 sm-margin-20px-bottom">
                        <a href="services-modern.html"><img src="http://placehold.it/750x500" alt=""/></a>
                    </div>
                    <a href="services-modern.html" class="alt-font margin-5px-bottom display-block text-extra-dark-gray font-weight-600 text-uppercase text-small">E-Commerce Solutions</a>
                    <p class="width-95 sm-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                    <a href="services-modern.html" class="text-uppercase alt-font text-extra-dark-gray font-weight-600 text-extra-small">View E-Commerce Solutions <i class="fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2" aria-hidden="true"></i></a>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin xs-text-center" data-wow-delay="0.2s">
                    <div class="margin-ten-bottom overflow-hidden image-hover-style-1 sm-margin-20px-bottom">
                        <a href="services-modern.html"><img src="http://placehold.it/750x500" alt=""/></a>
                    </div>
                    <a href="services-modern.html" class="alt-font margin-5px-bottom display-block text-extra-dark-gray font-weight-600 text-uppercase text-small">Web Development</a>
                    <p class="width-95 sm-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                    <a href="services-modern.html" class="text-uppercase alt-font text-extra-dark-gray font-weight-600 text-extra-small">View Web Development <i class="fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2" aria-hidden="true"></i></a>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp last-paragraph-no-margin xs-text-center" data-wow-delay="0.4s">
                    <div class="margin-ten-bottom overflow-hidden image-hover-style-1 sm-margin-20px-bottom">
                        <a href="services-modern.html"><img src="http://placehold.it/750x500" alt=""/></a>
                    </div>
                    <a href="services-modern.html" class="alt-font margin-5px-bottom display-block text-extra-dark-gray font-weight-600 text-uppercase text-small">Marketing Strategy</a>
                    <p class="width-95 sm-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                    <a href="services-modern.html" class="text-uppercase alt-font text-extra-dark-gray font-weight-600 text-extra-small">View Marketing Strategy <i class="fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2" aria-hidden="true"></i></a>
                </div>                    
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- end  feature box section -->
    <!-- start feature box section -->
    <section class="no-padding wow fadeIn bg-extra-dark-gray">
        <div class="container-fluid">
            <div class="row equalize sm-equalize-auto">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cover-background sm-height-500px xs-height-350px wow fadeInLeft"  style="background-image:url('{{asset('images/object.png')}}');"><div class="hidden-sm height-350px"></div></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                    <div class="padding-twelve-all md-padding-ten-all pull-left sm-no-padding-lr xs-padding-50px-tb">
                        <div class="col-2-nth">
                            <!-- start feature box item -->
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-target text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-white margin-5px-bottom alt-font">Branding Design</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem standard dummy text.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-desktop text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-white margin-5px-bottom alt-font">Web Design</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem standard dummy text.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-puzzle text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-white margin-5px-bottom alt-font">Web Development</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem standard dummy text.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-tools text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-white margin-5px-bottom alt-font">Graphics Design</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem standard dummy text.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 md-margin-30px-bottom last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-briefcase text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-white margin-5px-bottom alt-font">Social Marketing</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem standard dummy text.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative ">
                                    <i class="icon-basket text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-white margin-5px-bottom alt-font">e-Commerce Solutions</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem standard dummy text.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- end feature box section -->
    <!-- start tabs section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-10px-bottom text-uppercase text-small">The best digital solutions</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600">A creative agency specialized in brand strategy and digital creation</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 center-col text-center no-padding tab-style1" id="animated-tab">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs margin-50px-bottom xs-no-margin-bottom"> 
                        <li class="nav active"><a href="#tab6_sec1" data-toggle="tab" class="xs-min-height-inherit xs-no-padding"><span><i class="icon-chat icon-medium text-medium-gray margin-10px-bottom display-block"></i></span><span class="alt-font text-medium-gray text-uppercase text-small">01. Discussion</span></a></li>
                        <li class="nav"><a href="#tab6_sec2" data-toggle="tab" class="xs-min-height-inherit xs-no-padding"><span><i class="icon-tools icon-medium text-medium-gray margin-10px-bottom display-block"></i></span><span class="alt-font text-medium-gray text-uppercase text-small">02. Creative Concept</span></a></li>
                        <li class="nav"><a href="#tab6_sec3" data-toggle="tab" class="xs-min-height-inherit xs-no-padding"><span><i class="icon-megaphone icon-medium text-medium-gray margin-10px-bottom display-block"></i></span><span class="alt-font text-medium-gray text-uppercase text-small">03. Production</span></a></li>
                        <li class="nav"><a href="#tab6_sec4" data-toggle="tab" class="xs-min-height-inherit xs-no-padding"><span><i class="icon-heart icon-medium text-medium-gray margin-10px-bottom display-block"></i></span><span class="alt-font text-medium-gray text-uppercase text-small">04. Happy Client</span></a></li>
                    </ul>
                    <!-- end tab navigation -->
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div id="tab6_sec1" class="center-col tab-pane fade in active"> 
                            <div class="tab-pane fade in">
                                <div class="equalize sm-equalize-auto">
                                    <div class="col-md-4 text-left sm-margin-30px-bottom">
                                        <img src="http://placehold.it/900x650" alt=""/>
                                    </div>
                                    <div class="col-md-4 text-left sm-margin-30px-bottom">
                                        <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 border-all border-width-2 border-color-extra-light-gray display-table">
                                            <div class="display-table-cell vertical-align-middle">
                                                <span class="text-medium font-weight-600 alt-font text-uppercase margin-10px-bottom display-block text-extra-dark-gray">01. Discussion</span>
                                                <span class="alt-font text-medium-gray text-medium">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum typesetting has dummy text.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-left">
                                        <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 bg-light-gray display-table">
                                            <div class="display-table-cell vertical-align-middle">
                                                <span class="text-extra-dark-gray alt-font margin-10px-bottom display-inline-block text-medium">Don’t worry, you’re in safe hands</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.</p>
                                                <a href="about-us-classic.html" class="btn btn-dark-gray btn-very-small text-extra-small">About Company</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div id="tab6_sec2" class="center-col tab-pane fade in"> 
                            <div class="tab-pane fade in"> 
                                <div class="equalize sm-equalize-auto">
                                    <div class="col-md-4 text-left sm-margin-30px-bottom">
                                        <img src="http://placehold.it/900x650" alt=""/>
                                    </div>
                                    <div class="col-md-4 text-left sm-margin-30px-bottom">
                                        <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 border-all border-width-2 border-color-extra-light-gray display-table">
                                            <div class="display-table-cell vertical-align-middle">
                                                <span class="text-medium font-weight-600 alt-font text-uppercase margin-10px-bottom display-block text-extra-dark-gray">02. Creative Concept</span>
                                                <span class="alt-font text-medium-gray text-medium">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum typesetting has dummy text.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-left">
                                        <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 bg-light-gray display-table">
                                            <div class="display-table-cell vertical-align-middle">
                                                <span class="text-extra-dark-gray alt-font margin-10px-bottom display-inline-block text-medium">We are a service digital agency</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.</p>
                                                <a href="about-us-classic.html" class="btn btn-dark-gray btn-very-small text-extra-small">About Company</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div id="tab6_sec3" class="center-col tab-pane fade in"> 
                            <div class="tab-pane fade in"> 
                                <div class="equalize sm-equalize-auto">
                                    <div class="col-md-4 text-left sm-margin-30px-bottom">
                                        <img src="http://placehold.it/900x650" alt=""/>
                                    </div>
                                    <div class="col-md-4 text-left sm-margin-30px-bottom">
                                        <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 border-all border-width-2 border-color-extra-light-gray display-table">
                                            <div class="display-table-cell vertical-align-middle">
                                                <span class="text-medium font-weight-600 alt-font text-uppercase margin-10px-bottom display-block text-extra-dark-gray">03. Production</span>
                                                <span class="alt-font text-medium-gray text-medium">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum typesetting has dummy text.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-left">
                                        <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 bg-light-gray display-table">
                                            <div class="display-table-cell vertical-align-middle">
                                                <span class="text-extra-dark-gray alt-font margin-10px-bottom display-inline-block text-medium">Delivering beautiful products</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.</p>
                                                <a href="about-us-classic.html" class="btn btn-dark-gray btn-very-small text-extra-small">About Company</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div id="tab6_sec4" class="center-col tab-pane fade in"> 
                            <div class="tab-pane fade in"> 
                                <div class="equalize sm-equalize-auto">
                                    <div class="col-md-4 text-left sm-margin-30px-bottom">
                                        <img src="http://placehold.it/900x650" alt=""/>
                                    </div>
                                    <div class="col-md-4 text-left sm-margin-30px-bottom">
                                        <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 border-all border-width-2 border-color-extra-light-gray display-table">
                                            <div class="display-table-cell vertical-align-middle">
                                                <span class="text-medium font-weight-600 alt-font text-uppercase margin-10px-bottom display-block text-extra-dark-gray">04. Happy Client</span>
                                                <span class="alt-font text-medium-gray text-medium">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum typesetting has dummy text.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-left">
                                        <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 bg-light-gray display-table">
                                            <div class="display-table-cell vertical-align-middle">
                                                <span class="text-extra-dark-gray alt-font margin-10px-bottom display-inline-block text-medium">We believe in growth</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.</p>
                                                <a href="about-us-classic.html" class="btn btn-dark-gray btn-very-small text-extra-small">About Company</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end tab content section -->
                </div>
                <!-- end tab -->
            </div>
        </div>
    </section>
    <!-- end tabs section -->        
   <!-- start information section -->
   <section class="no-padding wow fadeIn">
    <div class="container-fluid">
        <div class="row equalize xs-equalize-auto">
            <div class="col-md-4 col-sm-6 col-xs-12 display-table bg-black feature-box-1 xs-no-padding-lr xs-text-center">
                <div class="display-table-cell vertical-align-middle padding-eighteen-all md-padding-ten-all xs-padding-30px-tb xs-padding-20px-lr">
                    <span class="alt-font text-medium-gray margin-10px-bottom display-block">Build perfect websites</span>
                    <h6 class="text-light-gray alt-font">Unlimited power and customization possibilities</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a class="btn btn-transparent-light-gray btn-small border-radius-4" href="services-modern.html"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i>Read More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 display-table bg-extra-dark-gray feature-box-1 xs-no-padding-lr xs-text-center">
                <div class="display-table-cell vertical-align-middle padding-eighteen-all md-padding-ten-all xs-padding-30px-tb xs-padding-20px-lr">
                    <span class="alt-font text-medium-gray margin-10px-bottom display-block">Unique digital experiences</span>
                    <h6 class="text-light-gray alt-font">Pixel perfect design and clear code delivered to you</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a class="btn btn-transparent-light-gray btn-small border-radius-4" href="services-modern.html"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i>Read More</a>
                </div>
            </div>
            <div class="col-md-4 c col-sm-12 col-xs-12 cover-background feature-box-1 xs-height-350px" style="background: url({{asset('images/books.png')}})"></div>
        </div>
    </div>
</section>
<!-- end information section -->

    <!-- start pricing box section  -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="pricing-box-style1">
                    <!-- start price item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center sm-margin-30px-bottom wow fadeInUp">
                        <div class="pricing-box border-all border-width-1 border-color-extra-light-gray">
                            <div class="padding-55px-all bg-very-light-gray sm-padding-30px-all xs-padding-40px-all">
                                <!-- start price title -->
                                <div class="pricing-title text-center">
                                    <i class="ti-user icon-large text-deep-pink display-inline-block padding-30px-all bg-white box-shadow-light border-radius-100 margin-25px-bottom"></i>
                                </div>
                                <!-- end price title -->
                                <!-- start price price -->
                                <div class="pricing-price">
                                    <span class="alt-font text-extra-dark-gray font-weight-600 text-uppercase">Standard</span>
                                    <h4 class="text-extra-dark-gray alt-font font-weight-600 no-margin-bottom">$250</h4>
                                    <div class="text-extra-small text-uppercase alt-font margin-5px-top">Per Month</div>
                                </div>
                                <!-- end price price -->
                            </div>
                            <!-- start price features -->
                            <div class="padding-45px-all pricing-features sm-padding-20px-all xs-padding-30px-all">
                                <ul class="list-style-11">
                                    <li>1 GB Photos</li>
                                    <li>Secure Online Transfer</li>
                                    <li>Unlimited Styles</li>
                                    <li>Customer Service</li>
                                    <li>Manual Backup</li>
                                </ul>
                                <!-- start price action -->
                                <div class="pricing-action margin-35px-top sm-no-margin-top">
                                    <a href="contact-us-simple.html" class="btn btn-dark-gray btn-small text-extra-small">Choose Plan</a>                                        
                                </div>
                                <!-- end price action -->
                            </div>
                            <!-- end price features -->
                        </div>
                    </div>
                    <!-- end price item -->
                    <!-- start price item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                        <div class="pricing-box border-all border-width-1 border-color-extra-light-gray">
                            <div class="padding-55px-all bg-very-light-gray sm-padding-30px-all xs-padding-40px-all">
                                <!-- start price title -->
                                <div class="pricing-title text-center">
                                    <i class="ti-briefcase icon-large text-deep-pink display-inline-block padding-30px-all bg-white box-shadow-light border-radius-100 margin-25px-bottom"></i>
                                </div>
                                <!-- end price title -->
                                <!-- start price price -->
                                <div class="pricing-price">
                                    <span class="alt-font text-extra-dark-gray font-weight-600 text-uppercase">Business</span>
                                    <h4 class="text-extra-dark-gray alt-font font-weight-600 no-margin-bottom">$350</h4>
                                    <div class="text-extra-small text-uppercase alt-font margin-5px-top">Per Month</div>
                                </div>
                                <!-- end price price -->
                            </div>
                            <!-- start price features -->
                            <div class="padding-45px-all pricing-features sm-padding-20px-all xs-padding-30px-all">
                                <ul class="list-style-11">
                                    <li>2 GB Photos</li>
                                    <li>Secure Online Transfer</li>
                                    <li>Unlimited Styles</li>
                                    <li>Customer Service</li>
                                    <li>Manual Backup</li>
                                </ul>
                                <!-- start price action -->
                                <div class="pricing-action margin-35px-top sm-no-margin-top">
                                    <a href="{{url('/contact')}}" class="btn btn-dark-gray btn-small text-extra-small">Choose Plan</a>                                        
                                </div>
                                <!-- end price action -->
                            </div>
                            <!-- end price features -->
                        </div>
                    </div>
                    <!-- end price item -->
                    <!-- start price item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-box border-all border-width-1 border-color-extra-light-gray">
                            <div class="padding-55px-all bg-very-light-gray sm-padding-30px-all xs-padding-40px-all">
                                <!-- start price title -->
                                <div class="pricing-title text-center">
                                    <i class="ti-world icon-large text-deep-pink display-inline-block padding-30px-all bg-white box-shadow-light border-radius-100 margin-25px-bottom"></i>
                                </div>
                                <!-- end price title -->
                                <!-- start price price -->
                                <div class="pricing-price">
                                    <span class="alt-font text-extra-dark-gray font-weight-600 text-uppercase">Ultimate</span>
                                    <h4 class="text-extra-dark-gray alt-font font-weight-600 no-margin-bottom">$450</h4>
                                    <div class="text-extra-small text-uppercase alt-font margin-5px-top">Per Month</div>
                                </div>
                                <!-- end price price -->
                            </div>
                            <!-- start price features -->
                            <div class="padding-45px-all pricing-features sm-padding-20px-all xs-padding-30px-all">
                                <ul class="list-style-11">
                                    <li>Unlimited Photos</li>
                                    <li>Secure Online Transfer</li>
                                    <li>Unlimited Styles</li>
                                    <li>Customer Service</li>
                                    <li>Auto Backup</li>
                                </ul>
                                <!-- start price action -->
                                <div class="pricing-action margin-35px-top sm-no-margin-top">
                                    <a href="contact-us-simple.html" class="btn btn-dark-gray btn-small text-extra-small">Choose Plan</a>                                        
                                </div>
                                <!-- end price action -->
                            </div>
                            <!-- end price features -->
                        </div>
                    </div>
                    <!-- end price item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end price box section -->  


    <!-- start footer --> 
    @include('layouts.footer')
    <!-- end footer -->

@endsection

@push('script')
<!-- skin specific script-->


 {{-- <script src="{{ asset('/react') }}/js/skins/min/ring.min.js"></script> --}}
 @endpush