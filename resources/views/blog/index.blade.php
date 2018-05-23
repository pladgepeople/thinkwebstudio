@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

  @push('meta')
<!-- FACEBOOK OPENGRAPH -->
<meta property="og:url"           content="https://www.thinkwebstudio.com/blog" />
<meta property="og:type"          content="article" />
<meta property="og:title"         content="" />
<meta property="og:description"   content="" />
<meta property="og:image"         content="" />
<meta property="fb:app_id"        content="302167703613815"/>
<meta property="og:locale"        content="it_IT"/>
<meta property="og:site_name"     content="Thinkweb Studio"/>

  <!-- TWITTER OPENGRAPH -->
<meta name="twitter:card"         content="summary_large_image"/>
<meta name="twitter:description"  content=""/>
<meta name="twitter:title"        content=""/>
<meta name="twitter:site"         content="{{setting('site.link_twitter')}}"/>
<meta name="twitter:image"        content=""/>
<meta name="twitter:creator"      content="@thinkwebstudio" />
<!-- CSRF Token -->
<meta name="csrf-token"           content="{{ csrf_token() }}">

<meta name="description"         content=""/>
<meta name="keywords"             content="" >
<meta name="author"               content="Thinkweb Studio"/>
@endpush

@section('content')



 <!-- start page title section -->
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{asset('images/purple-starry-sky.jpg')}}');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Blog</h1>
                    <span class="text-white opacity6 alt-font"></span>
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

                    @if(count($posts) > 0)
                    @foreach($posts as $post)             
                <!-- start post item --> 
                <div class="col-md-12 col-sm-12 col-xs-12 blog-post-content margin-60px-bottom xs-margin-30px-bottom xs-text-center">
                    <div class="blog-image">
                        <a href="{{url('/blog')}}/{{$post->slug}}">
                            <img src="{{url('storage/')}}/{{$post->image}}" alt="" />
                        </a>
                    </div>
                    <div class="blog-text border-all display-inline-block width-100">
                        <div class="content padding-50px-all xs-padding-20px-all">
                            <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font">
                                {{-- <span>Posted on {{$post->created_at->diffForHumans()}}</span> --}}
                                <span>Posted on {{$post->created_at}}</span>
                                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                                <span><a href="{{url('/blog/categoria')}}/{{$post->category->id}}" class="text-medium-gray ">{{$post->category->name}} </a>
                                </span>
                            </div>
                            <a href="/blog/{{$post->slug}}" class="text-extra-dark-gray text-uppercase  alt-font text-large font-weight-600 margin-15px-bottom display-block">{{$post->title}}</a>
                            <p class="no-margin">{{$post->excerpt}}</p>
                        </div>
                        <div class="equalize xs-equalize-auto author border-top border-color-extra-light-gray display-table width-100">
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <img src="{{url('storage/')}}/{{ $post->author->avatar }}" alt="" class="border-radius-100 width-30px">
                                        <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="{{url('/blog/autore')}}/{{$post->author->id}}" class="text-medium-gray">{{ $post->author->name }}</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 border-lr padding-15px-all border-color-extra-light-gray xs-no-border">
                                <div class="display-table text-center  width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="name col-md-4 col-sm-4 padding-15px-all">
                                <div class="display-table text-center width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase margin-lr-auto display-table"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post item --> 
                    @endforeach
                      @else
                      <p>non ci sono post</p>
                     @endif
                     
                <!-- start pagination -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-top sm-margin-50px-top wow fadeInUp">

                    {{ $posts->links() }}
                    
                </div>
                <!-- end pagination -->


            </main>

            @include('layouts.sidebar',['cats'=>$cats])
            
        </div>
    </div>
</section>
<!-- end blog content section -->  


    {{-- <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row blog-post-style4">
                <div class="col-md-12 no-padding xs-padding-15px-lr">
                    <ul class="blog-grid blog-3col gutter-large" style="position: relative; height: 1789.5px;">
                        <li class="grid-sizer"></li>
                        @if(count($posts) > 0)
                        @foreach($posts as $post)  
                        <!-- start post item -->
                        <li class="grid-item fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 0px;">
                            <figure>
                                <div class="blog-img bg-extra-dark-gray" style="height:400px;">
                                    <a href="/blog/{{$post->slug}}"><img src="{{url('storage/')}}/{{$post->image}}" alt="" data-no-retina=""></a>
                                </div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-left">
                                        <div class="blog-hover-box vertical-align-bottom">
                                            <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-5px-bottom xs-margin-5px-bottom">{{$post->created_at->diffForHumans()}} | by <a href="{{url('/blog/autore')}}/{{$post->author->id}}" class="text-medium-gray">{{ $post->author->name }}</a></span>
                                            <h6 class="alt-font display-block text-white font-weight-600 no-margin-bottom"><a href="blog-post-layout-03.html" class="text-white">{{$post->title}}</a></h6>
                                            <p class="text-medium-gray margin-10px-top blog-hover-text" style="display: none;">{{ substr($post->excerpt,0,100)}}</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <!-- end post item -->
                        @endforeach
                        @else
                        <p>non ci sono post</p>
                       @endif
                    </ul>
                    <!-- start pagination -->
                    <div class=" text-center margin-100px-top sm-margin-50px-top wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                {{ $posts->links() }}
                        </div>
                    </div>
                    <!-- end pagination -->
                </div>
            </div>
        </div>
    </section> --}}


@endsection