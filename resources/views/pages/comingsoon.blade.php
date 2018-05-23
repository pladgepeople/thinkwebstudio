<!doctype html>
<html lang="{{ app()->getLocale() }}">

    @include('layouts.head')
    


      



    <section class="no-padding bg-extra-light-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12 full-screen no-padding cover-background sm-display-none" style="background-image: url({{asset('images/')}}/coming-soon-img1.jpg); min-height: 942px;"></div>
                <div class="col-md-6 col-xs-12 full-screen bg-black no-padding" style="min-height: 942px;">
                    <div class="position-relative full-screen" style="min-height: 942px;">
                        <div class="slider-typography text-center xs-overflow-auto">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle padding-three-all xs-padding-15px-all">
                                    <div class="margin-nine-bottom md-margin-50px-bottom xs-margin-25px-bottom"><img class="xs-height-50px" src="{{url('storage/')}}/{{setting('site.logo')}}" data-rjs="{{url('storage/')}}/{{setting('site.logo')}}" width="250" alt="ThinkWebStudio Logo"></div>
                                    <h6 class="font-weight-300 text-white margin-40px-bottom xs-margin-25px-bottom">We’re getting ready to launch</h6>
                                    <div data-enddate="2018/12/14 12:00:00" class="countdown text-center counter-box-3 margin-nine-bottom"><div class="counter-container"><div class="counter-box first"><div class="number">206</div><span>Days</span></div><div class="counter-box"><div class="number">00</div><span>Hours</span></div><div class="counter-box"><div class="number">08</div><span>Minutes</span></div><div class="counter-box last"><div class="number">31</div><span>Seconds</span></div></div></div>
                                    <div class="bg-extra-dark-gray padding-eight-all border-radius-6 width-70 md-width-80 xs-width-100 center-col xs-padding-30px-all">
                                        <h6 class="font-weight-300 text-white margin-20px-bottom xs-margin-15px-bottom">Our website is under construction</h6>
                                        {{-- <p class="text-medium width-70 center-col margin-40px-bottom xs-width-100 xs-margin-15px-bottom">We'll be here soon with our new awesome site, subscribe to be notified.</p> --}}
                                        <form id="subscribenewsletterform" action="javascript:void(0)" method="post" class="search-box2">
                                            <div id="success-subscribe-newsletter" class="no-margin-lr" style="display: none;"></div>
                                            <div class="input-group add-on width-75 center-col sm-width-100">
                                                <input name="email" id="email" class="form-control" placeholder="Enter your email address" type="text">
                                                <div class="input-group-btn">
                                                    <button id="button-subscribe-newsletter" type="submit" class="btn btn-default"><i class="ti-angle-right text-small no-margin" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text-center social-icon-style-10 margin-eight-top xs-margin-30px-top">
                                        <ul class="large-icon no-margin-bottom">
                                            <li><a class="facebook text-white" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i><span></span></a></li>
                                            <li><a class="twitter text-white" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                                            <li><a class="google text-white" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i><span></span></a></li>
                                            <li><a class="instagram text-white" href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                                            <li><a class="linkedin text-white" href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i><span></span></a></li>
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     
      
       
       @include('layouts.script')
    </body>
</html>