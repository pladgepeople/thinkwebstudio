
@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

@push('meta')
  <meta name="description" content="{{ setting('site.description') }}">
  <meta name="keywords" content="{{ setting('site.keywords') }}">
  <meta name="author" content="Thinkweb Studio">
  <!-- OPENGRAPH -->
  <meta property="og:title" content="{{ setting('site.title') }}" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://www.thinkwebstudio.com" />
  {{--  <meta property="og:image" content="{{ setting('site.logo')}}" />  --}}
  <meta property="og:locale" content="it_IT" />
  <meta property="og:site_name" content="Thinkweb Studio" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')



<section id="hero" class="hero full-height valign-wrapper scrollspy">
  <canvas id="canvas"></canvas>
</section>
<h1 class="center">{{ setting('site.welcome') }}</h1>



<section id="pagina" class="about scrollspy">
  <div class="container">
      <h2><span>Pagina Test</span></h2>
      <h3>Meet the superheroes</h3>
      
  </div>
</section>



  @endsection