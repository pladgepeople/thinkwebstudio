<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
        <div class="col-md-12 col-sm-12 col-xs-12 margin-lr-auto text-center margin-80px-tb sm-margin-50px-tb xs-margin-30px-tb">
            <div class="position-relative overflow-hidden width-100">
                <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray">Related Posts</span>
            </div>
        </div>
        <!-- start post item -->
        @if(count($relatedposts) > 0)
            @foreach ($relatedposts as $relatedpost)
                @if($relatedpost->slug!=$post->slug)

                    <div class="col-md-4 col-sm-6 col-xs-12 last-paragraph-no-margin sm-margin-50px-bottom xs-margin-30px-bottom wow fadeIn">
                        <div class="blog-post blog-post-style1 xs-text-center">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                <a href="{{url('/blog')}}/{{$post->slug}}">
                                    <img src="{{url('storage/')}}/{{$relatedpost->image}}" alt="{{$relatedpost->slug}}" >
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom xs-margin-5px-bottom">{{$relatedpost->created_at->diffForHumans()}} | by <a href="{{url('/blog/autore')}}/{{$post->author->id}}l" class="text-medium-gray">{{$relatedpost->author->name}}</a>
                                </span>
                                <a href="{{url('/blog')}}/{{$post->slug}}" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">{{$relatedpost->title}}</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                <p class="width-90 xs-width-100">{{ substr($relatedpost->excerpt,0,150)}}...</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
        <!-- end post item -->






        {{-- <!-- start post item -->
        <div class="col-md-4 col-sm-6 col-xs-12 last-paragraph-no-margin sm-margin-50px-bottom xs-margin-30px-bottom wow fadeIn" data-wow-delay="0.2s">
            <div class="blog-post blog-post-style1 xs-text-center">
                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                    <a href="blog-post-layout-02.html">
                        <img src="http://placehold.it/700x500" alt="">
                    </a>
                </div>
                <div class="post-details">
                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">03 July 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Herman Miller</a></span>
                    <a href="blog-post-layout-02.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">Good design accelerates the adoption of new ideas.</a>
                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div> 
                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                </div>
            </div>
        </div>
        <!-- end post item -->
        <!-- start post item -->
        <div class="col-md-4 col-sm-6 col-xs-12 last-paragraph-no-margin xs-margin-30px-bottom wow fadeIn" data-wow-delay="0.4s">
            <div class="blog-post blog-post-style1 xs-text-center">
                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                    <a href="blog-post-layout-03.html">
                        <img src="http://placehold.it/700x500" alt="">
                    </a>
                </div>
                <div class="post-details">
                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">22 June 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Hugh Macleod</a></span>
                    <a href="blog-post-layout-03.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">Design is inherently optimistic. That is its power.</a>
                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                </div>
            </div>
        </div>
        <!-- end post item --> --}}
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 margin-eight-top">
        <div class="divider-full bg-medium-light-gray"></div>
    </div>