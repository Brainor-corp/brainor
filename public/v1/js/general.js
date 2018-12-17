$(document).ready(function () {
    $("#price-btn").on("click", "a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
    $("#price-btn-fears").on("click", "a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
    $("#question-link-footer").on("click", "a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
    $(function() {

        $(window).scroll(function() {

            if($(this).scrollTop() !=0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();

            }
        });

        $('#toTop').click(function() {

            $('body,html').animate({scrollTop:0},800);

        });

    });
});
$(document).ready(function () {
    $('#SendMailForm').on('submit', function(e){
        e.preventDefault();
        $.ajaxSetup({
            cache: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $.ajax({
            type: 'POST',
            url: '/SendMail',
            data: $('#SendMailForm').serialize(),
            beforeSend: function() {
                $('#waitRegister').removeClass('d-none');
                $('#registerAjaxResult').addClass('d-none');
                console.log($('meta[name="csrf-token"]').attr('content'));
            },
            success: function(result){
                if(result.status == 'success'){
                    $('#registerAjaxResult').removeClass('d-none');
                    $('#registerAjaxResult').removeClass('alert-success');
                    $('#registerAjaxResult').removeClass('alert-warning');
                    $('#registerAjaxResult').addClass('alert-success');
                    $('#registerAjaxResult').html(result.text);
                    $('#waitRegister').addClass('d-none')
                }
            },
            error: function (result) {
                $('#registerAjaxResult').removeClass('d-none');
                $('#registerAjaxResult').removeClass('alert-success');
                $('#registerAjaxResult').removeClass('alert-warning');
                $('#registerAjaxResult').addClass('alert-warning');
                $('#registerAjaxResult').html('Произошла ошибка. Пожалуйста, обновите страницу и попробуйте снова.');
                $('#waitRegister').addClass('d-none');
                console.log(result);
            }
        });
    });
});