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

    $(".owl-carousel-1").owlCarousel({
        loop: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        navText: ['&larr;', '&rarr;'],
        responsive: {
            1000: {
                items: 1
            }
        }
    });

    $(".owl-carousel-2").owlCarousel({
        loop: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            500: {
                items: 6
            }
        }
    });

    $('textarea').removeAttr('cols');
    $('textarea').removeAttr('rows');
    $('input').removeAttr('cols');
    $('input').removeAttr('rows');

    $('table').addClass('table');

});
