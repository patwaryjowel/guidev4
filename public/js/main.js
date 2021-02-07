(function ($) {
    "use strict";
   
    
    
    /*--
        Menu Sticky
    -----------------------------------*/
    var windows = $(window);
    var sticky = $('.header-sticky');

    windows.on('scroll', function() {
        var scroll = windows.scrollTop();
        if (scroll < 300) {
            sticky.removeClass('is-sticky');
        }else{
            sticky.addClass('is-sticky');
        }
    });

    
    /*--
        Mobile Menu
    ------------------------*/
    var menuNav = $('nav.main-navigation');
    menuNav.meanmenu({
        meanScreenWidth: '991',
        meanMenuContainer: '.mobile-menu',
        meanMenuClose: '<span class="menu-close"></span>',
        meanMenuOpen: '<span class="menu-bar"></span>',
        meanRevealPosition: 'right',
        meanMenuCloseSize: '0',
    });

    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top - 75
            }, 1000);
            return false;
          }
        }
        });
    
    /*-------------------------
    owl active
--------------------------- */    
$('.slider-active').owlCarousel({
    loop:true,
    items:1,
    autoplay: false,
    dots:true,
    nav:true,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1},
        1200:{items:1}
    }
}); 
    
    /*-------------------------
    owl active
--------------------------- */    
$('.place-item-gallery').owlCarousel({
    loop:true,
    items:1,
    autoplay: false,
    dots:true,
    nav:true,
    navText:[ 
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>'
    ],
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1},
        1200:{items:1}
    }
}); 
    
 
    /*---------------------------
        Fancybox Active
    ------------------------------- */	   
    $('[data-fancybox="gallery=images"]').fancybox({
        hash: false,
    });
    
 
    
    /*==================================
    	23. Mesonry Activation
    ===================================*/

    $('.masonry-activation').imagesLoaded(function () {
        // init Isotope
        var $grid = $('.masonry-wrap').isotope({
            itemSelector: '.masonary-item',
            percentPosition: true,
            transitionDuration: '0.7s',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 2,
                percentPosition: true
            }
        });

    });
    
    /*------- 
        Testimonial Slider Active 
    ----------------------------------*/
     $('.testimonial-slider-2').owlCarousel({
        smartSpeed: 1000,
        nav: false,
         dots:false,
        navText: ['<span class="fs1" data-icon="&#x34;"></span>', '<span class="fs1" data-icon="&#x35;"></span>'],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });
    
    
    // JavaScript code

    $('.recevice-select').on('change', function () {
        var selectValue = $(this).val();
        //console.log($(this).val());
        $('#' + selectValue).addClass('d-block').removeClass('d-none').siblings().removeClass('d-block').addClass('d-none');
    });
    
    
    
    //                                          
    
    

    
    
    
    
    
    
/*    
    $('.form .stages label').click(function() {
        var radioButtons = $('.form input:radio');
        var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));
        selectedIndex = selectedIndex + 1;
    });

    $('.form button').click(function() {
        var radioButtons = $('.form input:radio');
        var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));

        selectedIndex = selectedIndex + 2;

        $('.form input[type="radio"]:nth-of-type(' + selectedIndex + ')').prop('checked', true);

        if (selectedIndex == 6) {
            $('button').html('Submit');
        }
    });
    */

 
    
    
    
    
    
    
    
})(jQuery);	









