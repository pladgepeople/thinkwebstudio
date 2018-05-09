@extends('layouts.404')
@section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {!! setting('site.title') !!} @endsection

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

  <section class="hero my-5">
    <div class="container my-5">
      <div class="row pannello no-padding">
        <br>
        <br>
        <br>
        

        <h2>Sorry , something do not work correctly!</h2>
      </div>
    </div>
  </section>

@endsection
