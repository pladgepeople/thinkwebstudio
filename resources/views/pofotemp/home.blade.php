@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

  @section('nav')navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link on no-full @endsection
@section('content')

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

<div class="combustion-yellow-skin">
    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5"  style="padding-top:0px !important;">
        <canvas id="canvas"></canvas>
      </section>
      <h1 class="center" >{{ setting('site.welcome') }}</h1>
</div>
       

            <!-- start section -->
            <section class="wow fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                            <span class="head-text text-extra-dark-gray font-weight-300 width-130 display-block line-height-90 md-width-100">
                                <a href="{{url('/')}}" class="text-deep-pink"><strong>ThinkWeb Studio</strong></a><br>Aiutiamo le aziende a crescere, lanciare prodotti e costruire business duraturi e di successo.
                               
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            
            <!-- start divider -->
            <div class="container"><div class="divider-full bg-extra-light-gray"></div></div>
            <!-- end divider -->
            <!-- start about section -->
            <section class="wow fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn">
                            <div class="position-relative icon-with-paragraph">
                                <span class="text-deep-pink position-absolute left-0 top-0 alt-font special-char-extra-large sm-display-none">*</span> 
                                <h5 class="font-weight-300 text-extra-dark-gray width-90 padding-nineteen-left md-padding-twenty-left md-width-100 sm-no-padding-left xs-margin-15px-bottom"> Ascoltiamo i tuoi bisogni per proporti un lavoro completo in grado di raggiungere gli obiettivi prefissati..</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-md-offset-1 col-lg-offset-0 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                            <p class="text-medium font-weight-300 width-70 line-height-26 md-width-100">Siamo guidati dall'idea, lavorando con una forte attenzione al design e all'esperienza utente. I nostri progetti dovrebbero coinvolgere il tuo pubblico, vogliamo creare meravigliose cose digitali che le persone amano essere parte e utilizzare. Questo è ciò che il tuo marchio e il tuo pubblico meritano.</p>
                            <a href="{{url('/about')}}" class="text-uppercase alt-font display-inline-block text-extra-dark-gray font-weight-600 text-deep-pink-hover text-extra-small">Scopri chi siamo <i class="fas fa-long-arrow-alt-right margin-5px-left text-medium position-relative top-2" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about section -->


            <!-- start portfolio section -->
            @include('module.portfolio')
            <!-- end portfolio section -->

            
            <div class="clearfix"></div>
            <!-- start clients logo section -->
                @include('module.client',['clients'=>$clients])
            <!-- end clients logo section -->


            <!-- start call to action section -->
                @include('module.cta')
            <!-- end call to action -->


          


            <!-- start footer --> 
           @include('layouts.footer')
            <!-- end footer -->


       


@endsection

@push('script')
<script src="{{ asset('/react') }}/js/skins/min/combustion-purple.min.js"></script>
 <!-- skin specific script-->
<?php /* $num=rand(0,1);*/ ?> {{-- 
 @if ($num===0)
    <script src="{{ asset('/react') }}/js/skins/min/combustion-purple.min.js"></script>
    @else
        <script src="{{ asset('/react') }}/js/skins/min/combustion-yellow.min.js"></script>
 @endif --}}
@endpush
