
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
                        <div class="col-md-12 col-sm-12 col-xs-12 blog-details-text last-paragraph-no-margin">
                            
                            
                            <!-- dropcaps -->
                            <p><span class="first-letter first-letter-block bg-extra-dark-gray text-white">M</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Simply dummy text of the printing and typesetting industry. It has survived not only five centuries. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <!-- end dropcaps -->
                            <figure class="wp-caption alignleft"><img alt="" src="http://placehold.it/350x255"><figcaption class="wp-caption-text">There is no sincerer love than the love of food.</figcaption></figure>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                            <span class="text-extra-dark-gray font-weight-500 margin-15px-bottom display-block text-medium">You can never quit. Winners never quit, and quitters never win</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-seven-bottom margin-eight-top">
                            <div class="divider-full bg-medium-light-gray"></div>
                        </div>



                        <div class="col-md-6 col-sm-12 col-xs-12 sm-text-center">
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
                        </div>



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