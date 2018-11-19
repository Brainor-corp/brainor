var i = 1;
var deleting = false;
var list = [
    'интернет магазинов',
    'всяких приколов',
    'простаты',
    'кеков и лелов',
];
$(document).ready(function () {

    var cursor = $('#cursor');

    setInterval(function() {
        if(!deleting){
            cursor[0].style.display = (cursor[0].style.display == 'none' ? '' : 'none');
        }
    }, 500);
    setInterval(function() {
        if(!deleting){
            rewrite();
        }
    }, 10000);

});

function rewrite() {
    var text = $('#dynamic_changed_text');
    $('#cursor')[0].style.display = '';
    deleting = true;
    interval = setInterval(function() {
        if(text.text().length > 0) {
            text.text(text.text().substring(0, text.text().length - 1));
        }
        else{
            clearInterval(interval);
            var interval1 = setInterval(function() {
                if (text.text().length !== list[i].length) {
                    text.text(text.text() + list[i][text.text().length]);
                }
                else {
                    clearInterval(interval1);
                    (i === list.length -1) ? i=0 : i++;
                    deleting = false;
                }
            }, 150);
        }
    }, 150);
}