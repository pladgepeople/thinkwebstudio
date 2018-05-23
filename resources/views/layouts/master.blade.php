<!doctype html>
<html lang="{{ app()->getLocale() }}">

    @include('layouts.head')
    


        @include('layouts.navbar')

       

        @yield('content')

        <!-- start footer -->
       @include('layouts.footer')
        <!-- end footer -->

        
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" style="" href="javascript:void(0);"><i class="fa fa-chevron-up " style=""></i></a>
        <!-- end scroll to top -->
 <!-- preloader
    ================================================== -->
   
    <div id="preloader">
            <div id="loader">
                    <div class="line-scale-pulse-out">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div> 
            </div>
        </div>

       @include('layouts.script')
    </body>
</html>
