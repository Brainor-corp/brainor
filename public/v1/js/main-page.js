$(document).ready(function () {

    var options = {
        strings: [
            'интернет магазинов',
            'лэндингов',
            'сайтов компаний',
            'веб-приложений',
        ],
        typeSpeed: 40,
        backSpeed: 40,
        loop: true,

    };

    new Typed("#dynamic_changed_text", options);

    $('.fear').on('click', function () {
        $('body,html').animate({scrollTop:$('#myTabContent').offset().top},800);
    });

});

