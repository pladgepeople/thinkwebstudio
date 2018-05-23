@extends('layouts.master')

  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

@push('meta')
  <meta name="description" content="{!! setting('site.description') !!}">
  <meta name="keywords" content="{!! setting('site.keywords') !!}">
  <meta name="author" content="Thinkweb Studio">
  <!-- OPENGRAPH -->
  <meta property="og:title" content="{!! setting('site.title') !!}" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{Route::currentRouteName()}}" />
  <meta property="og:image" content="{!! setting('site.logo') !!}" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('content')

<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{asset('images/pink.jpg')}}');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-15px-bottom">About Us</h1>
                    <!-- end page title -->
                    <!-- start sub title -->
                    <span class="text-white opacity6 alt-font"></span>
                    <!-- end sub title -->
                </div>
            </div>
        </div>
    </div>
  </section>


<!-- frase  section -->
<section class="no-padding-bottom wow fadeIn" id="section-down" style="visibility: visible; animation-name: fadeIn;">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-9 center-col margin-six-bottom text-center last-paragraph-no-margin">
              <!--<div class="alt-font text-deep-pink margin-10px-bottom text-uppercase text-small">We combine design, thinking and craft</div>-->
              <h5 class="alt-font text-extra-dark-gray font-weight-600">Noi <br>ci mettiamo il <b style=color:orangered;>Cuore</b></h5>
              <p class="width-80 center-col display-inline-block xs-width-100">Dallo sviluppo e gestione Web, alla creazione del Design della comunicazione aziendale, alla pianificazione del Digital Marketing, vi offriamo tutta la consulenza, i servizi ed i mezzi necessari alla realizzazione dei vostri progetti digitali. La nostra filosofia è che ogni cliente sia unico nelle qualità offerte e negli obbiettivi da seguire, e per quanto possano essere sottili le differenze con i suoi competitor, è lì che troviamo la soluzione vincente.
In un mondo in cui le tecnologie informatiche si rinnovano continuamente, la grafica propende sempre verso nuove linee e concetti, ed i social network cambiano faccia ogni giorno, è necessario modellare la comunicazione della propria attività sulle nuove forme adottate dal mercato, nonché trovare un modo per distinguersi e valorizzare i propri punti di forza.</p>
          </div>
      </div>
  </div>
</section>

    <section class="wow fadeIn no-padding main-slider mobile-height content-right-slider" style="visibility: visible; animation-name: fadeIn;">
        <div class="container-fluid">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-6 cover-background sm-height-500px xs-height-350px wow fadeIn" style="background-image: url({{asset('images/heart.png')}}); visibility: visible; animation-name: fadeIn;"></div>
                <div class="swiper-full-screen swiper-container col-md-6 no-padding-lr white-move bg-extra-dark-gray text-center xs-padding-20px-tb wow fadeIn swiper-container-horizontal" style="visibility: visible; animation-name: fadeIn;">
                    <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-939px, 0px, 0px);"><div class="swiper-slide last-paragraph-no-margin swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" style="width: 939px;">
                            <div class="padding-eighteen-all md-padding-eight-all sm-padding-thirteen-all xs-padding-15px-lr">
                                <div class="margin-30px-bottom text-center position-relative">
                                    <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">03</span>
                                    <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">We create designs and technology</p>
                                </div>
                                <h4 class="alt-font text-white">We provide high quality &amp; cost effective services</h4>
                                <p class="width-90 sm-width-95 xs-width-85 center-col">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                                <a href="about-us-classic.html" class="btn btn-small btn-white margin-35px-top"> About company</a>
                            </div>
                        </div>
                        <!-- start slider item -->
                        <div class="swiper-slide last-paragraph-no-margin swiper-slide-active" data-swiper-slide-index="0" style="width: 939px;">
                            <div class="padding-eighteen-all md-padding-eight-all sm-padding-thirteen-all xs-padding-15px-lr">
                                <div class="margin-30px-bottom text-center position-relative">
                                    <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">01</span>
                                    <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">Costruisci la tua immagine digitale</p>
                                </div>
                                <h4 class="alt-font text-white">Design</h4>
                                <p class="width-90 sm-width-95 xs-width-85 center-col">Ancor più delle parole, siamo attratti da ciò che vediamo con i nostri occhi. Effettuiamo il restyling del logo della vostra azienda o lo studiamo ex novo, coordinandolo con tutta la vostra comunicazione visiva, sia digitale che cartacea, ed avendo cura di creare un’identità che rispecchi i vostri valori e comunichi i vostri punti di forza al mercato di interesse.</p>
                                <a href="about-us-classic.html" class="btn btn-small btn-white margin-35px-top"> About company</a>
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide last-paragraph-no-margin swiper-slide-next" data-swiper-slide-index="1" style="width: 939px;">
                            <div class="padding-eighteen-all md-padding-eight-all sm-padding-thirteen-all xs-padding-15px-lr">
                                <div class="margin-30px-bottom text-center position-relative">
                                    <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">02</span>
                                    <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">Marketing Digitale</p>
                                </div>
                                <h4 class="alt-font text-white">Strategy</h4>
                                <p class="width-90 sm-width-95 xs-width-85 center-col">Metodo, pianificazione, creatività, innovazione, passione. Quando si tratta di marketing digitale, tutti gli aspetti della nostra professione entrano in gioco. Ci occupiamo di tutto quello che viene previsto da una valida strategia di inbound marketing, avendo cura di personalizzarne il tono ed i dettagli a misura del cliente e del pubblico che desidera raggiungere.</p>
                                <a href="about-us-classic.html" class="btn btn-small btn-white margin-35px-top"> About company</a>
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide last-paragraph-no-margin swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 939px;">
                            <div class="padding-eighteen-all md-padding-eight-all sm-padding-thirteen-all xs-padding-15px-lr">
                                <div class="margin-30px-bottom text-center position-relative">
                                    <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">03</span>
                                    <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">Acquisisci i migliori sistemi web</p>
                                </div>
                                <h4 class="alt-font text-white">Web Development</h4>
                                <p class="width-90 sm-width-95 xs-width-85 center-col">Nessun ramo della tecnologia è soggetta ad un aggiornamento sistematico e frequente come quello dell’informatica. Per non rendere obsoleta la vostra comunicazione digitale, utilizziamo ed aggiorniamo costantemente i più efficienti sistemi disponibili, al fine di lavorare sempre in modo efficace e preciso ed offrire a voi ed ai vostri clienti il miglior servizio possibile..</p>
                                <a href="about-us-classic.html" class="btn btn-small btn-white margin-35px-top"> About company</a>
                            </div>
                        </div>
                        <!-- end slider item -->
                    <div class="swiper-slide last-paragraph-no-margin swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 939px;">
                            <div class="padding-eighteen-all md-padding-eight-all sm-padding-thirteen-all xs-padding-15px-lr">
                                <div class="margin-30px-bottom text-center position-relative">
                                    <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">01</span>
                                    <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">Let’s make something beautiful</p>
                                </div>
                                <h4 class="alt-font text-white">Unlimited power and customization possibilities</h4>
                                <p class="width-90 sm-width-95 xs-width-85 center-col">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                                <a href="about-us-classic.html" class="btn btn-small btn-white margin-35px-top"> About company</a>
                            </div>
                        </div></div>
                    <!-- start slider pagination -->
                    <div class="swiper-button-next slider-long-arrow-white"></div>
                    <div class="swiper-button-prev slider-long-arrow-white"></div>
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </section>


<!-- about section -->




{{-- <section id="about" class="no-padding wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
  <div class="container-fluid">
      <div class="row equalize xs-equalize-auto">
          <div class="col-lg-4 col-sm-6 col-xs-12 bg-extra-dark-gray wow fadeIn" style="visibility: visible; animation-name: fadeIn; height: 424px;">              
              <div class=" display-table height-100 padding-six-all xs-padding-50px-tb xs-padding-15px-lr">
                  <div class="display-table-cell vertical-align-middle">
                      <h5 class="alt-font text-white">We provide high quality and cost effective services</h5>
                      <p class="text-extra-large font-weight-300 text-extra-light-gray">Since our foundation in 2005 our goal has been to use digital technology to create experiences.</p>
                      <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                      <a href="services-classic.html" class="btn btn-small btn-rounded btn-transparent-white">Explore services</a>
                  </div>                       
              </div>                       
          </div>  
          <div class="col-lg-4 col-sm-6 col-xs-12 bg-extra-dark-gray display-table cover-background xs-height-400px wow fadeIn" style="background-image: url({{asset('images/heart.png')}}); visibility: visible; animation-name: fadeIn; height: 424px;"></div>
                                 
          <div class="col-lg-4 col-sm-6 col-xs-12 bg-extra-dark-gray wow fadeIn" style="visibility: visible; animation-name: fadeIn; height: 424px;">              
            <div class=" display-table height-100 padding-six-all xs-padding-50px-tb xs-padding-15px-lr">
                <div class="display-table-cell vertical-align-middle">
                    <h5 class="alt-font text-white">We provide high quality and cost effective services</h5>
                    <p class="text-extra-large font-weight-300 text-extra-light-gray">Since our foundation in 2005 our goal has been to use digital technology to create experiences.</p>
                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <a href="services-classic.html" class="btn btn-small btn-rounded btn-transparent-white">Explore services</a>
                </div>                       
            </div>                       
        </div> 
      </div>
  </div>
</section> --}}



<!-- clients section -->
<section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
  <div class="container">
      <div class="row">    
          <div class="swiper-slider-clients swiper-container black-move wow fadeIn swiper-container-horizontal" style="visibility: visible; animation-name: fadeIn;">
              <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                  @foreach($clients as $client)
                  <div class="swiper-slide text-center " style="width: 375px;"><img src="{{url('storage/')}}/{{$client->image}}" alt="{{$client->name}}" data-no-retina=""></div>
                  @endforeach
              </div>
          </div>
      </div>    
  </div>
</section>


<!-- team section -->
<section class="wow fadeIn bg-light-gray" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-6 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Chi siamo in realtà?</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600">Dietro la nostra web agency ci sono persone, persone che amano il loro lavoro, e tutto quello che di bello gli gira intorno. Ridere insieme, assumere uno stagista, la maschera di Star Wars sulla scrivania, guidare un'auto ibrida, mangiare buon cibo, l'entusiasmo per un nuovo progetto, giocare anche da grandi, inventare un calendario degli animali, o posare per queste foto, convinti che il bello nasca (QUASI SEMPRE) dal buono.</h5>
            </div>
        </div>
        <div class="row">
            <!-- start team item -->
            @foreach ($teams as $team)
            <div class="col-md-3 col-sm-6 col-xs-12 team-block text-left team-style-1 margin-40px-bottom sm-margin-seven-bottom xs-margin-30px-bottom wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <figure>
                    <div class="team-image xs-width-100">
                        {{-- <img src="{{url('storage/')}}/{{$team->avatar}}" alt="" data-no-retina=""> --}}
                        <img src="{{Voyager::image($team->thumbnail('cropped', 'avatar'))}}" />
                        <div class="overlay-content text-center">
                            <div class="display-table height-100 width-100">
                                <div class="vertical-align-bottom display-table-cell icon-social-small padding-twelve-all">
                                    <span class="text-white text-small display-inline-block no-margin">{!! $team->bio !!}</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                    <a href="{{$team->facebook}}" target="_blank" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{$team->twitter}}" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
                                    <a href="{{$team->linkedin}}" target="_blank" class="text-white"><i class="fab fa-linkedin"></i></a>
                                    <a href="{{$team->instagram}}" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                    </div>
                    <figcaption>
                        <div class="team-member-position margin-20px-top text-center">
                            <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">{{$team->name}}</div>
                            <div class="text-extra-small text-uppercase text-medium-gray">{{$team->profession}}</div>
                        </div>   
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
            @endforeach
        </div> 
    </div>
</section>




    
@endsection



