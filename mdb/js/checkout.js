$(document).ready(function() {
    $(".mycheckout").each(function() {
        var finder = $(this).data("mynumber");

        $(this).on("click", function(e) {
            // $("#loader").addClass("is-active");
            let deliveryaddress = $("#deliveryaddress" + finder).val();
            let id = $("#bookid" + finder).val();
            let phone = $("#phone" + finder).val();
            let price = $("#price" + finder).val();
            let quantity = $("#quantity" + finder).val();
            let paymentmethod = $("#paymentmethod" + finder).val();
            let _token = $("input[name=_token]").val();
            if (!deliveryaddress && !phone && !paymentmethod) {
                return;
            } else if (!deliveryaddress || !phone || !paymentmethod) {
                return;
            } else {
                console.log("the check is done");
                $(".alerter" + finder).html(
                    '<div class="alert alert-primary ck-alert w-75 shadow-5-strong d-flex justify-content-center">' +
                        '<div class="spinner-border text-success" role="status"></div>' +
                        '<span class="px-2">Loading...</span>' +
                        "</div>"
                );
                $(this).addClass("d-none");
                $.ajax({
                    url: "order",
                    type: "POST",
                    data: {
                        deliveryaddress: deliveryaddress,
                        id: id,
                        phone: phone,
                        _token: _token,
                        price: price,
                        quantity: quantity,
                        paymentmethod: paymentmethod
                    },
                    success: function(response) {
                        // console.log(ok);
                        $(".alerter" + finder)
                            .html(
                                '<div class="alert alert-success ck-alert w-75 shadow-5-strong d-flex justify-content-center">' +
                                    '<div class="p-2 "><i class="fas fa-smile-wink fa-2x"></i>' +
                                    "Your order has been successfull" +
                                    "</div> </div>"
                            )
                            .delay(6000)
                            .fadeOut(2000);

                        setTimeout(function() {
                            $(".alerter" + finder).removeAttr("style");
                            $(".alerter" + finder).html("");
                        }, 9000);

                        $(".shoppingform").removeClass("was-validated");
                        $(".shoppingform").trigger("reset");
                        $(".mycheckout").removeClass("d-none");
                    },
                    error: function(response) {
                        $("#alerter" + finder)
                            .html(
                                '<div class="alert alert-danger ck-alert w-75 shadow-5-strong d-flex justify-content-center">' +
                                    '<div class="p-2 "><i class="fas fa-heart-broken "></i>' +
                                    "Some Thing Went Wrong Try Again Later" +
                                    "</div><div>"
                            )
                            .delay(6000)
                            .fadeOut(2000);
                        setTimeout(function() {
                            $(".alerter" + finder).removeAttr("style");
                            $(".alerter" + finder).html("");
                        }, 9000);

                        $(".mycheckout").removeClass("d-none");
                    }
                });
            }
        });
    });
});
