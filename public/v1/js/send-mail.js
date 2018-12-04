$(document).ready(function () {
    $('#SendMailForm').on('submit', function(e){
        e.preventDefault();
        $.ajaxSetup({
            cache: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $.ajax({
            type: 'POST',
            url: '/SendMail',
            data: $('#SendMailForm').serialize(),
            beforeSend: function() {
                $('#waitRegister').removeClass('d-none');
                $('#registerAjaxResult').addClass('d-none');
                console.log($('meta[name="csrf-token"]').attr('content'));
            },
            success: function(result){
                if(result.status == 'success'){
                    $('#registerAjaxResult').removeClass('d-none');
                    $('#registerAjaxResult').removeClass('alert-success');
                    $('#registerAjaxResult').removeClass('alert-warning');
                    $('#registerAjaxResult').addClass('alert-success');
                    $('#registerAjaxResult').html(result.text);
                    $('#waitRegister').addClass('d-none')
                }
            },
            error: function (result) {
                $('#registerAjaxResult').removeClass('d-none');
                $('#registerAjaxResult').removeClass('alert-success');
                $('#registerAjaxResult').removeClass('alert-warning');
                $('#registerAjaxResult').addClass('alert-warning');
                $('#registerAjaxResult').html('Произошла ошибка. Пожалуйста, обновите страницу и попробуйте снова.');
                $('#waitRegister').addClass('d-none');
                console.log(result);
            }
        });
    });
});
