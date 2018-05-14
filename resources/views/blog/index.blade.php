@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

  @section('nav')navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link on no-full @endsection
@section('content')



 <!-- start page title section -->
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{asset('images/circuito.jpg')}}');">
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
                                <span>Posted on {{$post->created_at->diffForHumans()}}</span>
                                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                                <span><a href="{{url('/blog/categoria')}}/{{$post->category->categoy_id}}" class="text-medium-gray ">{{$post->category->name}} </a>
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
                    <div class="pagination text-small text-uppercase text-extra-dark-gray">
                        <ul>
                            {{-- <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right xs-display-none"></i> Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left xs-display-none"></i></a></li> --}}
                            {{ $posts->links() }}

                        </ul>
                    </div>
                </div>
                <!-- end pagination -->


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