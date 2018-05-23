@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

  @section('nav')navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link on no-full @endsection
@section('content')



 <!-- start page title section -->
 <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5"  style="padding-top:0px !important;">
    
    
    <div id="tunnel" class="tunnel">
       
    </div>
</section>
<!-- end page title section -->  

 <!-- start section -->
 <section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 text-left sm-margin-30px-bottom sm-padding-80px-lr xs-padding-15px-lr sm-text-center wow fadeIn">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase width-80 md-width-100">We create designs and technology</h5>
                <div class="separator-line-verticle-extra-small bg-extra-dark-gray width-50 sm-width-70 sm-center-col margin-30px-bottom sm-margin-20px-bottom"></div>
                <p class="width-95 md-width-100">Thinkwebstudio nasce con un unico obiettivo creare siti dal contenuto professionale, ottimizzato per i motori di ricerca e visibile anche da dispositivi Mobili.
                Siamo in grado di offrire servizi a 360°, realizzando Siti web moderni e veloci, grafiche di impatto, prodotti innovativi in tutta Italia. </p>
               
                <a class="btn btn-small btn-dark-gray font-weight-700" href="">i nostri progetti</a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                <img src="{{asset('images/creative.jpg')}}" alt=""/>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
 <!-- start feature box section -->
 <section class="no-padding wow fadeIn bg-light-gray">
    <div class="container-fluid">
        <div class="row equalize sm-equalize-auto">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cover-background sm-height-500px xs-height-350px wow fadeInLeft" style="background-image:url('{{asset('images/tavolo.jpeg')}}');"><div class="xs-height-400px"></div></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                <div class="padding-ten-all pull-left md-padding-ten-all sm-no-padding-lr xs-padding-50px-tb xs-no-padding-lr">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-four-bottom sm-margin-40px-bottom xs-margin-30px-bottom xs-no-padding-lr">
                        <h5 class="alt-font text-extra-dark-gray sm-text-center sm-width-70 sm-margin-lr-auto xs-width-100 text-uppercase font-weight-700 sm-no-margin-bottom">Some reasons to work together</h5>
                    </div>
                    <div class="col-2-nth xs-text-center">
                        <!-- start feature box item-->
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom md-no-padding-right md-margin-30px-bottom xs-margin-30px-bottom xs-no-padding last-paragraph-no-margin">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font"><span class="text-deep-pink margin-10px-right xs-display-block xs-no-margin">01.</span>We believe in creativity</div>
                            <p class="width-90 xs-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <!-- end feature box item-->
                        <!-- start feature box item-->
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom md-no-padding-right md-margin-30px-bottom xs-margin-30px-bottom xs-no-padding last-paragraph-no-margin">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font"><span class="text-deep-pink margin-10px-right xs-display-block xs-no-margin">02.</span>We believe in quality</div>
                            <p class="width-90 xs-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <!-- end feature box item-->
                        <!-- start feature box item-->
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 md-no-padding-right md-margin-30px-bottom sm-no-margin-bottom xs-margin-30px-bottom xs-no-padding last-paragraph-no-margin">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font"><span class="text-deep-pink margin-10px-right xs-display-block xs-no-margin">03.</span>We believe in abilities</div>
                            <p class="width-90 xs-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <!-- end feature box item-->
                        <!-- start feature box item-->
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 md-no-padding-right md-no-margin-bottom xs-no-padding last-paragraph-no-margin">
                            <div class="text-extra-dark-gray margin-10px-bottom alt-font"><span class="text-deep-pink margin-10px-right xs-display-block xs-no-margin">04.</span>We believe in relation</div>
                            <p class="width-90 xs-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <!-- end feature box item-->
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- end feature box section -->
 <!-- start features box section -->
 <section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 center-col text-center">
                <i class="fas fa-quote-left icon-small text-deep-pink display-block margin-25px-bottom"></i>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 margin-5px-bottom">Unity is strength...</h5>
                <h5 class="alt-font text-extra-dark-gray font-weight-300">Il nostro Team vanta figure esperte in Grafica, SEO (visibilità sui motori di ricerca), Marketing, Copywriter in grado di soddisfare le richieste del cliente trasformandole in realtà.</h5>
                <span class="text-uppercase text-extra-small alt-font letter-spacing-3 text-medium-gray">Alexander Inkingoluos</span>
            </div>
        </div>
    </div>
</section>
<!-- end features box section -->

 <!-- start skills section -->
 <section id="expertise" class="wow fadeIn parallax" data-stellar-background-ratio="0.4" style="background-image:url('{{asset('images/books.jpg')}}');">
    <div class="opacity-full bg-black"></div>
    <div class="container">
        <div class="row">
            <!-- start pie charts item -->
            <div class="col-md-3 col-sm-6 col-xs-12 chart-style3 wow fadeInUp text-center sm-margin-30px-bottom">
                <div class="chart-percent"><span class="chart3" data-percent="90"><span class="percent font-weight-500 text-medium"></span></span></div>
                <div class="chart-text">
                    <span class="alt-font text-white font-weight-600 margin-5px-bottom margin-30px-top sm-margin-15px-top display-block">Graphic Design</span>
                    <p class="center-col width-90 text-medium-gray xs-width-100">Lorem Ipsum is simply text of the printing typesetting industry.</p>
                </div>
            </div>
            <!-- end pie charts item -->
            <!-- start pie charts item -->
            <div class="col-md-3 col-sm-6 col-xs-12 chart-style3 wow fadeInUp text-center sm-margin-30px-bottom" data-wow-delay="0.2s">
                <div class="chart-percent"><span class="chart3" data-percent="96"><span class="percent font-weight-500 text-medium"></span></span></div>
                <div class="chart-text">
                    <span class="alt-font text-white font-weight-600 margin-5px-bottom margin-30px-top sm-margin-15px-top display-block">Web Design</span>
                    <p class="center-col width-90 text-medium-gray xs-width-100">Lorem Ipsum is simply text of the printing typesetting industry.</p>
                </div>
            </div>
            <!-- end pie charts item -->
            <!-- start pie charts item -->
            <div class="col-md-3 col-sm-6 col-xs-12 chart-style3 wow fadeInUp text-center xs-margin-30px-bottom" data-wow-delay="0.4s">
                <div class="chart-percent"><span class="chart3" data-percent="95"><span class="percent font-weight-500 text-medium"></span></span></div>
                <div class="chart-text">
                    <span class="alt-font text-white font-weight-600 margin-5px-bottom margin-30px-top sm-margin-15px-top display-block">Photography</span>
                    <p class="center-col width-90 text-medium-gray xs-width-100">Lorem Ipsum is simply text of the printing typesetting industry.</p>
                </div>
            </div>
            <!-- end pie charts item -->
            <!-- start pie charts item -->
            <div class="col-md-3 col-sm-6 col-xs-12 chart-style3 wow fadeInUp text-center" data-wow-delay="0.6s">
                <div class="chart-percent"><span class="chart3" data-percent="90"><span class="percent font-weight-500 text-medium"></span></span></div>
                <div class="chart-text">
                    <span class="alt-font text-white font-weight-600 margin-5px-bottom margin-30px-top sm-margin-15px-top display-block">Branding</span>
                    <p class="center-col width-90 text-medium-gray xs-width-100 xs-no-margin">Lorem Ipsum is simply text of the printing typesetting industry.</p>
                </div>
            </div>
            <!-- end pie charts item -->
        </div>
    </div>
</section> 
<!-- end skills section -->



        {{-- <!-- start story section -->
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
        <!-- end story section --> --}}
        <!-- start feature box  -->
        {{-- <section class="bg-extra-dark-gray wow fadeIn md-padding-two-lr">
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
        <!-- end section --> --}}
        <!-- start slider section  -->
        {{-- <section id="clients" class="parallax wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('http://placehold.it/1920x1200');">
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
        </section> --}}
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
<script src="{{ asset('/react') }}/libs/three.js/r58/three.min.js"></script>


 <script src="{{ asset('/react') }}/js/skins/min/tunnel.min.js"></script>
 @endpush