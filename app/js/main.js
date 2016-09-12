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

    /*------------------------------- Липкие кнопки -----------------------------*/

    var options = {
        offset: 300
    }

    var header = new Headhesive('.my-top-buttons', options)

    $('.headhesive .callback').removeClass('col-md-offset-2');

    /*------------------------------- Отправка почты -----------------------------*/

        $("#ajaxform").submit(function(){ // перехватываем все при событии отправки
        var form = $(this); // запишем форму, чтобы потом не было проблем с this
        var error = false; // предварительно ошибок нет
        form.find('input').each( function(){ // пробежим по каждому полю в форме
            if ($('#number').val() == '') { // если находим пустое (было так ---if ($(this).val() == '') {---)
                sweetAlert("Ой...", "Необходимо указать номер телефона!", "error"); // говорим заполняй!
                error = true; // ошибка
            }
        });
        if (!error) { // если ошибки нет
            $('#callback').modal('toggle');
            var data = form.serialize(); // подготавливаем данные
                        $('#myModal').modal('toggle'); // закрываем модаль
            $.ajax({ // инициализируем ajax запрос
                type: 'POST', // отправляем в POST формате, можно GET
                url: 'mailto.php', // путь до обработчика, у нас он лежит в той же папке
                dataType: 'json', // ответ ждем в json формате
                data: data, // данные для отправки
                beforeSend: function(data) { // событие до отправки
                    form.find('.send').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
                },
                complete: function(data) { // событие после любого исхода
                    swal("Отлично!", "Менеджер-консультант свяжется с Вами в ближайшее время.", "success");
                    //                    alert('Зпасибо за доверие! Менеджер-консультант свяжется с Вами в ближайшее время.'); // пишем что все ок
                }

            });
        }
        return false; // вырубаем стандартную отправку формы
    });

});
