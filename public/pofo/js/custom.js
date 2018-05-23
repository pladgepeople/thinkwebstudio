  
 (function($) { 

    "use strict";
    
    var cfg = {
        scrollDuration : 800, // smoothscroll duration
       
    },

    $WIN = $(window);

    // Add the User Agent to the <html>
    // will be used for IE10 detection (Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0))
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);

/* Preloader
    * -------------------------------------------------- */
   var clPreloader = function() {
        
    $("html").addClass('cl-preload');

    $WIN.on('load', function() {

        //force page scroll position to top at page refresh
        // $('html, body').animate({ scrollTop: 0 }, 'normal');

        // will first fade out the loading animation 
        $("#loader").fadeOut("slow", function() {
            // will fade out the whole DIV that covers the website.
            $("#preloader").delay(100).fadeOut("slow");
        }); 
        
        // for hero content animations 
        $("html").removeClass('cl-preload');
        $("html").addClass('cl-loaded');
    
    });
};
 /* Smooth Scrolling
    * ------------------------------------------------------ */
   var clSmoothScroll = function() {
        
    $('.smoothscroll').on('click', function (e) {
        var target = this.hash,
        $target    = $(target);
        
            e.preventDefault();
            e.stopPropagation();

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, cfg.scrollDuration, 'swing').promise().done(function () {

            // check if menu is open
            if ($('body').hasClass('menu-is-open')) {
                $('.header-menu-toggle').trigger('click');
            }

            window.location.hash = target;
        });
    });

};
   /* Initialize
    * ------------------------------------------------------ */
   (function ssInit() {
        
    clPreloader();
    
    clSmoothScroll();
    
})();
    
    
})(jQuery);



