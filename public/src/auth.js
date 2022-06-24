const AuthController = ((SET) => {

    const submitLogin = () => {
        $("#form_login").validate({
            errorClass: "is-invalid",
            successClass: "is-valid",
            validClass: "is-valid",
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");
                error.insertAfter(element);
            },
            rules: {
                email: "required",
                password: "required",
            },
            submitHandler: (form) => {
                $.ajax({
                    url: `${SET.baseURL()}login`,
                    type: "POST",
                    dataType: "JSON",
                    data: $(form).serialize(),
                    beforeSend: (xhr) => {
                        SET.buttonLoader("#btn_submit");
                    },
                    // success: res => {
                    //     window.location.href = `${SET.baseURL()}task`;
                    // },
                    error: err => {
                        toastr.error(
                            "Failed",
                            err.responseJSON.message,
                            SET.bottomNotif()
                        );
                    },
                    complete: () => {
                        SET.closeButtonLoader("#btn_submit");
                    },
                });
            },
        });
    };

    const submitButton = () => {
        $('#btn_submit').on('click', function(e) {
            e.preventDefault()
            let email = $('#email').val();
            let password = $('#password').val();
            $.ajax({
                url: `${SET.baseURL()}login-proses`,
                type: "POST",
                dataType: "JSON",
                data: {
                    email,
                    password
                },
                beforeSend: (xhr) => {
                    SET.buttonLoader("#btn_submit");
                },
                success: res => {
                    window.location.href = `${SET.baseURL()}`;
                },
                error: err => {
                    toastr.error(
                        "Gagal",
                        err.responseJSON.message,
                        SET.bottomNotif()
                    );
                },
                complete: () => {
                    SET.closeButtonLoader("#btn_submit");
                },
            });
        })
    }

    const TokenSetup = TOKEN => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': TOKEN
            }
        });
    }

    return {
        init: TOKEN => {
            TokenSetup(TOKEN);
            submitLogin();
            submitButton();
        },
    };
})(UtilityController);