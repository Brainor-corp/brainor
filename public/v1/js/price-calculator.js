var currentState = 0;
var steps=[];
var currentPrice = 0;
var currentSelected = [];

$( document ).on( 'click', '.past', function () {
    let click = $(this)[0];
    let step = $(click)[0].id.slice(-1) - 1;
    currentState = steps[step-1] ? steps[step-1]['state'] : 0;
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
            $('.price-calculation-content').animate({'opacity': 0}, 400, function(){
                $(this).html(html).animate({'opacity': 1}, 400);
                $(steps[step]['selected']).each(function () {
                    let choice = $(document.getElementById(this));
                    if(choice[0].tagName === 'DIV'){
                        $(document.getElementById(this)).addClass('checked');
                    }
                    else{
                        $(document.getElementById(this)).prop('checked', true);
                        $(document.getElementById(this)).addClass('priced');
                    }
                });
                $('.price-calculation-total').text(currentPrice);
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
});

$( document ).on('change', '.priceable-cb',function () {
    $(this).each(function () {
        $(this).hasClass('priced') ? $(this).removeClass('priced') : $(this).addClass('priced');
    });
});

$( document ).on('click', '.next', function () {
    var button = this;
    let step = $('.active')[0].id.slice(-1);

    if($('.priceable-cb').length === 0){
        $(button).addClass('priced');
    }

    let buff = [];
    $('.priced').each(function () {
        buff.push($(this)[0].id);
    });
    currentSelected = buff;

    switch(currentState) {
        case 0:
            currentPrice = 0 ;
            switch (button.id) {
                case 'choice1' : currentState=1; break;
                case 'choice2' : currentState=3; break;
                case 'choice3' : currentState=8; break;
            }
            break;
        case 1:
            currentState=2;
            break;
        case 3:
            currentState=4;
            break;
        case 4:
            switch (button.id) {
                case 'choice4' : currentState=6; break;
                default        : currentState=5; break;
            }
            break;
        case 5:
            currentState=7;
            break;
        case 6:
            currentState=7;
            break;
        case 8:
            currentState=9;
            break;
        case 9:
            currentState=10;
            break;
    }
    if(!(steps[step] && steps[step-1]['state'] === currentState && array_eq(steps[step-1]['selected'], currentSelected))){
        steps = steps.slice(0, step-1);
        priceCalc();
    }
    getView(currentState, step);



});

function array_eq(array1, array2) {
    return (array1.length === array2.length) && array1.every(function(element, index) {
        return element === array2[index];
    });
}

function getView(state, step) {
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
            $('.price-calculation-content').animate({'opacity': 0}, 400, function(){
                $(this).html(html).animate({'opacity': 1}, 400);
                if(steps[step] && steps[step-1]['state'] === currentState && array_eq(steps[step-1]['selected'], currentSelected)){
                    $(steps[step]['selected']).each(function () {
                        let choice = $(document.getElementById(this));
                        if(choice[0].tagName === 'DIV'){
                            $(document.getElementById(this)).addClass('checked');
                        }
                        else{
                            $(document.getElementById(this)).prop('checked', true);
                            $(document.getElementById(this)).addClass('priced');
                        }
                        currentPrice = steps[step-1] ? steps[step-1]['price'] : 0;
                        $('.price-calculation-total').text(currentPrice);
                    });
                }

                $('.final-price').text(currentPrice);
                $('.price-calculation-total').text(currentPrice);
            });

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