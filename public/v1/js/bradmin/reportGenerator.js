$(document).ready(function () {

    $('#generateReport').on('submit', function (e) {
        e.preventDefault();

        var dateFrom = $('#dateFrom').val();
        var dateTo =$('#dateTo').val();

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
            success: function (html) {
                $('.content').html(html);
                document.getElementById('report-start').val(dateFrom);
                document.getElementById('report-end').val(dateTo);
            },
            error: function (err) {
                console.log(err);
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

        $(tasks).each(function () {
            (key < parseFloat($(this).data('index'))) ? key = $(this).data('index') : null;
        });

        key++;

        var even = (key%2!==0) ? "even" : "";
        button.siblings('.task-place').append('<div id="task'+key+'" class="'+ button.data('target') + ' ' + even + ' col-12" data-index="'+key+'">\n' +
            '                                    <input class="mt-3 p-1 w-100" id="task'+key+'-text" type="text" name="text[]">\n' +
            '                                    <label for="task'+key+'-date">Дата выполнения</label>\n' +
            '                                    <input class="m-3 p-1" id="task'+key+'-date" type="date" name="date[]">\n' +
            '                                    <label for="task'+key+'-time">Время выполнения(мин.)</label>\n' +
            '                                    <input class="m-3 p-1" id="task'+key+'-time" type="number" step="5" name="time[]">\n' +
            '                                    <button type="button" class="delete-task btn btn-danger" data-task="task'+key+'">Удалить таск</button>\n' +
            '                                </div>')
    });

});