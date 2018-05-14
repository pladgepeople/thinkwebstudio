
@extends('layouts.master')
@section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection


@section('nav')navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link on no-full @endsection
@section('content')



 <!-- start page title section -->
 <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{asset('images/d.gif')}}');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{$post->title}}</h1>
                    <span class="text-white opacity6 alt-font">by {{ $post->author->name }}</span>
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
                        <div class="col-md-12 col-sm-12 col-xs-12 blog-details-text last-paragraph-no-margin">
                            
                            
                                <img src="{{url('storage/')}}/{{$post->image}}" alt="" class="width-100 margin-45px-bottom">
                                <p> {!!$post->body!!}</p>

                                {{-- <blockquote class="border-color-deep-pink">
                                    <p>Reading is not only informed by what’s going on with us at that moment, but also governed by how our eyes and brains work to process information. What you see and what you’re experiencing as you read these words is quite different.</p>
                                    <footer>Jason Maria</footer>
                                </blockquote> --}}
    
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-seven-bottom margin-eight-top">
                            <div class="divider-full bg-medium-light-gray"></div>
                        </div>



                        {{-- <div class="col-md-6 col-sm-12 col-xs-12 sm-text-center">
                            <div class="tag-cloud margin-20px-bottom">
                                <a href="blog-grid.html">Advertisement</a>
                                <a href="blog-grid.html">Artistry</a>
                                <a href="blog-grid.html">Blog</a>
                                <a href="blog-grid.html">Conceptual</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 text-right sm-text-center">
                            <div class="social-icon-style-6">
                                <ul class="extra-small-icon">
                                    <li><a class="likes-count" href="#" target="_blank"><i class="fas fa-heart text-deep-pink"></i><span class="text-small">300</span></a></li>
                                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="pinterest" href="http://dribbble.com" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}



                        @include('blog.authorsection')



                       @include('blog.relatedposts')



                    </main>

                    @include('layouts.sidebar',['cats'=>$cats])

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