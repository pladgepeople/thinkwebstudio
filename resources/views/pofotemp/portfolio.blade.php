@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

  @section('nav')navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link on no-full @endsection
@section('content')


 <!-- start page title section -->
 <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{asset('images/object.png')}}');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Portfolio</h1>
                    <!-- end page title -->
                    <!-- start sub title -->
                    <span class="text-white opacity6 alt-font"></span>
                    <!-- end sub title -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start portfolio section -->
<section class="wow fadeIn padding-90px-top sm-padding-50px-top xs-padding-30px-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- start filter navigation -->
                <ul class="portfolio-filter nav nav-tabs border-none portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small sm-margin-40px-bottom xs-margin-20px-bottom">
                    <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="xs-display-inline light-gray-text-link text-very-small">All</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".web" class="xs-display-inline light-gray-text-link text-very-small">Web</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".advertising" class="xs-display-inline light-gray-text-link text-very-small">Advertising</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".branding" class="xs-display-inline light-gray-text-link text-very-small">Branding</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".design" class="xs-display-inline light-gray-text-link text-very-small">Design</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".photography" class="xs-display-inline light-gray-text-link text-very-small">Photography</a></li>
                </ul>                                                                           
                <!-- end filter navigation -->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding xs-padding-15px-lr">
                <div class="filter-content overflow-hidden">
                    <ul class="portfolio-grid work-3col hover-option4 gutter-medium">
                        <li class="grid-sizer"></li>
                        <!-- start  portfolio-item item -->
                        <li class="grid-item web branding design wow fadeInUp">
                            <a href="single-project-page-01.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Herbal Beauty Salon</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web branding design wow fadeInUp" data-wow-delay="0.2s">
                            <a href="single-project-page-02.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Tailoring Interior</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Branding and Brochure</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item advertising branding photography wow fadeInUp wow fadeInUp" data-wow-delay="0.4s">
                            <a href="single-project-page-03.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Pixflow Studio</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web advertising design wow fadeInUp wow fadeInUp">
                            <a href="single-project-page-04.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Designblast Inc</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web branding design wow fadeInUp wow fadeInUp" data-wow-delay="0.2s">
                            <a href="single-project-page-05.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">HardDot Stone</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web advertising branding design photography wow fadeInUp wow fadeInUp" data-wow-delay="0.4s">
                            <a href="single-project-page-06.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Educamp School</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web advertising branding design photography wow fadeInUp">
                            <a href="single-project-page-07.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Crop Identity</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Branding and Brochure</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.2s">
                            <a href="single-project-page-08.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Violator Series</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item advertising branding design wow fadeInUp" data-wow-delay="0.4s">
                            <a href="single-project-page-07.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Johnny Cash</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web advertising design photography wow fadeInUp">
                            <a href="single-project-page-06.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Violator Series</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web branding photography wow fadeInUp" data-wow-delay="0.2s">
                            <a href="single-project-page-05.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Zimmermann Buch</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.4s">
                            <a href="single-project-page-04.html">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <div class="bg-deep-pink center-col separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                    <span class="font-weight-600 letter-spacing-1 alt-font text-white text-uppercase margin-5px-bottom display-block">Stadt Gestalten</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small no-margin-bottom">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end portfolio section -->
<!-- start call to action section -->
<section class="wow fadeIn padding-50px-tb border-top border-width-1 border-color-extra-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown">
                <span class="alt-font text-extra-large text-extra-dark-gray margin-5px-top sm-no-margin-top display-inline-block width-100">We would love to hear about start your new project?</span>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 sm-text-center wow fadeInDown"> 
                <a href="contact-us-modern.html" class="btn btn-medium btn-rounded btn-transparent-dark-gray" data-wow-delay="0.4s">Start New Projects <i class="ti-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- end call to action section -->

    <!-- start divider -->
    <div class="container"><div class="divider-full bg-extra-light-gray"></div></div>
    <!-- end divider -->


    <!-- start footer --> 
    @include('layouts.footer')
    <!-- end footer -->
@endsection