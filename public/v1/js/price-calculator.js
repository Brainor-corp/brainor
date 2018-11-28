$( document ).on( 'click', '.past', function () {
    let click = $(this);
    let state = $(this).data('state');
    $('.price-calculation-steps-row').find('.active').removeClass('active');
    click.addClass('active');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'post',
        url: '/get-state',
        cache: false,
        data: {
            state: state
        },
        success: function (html) {
            $('.price-calculation-content').html(html);
            check_checked(click);
        },
        error: function (data) {
            console.log(data);
        }
    });
});

$( document ).on('click', '.next', function () {
    let state = $(this).data('state');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'post',
        url: '/get-state',
        cache: false,
        data: {
            state: state
        },
        beforeSend: function(){
            $('.price-calculation-steps-row').find('.active').removeClass('active');
            $('.price-calculation-content').fadeOut('slow').hide();
        },
        success: function (html) {
            switch (state){
                case 1:
                    check_direction(2, $('#step2')[0].getAttribute('data-state'), state);
                    $('#step2')[0].dataset.state = ''+state;

                    $('#step2').addClass('active past');

                    $('.price-calculation-total').text('500');

                    $('.price-calculation-content').html(html);


                    break;
                case 2:
                    check_direction(2, $('#step2')[0].getAttribute('data-state'), state);
                    $('#step2')[0].dataset.state = ''+state;

                    $('#step2').addClass('active past');

                    $('.price-calculation-total').text('1000');


                    $('.price-calculation-content').html(html);
                    break;
                case 4:
                    $('#step3')[0].dataset.state = ''+state;

                    $('#step3').addClass('active past');


                    $('.price-calculation-content').html(html);
                    break;
            }
            $('.price-calculation-content').fadeIn('slow');
        },
        error: function (data) {
            console.log(data);
        }
    });
});

function check_checked(click){
    step = $(click)[0].id.slice(-1);
    step++;
    step_state = $('#step' + step)[0].getAttribute('data-state');

    if(step_state){
        $('.price-calculation-content').find(`[data-state='${step_state}']`).addClass('checked');
    }
}

function check_direction(number, old_state, new_state) {
    if(old_state !== new_state) {
        $('.steps').each(function () {
            step_number = (this.firstChild.id).slice(-1);
            if (step_number > number) {
                $($(this)[0].firstChild).removeClass('past');
                $(this)[0].firstChild.dataset.state = '';
            }
        });
    }
}