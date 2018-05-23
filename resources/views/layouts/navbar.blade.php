<header>
<!-- start navigation -->
 <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light bg-transparent white-link" style="z-index:11;">
    <div class="container-fluid nav-header-container" >
        <div class="row" style="padding-left:12px;padding-right:12px;">
            <!-- start logo -->
            <div class="col-md-2 col-xs-4">
                <a href="{{url('/')}}" title="ThinkWebStudio Logo" class="logo">
                    <img src="{{url('storage/')}}/{{setting('site.logo')}}" data-rjs="{{url('storage/')}}/{{setting('site.logo')}}" class="logo-dark" alt="ThinkWebStudio">

                    <img src="{{url('storage/')}}/{{setting('site.logonegativo')}}" data-rjs="{{url('storage/')}}/{{setting('site.logonegativo')}}" alt="ThinkWebStudio" class="logo-light default">
                </a>
            </div>
            <!-- end logo -->
            <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                    <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                        <!-- start menu item -->
                        <li class=""><a href="{{url('/')}}">Home</a></li><!-- end menu item -->
                        <li class=""><a href="{{url('/about')}}">About Us</a></li>
                        <li class=""><a href="{{url('/services')}}">Services</a></li>
                        {{-- <li class="dropdown simple-dropdown"><a href="{{url('/services')}}">Services</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">web dev </a></li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">grafica </a></li>
                            </ul>
                        </li> --}}
                        <li class=""><a href="{{url('/portfolio')}}">Portfolio</a></li>
                        <li class=""><a href="{{url('/blog')}}" title="Blog">Blog</a></li>

                        <li class=""><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-xs-5 width-auto">
                <div class="header-searchbar">
                    <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                    <!-- search input-->
                    <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                        <div class="search-form position-relative">
                            <button type="submit" class="fas fa-search close-search search-button"></button>
                            <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                        </div>
                    </form>
                </div>
                <div class="heder-menu-button sm-display-none">
                    <button class="navbar-toggle mobile-toggle right-menu-button" type="button" id="showRightPush">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end navigation -->
<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
    <button class="close-button-menu side-menu-close" id="close-pushmenu"></button>
    <div class="display-table padding-twelve-all height-100 width-100 text-center">
        <div class="display-table-cell vertical-align-top padding-70px-top position-relative">
            <div class="row">
                <div class="col-lg-12 margin-70px-bottom">
                    <img src="{{asset('images/sun.jpg')}}" alt="" />
                </div>
                <div class="col-lg-12 margin-70px-bottom">
                    <img src="{{asset('images/glitch-verde.jpg')}}" alt="" />
                </div>
                <div class="col-lg-12">
                    <h5 class="alt-font text-extra-dark-gray"><span class="display-block font-weight-300 text-dark-gray">WE ARE</span><strong>ThinkWebStudio</strong></h5>
                </div>
                <div class="col-lg-12">
                    <a href="{{url('contact')}}" class="btn btn-deep-pink btn-small text-extra-small border-radius-4"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i>Contact Now</a>
                </div>
                <div class="col-md-12 margin-100px-top text-center">
                    <div class="icon-social-medium margin-three-bottom">
                        <a href="https://www.facebook.com/" target="_blank" class="text-extra-dark-gray text-deep-pink-hover margin-one-lr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/" target="_blank" class="text-extra-dark-gray text-deep-pink-hover margin-one-lr"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://instagram.com/" target="_blank" class="text-extra-dark-gray text-deep-pink-hover margin-one-lr"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://linkedin.com" target="_blank" class="text-extra-dark-gray text-deep-pink-hover margin-one-lr"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                        {{-- <a href="https://www.tumblr.com/" target="_blank" class="text-extra-dark-gray text-deep-pink-hover margin-one-lr"><i class="fab fa-tumblr" aria-hidden="true"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end navigation -->
</header>
