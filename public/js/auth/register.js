$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    $('#btn-daftar').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + '/register/validation',
            type: "POST",
            data: {
                nik: $('#nik').val(),
                no_kk: $('#no_kk').val(),
                nama_lengkap: $('#nama_lengkap').val(),
                tempat_lahir: $('#tempat_lahir').val(),
                tgl_lahir: $('#tgl_lahir').val(),
                nama_ibu: $('#nama_ibu').val(),
                telp: $('#telp').val(),
                kewarganegaraan: $('#kewarganegaraan').val(),
                username: $('#username').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                password_confirmation: $('#password_confirmation').val(),
            },
            beforeSend: function () {
                $(document).find('#error-text').text('');
            },
            success: function (data) {
                if (data.status == 400) {
                    $.each(data.error, function (prefix, val) {
                        $('.' + prefix + '_error').text(val[0]);
                        $('html, body').animate({
                            scrollTop: $('#' + prefix)
                                .offset().top - 200
                        }, 500);
                        return false;
                    });
                } else {
                    $("#form-daftar").submit();
                }
            }
        })
    })
    $("input").change(function () {
        var input = $(this).attr('name');
        $('.' + input + '_error').text('');
    });
});
