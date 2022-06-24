const SupplierController = ((SET) => {

    const TokenSetup = TOKEN => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': TOKEN
            }
        });
    }

    const renderData = (response) => {
        let html = '';
        $.each(response, function(i, data) {
            html += `<tr>
                        <td>${data.id}</td>
                        <td>${data.name}</td>
                        <td>${data.phone}</td>
                        <td>${data.address}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary btn-edit" id="data_${data.id}">
                                <span class="fe fe-trash-2" > </span>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger">
                                <span class="fe fe-trash-2" > </span>
                            </button>
                        </td>
                    </tr>`
        });
        return $("#supplier-datas").html(html)
    }

    const fetchDataSupplier = () => {
        $.ajax({
            url: `${SET.baseURL()}supplier/fetch-data-supplier`,
            type: "GET",
            dataType: "JSON",
            beforeSend: (xhr) => {
                SET.tableLoader("#supplier-datas", 5);
            },
            success: res => {
                renderData(res.data.data);
            },
            error: err => {

            },
            complete: () => {

            },
        });
    }

    const submitButton = () => {
        $('#btn_submit').on('click', function(e) {
            e.preventDefault()
            let name = $('#supplier-name').val();
            let phone = $('#phone').val();
            let address = $('#address').val();
            $.ajax({
                url: `${SET.baseURL()}supplier/save-prosess`,
                type: "POST",
                dataType: "JSON",
                data: {
                    name,
                    phone,
                    address
                },
                beforeSend: (xhr) => {
                    $("#btn_submit").prop('disabled', true);
                    SET.buttonLoader("#btn_submit");
                },
                success: res => {
                    if (res.success) {
                        $("#btn_submit").prop('disabled', false);
                        toastr.success(
                            "Berhasil",
                            res.message,
                            SET.bottomNotif()
                        )
                        setTimeout(function() {
                            location.reload(true);
                        }, 2000);
                        // window.location.href = `${SET.baseURL()}supplier`;
                    } else {
                        toastr.error(
                            "Gagal",
                            res.message,
                            SET.bottomNotif()
                        );
                        $("#btn_submit").prop('disabled', false);
                    }
                },
                error: err => {
                    toastr.error(
                        "Gagal",
                        err.responseJSON.message,
                        SET.bottomNotif()
                    );
                    $("#btn_submit").prop('disabled', false);
                },
                complete: () => {
                    SET.closeButtonLoader("#btn_submit");
                },
            });
        })
    }

    const getSupplierById = () => {
        $(".btn-edit").on('click', function(event) {
            event.stopPropagation();
            event.stopImmediatePropagation();
            console.log('jhjhjhj');
        });
        // $.ajax({
        //     url: `${SET.baseURL()}supplier/fetch-data-supplier/${id}`,
        //     headers: { 'X-CSRF-TOKEN': TOKEN },
        //     success: res => {
        //         callback(res.result);
        //     }
        // });
    }

    return {
        init: TOKEN => {
            TokenSetup(TOKEN);
            // submitLogin();
            submitButton();
            fetchDataSupplier();
            getSupplierById();
        },
    };
})(UtilityController);