$(document).ready(function () {

    $('#generateReport').on('submit', function (e) {
        e.preventDefault();

        var dateFrom = $('#dateFrom').val();
        var dateTo = $('#dateTo').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: '/TrelloReportPreview',
            cache: false,
            data: {
                dateFrom: dateFrom,
                dateTo: dateTo
            },
            beforeSend: function(){
                $('.generate-btn').prop('disabled', true).css('cursor', 'not-allowed').prepend('<div class="loader"></div>');
            },
            success: function (html) {
                $('.content').html(html);
                $(document.getElementById('report-start')).val(dateFrom);
                $(document.getElementById('report-end')).val(dateTo);
            },
            error: function (err) {
                console.log(err);
                $('.generate-btn').prop('disabled', false).css('cursor', 'pointer').text("Произошла ошибка.");
                $('.loader').remove();
            }
        });
    });

    $( document ).on('click', '.company-header', function () {
        var parent = $(this).closest('.company');
        parent.find('.collapse').collapse('toggle');
    });

    $( document ).on('click', '.delete-task', function () {
        var button = $(this);
        var task = document.getElementById(button.data('task'));
        task.remove();
    });

    $( document ).on('click', '.create-task', function () {
        var button = $(this);
        var key = 0;
        var tasks = document.getElementsByClassName(button.data('target'));
        var company = button.data('target');

        $(tasks).each(function () {
            (key < parseFloat($(this).data('index'))) ? key = $(this).data('index') : null;
        });

        key++;

        var even = (key%2!==0) ? "even" : "";

        button.siblings('.task-place').append('' +
            '<div id="task'+key+'" class="' + even + ' col-12" data-index="'+key+'">\<n></n>' +
                '<input class="mt-3 p-1 w-100" id="task'+key+'-text" type="text" name="'+company+'['+key+'][description]">\<n></n>' +
                '<label for="task'+key+'-date">Дата выполнения</label>\<n></n>' +
                '<input class="m-3 p-1" id="task'+key+'-date" type="date" name="'+company+'['+key+'][date]">\<n></n>' +
                '<label for="task'+key+'-time">Время выполнения(мин.)</label>\<n></n>' +
                '<input class="m-3 p-1" id="task'+key+'-time" type="number" step="5" name="'+company+'['+key+'][minutes]">\<n></n>' +
                '<button type="button" class="delete-task btn btn-danger" data-task="task'+key+'">Удалить таск</button>\n' +
            '</div>')
    });
});