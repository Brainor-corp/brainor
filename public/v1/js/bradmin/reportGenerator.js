$(document).ready(function () {
    $('#generateReport').on('submit', function (e) {
        e.preventDefault();

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
                dateFrom: $('#dateFrom').val(),
                dateTo: $('#dateTo').val()
            },
            success: function (html) {
                $('.content').html(html);
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
});