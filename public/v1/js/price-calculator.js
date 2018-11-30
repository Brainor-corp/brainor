// $( document ).on( 'click', '.past', function () {
//     let click = $(this);
//     let state = $(this).data('state');
//     $('.price-calculation-steps-row').find('.active').removeClass('active');
//     click.addClass('active');
//
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//
//     $.ajax({
//         type: 'post',
//         url: '/get-state',
//         cache: false,
//         data: {
//             state: state
//         },
//         success: function (html) {
//             $('.price-calculation-content').html(html);
//             check_checked(click);
//         },
//         error: function (data) {
//             console.log(data);
//         }
//     });
// });

var currentState = 0;
var steps=[];

function getView(state) {
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
        beforeSend: function () {
            $('.price-calculation-content').fadeOut('fast');
        },
        success: function (html) {
            $('.price-calculation-content').html(html);
            $('.price-calculation-content').fadeIn('slow');

        }
    });
}

function priceCalc(button){
    $('.priced').each(function () {
        console.log($(this).data('price'));
    });

}

$( document ).on('click', '.next', function () {
    var button = this;
    switch(currentState) {
        case 0:
            $(button).addClass('priced');
            priceCalc(button);
            switch (button.id) {
                case 'choice1' : currentState=1; getView(currentState); break;
                case 'choice2' : currentState=3; getView(currentState); break;
                case 'choice3' : currentState=8; getView(currentState); break;
            }
            break;
        case 1:
            currentState=2;
            getView(currentState);
            break;
        case 3:
            currentState=4;
            getView(currentState);
            break;
        case 4:
            switch (button.id) {
                case 'choice4' : currentState=6; getView(currentState); break;
                default        : currentState=5; getView(currentState); break;
            }
            break;
        case 5:
            currentState=7;
            getView(currentState);
            break;
        case 6:
            currentState=7;
            getView(currentState);
            break;
        case 8:
            currentState=9;
            getView(currentState);
            break;
        case 9:
            currentState=10;
            getView(currentState);
            break;
    }
    // let state = $(this).data('state');
    //
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    //
    // $.ajax({
    //     type: 'post',
    //     url: '/get-state',
    //     cache: false,
    //     data: {
    //         state: state
    //     },
    //     beforeSend: function(){
    //         $('.price-calculation-steps-row').find('.active').removeClass('active');
    //         $('.price-calculation-content').fadeOut('slow').hide();
    //     },
    //     success: function (html) {
    //         switch (currentState){
    //             case 1:
    //                 check_direction(2, $('#step2')[0].getAttribute('data-state'), state);
    //                 $('#step2')[0].dataset.state = ''+state;
    //
    //                 $('#step2').addClass('active past');
    //
    //                 $('.price-calculation-total').html('<span>Текущая стоимость - <span class="text-green">5000</span></span>');
    //
    //                 $('.price-calculation-content').html(html);
    //
    //
    //                 break;
    //             case 2:
    //                 check_direction(2, $('#step2')[0].getAttribute('data-state'), state);
    //                 $('#step2')[0].dataset.state = ''+state;
    //
    //                 $('#step2').addClass('active past');
    //
    //                 $('.price-calculation-total').html('<span>Текущая стоимость - <span class="text-green">5000</span></span>');
    //
    //
    //                 $('.price-calculation-content').html(html);
    //                 break;
    //             case 4:
    //                 $('#step3')[0].dataset.state = ''+state;
    //
    //                 $('#step3').addClass('active past');
    //
    //
    //                 $('.price-calculation-content').html(html);
    //                 break;
    //         }
    //         $('.price-calculation-content').fadeIn('slow');
    //     },
    //     error: function (data) {
    //         console.log(data);
    //     }
    // });
});

// function check_checked(click){
//     step = $(click)[0].id.slice(-1);
//     step++;
//     step_state = $('#step' + step)[0].getAttribute('data-state');
//
//     if(step_state){
//         $('.price-calculation-content').find(`[data-state='${step_state}']`).addClass('checked');
//     }
// }

// function check_direction(number, old_state, new_state) {
//     if(old_state !== new_state) {
//         $('.steps').each(function () {
//             step_number = (this.firstChild.id).slice(-1);
//             if (step_number > number) {
//                 $($(this)[0].firstChild).removeClass('past');
//                 $(this)[0].firstChild.dataset.state = '';
//             }
//         });
//     }
// }