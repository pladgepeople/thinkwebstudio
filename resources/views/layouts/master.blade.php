<!doctype html>
<html lang="{{ app()->getLocale() }}">

   @include('layouts.head')

    <body class="combustion-yellow-skin">


        <!-- Progress indicating form action-->
        <div id="progress" class="progress">
            <div class="indeterminate"></div>
        </div>

        <!-- Spinner-->
        <div class="spinner-container valign-wrapper">
            <div class="spinner-double-dot-out"></div>
        </div>


        <!-- Navigation bar-->
        @include('layouts.navbar')

        
        <!-- CONTENUTO PAGINA-->
        @yield('content')

       @include('layouts.footer')


       @include('layouts.script')

    </body>

    
</html>