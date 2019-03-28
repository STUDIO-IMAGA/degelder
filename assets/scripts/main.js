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
        AOS.init({
           offset: 220,
           startEvent: 'load',
           once: 'true',
        });

        // init Smooth Scroll
        var scroll = new SmoothScroll('a[href*="#"]', {
          updateURL: false,
          topOnEmptyHash: true
        });

        $('.slick-slider').slick({
          infinite: true,
          speed: 300,
          fade: true,
          arrows: true,
          responsive: true,
          adaptiveHeight: true,
        });

        function getScrollPixel() {
          var h=document.documentElement,b=document.body,st='scrollTop',sh='scrollHeight';return(h[st]||b[st]);
        }

        document.addEventListener('scroll', function(){

          var depth = Math.floor( getScrollPixel() );

          if( depth > 180){
            document.getElementById("navigation").classList.add('nav-fixed');
          }else{
            document.getElementById("navigation").classList.remove('nav-fixed');
          }
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

        var header_background = $('#header-bg');

        function resize_header_background(){
          var header_sub_height = $('#header-sub').height();
          header_background.css('bottom', header_sub_height);
        }

        function reposition_gallery_arrows(){
          window.setTimeout(function(){
            var slick_image_height = $('.element.gallery .slick-slide img').height();
            $('.element.gallery .slick-arrow').css('top', (slick_image_height / 2) - 23 );
          }, 320);
        }

        window.addEventListener('load', function () {

          // set header image height on load
          resize_header_background();

          // set gallery next/prev arrow position
          reposition_gallery_arrows();

        });

        window.addEventListener('resize', function () {

          // set header image height on load
          resize_header_background();

          // set gallery next/prev arrow position
          reposition_gallery_arrows();

        });

        // Set the offset when entering page with hash present in the url
        window.setTimeout(function(){
          if (location.hash.length !== 0) {
            window.scrollTo(window.scrollX, window.scrollY + 20 );
          }
        }, 0);

        $('.woocommerce').on('click', '.quantity-plus', function (e){
          e.preventDefault();

          $('#update_cart').removeAttr('disabled');

          var target_id = '#' + $(this).attr('data-field-id');
          var current_value = parseInt( $(target_id).val() );
          var max_value = ( $(target_id).attr('max').length > 0 )? parseInt( $(target_id).attr('max') ) : 0 ;

          if ( !isNaN(current_value) && ( (current_value <= max_value) || ( max_value === 0) )  ){

            $(target_id).val(current_value + 1);
            $("#quantity-label").html(current_value + 1);
            $(target_id).trigger('change');

          } else {

            $(target_id).val(1);

          }
        });

        $('.woocommerce').on('click', '.quantity-minus', function (e){
          e.preventDefault();

          $('#update_cart').removeAttr('disabled');

          var target_id = '#' + $(this).attr('data-field-id');
          var current_value = parseInt( $(target_id).val() );
          var min_value = parseInt( $(target_id).attr('min') );

          if ( !isNaN(current_value) && (current_value > min_value) && current_value !== 0 ) {

            $(target_id).val(current_value - 1);
            $("#quantity-label").html(current_value - 1);
            $(target_id).trigger('change');

          } else {

            $(target_id).val(1);

          }
        });
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        $slick_slider = $('.slick-reviews');
        settings = {
          mobileFirst: true,
          infinite: true,
          speed: 300,
          fade: true,
          adaptiveHeight: true,
          prevArrow:'<div class="slick-prev"></div>',
          nextArrow:'<div class="slick-next"></div>',
        };

        // reslick only if it's not slick()
        window.addEventListener('resize', function() {
          if ($(window).width() > 960) {
            if ($slick_slider.hasClass('slick-initialized')) {
              $slick_slider.slick('unslick');
            }
            return;
          }

          if (!$slick_slider.hasClass('slick-initialized')) {
            return $slick_slider.slick(settings);
          }
        });

        window.addEventListener('load', function() {
          if ($(window).width() < 980) {
            $slick_slider.slick(settings);
          }
        });
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Body class but dashes(-) change to underscores(_)
    'woocommerce': {
      init: function() {
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
