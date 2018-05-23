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

<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{url('storage/')}}/{{$page->image}}');">
  <div class="opacity-medium bg-extra-dark-gray"></div>
  <div class="container">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
              <div class="display-table-cell vertical-align-middle text-center">
                  <!-- start page title -->
                  <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-15px-bottom">{{$page->title}}</h1>
                  <!-- end page title -->
                  <!-- start sub title -->
                  <span class="text-white opacity6 alt-font">We provide innovative solutions to expand business</span>
                  <!-- end sub title -->
              </div>
          </div>
      </div>
  </div>
</section>


<section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6 class="text-uppercase alt-font text-extra-dark-gray font-weight-600 margin-four-bottom">Regular &amp; Extended Licenses</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 center-col">
                {!!$page->body!!}
            </div>
        </div>
    </div>
</section>


@endsection