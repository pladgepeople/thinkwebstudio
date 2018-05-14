
 <!-- start header -->
 <header>
        <!-- start navigation -->
        <nav class="navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link">
            <div class="container-fluid nav-header-container">
                <div class="row">
                    <!-- start logo -->
                    <div class="col-md-2 col-xs-5">
                        <a href="index.html" title="Pofo" class="logo">
                            <img src="{{url('storage/')}}/{{setting('site.logo')}}"  class="logo-dark" alt="ThinkWebStudio">
                            <img src="{{ asset('pofo/') }}/images/logo-white.png"  alt="ThinkWebStudio" class="logo-light default">
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
                                        <li class="dropdown megamenu-fw">
                                               <a href="{{url('/')}}" title="Home" >Home</a>
                                           </li>
                                           <!-- end menu item -->
                                           <li class="dropdown">
                                               <a  href="{{url('/about')}}" title="About Us">About Us</a>
                                           </li>
                                           <li class="dropdown">
                                               <a  href="{{url('/blog')}}" title="Blog">Blog </a>
                                           </li>
                                           <li class="dropdown">
                                               <a href="{{url('/services')}}" title="Services">Services</a>
                                           </li>
                                           <li class="dropdown">
                                               <a href="{{url('/portfolio')}}" title="Portfolio">Portfolio </a>
                                           </li>
                                           <li class="dropdown">
                                               <a href="{{url('/contact')}}" title="Contact">Contact </a>
                                           </li>
                                       </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-5 width-auto">
                        <div class="header-searchbar">
                            <a href="#search-header" class="header-search-form text-white"><i class="fas fa-search search-button"></i></a>
                            <!-- search input-->
                            <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                                <div class="search-form position-relative">
                                    <button type="submit" class="fas fa-search close-search search-button"></button>
                                    <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                                </div>
                            </form>
                        </div>
                        <div class="header-social-icon xs-display-none">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://dribbble.com/" title="Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a>                          
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation --> 
    </header>

{{-- <header>
        <!-- start navigation -->
        <nav class="navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link">
            <div class="container-fluid nav-header-container">
                <div class="row">
                    <!-- start logo -->
                    <div class="col-md-2 col-xs-5">
                            <a href="{{url('/')}}" title="Pofo" class="logo">
                                <img src="{{url('storage/')}}/{{setting('site.logo')}}" data-rjs="{{url('storage/')}}/{{setting('site.logo')}}" class="logo-dark default" alt="ThinkWebStudio">
                                <img src="{{ asset('pofo/') }}/images/logo-white.png" data-rjs="{{ asset('pofo/') }}/images/logo-white@2x.png" alt="ThinkWebStudio" class="logo-light"></a>
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
                                 <li class="dropdown megamenu-fw">
                                        <a href="{{url('/')}}" title="Home" >Home</a>
                                    </li>
                                    <!-- end menu item -->
                                    <li class="dropdown">
                                        <a  href="{{url('/about')}}" title="About Us">About Us</a>
                                    </li>
                                    <li class="dropdown">
                                        <a  href="{{url('/blog')}}" title="Blog">Blog </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{url('/services')}}" title="Services">Services</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{url('/portfolio')}}" title="Portfolio">Portfolio </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{url('/contact')}}" title="Contact">Contact </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-5 width-auto">
                            <div class="header-searchbar">
                                <a href="#search-header" class="header-search-form text-white"><i class="fas fa-search search-button"></i></a>
                                <!-- search input-->
                                <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                                    <div class="search-form position-relative">
                                        <button type="submit" class="fas fa-search close-search search-button"></button>
                                        <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                                    </div>
                                </form>
                            </div>
                            <div class="header-social-icon xs-display-none">
                                <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://dribbble.com/" title="Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a>                          
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->
  --}}
