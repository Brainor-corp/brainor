var currentState = 0;
var steps=[];
var currentPrice = 0;

$( document ).on( 'click', '.past', function () {
    let click = $(this)[0];
    let step = $(click)[0].id.slice(-1) - 1;
    currentState = steps[step]['state'];
    currentPrice = steps[step-1] ? steps[step-1]['price'] : 0;

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
            state: currentState
        },
        success: function (html) {
            $('.price-calculation-content').html(html);
            if(steps[step]['selected'].length === 1){

                $(steps[step]['selected']).each(function () {
                    $(document.getElementById(this)).addClass('checked')
                });
            }
            else{
                $(steps[step]['selected']).each(function () {
                    $(document.getElementById(this)).prop('checked', true)
                });
            }
        },
        error: function (data) {
            console.log(data);
        }
    });
});

$( document ).on('click', '.next', function () {
    var button = this;
    let step = $('.active')[0].id.slice(-1);
    steps = steps.slice(0, step-1);
    switch(currentState) {
        case 0:
            $(button).addClass('priced');
            priceCalc();
            currentPrice = 0 ;
            switch (button.id) {
                case 'choice1' : currentState=1; getView(currentState); break;
                case 'choice2' : currentState=3; getView(currentState); break;
                case 'choice3' : currentState=8; getView(currentState); break;
            }
            break;
        case 1:
            $(button).addClass('priced');
            priceCalc();
            currentState=2;
            getView(currentState);
            break;
        case 3:
            $(button).addClass('priced');
            priceCalc();
            currentState=4;
            getView(currentState);
            break;
        case 4:
            $(button).addClass('priced');
            priceCalc();
            switch (button.id) {
                case 'choice4' : currentState=6; getView(currentState); break;
                default        : currentState=5; getView(currentState); break;
            }
            break;
        case 5:
            $('input:checked').addClass('priced');
            priceCalc();
            currentState=7;
            getView(currentState);
            break;
        case 6:
            $('input:checked').addClass('priced');
            priceCalc();
            currentState=7;
            getView(currentState);
            break;
        case 8:
            $(button).addClass('priced');
            priceCalc();
            currentState=9;
            getView(currentState);
            break;
        case 9:
            $(button).addClass('priced');
            priceCalc();
            currentState=10;
            getView(currentState);
            break;
    }
});

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
            $('.final-price').text(currentPrice);
            $('.price-calculation-total').text(currentPrice);
        }
    });
}

function priceCalc(){
    let arr = [];
    let selected = [];
    $('.priced').each(function () {
        currentPrice += parseFloat($(this).data('price'));
        selected.push($(this)[0].id);
    });
    arr['price'] = currentPrice;
    arr['selected'] = selected;
    arr['state'] = currentState;
    steps.push(arr);
}