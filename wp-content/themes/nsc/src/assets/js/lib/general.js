var $ = jQuery.noConflict();
var sliderFlag = false;

// Animation
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  
  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 200, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});

// SVG hover script
$(function () {
    jQuery('img.svg').each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');
    });
});

jQuery(document).ready(function() {

    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
      $(e.target)
        .prev()
        // .find("i:last-child")
        // .toggleClass("fa-minus fa-plus");
    });

    // Menu
    $( '.enumenu_ul' ).responsiveMenu( {
        menuslide_overlap: true,
        menuslide_direction: 'right',
        onMenuopen: function () {
        }
    } );

    // Modal popup ( Video tag via )
    $('.popup_custom_video_link').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true
    });
    $(document).on('click', '.mfp-close', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

    // Popup with Embaded video
    $('.popup_video_link').magnificPopup({
        //disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // For Parallax     
    //$('.parallax').parallax();


    var siteheader = $('.site-header').offset();
    var $window = $(window);
    $(window).scroll(function() {
        if ($window.scrollTop() >= siteheader.top - 200) {
            $('.banner_logo').addClass('slideUp');
        }
        else {
            $('.banner_logo').removeClass('slideUp'); 
        }
    });

    if ($(window).width() < 767){
        // $('.footer_column .menu').slideUp();
        $('.footer_column h5').click(function(){
            $(this).next().slideToggle("slow");
            $(this).toggleClass("open");
        });        
    }

    // Search box show hide
    $('.search_btn').click(function () {
        $('.top_search_field').fadeIn('slow');
    });
    $('.search_close_btn').click(function () {
        $('.top_search_field').fadeOut('slow');
        $('.search_btn').removeClass('is_clicked');
    });

    /* Blog Slider*/
    $('.blog_slider').slick({       
        speed: 300,
        infinite: true,
        // autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        arrows: true,        
        prevArrow: $(".blog_module .prev"),
        nextArrow: $(".blog_module .next"),
        dots: true,     
        useTransform: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        cssEase: "ease-in-out",
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
    $(".blog_slider .slick-dots").prependTo("#dots_parent");

    /* Testimonial Slider*/
    $('.testimonial_slider').slick({       
        speed: 300,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        arrows: true,
        prevArrow: $(".testimonial .prev"),
        nextArrow: $(".testimonial .next"),
        dots: true,
        useTransform: true,
        slidesToShow: 1,
        cssEase: "ease-in-out"
    });
    $(".testimonial_slider .slick-dots").prependTo("#testimonial_slider_dots");

    /* Latest News Slider*/
    $('#latest_news_slider').slick({       
        speed: 300,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        arrows: true,
        prevArrow: $(".latest_news .prev"),
        nextArrow: $(".latest_news .next"),
        dots: true,
        useTransform: true,
        slidesToShow: 1,
        cssEase: "ease-in-out"
    });
    $("#latest_news_slider .slick-dots").prependTo("#latest_news_slider_dots");
    

    /* Related Products Slider | Post Content ( Style 1 ) */
    $('#related_products_slider').slick({       
        speed: 300,
        infinite: true,
        // autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        arrows: true,        
        prevArrow: $(".related_products .prev"),
        nextArrow: $(".related_products .next"),
        dots: true,     
        useTransform: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        cssEase: "ease-in-out",
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
    $("#related_products_slider .slick-dots").prependTo("#related_products_dots");

    /* Post Content (Style 3) */
    $('#post_content_slider').slick({       
        speed: 300,
        infinite: true,
        // autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        arrows: true,        
        prevArrow: $(".related_products .prev"),
        nextArrow: $(".related_products .next"),
        dots: true,     
        useTransform: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        cssEase: "ease-in-out",
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
    $("#post_content_slider .slick-dots").prependTo("#post_content_dots");

    

    /* Marquee 1 Carousel */
    $('#marquee1_carousel').slick({       
        centerMode: true,
        slidesToShow: 1,        
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        arrows: true
    });

    /* Marquee 2 Carousel */
    $('#marquee2_carousel').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        arrows: true,
        dots: false,
        useTransform: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });    

    // SVG hover script
    $(function () {
        jQuery('img.svg').each(function () {
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function (data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if (typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if (typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass + ' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');
        });
    });  



});    


function colonscreen(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top - 800;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

// external js: isotope.pkgd.js
// init Isotope
var $grid = $('.grid').isotope({
    percentPosition: true,
    itemSelector: '.grid-item',
    //layoutMode: 'fitRows',
    masonry: {
        columnWidth: '.grid-sizer'
    }
});

// init Isotope
$('.marquee .grid').isotope({
    percentPosition: true,
    itemSelector: '.grid-item',    
    masonry: {
        columnWidth: '.grid-sizer'
    }
});



// filter functions
var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
    },
    // show if name ends with -ium
    ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
    }
};
// bind filter button click
$('.filters-button-group').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
});
// change active class on buttons
$('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'a', function() {
        $buttonGroup.find('.active').removeClass('active');
        $( this ).addClass('active');
    });
});

// For Fixed Header
if($(".sticky_header").length){
    var fixedheader = $('.sticky_header').offset().top;
    var headerOuterHeight = $('.sticky_header').outerHeight();
    $(window).scroll(function(){    
        if ($(this).scrollTop() > fixedheader){ 
            $('.sticky_header').addClass('fixed_header'); 
            $('body').css("padding-top", headerOuterHeight);
        }
        else{
            $('.sticky_header').removeClass('fixed_header');
            $('body').css("padding-top", "0");
        }
    });
}
  
// Rotating Images with blink effect of the Marquee_4 (Masonry) 
window.bopRandomizer = {}, function(t, e, i) {    
    i.init = function() {
        i.cache(), i.meetsRequirements() && i.bindEvents();
    }, i.cache = function() {
        i.$c = {
            window: e(t),
            visibleLogos: e("#visible_grid_imgs").children(".grid-item"),
            hiddenLogos: e("#hidden_grid_imgs").children(".grid-item")
        };
    }, i.bindEvents = function() {
        i.$c.window.on("load", i.startInterval());
    }, i.meetsRequirements = function() {
        return i.$c.hiddenLogos.length;
    }, i.getRandomVisibleLogo = function() {
        var t = Math.floor(Math.random() * i.$c.visibleLogos.length);
        return i.$c.visibleLogos.eq(t);
    }, i.startInterval = function() {
        var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 3e3, n = 0, s = i.$c.hiddenLogos.length;
        setInterval(function() {
            n = n < s ? n : 0, i.getRandomVisibleLogo().fadeOut("fast", function() {
                var t = e(this).find(".grid_item_block_bg").splice(0, 1), s = i.$c.hiddenLogos.eq(n).find(".grid_item_block_bg").splice(0, 1);
                e(this).append(s).fadeIn(500), i.$c.hiddenLogos.eq(n).append(t), n++;
            });
        }, t);
    }, e(i.init);
}(window, jQuery, window.bopRandomizer);