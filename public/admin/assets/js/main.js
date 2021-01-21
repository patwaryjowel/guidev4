(function ($) {
    "use strict";
    /*--
        Commons Variables
    -----------------------------------*/
    var $window = $(window),
        $body = $('body'),
        $mainWrapper = $('.main-wrapper');

    /*--
        Header Search
    -----------------------------------*/
    var $headerSearchToggle = $('.header-search-toggle'),
        $headerSearch = $('.header-search'),
        $headerSearchWindowToggle;
    /* Add Open Class on Header Search */
    $headerSearchToggle.on('click', function (e) {
        e.preventDefault();
        $headerSearch.addClass('open');
    });
    /* Remove Open Class From Header Search if Click Outsite Search Area */
    $body.on('click', function (e) {
        if (e.target !== '.header-search-form' && !e.target.closest('.header-search')) {
            $headerSearch.removeClass('open')
        }
    })
    /* Check Window Width and Remove Open Class From Header Search on 768px and avobe */
    $headerSearchWindowToggle = function () {
        if ($window.width() >= 768) {
            $headerSearch.removeClass('open');
        }
    }
    $headerSearchWindowToggle();

    /*--
        SideNav Function
    -----------------------------------*/

    /* SideNav Toggle */
    $('.sidenav-toggle').on('click', function () {
        $mainWrapper.toggleClass('sidenav-open');
    })

    /* SideNav Submenu */
    $('#sidenav-menu').on('click', 'a', function (e) {
        var $this = $(this);
        if ($this.attr('href') === '#') {
            e.preventDefault();
            if ($this.siblings('.sub-menu:visible').length) {
                console.log('visible')
                $this.parent().removeClass('open').find('.sub-menu').slideUp().parent().removeClass('open');
            } else {
                console.log('not visible')
                $this.siblings('.sub-menu').slideDown().parent().addClass('open').siblings().find('.sub-menu').slideUp().parent().removeClass('open');
            }
        }
    });
    /* Remove Open Class From Header Search if Click Outsite Search Area */
    $body.on('click', function (e) {
        if (e.target !== '.sidenav-toggle' && !e.target.closest('.sidenav-toggle, .sidenav-section')) {
            $mainWrapper.removeClass('sidenav-open');
        }
    })
    
    /*--
        Bootstrap
    -----------------------------------*/

    /* Popover */
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });

    /* Tooltip */
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });



    /*--
        Icons
    -----------------------------------*/

    /* Feather */
    feather.replace();


    /*--
        Common Resize function
    -----------------------------------*/
    function resize() {
        $headerSearchWindowToggle();
    }

    /*--
        Window Resize
    -----------------------------------*/
    $window.on('resize', function () {
        resize();
    });





    // Only For Demo please remove this when developing this template
    // Adding active class to nav menu depending on page
    var pageUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('#sidenav-menu a').each(function () {
        if ($(this).attr("href") === pageUrl || $(this).attr("href") === '') {
            $(this).closest('li').addClass("open").parents('li').addClass('open').children('ul').slideDown();
        }
        else if (window.location.pathname === '/' || window.location.pathname === '/index.html') {
            $('#sidenav-menu a[href="index.html"]').closest('li').addClass("active").parents('li').addClass('active').children('ul').slideDown();
        }
    });

})(jQuery);

