$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    $('#btn-login').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + '/login/validation',
            type: "POST",
            data: {
                username: $('#username').val(),
                password: $('#password').val(),
            },
            beforeSend: function () {
                $(document).find('#error-text').text('');
            },
            success: function (data) {
                if (data.status == 400) {
                    $.each(data.message, function (prefix, val) {
                        $('.' + prefix + '_error').text(val[0]);
                    });
                } else if (data.status == 404) {
                    $('.username_error').text(data.message);
                } else if (data.status == 401) {
                    $('.password_error').text(data.message);
                } else if (data.status == 200) {
                    $("#form-login").submit();
                }
            }
        })
    })
    $("input").change(function () {
        var input = $(this).attr('name');
        $('.' + input + '_error').text('');
    });
});
