/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var IMAGA = {
    // All pages
    'common': {
      init: function() {

        // init Animate On Scroll
        // AOS.init({
        //    offset: 220,
        //    startEvent: 'load',
        //    once: 'true',
        // });

        // init Smooth Scroll
        var scroll = new SmoothScroll('a[href*="#"]', {
          updateURL: false,
          offset: -2,
          topOnEmptyHash: true
        });

        function getScrollPixel() {
          var h=document.documentElement,b=document.body,st='scrollTop',sh='scrollHeight';return(h[st]||b[st]);
        }

        document.addEventListener('scroll', function(){

          var s= Math.floor( getScrollPixel() );

          if( s > 180){
            document.getElementById("navigation").classList.add('nav-fixed');
          }else{
            document.getElementById("navigation").classList.remove('nav-fixed');
          }
        });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

        // Set the offset when entering page with hash present in the url
        // window.setTimeout(function(){
        //   if (location.hash.length !== 0) {
        //     window.scrollTo(window.scrollX, window.scrollY + 2 );
        //   }
        // }, 0);

        $('.slick-slider').slick({
          infinite: true,
          speed: 300,
          fade: true,
          arrows: true,
          adaptiveHeight: true
        });

      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Body class but dashes(-) change to underscores(_)
    'single_product': {
      init: function() {

        $('.product-quantity-plus').click(function(e){
          e.preventDefault();

          var target = $(this).attr('field');
          var current_value = parseInt( $('input[name='+target+']').val() );
          var max_value = ( $('input[name='+target+']').attr('max').length > 0 )? parseInt( $('input[name='+target+']').attr('max') ) : 0 ;

          if ( !isNaN(current_value) && ( (current_value <= max_value) || ( max_value === 0) )  ){

            $('input[name='+target+']').val(current_value + 1);
            $('.product-quantity-label').html(current_value + 1);

          } else {

            $('input[name='+target+']').val(1);
            $('.product-quantity-label').html(1);

            // Apply disabled style

          }
        });

        $(".product-quantity-minus").click(function(e) {
          e.preventDefault();

          var target = $(this).attr('field');
          var current_value = parseInt( $('input[name='+target+']').val() );
          var min_value = parseInt( $('input[name='+target+']').attr('min') );

          if ( !isNaN(current_value) && current_value > min_value ) {

            $('input[name='+target+']').val(current_value - 1);
            $('.product-quantity-label').html(current_value - 1);

          } else {

            $('input[name='+target+']').val(1);
            $('.product-quantity-label').html(1);

            // Apply disabled style

          }
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = IMAGA;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
