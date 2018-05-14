<!doctype html>
<html class="no-js" lang="en">
   

   @include('layouts.head')


    <body>
        <!-- start navigation -->
        @include('layouts.navbar')
        <!-- end navigation --> 

        
            @yield('content')
       

        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->


        <!-- javascript libraries -->
        @include('layouts.script')
    </body>
</html>
