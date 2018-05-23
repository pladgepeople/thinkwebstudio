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
                            <a href="https://www.thinkwebstudio.com" class="text-deep-pink"><strong>ThinkWeb Studio</strong></a><br>Aiutiamo le aziende a crescere, lanciare prodotti e costruire business duraturi e di successo.

                        </span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- start features box section -->
        <section class="bg-light-gray wow fadeIn">
            <div class="container position-relative">
                <div class="row sm-col-2-nth">
                    <!-- start feature box item --> 
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center feature-box-11 sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInLeft last-paragraph-no-margin" >
                        <div class="display-inline-block padding-30px-all width-130px height-130px line-height-65 border-radius-100 bg-white text-center progress-line">
                            <img src="{{asset('/')}}pofo/images/image-icon6.png" alt="">
                        </div>
                        <div class="alt-font margin-30px-top margin-5px-bottom text-extra-dark-gray font-weight-600 xs-margin-15px-top">Discussion of the Idea</div>
                        <p class="width-75 md-width-100 sm-width-90 center-col">Lorem Ipsum is simply text of the printing and typesetting standard industry.</p>
                    </div>
                    <!-- end feature box item --> 
                    <!-- start feature box item --> 
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center feature-box-11 sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="display-inline-block padding-30px-all width-130px height-130px line-height-65 border-radius-100 bg-white text-center progress-line">
                            <img src="{{asset('/')}}/pofo/images/image-icon7.png" alt="">
                        </div>
                        <div class="alt-font margin-30px-top margin-5px-bottom text-extra-dark-gray font-weight-600 xs-margin-15px-top">Handcrafted Templates</div>
                        <p class="width-75 md-width-100 sm-width-90 center-col">Lorem Ipsum is simply text of the printing and typesetting standard industry.</p>
                    </div>
                    <!-- end feature box item --> 
                    <!-- start feature box item --> 
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center feature-box-11 xs-margin-30px-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.8s">
                        <div class="display-inline-block padding-30px-all width-130px height-130px line-height-65 border-radius-100 bg-white text-center progress-line">
                            <img src="{{asset('/')}}/pofo/images/image-icon8.png" alt="">
                        </div>
                        <div class="alt-font margin-30px-top margin-5px-bottom text-extra-dark-gray font-weight-600 xs-margin-15px-top">Testing for Perfection</div>
                        <p class="width-75 md-width-100 sm-width-90 center-col">Lorem Ipsum is simply text of the printing and typesetting standard industry.</p>
                    </div>
                    <!-- end feature box item --> 
                    <!-- start feature box item --> 
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center feature-box-11 wow fadeInLeft last-paragraph-no-margin" data-wow-delay="1.2s">
                        <div class="display-inline-block padding-30px-all width-130px height-130px line-height-65 border-radius-100 bg-white text-center">
                            <img src="{{asset('/')}}/pofo/images/image-icon9.png" alt="">
                        </div>
                        <div class="alt-font margin-30px-top margin-5px-bottom text-extra-dark-gray font-weight-600 xs-margin-15px-top">Testing for Perfection</div>
                        <p class="width-75 md-width-100 sm-width-90 center-col">Lorem Ipsum is simply text of the printing and typesetting standard industry.</p>
                    </div>
                    <!-- end feature box item -->
                </div> 
            </div>
        </section>
        <!-- end feature box section -->
       
        
        
        <!-- start fancy text box style 08 section -->
        <section class="wow fadeIn bg-extra-dark-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center wow fadeIn margin-100px-bottom xs-margin-40px-bottom">
                        <div class="position-relative overflow-hidden width-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Fancy Text Box Style 08</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin md-margin-30px-bottom wow fadeInRight">
                        <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray md-no-border-right xs-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">01</h3>
                            <span class="alt-font display-block text-uppercase text-small">Save your Time</span>
                            <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Discussione dell'idea</span>
                            <p class="text-extra-light-gray">Definire gli strumenti da usare per rendere l'immaginazione realtà è la prima fase di ogni progetto di successo.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin md-margin-30px-bottom wow fadeInRight" data-wow-delay="0.2s">
                        <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray md-no-border-right xs-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">02</h3>
                            <span class="alt-font display-block text-uppercase text-small">All you Need</span>
                            <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Elaborazione idea</span>
                            <p class="text-extra-light-gray">Mutare un'idea di successo in una non valida è l'errore che molti commettono quando tralasciano questa fase dalla progettazione.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin sm-margin-30px-bottom wow fadeInRight" data-wow-delay="0.4s">
                        <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray md-no-border-right xs-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">03</h3>
                            <span class="alt-font display-block text-uppercase text-small">Dedicated Supports</span>
                            <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Realizzazione a mano</span>
                            <p class="text-extra-light-gray">Dove necessario, la creazione di temi e codici fatti su misura per il cliente , è un imperativo per sovrastare i milioni di competitor che riempiono la rete.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 last-paragraph-no-margin wow fadeInRight" data-wow-delay="0.6s">
                        <div class="padding-40px-lr text-center xs-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">04</h3>
                            <span class="alt-font display-block text-uppercase text-small">Creative Thinking</span>
                            <span class="text-white text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom display-block">Test per la perfezione</span>
                            <p class="text-extra-light-gray">Prima di consegnare un progetto lo testiano e analizziamo a 360°, sia per offrire la perfezione al cliente ma sopratutto per educare noi nei prossimi lavori.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end fancy text box style 08 section -->



          <!-- start information section 

        <section class="parallax cover-background  xs-padding-50px-bottom wow fadeIn" 
        {{-- style="background: url({{asset('/images/purple-starry-sky.jpg')}})" --}}
        style="background-color:#000;"
        >
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-sm-11 col-xs-12 text-center center-col">
                        <h4 class="alt-font text-white center-col margin-lr-auto xs-width-100 xs-margin-15px-bottom">bellezza e professionalità , facilità d'uso ed eleganza</h4>
                        <p class="margin-lr-auto sm-width-100 xs-margin-25px-bottom text-white">Ascoltiamo i tuoi bisogni per proporti un lavoro completo in grado di raggiungere gli obiettivi prefissati</p>
                    </div>

                </div>
            </div>
        </section>

         end information section -->

		 <!--
        <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-11 col-xs-12 center-col text-center margin-six-bottom xs-margin-30px-bottom">
                        <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">think web studio</div>
                        <h6 class="font-weight-300 text-extra-dark-gray no-margin">Thinkweb studio ha come obiettivo di fornire ai <strong class="font-weight-400">Clienti</strong> competenze di eccellenza, innovazione e professionalità.</h6>
                    </div>
                </div>
                <div class="row">
                    <!-- start feature box item 
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-five-bottom last-paragraph-no-margin wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="feature-box">
                            <div class="content">
                                <i class="icon-browser text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom"></i>
                                <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">Website Design</div>
                                <p class="width-85 margin-lr-auto sm-width-100">Che sia Wordpress o Prestashop , la cosa sempre presente è la bellezza del design.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item 
                    <!-- start feature box item 
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-five-bottom last-paragraph-no-margin wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="feature-box">
                            <div class="content">
                                <i class="icon-book-open text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom"></i>
                                <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">Copywriter</div>
                                <p class="width-85 margin-lr-auto sm-width-100">I testi non presentano più solo il messaggio ma nascondono i segreti della SEO ,e non sono un'opzione.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item 
                    <!-- start feature box item 
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-five-bottom last-paragraph-no-margin wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="feature-box">
                            <div class="content">
                                <i class="icon-wallet text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom"></i>
                                <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">Starter Business</div>
                                <p class="width-85 margin-lr-auto sm-width-100">Affianchiamo e formiamo i nostri clienti per far si che ottengano il massimo dagli strumenti consegnati.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item 
                </div>
            </div>
        </section> -->
        
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

		<!--
        <section class="no-padding wow fadeIn bg-extra-dark-gray" style="visibility: visible; animation-name: fadeIn;">
            <div class="container-fluid no-padding">
                <div class="row equalize no-margin">
                    <div class="col-md-6 col-sm-12 col-xs-12 position-relative sm-height-500px xs-height-350px cover-background wow fadeInLeft" style="background-image: url(&quot;http://placehold.it/960x850&quot;); visibility: visible; animation-name: fadeInLeft; height: 694px;">
                        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                        <div class="bg-deep-pink width-50 text-center text-white padding-ten-all absolute-middle-center z-index-5 md-width-70 xs-width-85 xs-padding-twelve-tb xs-padding-five-lr">
                            <span class="special-char-medium text-white absolute-middle-center top-0 position-absolute fas fa-quote-left"></span>
                            <h6 class="font-weight-300 no-margin-bottom">Progettiamo brand, esperienza digitale e campagne di marketing che coinvolgono i clienti giusti.</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 display-table wow fadeInRight last-paragraph-no-margin sm-text-center" style="visibility: visible; animation-name: fadeInRight; height: 694px;">
                        <div class="display-table-cell vertical-align-middle padding-fifteen-all md-padding-ten-all sm-padding-90px-all xs-text-center xs-no-padding-lr xs-padding-40px-tb">
                            <span class="text-medium margin-10px-bottom display-block alt-font">We create premium designs and technology</span>
                            <h4 class="alt-font text-light-gray">Uno studio digitale che crea esperienze meravigliose.</h4>
                            <p class="text-extra-large width-85 md-width-100">Siamo sempre all'avanguardia del digitale, in modo che i nostri clienti mantengano il loro vantaggio competitivo online.</p>
                            <p class="width-85 md-width-100">Siamo guidati dall'idea, lavorando con una forte attenzione al design e all'esperienza utente. I nostri progetti dovrebbero coinvolgere il tuo pubblico, vogliamo creare meravigliose cose digitali che le persone amano essere parte e utilizzare. Questo è ciò che il tuo marchio e il tuo pubblico meritano.</p>
                            <a href="home-creative-small-business.html" class="btn btn-small margin-35px-top btn-white">Start Your Business</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->
        
        
        <!-- start feature box section -->
        <section class="parallax wow fadeIn" data-stellar-background-ratio="0.2" style="background-image:url('');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container position-relative z-index-5">
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-md-2 col-sm-4 wow zoomIn last-paragraph-no-margin">
                        <div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all">
                            <i class="icon-scissors text-medium-gray icon-medium margin-15px-bottom xs-margin-10px-bottom"></i>
                            <p class="text-medium text-extra-light-gray alt-font">Live website builder</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-md-2 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all">
                            <i class="icon-expand text-medium-gray icon-medium margin-15px-bottom xs-margin-10px-bottom"></i>
                            <p class="text-medium text-extra-light-gray alt-font">Visual page builder</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-md-2 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all">
                            <i class="icon-layers text-medium-gray icon-medium margin-15px-bottom xs-margin-10px-bottom"></i>
                            <p class="text-medium text-extra-light-gray alt-font">Modern framework</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-md-2 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all">
                            <i class="icon-tools text-medium-gray icon-medium margin-15px-bottom xs-margin-10px-bottom"></i>
                            <p class="text-medium text-extra-light-gray alt-font">Creative elements</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-md-2 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.8s">
                        <div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all">
                            <i class="icon-adjustments text-medium-gray icon-medium margin-20px-bottom xs-margin-10px-bottom"></i>
                            <p class="text-medium text-extra-light-gray alt-font">Unique shortcodes</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-md-2 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="1s">
                        <div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all">
                            <i class="icon-pictures text-medium-gray icon-medium margin-20px-bottom xs-margin-10px-bottom"></i>
                            <p class="text-medium text-extra-light-gray alt-font">Unlimited layouts</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end feature box section -->

            
    
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

