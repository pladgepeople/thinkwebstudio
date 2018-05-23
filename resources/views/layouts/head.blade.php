<head>
    <!-- title -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />


    @stack('meta')

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('pofo/') }}/images/favicon.png">
    <link rel="apple-touch-icon" href="{{ asset('pofo/') }}/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('pofo/') }}/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('pofo/') }}/images/apple-touch-icon-114x114.png">
    <!-- animation -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/bootstrap.min.css" />
    <!-- et line icon -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/et-line-icons.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/font-awesome.min.css" />
    <!-- themify icon -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/themify-icons.css">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/swiper.min.css">
    <!-- justified gallery -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/justified-gallery.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/magnific-popup.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pofo/') }}/revolution/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pofo/') }}/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('pofo/') }}/revolution/css/navigation.css">
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/bootsnav.css">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/responsive.css" />

    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/custom.css" />
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/preloader.css" />
    <link rel="stylesheet" href="{{ asset('pofo/') }}/css/colors.css" />
    <!--[if IE]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106063086-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106063086-1');
</script>

    <!-- rich data google -->
    <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "https://thinkwebstudio.com",
            "logo": "https://www.thinkwebstudio.com/storage/settings/May2018/JPiiJeIFBNyjviKHKdvw.png",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+39 3293928895",
                "contactType": "customer service"
            }]
            }
    </script>
    <!-- WhatsHelp.io widget -->
    {{-- <script type="text/javascript">
        (function () {
            var options = {
                facebook: "1700158469998374", // Facebook page ID
                email: "info@thinkwebstudio.com", // Email
                sms: "+329 392 8895", // Sms phone number
                call: "+329 392 8895", // Call phone number
                company_logo_url: "//www.thinkwebstudio.com/storage/images/5NNEQVeqGl29sucKFwpQNUZW0u1OkO3ppN9jzzJu.png", // URL of company logo (png, jpg, gif)
                greeting_message: "Ciao, serve aiuto? invia un messaggio per avere subito assistenza.", // Text of greeting message
                call_to_action: "Contattaci", // Call to action
                button_color: "#129BF4", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "facebook,sms,call,email" // Order of buttons
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script> --}}


    </head>


  <body>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '302167703613815',
      xfbml      : true,
      version    : 'v2.11'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.11&appId=302167703613815";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

{{-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v3.0&appId=302167703613815&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> --}}
  <div id="app"></div>
