$(document).ready(function () {

    var options = {
        strings: [
            'интернет магазинов',
            'всяких приколов',
            'простаты',
            'кеков и лелов',
        ],
        typeSpeed: 40,
        backSpeed: 40,
        loop: true,

    };

    var typed = new Typed("#dynamic_changed_text", options);

    $('.past').on('click', function () {
        $('.price-calculation-steps-row').find('.active').removeClass('active');
        $(this).addClass('active');
    });
});
