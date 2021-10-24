$(document).ready(function () {
    $('#btn-daftar').click(function (e) {
        e.preventDefault();
        var form = $('#form-daftar'),
            url = form.attr('action'),
            method = $('input[name=_method]').val() == undefined ? 'POST' : 'POST';
        $.ajax({
            url: url,
            method: method,
            data: form.serialize(),
            beforeSend: function () {
                $(document).find('#error-text').text('');
            },
            success: function (response) {
                if (response.status == 400) {
                    $.each(response.message, function (key, value) {
                        $('.' + key + '_error').text(value[0]);
                        $('html, body').animate({
                            scrollTop: $('#' + key)
                                .offset().top - 200
                        }, 500);
                        return false;
                    });
                } else if (response.status == 200) {
                    form.trigger('reset');
                    Swal.fire({
                        toast: true,
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        showCloseButton: true,
                        position: 'top-end',
                        timer: 1000,
                        timerProgressBar: true,
                    }).then(() => {
                        window.location.href = response.url;
                    });
                }
            }
        })
    })
    $("input").change(function () {
        var input = $(this).attr('name');
        $('.' + input + '_error').text('');
    });
});
