$( document ).on( 'click', '.past', function () {
    let click = $(this);
    let finite = $(this).data('finite');
    $('.price-calculation-steps-row').find('.active').removeClass('active');
    click.addClass('active');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'get',
        url: '/get-finite',
        cache: false,
        data: {
            finite: finite
        },
        success: function (html) {
            $('.price-calculation-content').html(html);
        },
        error: function (data) {
            console.log(data);
        }
    });
});

$( document ).on( 'click', '.next', function () {
    let finite = $(this).data('finite');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'get',
        url: '/get-finite',
        cache: false,
        data: {
            finite: finite
        },
        success: function (html) {
            switch (finite){
                case 1:
                    $('#step1')[0].dataset.finite = 0;
                    $('#step2')[0].dataset.finite = 1;
                    $('#step1').removeClass('active');
                    $('#step2').addClass('active past');

                    $('.price-calculation-content').html(html);
                    break;
                case 2:
                    $('#step1')[0].dataset.finite = 0;
                    $('#step2')[0].dataset.finite = 2;
                    $('#step1').removeClass('active');
                    $('#step2').addClass('active past');

                    $('.price-calculation-content').html(html);
                    break;
            }
        },
        error: function (data) {
            console.log(data);
        }
    });


});
