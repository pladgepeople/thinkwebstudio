@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

  @section('nav')navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link on no-full @endsection
@section('content')



 <!-- start page title section -->
 <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1100');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Blog right sidebar</h1>
                    <span class="text-white opacity6 alt-font">Lorem Ipsum is simply dummy text printing</span>
                    <!-- end page title --> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title section --> 
<!-- start post content section --> 
<section>
    <div class="container">
        <div class="row">
            <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom no-padding-left sm-no-padding-right">
                <!-- start post item --> 
                <div class="col-md-12 col-sm-12 col-xs-12 blog-post-content margin-60px-bottom xs-margin-30px-bottom xs-text-center">
                    <div class="blog-image"><a href="blog-standard-post.html"><img src="http://placehold.it/1200x752" alt=""/></a></div>
                    <div class="blog-text border-all display-inline-block width-100">
                        <div class="content padding-50px-all xs-padding-20px-all">
                            <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on June 30, 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Branding</a></span></div>
                            <a href="blog-standard-post.html" class="text-extra-dark-gray text-uppercase  alt-font text-large font-weight-600 margin-15px-bottom display-block">This is a standard post with a preview image</a>
                            <p class="no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                        <div class="equalize xs-equalize-auto author border-top border-color-extra-light-gray display-table width-100">
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <img src="http://placehold.it/149x149" alt="" class="border-radius-100 width-30px">
                                        <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 border-lr padding-15px-all border-color-extra-light-gray xs-no-border">
                                <div class="display-table text-center  width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post item --> 
                <!-- start post item --> 
                <div class="col-md-12 col-sm-12 col-xs-12 blog-post-content margin-60px-bottom xs-margin-30px-bottom xs-text-center">
                    <div class="swiper-full-screen swiper-container white-move">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a href="blog-slider-post.html"><img src="http://placehold.it/1200x752" alt=""></a></div>
                            <div class="swiper-slide"><a href="blog-slider-post.html"><img src="http://placehold.it/1200x752" alt=""></a></div>
                            <div class="swiper-slide"><a href="blog-slider-post.html"><img src="http://placehold.it/1200x752" alt=""></a></div>                            
                        </div>  
                        <div class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination"></div>
                        <div class="swiper-button-next swiper-button-black-highlight"></div>
                        <div class="swiper-button-prev swiper-button-black-highlight"></div>
                    </div> 
                    <div class="blog-text border-all display-inline-block width-100">
                        <div class="content padding-50px-all xs-padding-20px-all">
                            <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on June 02, 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Designing</a></span></div>
                            <a href="blog-slider-post.html" class="text-extra-dark-gray text-uppercase  alt-font text-large font-weight-600 margin-15px-bottom display-block">This is a standard post with a images slider</a>
                            <p class="no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                        <div class="equalize xs-equalize-auto author border-top border-color-extra-light-gray display-table width-100">
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <img src="http://placehold.it/149x149" alt="" class="border-radius-100 width-30px">
                                        <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 border-lr padding-15px-all border-color-extra-light-gray xs-no-border">
                                <div class="display-table text-center  width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post item --> 
                <!-- start post item --> 
                <div class="col-md-12 col-sm-12 col-xs-12 blog-post-content margin-60px-bottom xs-margin-30px-bottom xs-text-center">
                    <div class="fit-videos">
                        <!-- start vimeo video -->
                        <iframe src="https://player.vimeo.com/video/176916362?title=0&byline=0&portrait=0" width="640" height="360" allowfullscreen></iframe>
                        <!-- end vimeo video -->
                    </div> 
                    <div class="blog-text border-all display-inline-block width-100">
                        <div class="content padding-50px-all xs-padding-20px-all">
                            <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on August 28, 2016</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Feature</a></span></div>
                            <a href="blog-vimeo-video-post.html" class="text-extra-dark-gray text-uppercase  alt-font text-large font-weight-600 margin-15px-bottom display-block">This is a Standard post with an Embedded Video</a>
                            <p class="no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                        <div class="equalize xs-equalize-auto author border-top border-color-extra-light-gray display-table width-100">
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <img src="http://placehold.it/149x149" alt="" class="border-radius-100 width-30px">
                                        <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 border-lr padding-15px-all border-color-extra-light-gray xs-no-border">
                                <div class="display-table text-center  width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post item --> 
                <!-- start post item --> 
                <div class="col-md-12 col-sm-12 col-xs-12 blog-post-content margin-60px-bottom xs-margin-30px-bottom xs-text-center">
                    <div class="fit-videos">
                        <!-- start vimeo video -->
                        <video autoplay muted loop controls><source src="video/video.mp4" type="video/mp4"></video>
                        <!-- end vimeo video -->
                    </div> 
                    <div class="blog-text border-all display-inline-block width-100">
                        <div class="content padding-50px-all xs-padding-20px-all">
                            <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on July 10, 2016</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Branding</a></span></div>
                            <a href="blog-html5-video-post.html" class="text-extra-dark-gray text-uppercase  alt-font text-large font-weight-600 margin-15px-bottom display-block">This is a Standard post with a HTML5 Video</a>
                            <p class="no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                        <div class="equalize xs-equalize-auto author border-top border-color-extra-light-gray display-table width-100">
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <img src="http://placehold.it/149x149" alt="" class="border-radius-100 width-30px">
                                        <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 border-lr padding-15px-all border-color-extra-light-gray xs-no-border">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post item --> 
                <!-- start post item --> 
                <div class="col-md-12 col-sm-12 col-xs-12 blog-post-content margin-60px-bottom xs-margin-30px-bottom xs-text-center">
                    <div class="fit-videos">
                        <!-- start vimeo video -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/sU3FkzUKHXU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
                        <!-- end vimeo video -->
                    </div> 
                    <div class="blog-text border-all display-inline-block width-100">
                        <div class="content padding-50px-all xs-padding-20px-all">
                            <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on April 11, 2016</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Onepage Fashion</a></span></div>
                            <a href="blog-youtube-video-post.html" class="text-extra-dark-gray text-uppercase  alt-font text-large font-weight-600 margin-15px-bottom display-block">This is a Standard post with a youtube Video</a>
                            <p class="no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                        <div class="equalize xs-equalize-auto author border-top border-color-extra-light-gray display-table width-100">
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <img src="http://placehold.it/149x149" alt="" class="border-radius-100 width-30px">
                                        <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 border-lr padding-15px-all border-color-extra-light-gray xs-no-border">
                                <div class="display-table text-center  width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post item -->
                <!-- start post item --> 
                <div class="col-md-12 col-sm-12 col-xs-12 blog-post-content margin-60px-bottom xs-margin-30px-bottom xs-text-center">
                    <div class="lightbox-gallery">
                        <ul class="portfolio-grid work-3col hover-option4">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design">
                                <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design">
                                <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design">
                                <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design">
                                <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design">
                                <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design">
                                <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
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
                    <div class="blog-text border-all display-inline-block width-100">
                        <div class="content padding-50px-all xs-padding-20px-all">
                            <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on June 08, 2016</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Branding</a></span></div>
                            <a href="blog-gallery-post.html" class="text-extra-dark-gray text-uppercase  alt-font text-large font-weight-600 margin-15px-bottom display-block">This is a Standard post with a Image gallery</a>
                            <p class="no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                        <div class="equalize xs-equalize-auto author border-top border-color-extra-light-gray display-table width-100">
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <img src="http://placehold.it/149x149" alt="" class="border-radius-100 width-30px">
                                        <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 border-lr padding-15px-all border-color-extra-light-gray xs-no-border">
                                <div class="display-table text-center  width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post item --> 
                <!-- start post item --> 
                <div class="col-md-12 col-sm-12 col-xs-12 blog-post-content xs-text-center">
                    <div class="blog-image">
                        <blockquote class="bg-extra-dark-gray">
                            <h6 class="text-white font-weight-300 line-height-35 alt-font margin-15px-bottom">Thousands of candles can be lighted from a single candle, and the life of the candle will not be shortened. Happiness never decreases by being shared.</h6>
                        </blockquote>
                    </div>
                    <div class="blog-text border-all display-inline-block width-100">
                        <div class="content padding-50px-all xs-padding-20px-all">
                            <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on June 14, 2015</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Designing</a></span></div>
                            <a href="blog-blockquote-post.html" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom display-block">This is a Standard post with a blockquote</a>
                            <p class="no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                        <div class="equalize xs-equalize-auto author border-top border-color-extra-light-gray display-table width-100">
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <img src="http://placehold.it/149x149" alt="" class="border-radius-100 width-30px">
                                        <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 border-lr padding-15px-all border-color-extra-light-gray xs-no-border">
                                <div class="display-table text-center  width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post item -->
                <!-- start pagination -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-top sm-margin-50px-top wow fadeInUp">
                    <div class="pagination text-small text-uppercase text-extra-dark-gray">
                        <ul>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right xs-display-none"></i> Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left xs-display-none"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end pagination -->
            </main>

            @include('layouts.sidebar')
            
        </div>
    </div>
</section>
<!-- end blog content section -->  


<!-- start divider -->
<div class="container"><div class="divider-full bg-extra-light-gray"></div></div>
<!-- end divider -->


<!-- start footer --> 
@include('layouts.footer')
<!-- end footer -->


@endsection