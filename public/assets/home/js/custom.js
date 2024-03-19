//  $(document).ready(function(){
//        $(window).bind('scroll', function() {
//        var navHeight = $( window ).height() - 70;
//              if ($(window).scrollTop() > navHeight) {
//                  $('nav').addClass('fixed');
//              }
//              else {
//                  $('nav').removeClass('fixed');
//              }
//         });
//     });

// nave-menu fix End

// Multiple cards carousel  Start

$('.loop').on('initialized.owl.carousel translate.owl.carousel', function(e) {
    idx = e.item.index;
    $('.owl-item.big').removeClass('big');
    $('.owl-item.medium').removeClass('medium');
    $('.owl-item').eq(idx).addClass('big');
    $('.owl-item').eq(idx - 1).addClass('medium');
    $('.owl-item').eq(idx + 1).addClass('medium');
});

jQuery(document).ready(function($) {
    "use strict";
    $('#testimonials-list').owlCarousel({
        loop: true,
        center: true,
        items: 5,
        margin: 20,
        autoplay: true,
        dots: true,
        autoplayTimeout: 2000,
        smartSpeed: 450,
        nav: true,

        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1170: {
                items: 5
            }

        }

    });
});

// Multiple cards carousel  End //



// Count Start//

let counts_1 = setInterval(updated_1);
let counts_2 = setInterval(updated_2);
let counts_3 = setInterval(updated_3);
let upto_1 = 1;
let upto_2 = 1;
let upto_3 = 1;

function updated_1() {
    var count = document.getElementById("counter_1");
    count.innerHTML = ++upto_1;
    if (upto_1 === 10) {
        clearInterval(counts_1);
    }
}

function updated_2() {
    var count = document.getElementById("counter_2");
    count.innerHTML = ++upto_2;
    if (upto_2 === 100) {
        clearInterval(counts_2);
    }
}

function updated_3() {
    var count = document.getElementById("counter_3");
    count.innerHTML = ++upto_3;
    if (upto_3 === 50) {
        clearInterval(counts_3);
    }
}

// Count End//




// Blog Detail multiple Carousel Start ..//

jQuery(document).ready(function($) {
    var $owl = $('.owl-carousel');
    $owl.children().each(function(index) {
        jQuery(this).attr('data-position', index);
    });

    $owl.owlCarousel({
        center: true,
        nav: true,
        loop: true,
        items: 5,
        margin: 10,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });
    $(document).on('click', '.item', function() {
        $owl.trigger('to.owl.carousel', $(this).data('position'));
    });
});

// Blog detail multiple Carousel End ..//



$(function() {
    var $mwo = $('.marquee-with-options');
    $('.marquee').marquee();
    $('.marquee-with-options').marquee({
        speed: 50,
        gap: 50,
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        duplicated: true,
    });

    //Direction upward
    $('.marquee-vert').marquee({
        direction: 'up',
        speed: 1500
    });

    //pause and resume links
    $('.pause').click(function(e) {
        e.preventDefault();
        $mwo.trigger('pause');
    });
    $('.resume').click(function(e) {
        e.preventDefault();
        $mwo.trigger('resume');
    });
    //toggle
    $('.toggle').hover(function(e) {
            $mwo.trigger('pause');
        }, function() {
            $mwo.trigger('resume');
        })
        .click(function(e) {
            e.preventDefault();
        })
});

$("#continue-btn").click(function() {
    var targetOffset = $("#contact-us-form").offset().top;
    var offsetCorrection = -100;

    $("html, body").animate({
        scrollTop: targetOffset + offsetCorrection
    }, 2000);
});