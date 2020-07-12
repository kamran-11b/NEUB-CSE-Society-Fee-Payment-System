/* 
     Author : Azhar Hussain Masum
     Email: azharhussain4647@gmail.com
     Website:http://www.azharmasum.com
     Facebook: https://www.facebook.com/azhar.hussainmasum
*/

// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
  $(function () {
                $('#slider').nivoSlider({
                    effect: 'random',
                    slices: 15,
                    boxCols: 8,
                    boxRows: 4,
                    animSpeed: 500,
                    pauseTime: 3000,
                    startSlide: 0,
                    directionNav: true,
                    controlNav: true,
                    controlNavThumbs: false,
                    pauseOnHover: false,
                    manualAdvance: false,
                    randomStart: false

                });
            });
            
            
            
/*-------Multiple item slide start-----------*/
 $(function () {
                $("#multiple .owl-carousel").owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: false,
                    smartSpeed: 300,
                    margin: 10,
                    center: true,
                    dotsEach: true,
                    items: 5,
                    nav: true,

                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            loop: true,
                            autoplay: true,
                            nav: false
                        },
                        600: {
                            items: 2,
                            nav: false,
                            loop: true,
                            autoplay: true,
                            center: false
                        },
                        767: {
                            items: 3,
                            nav: true
                        },
                        1000: {
                            items: 4,
                            nav: true
                        },
                        1200: {
                            items: 5,
                            nav: true,
                            dotsEach: true
                        }
                    }

                });
            });
/*-------Multiple item slide End-----------*/            