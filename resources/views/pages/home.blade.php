@extends('layouts.master')

  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection


@push('meta')
  <meta name="description" content="{!! setting('site.description') !!}">
  <meta name="keywords" content="{!! setting('site.keywords') !!}">
  <meta name="author" content="Thinkweb Studio">
  <!-- OPENGRAPH -->
  <meta property="og:title" content="{!! setting('site.title') !!}" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{Route::currentRouteName()}}" />
  <meta property="og:image" content="{!! setting('site.logo') !!}" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('content')


<?php
$scelta = setting('home.hero');

switch ($scelta) {
    case ('spirale'):
        ?> 
            <!-- start hero section -->
            <section class="" data-stellar-background-ratio="0.5"  style="padding:0px !important;">
                <div id="tunnel" class="tunnel"></div>
            </section>
            <!-- end hero section -->
        <?php 
        break;

    case ('giallo'):
        ?> 
            <!-- start hero section -->
            <div class="combustion-yellow-skin">
                <section class="" data-stellar-background-ratio="0.5"  style="padding:0px !important;">
                    <canvas id="canvas"></canvas>
                  </section>
                  <h1 class="text-white center-col" >{{ setting('site.welcome') }}</h1>
            </div>
            <!-- end hero section -->
        <?php 
        break;

    case ('viola'):
        ?> 
            <!-- start hero section -->
            <div class="combustion-purple-skin">
                <section class="" data-stellar-background-ratio="0.5"  style="padding:0px !important;">
                    <canvas id="canvas"></canvas>
                  </section>
                  <h1 class="text-white center-col" >{{ setting('site.welcome') }}</h1>
            </div>
            <!-- end hero section -->
        <?php
        break;
}
?>
        

    
        
    
    
       


        <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <span class="head-text text-extra-dark-blue font-weight-300 width-130 display-block line-height-90 md-width-100">
                            <a href="https://www.thinkwebstudio.com" class="text-deep-pink"><strong><i class="fas fa-quote-left text-deep-pink icon-large margin-15px-bottom"></i></strong></a><br>Aiutiamo le aziende a crescere, lanciare prodotti e costruire business duraturi e di successo.

                        </span>
                    </div>
                </div>
            </div>
        </section>
        
          <!-- start interactive banners style 01 section -->
        <section class="wow fadeIn no-padding-bottom">
            <div class="container-fluid">
                
                    <div class="row text-center">
                    	<div class="col-md-12">
                        	<p class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Fatti Trovare</p>
							<h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 sm-width-100 xs-width-100">Siti Web</h5>
							<span class="separator-line-horrizontal-medium-light2 bg-deep-pink display-table margin-auto width-100px"></span>
                    	</div>
                	</div>
                
                <div class="row equalize xs-equalize-auto">
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Domini & Hosting</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-01.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp" data-wow-delay="0.2s">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Sito Web Design</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-02.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp" data-wow-delay="0.4s">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Sviluppo Sito Web</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-03.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp" data-wow-delay="0.2s">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Seo</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-02.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                </div>
            </div>
        </section>
        <!-- start interactive banners style 01 section -->
        
        
          <!-- start interactive banners style 02 section -->
        <section class="wow fadeIn no-padding-bottom">
            <div class="container-fluid">
                <div class="row text-center">
                    	<div class="col-md-12">
                        	<p class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Guadagna con il tuo sito</p>
							<h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 sm-width-100 xs-width-100">Marketing Digitale</h5>
							<span class="separator-line-horrizontal-medium-light2 bg-deep-pink display-table margin-auto width-100px"></span>
                    	</div>
                </div>

                <div class="row equalize xs-equalize-auto">
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Sem</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-01.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp" data-wow-delay="0.2s">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Seo</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-02.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp" data-wow-delay="0.4s">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Social Media Marketing</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-03.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp" data-wow-delay="0.6s">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">foto pixellata</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-04.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                </div>
            </div>
        </section>
        <!-- stop interactive banners style 02 section -->
        
          <!-- start interactive banners style 03 section -->
        <section class="wow fadeIn no-padding-bottom">
            <div class="container-fluid">
                <div class="row text-center">
                    	<div class="col-md-12">
                        	<p class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Crea la tua identità</p>
							<h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 sm-width-100 xs-width-100">Graphic Design</h5>
							<span class="separator-line-horrizontal-medium-light2 bg-deep-pink display-table margin-auto width-100px"></span>
                    	</div>
                </div>

                <div class="row equalize xs-equalize-auto">
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Fotografia</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-01.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp" data-wow-delay="0.2s">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Copywriting</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-02.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp" data-wow-delay="0.4s">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">Pacaging & Labeling</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-03.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr wow fadeInUp" data-wow-delay="0.6s">
                        <figure class="bg-extra-dark-gray">
                            <div class="banner-image bg-extra-dark-gray">
                                <img src="http://placehold.it/800x1000" alt="" />
                            </div>
                            <figcaption>
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-center">
                                        <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom">foto Pixellata</div>
                                        <p class="text-light-gray width-80 margin-lr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <a href="single-project-page-04.html" class="btn btn-small btn-white font-weight-300 btn-rounded">View Portfolio <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banners item -->
                </div>
            </div>
        </section>
        <!-- stop interactive banners style 03 section -->
       
        
        
        <!-- start fancy text box style 08 section -->
        <section class="wow fadeIn bg-blue-dark" style="padding-top: 50px; padding-bottom: 50px">
            <div class="container-fluid" >
                <div class="row margin-50px-bottom">
                    <!-- start feature box item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin md-margin-30px-bottom wow fadeInRight">
                        <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray md-no-border-right xs-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">01</h3>
                            <span class="alt-font display-block text-uppercase text-small">Ideiamo Insieme</span>
                            <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Discussione dell'idea</span>
                            <p class="text-extra-light-gray">Definire gli strumenti da usare per rendere l'immaginazione realtà è la prima fase di ogni progetto di successo.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin md-margin-30px-bottom wow fadeInRight" data-wow-delay="0.2s">
                        <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray md-no-border-right xs-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">02</h3>
                            <span class="alt-font display-block text-uppercase text-small">Di cosa hai bisogno</span>
                            <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Elaborazione idea</span>
                            <p class="text-extra-light-gray">Mutare un'idea di successo in una non valida è l'errore che molti commettono quando tralasciano questa fase dalla progettazione.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin sm-margin-30px-bottom wow fadeInRight" data-wow-delay="0.4s">
                        <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray md-no-border-right xs-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">03</h3>
                            <span class="alt-font display-block text-uppercase text-small">Supporto dedicato</span>
                            <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Scriviamo il tuo Codice</span>
                            <p class="text-extra-light-gray">Dove necessario, creaiamo temi e codici su misura per il cliente! Imperativo ed utile per sovrastare i competitor che riempiono la rete.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin wow fadeInRight" data-wow-delay="0.6s">
                        <div class="padding-40px-lr text-center xs-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">04</h3>
                            <span class="alt-font display-block text-uppercase text-small">Dalla A alla Z</span>
                            <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Beta/Test per la perfezione</span>
                            <p class="text-extra-light-gray">Prima di consegnare un progetto lo testiamo e analizziamo a 360° sia per offrire la miglior User Experience sia per educare noi nei prossimi lavori.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    </div>
                    
                   <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 center-col text-center">
                        <h5 class="alt-font text-uppercase font-weight-600 text-extra-dark-gray width-80 center-col margin-35px-bottom md-width-100 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></h5>
                        <a href="{{url('/services')}}" class="btn btn-medium btn-rounded btn-transparent-white wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Scopri i Nostri Servizi <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                    
                </div>
            </div>
        </section>
       
       
       
               <!-- start portfolio section -->
        <section class="wow fadeIn border-bottom border-color-extra-light-gray no-padding-bottom">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-12">
                        <p class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Selected latest Works</p>
                        <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 sm-width-100 xs-width-100">New Projects</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink display-table margin-auto width-100px"></span>
                    </div>
                </div>
                <div class="row"> 
                    <div class="filter-content overflow-hidden margin-100px-top sm-margin-70px-top xs-margin-50px-top xs-margin-15px-lr">
                        <ul class="portfolio-grid work-4col gutter-large hover-option6 lightbox-portfolio">
                            <li class="grid-sizer"></li>


                            @foreach ($projects as $project)
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp last-paragraph-no-margin">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="{{url('storage/')}}/{{$project->image}}" alt="{{$project->image}}"/>
                                        <div class="portfolio-icon">
                                            <a href="{{$project->url}}"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="{{$project->name}}" href="{{url('storage/')}}/{{$project->image}}"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="{{$project->url}}"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase display-block">{{$project->name}}</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">{{$project->projectscategory->name}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            @endforeach
                            <!-- end portfolio item -->
                            
                        </ul>
                    </div>
                </div>
            </div> 
        </section>
        <!-- end portfolio section -->

            
		<!-- Start Newsletter -->
        <section class="bg-light-gray wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 center-col col-sm-12 text-center">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray">Iscriviti alla Newsletter</h4>
                        <p class="width-65 center-col sm-width-100"> Resta sempre informato sulle nuove teconlogie e le novità del nostro settore.</p>
                        <form id="subscribenewsletterform" action="javascript:void(0)" method="post" class="position-relative">
                            <div id="success-subscribe-newsletter" class="no-margin-lr" style="display: none;"></div>
                            <div class="input-group margin-40px-tb">
                                <input name="email" id="email" type="text" placeholder="* Email Address" class="extra-big-input border-none">
                                <div class="input-group-btn">
                                    <button id="button-subscribe-newsletter" type="submit" class="btn btn-large bg-white text-deep-pink"><i class="ti-email icon-small  no-margin "></i></button>

                                </div>
                            </div>
                        </form>
                        <span class="text-extra-small">* Non condividiamo i tuoi dati personali con nessuno. Controlla le nostre <a href="{{url('/privacy-policy')}}" class=" text-decoration-underline">Privacy Policy</a> per maggiori informazioni.</span>
                    </div>
                </div>
            </div>
        </section>
		<!-- Stop Newsletter -->

@endsection


 @push('script')

 <?php

 $scelta = setting('home.hero');
 switch ($scelta) {
     case ('spirale'):
    ?>
        <script src="{{asset('/react')}}/libs/three.js/r58/three.min.js"></script>
        <script src="{{asset('/react')}}/js/skins/min/tunnel.min.js"></script>
    <?php
        break;
 
     case ('giallo'):
        ?>  <script src="{{ asset('/react') }}/js/skins/min/combustion-yellow.min.js"></script> <?php 
         break;
 
     case ('viola'):
     echo $scelta;
       ?> <script src="{{ asset('/react') }}/js/skins/min/combustion-purple.min.js"></script> <?php 
        
         break;
 }
 ?>



@endpush


{{-- @push('script')
<!-- skin specific script-->
<script src="{{ asset('/react') }}/libs/three.js/r58/three.min.js"></script>


 <script src="{{ asset('/react') }}/js/skins/min/tunnel.min.js"></script>
 @endpush --}}

