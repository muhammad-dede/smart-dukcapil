$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    // Profil
    $("#btn-update-profil").on("click", function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + '/app/profil/update/validation',
            method: "POST",
            data: new FormData($("#form-profil-update")[0]),
            processData: false,
            contentType: false,
            beforeSend: function () {
                $(document).find('#error-text').text('');
            },
            success: function (response) {
                if (response.status == 400) {
                    $.each(response.message, function (prefix, val) {
                        $('.' + prefix + '_error').text(val[0]);
                        $('html, body').animate({
                            scrollTop: $('#' + prefix)
                                .offset().top - 200
                        }, 1000);
                        return false;
                    });
                } else if (response.status == 200) {
                    $("#form-profil-update").submit();
                }
            }
        });
    });

    // Username
    $("#btn-edit-username").on("click", function (e) {
        e.preventDefault();
        $("#profil-username").addClass("d-none");
        $("#profil-username-button").addClass("d-none");
        $("#profil-username-edit").removeClass("d-none");
    });

    $("#btn-cancel-edit-username").on("click", function (e) {
        e.preventDefault();
        $("#profil-username").removeClass("d-none");
        $("#profil-username-button").removeClass("d-none");
        $("#profil-username-edit").addClass("d-none");
    });

    $("#btn-update-username").on("click", function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + '/app/profil/update-username/validation',
            method: "POST",
            data: new FormData($("#form-update-username")[0]),
            processData: false,
            contentType: false,
            beforeSend: function () {
                $(document).find('#error-text').text('');
            },
            success: function (response) {
                if (response.status == 400) {
                    $.each(response.message, function (prefix, val) {
                        $('.' + prefix + '_error').text(val[0]);
                        $('html, body').animate({
                            scrollTop: $('#' + prefix)
                                .offset().top - 200
                        }, 1000);
                        return false;
                    });
                } else if (response.status == 401) {
                    $(".password_confirmation_username_error").text(response.message);
                } else if (response.status == 200) {
                    $("#form-update-username").submit();
                }
            }
        });
    });

    // Email
    $("#btn-edit-email").on("click", function (e) {
        e.preventDefault();
        $("#profil-email").addClass("d-none");
        $("#profil-email-button").addClass("d-none");
        $("#profil-email-edit").removeClass("d-none");
    });

    $("#btn-cancel-edit-email").on("click", function (e) {
        e.preventDefault();
        $("#profil-email").removeClass("d-none");
        $("#profil-email-button").removeClass("d-none");
        $("#profil-email-edit").addClass("d-none");
    });

    $("#btn-update-email").on("click", function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + '/app/profil/update-email/validation',
            method: "POST",
            data: new FormData($("#form-update-email")[0]),
            processData: false,
            contentType: false,
            beforeSend: function () {
                $(document).find('#error-text').text('');
            },
            success: function (response) {
                if (response.status == 400) {
                    $.each(response.message, function (prefix, val) {
                        $('.' + prefix + '_error').text(val[0]);
                        $('html, body').animate({
                            scrollTop: $('#' + prefix)
                                .offset().top - 200
                        }, 1000);
                        return false;
                    });
                } else if (response.status == 401) {
                    $(".password_confirmation_email_error").text(response.message);
                } else if (response.status == 200) {
                    $("#form-update-email").submit();
                }
            }
        });
    });

    // Password
    $("#btn-edit-password").on("click", function (e) {
        e.preventDefault();
        $("#profil-password").addClass("d-none");
        $("#profil-password-button").addClass("d-none");
        $("#profil-password-edit").removeClass("d-none");
    });

    $("#btn-cancel-edit-password").on("click", function (e) {
        e.preventDefault();
        $("#profil-password").removeClass("d-none");
        $("#profil-password-button").removeClass("d-none");
        $("#profil-password-edit").addClass("d-none");
    });

    $("#btn-update-password").on("click", function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + '/app/profil/update-password/validation',
            method: "POST",
            data: new FormData($("#form-update-password")[0]),
            processData: false,
            contentType: false,
            beforeSend: function () {
                $(document).find('#error-text').text('');
            },
            success: function (response) {
                if (response.status == 400) {
                    $.each(response.message, function (prefix, val) {
                        $('.' + prefix + '_error').text(val[0]);
                        $('html, body').animate({
                            scrollTop: $('#' + prefix)
                                .offset().top - 200
                        }, 1000);
                        return false;
                    });
                } else if (response.status == 401) {
                    $(".current_password_error").text(response.message);
                } else if (response.status == 200) {
                    $("#form-update-password").submit();
                }
            }
        });
    });

    // Hapus Validation Error
    $("input").change(function () {
        var input = $(this).attr('name');
        $('.' + input + '_error').text('');
    });
    $("select").change(function () {
        var select = $(this).attr('name');
        $('.' + select + '_error').text('');
    });
});
