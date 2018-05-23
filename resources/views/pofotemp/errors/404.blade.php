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

@section('content')

         <!-- start page not found section -->
         <section id="home" class="no-padding parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" style="">
          <div class="opacity-full bg-extra-dark-gray"></div>
          <div class="container position-relative full-screen">
              <div class="slider-typography text-center">
                  <div class="slider-text-middle-main">
                      <div class="slider-text-middle">
                          <div class="bg-black-opacity-light width-50 center-col sm-width-80">
                              <div class="padding-fifteen-all xs-padding-20px-all">
                                  <span class="title-extra-large text-white font-weight-600 display-block margin-30px-bottom xs-margin-10px-bottom">404!</span>
                                  <h6 class="text-uppercase text-deep-pink font-weight-600 alt-font display-block margin-5px-bottom">Pagina non trovata</h6>
                                  <span class="text-medium-gray width-60 display-block center-col text-large sm-width-100">La pagina che cerchi non è presente nel server.</span>
                                  <form action="search-result.html" method="post" class="position-relative">
                                      <div class="input-group-404 input-group margin-50px-tb xs-margin-20px-tb">
                                          <input name="text" id="text" data-email="required" type="text" placeholder="Enter your keywords..." class="extra-big-input border-none" />
                                          <div class="input-group-btn">
                                              <button type="submit" class="btn btn-large bg-white text-medium-gray"><i class="ti-search icon-small  no-margin position-raltive top-2"></i></button>
                                          </div>
                                      </div>
                                  </form>
                                  <a href="{{url('/')}}" class="btn btn-transparent-white btn-medium text-extra-small border-radius-4"><i class="ti-arrow-left margin-5px-right no-margin-left" aria-hidden="true"></i> Back To Homepage</a>
                              </div>
                          </div>                            
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- end page not found section -->


@endsection
