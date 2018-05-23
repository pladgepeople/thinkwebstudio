<aside class="col-md-3 col-sm-12 col-xs-12 pull-right">
 
        {{-- ABOUT US --}}
        <div class="display-inline-block width-100 margin-45px-bottom xs-margin-25px-bottom">
            <form>
                <div class="position-relative">
                    <input type="email" class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left" placeholder="Enter your keywords...">
                    <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fas fa-search no-margin-left"></i></button>
                </div>   
            </form>
        </div>
        <div class="margin-45px-bottom xs-margin-25px-bottom">
            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>{{$post->author->name}}</span></div>
            <a href="{{url('/blog/autore')}}/{{$post->author->id}}"><img src="{{url('storage/')}}/{{ $post->author->avatar }}" alt="" class="margin-25px-bottom"/></a>
            <p class="margin-20px-bottom text-small">{!!$post->author->bio!!}</p>
            <a class="btn btn-very-small btn-dark-gray text-uppercase" href="{{url('/blog/autore')}}/{{$post->author->id}}">Author Posts</a>
        </div>



       

        @include('widgets.categories')


        {{-- BLOCCO PORFOLIO --}}
        {{-- <div class="bg-deep-pink padding-30px-all text-white text-center margin-45px-bottom xs-margin-25px-bottom">
            <i class="fas fa-quote-left icon-small margin-15px-bottom display-block"></i>
            <span class="text-extra-large font-weight-300 margin-20px-bottom display-block">The future belongs to those who believe in the beauty of their dreams.</span>
            <a class="btn btn-very-small btn-transparent-white border-width-1 text-uppercase" href="portfolio-boxed-grid-overlay.html">Explore Portfolio</a>
        </div> --}}

        {{-- @include('widgets.popularpost') --}}

        {{-- @include('widgets.tagscloud') --}}

       {{-- @include('widgets.archive') --}}
        
       
       {{-- NEWSLETTER --}}
        <div class="margin-45px-bottom xs-margin-25px-bottom">
            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Newsletter</span></div>
            <div class="display-inline-block width-100">
                <form>
                    <div class="position-relative">
                        <input type="email" class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left" placeholder="Enter your email..." required>
                        <button type="submit" class="bg-transparent text-large btn position-absolute right-0 top-3"><i class="far fa-envelope no-margin-left"></i></button>
                    </div>   
                </form>
            </div>
        </div>


         {{-- FOLLOW US --}}
         <div class="margin-50px-bottom">
            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Follow Us</span></div>
            <div class="social-icon-style-6 text-center">
                <ul class="extra-small-icon">
                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>


        <div class="margin-50px-bottom">
            <div class="fb-page" data-href="https://www.facebook.com/thinkwebstudio/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/thinkwebstudio/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thinkwebstudio/">Thinkweb Studio</a>
                </blockquote>
            </div>
        </div>

        
        {{-- INSTAGRAM --}}
        <div>
            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Instagram</span>
            </div>
            <div class="instagram-follow-api">
                <ul id="instaFeed-aside"></ul>
            </div>
        </div>

    </aside>