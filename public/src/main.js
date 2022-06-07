const MainController = ((SET) => {

    const TokenSetup = (CSRF) => {
        $.ajaxSetup({
            headers: {
                // "Authorization": `Bearer ${TOKEN}`,
                "X-CSRF-TOKEN": CSRF
            }
        });
    }

    // const fetchSaldo = () => {
    //     $('#btn_saldo').on('click', function() {
    //         $.ajax({
    //             url: `${SET.apiURL()}function/saldopos`,
    //             type: "POST",
    //             dataType: "JSON",
    //             data: {},
    //             beforeSend: SET.tableLoader("#t_task", 7),
    //             success: res => {
    //                 $('#sisa_saldo').text(res.result.saldo)
    //             },
    //             error: (err) => {},
    //             complete: () => {},
    //             statusCode: {
    //                 404: function() {
    //                     toastr.error(
    //                         "Endpoint Not Found",
    //                         "Failed",
    //                         SET.bottomNotif()
    //                     );
    //                 },
    //                 401: function() {
    //                     window.location.href = `${SET.baseURL()}login`;
    //                 },
    //                 500: function() {},
    //             },
    //         });
    //     })
    // };

    const logOut = () => {
        $('#btn_logout').on('click', function() {
            $.ajax({
                url: `${SET.baseURL()}logout`,
                type: "POST",
                dataType: "JSON",
                data: {},
                beforeSend: SET.pageLoader(),
                success: res => {
                    window.location.href = `${SET.baseURL()}login`
                },
                error: (err) => {},
                complete: () => {
                    SET.closeGlobalLoader()
                },
                statusCode: {
                    404: function() {
                        toastr.error(
                            "Endpoint Not Found",
                            "Failed",
                            SET.bottomNotif()
                        );
                    },
                    401: function() {
                        window.location.href = `${SET.baseURL()}login`;
                    },
                    500: function() {},
                },
            });
        })
    };


    return {
        init: (CSRF) => {
            TokenSetup(CSRF);
            // fetchSaldo();
            logOut();
        },
    };
})(UtilityController);