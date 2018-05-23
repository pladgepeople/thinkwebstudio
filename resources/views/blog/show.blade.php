
@extends('layouts.master')

@section('title') Thinkweb Studio -  {{ Route::currentRouteName()}} - {{$post->seo_title}} @endsection


@push('meta')
<!-- FACEBOOK OPENGRAPH -->
<meta property="og:url"           content="https://www.thinkwebstudio.com/blog/{{$post->slug}}" />
<meta property="og:type"          content="article" />
<meta property="og:title"         content="{{$post->seo_title}}" />
<meta property="og:description"   content="{{$post->meta_description}}" />
<meta property="og:image"         content="{{url('storage/')}}/{{$post->image}}" />
<meta property="fb:app_id"        content="302167703613815"/>
<meta property="og:locale"        content="it_IT"/>
<meta property="og:site_name"     content="Thinkweb Studio"/>

  <!-- TWITTER OPENGRAPH -->
<meta name="twitter:card"         content="summary_large_image"/>
<meta name="twitter:description"  content="{{$post->meta_description}}"/>
<meta name="twitter:title"        content="{{$post->seo_title}}"/>
<meta name="twitter:site"         content="{{setting('site.link_twitter')}}"/>
<meta name="twitter:image"        content="{{url('storage/')}}/{{$post->image}}"/>
<meta name="twitter:creator"      content="@thinkwebstudio" />
<!-- CSRF Token -->
<meta name="csrf-token"           content="{{ csrf_token() }}">

<meta name="description"         content="{{$post->meta_description}}"/>
<meta name="keywords"             content="{{$post->meta_keywords}}" >
<meta name="author"               content="Thinkweb Studio"/>
@endpush



@section('content')


 <!-- start page title section -->
 <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{asset('images/ice-cream.png')}}');">
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
                            
                                <span>Pubblicato il {{$post->created_at}}</span>
                                <img src="{{url('storage/')}}/{{$post->image}}" alt="" class="width-100 margin-45px-bottom">
                                <p> {!!$post->body!!}</p>

                            
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-seven-bottom margin-eight-top">
                            <div class="divider-full bg-medium-light-gray"></div>
                        </div>


                        <div class="col-md-6 col-sm-12 col-xs-12 sm-text-center">
                            <div class="tag-cloud margin-20px-bottom">
                                    <div class="fb-like"
                                    data-href="https://www.thinkwebstudio.com/blog/{{$post->slug}}"
                                    data-layout="standard"
                                    data-action="like"
                                    data-size="small"
                                    data-show-faces="true">
                                    </div> 
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 text-right sm-text-center">
                            <div class="social-icon-style-6">
                                    <?php $link=$post->slug; ?>
                                <ul class="extra-small-icon">
                                    <li>Share on:</li>
                                    
                                    <li>
                                        <!--Facebook-->
                                    <a class="facebook" title="Condividi su Facebook" target="_blank" onclick="linkfb()">
                                            <i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                         <!--Twitter-->
                                    <a  class="twitter" title="Condividi su Twitter" target="_blank" onclick="linktw()" >
                                        <i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                          <!--Google +-->
                                    <a  class="google" title="Condividi su Google +" target="_blank" onclick="linkgp()">
                                            <i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li>
                                         <!--Linkedin-->
                                    <a  class="linkedin" title="Condividi su Linkedin" target="_blank" onclick="linkin()">
                                            <i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                         <!--Instagram-->
                                    <a  class="instagram" title="Condividi su Instagram" target="_blank" onclick="linkit()">
                                            <i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                    
                                    
{{--                                   
    <li><a class="facebook" href="http://facebook.com" onclick="linkfb()" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
    <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>  --}}
                                </ul>
                            </div>
                        </div>


                        {{-- @include('blog.authorsection') --}}

                        <div class="col-md-12 col-sm-12 col-xs-12 margin-seven-bottom margin-eight-top">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Commenti</span></div>
                           
                                <nav class="blog-pagination p-u-50">
                                <div class="fb-comments" data-href="https://www.thinkwebstudio.com/blog/{{$post->slug}}" data-width="100%" data-numposts="5"></div>
                                </nav>
                        </div>

                       



                       @include('blog.relatedposts')



                    </main>

                    @include('layouts.sidebar',['cats'=>$cats])

        </div>
    </div>
</section>
<!-- end blog content section -->  




@endsection

<script type="text/javascript">
                              
    function linkfb(){
    window.open('http://www.facebook.com/sharer.php?u=https://www.thinkwebstudio.com/blog/{{$post->slug}}' ,'Condivisione Facebook','width=400px,height=350px, toolbar=no, location=no,status=no,menubar=no,scrollbars=no,resizable=no');
    }
    function linktw(){
    window.open('https://twitter.com/share?url=https://www.thinkwebstudio.com/blog/{{$post->slug}}','Condivisione Twitter','width=400px,height=350px, toolbar=no, location=no,status=no,menubar=no,scrollbars=no,resizable=no');
    }
    function linkgp(){
    window.open('https://plus.google.com/share?url=https://www.thinkwebstudio.com/blog/{{$post->slug}}','Condivisione Google','width=400px,height=350px, toolbar=no, location=no,status=no,menubar=no,scrollbars=no,resizable=no');
    }
    function linkin(){
    window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.thinkwebstudio.com/blog/{{$post->slug}}','width=400px,height=350px, toolbar=no, location=no,status=no,menubar=no,scrollbars=no,resizable=no');
    }
    function linkit(){
    window.open('https://twitter.com/share?url=https://www.thinkwebstudio.com/blog/{{$post->slug}}','Condivisione Instagram','width=400px,height=350px, toolbar=no, location=no,status=no,menubar=no,scrollbars=no,resizable=no');
    }
    function linkml(){
    window.open('mailto:?subject=Thinkwebstudio {{$post->title}}&body=Articolo:https://www.thinkwebstudio.com/blog/{{$post->slug}}','Invia Email','width=400px,height=350px, toolbar=no, location=no,status=no,menubar=no,scrollbars=no,resizable=no');
    }
</script>