$(document).ready(function() {


    /*------------------------------- Фильтрация продуктов ----------------------*/

    $(function() {
        $('#Container').mixItUp();
    });

    /*------------------------------- Button to TOP -----------------------------*/

    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
        });
    });

    /*------------------------------- Маска для поля номера телефона -----------------------------*/

    jQuery(function($) {
        $("#number").mask("8 (999) 999-99-99");
    });


    /*------------------------------- Owl.Carousel -----------------------------*/

    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: true,
        navText: ['&larr;', '&rarr;'],
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

});
