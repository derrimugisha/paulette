$(".sendphone").on("click", function() {
    let phonenumber = $("#b_phone").val();
    let _token = $("input[name=_token]").val();

    if (!phonenumber) {
        return;
    } else {
        $(".b-footer-alert-phone").html(
            '<div class="footer-alert-phone alert alert-primary w-75">' +
                '<div class="p-2">' +
                '<div class="spinner-border spinner-border-sm text-success" role="status"></div>' +
                '<span class="px-2">Processing...</span>' +
                "</div>" +
                "</div>"
        );

        $.ajax({
            url: "savephone",
            type: "POST",
            data: {
                phonenumber: phonenumber,
                _token: _token
            },
            success: function() {
                $(".b-footer-alert-phone").html(
                    '<div class="footer-alert-phone alert alert-primary w-75">' +
                        '<div class="p-2 "><i class="fas fa-smile-wink fa-2x"></i>' +
                        "Your phone number has been sent successfuly" +
                        "</div> </div>"
                );
                $(".footer-alert-phone")
                    .delay(6000)
                    .fadeOut(2000);

                $(".b-form-phone").removeClass("was-validated");
                $(".b-form-phone").trigger("reset");
            },
            error: function() {
                $(".b-footer-alert-phone").html(
                    '<div class="footer-alert-phone alert alert-danger w-75">' +
                        '<div class="p-2 "><i class="fas fa-heart-broken "></i>' +
                        "Some Thing Went Wrong Try Again Later" +
                        "</div><div>"
                );
                $(".footer-alert-phone")
                    .delay(6000)
                    .fadeOut(2000);
            }
        });
    }
});

$(".sm-sendphone").on("click", function() {
    let phonenumber = $("#sm_phone").val();
    let _token = $("input[name=_token]").val();
    console.log(phonenumber);
    console.log(_token);
    if (!phonenumber) {
        return;
    } else {
        $(".sm-footer-alert-phone").html(
            '<div class="alert alert-primary w-75">' +
                '<div class="p-2">' +
                '<div class="spinner-border spinner-border-sm text-success" role="status"></div>' +
                '<span class="px-2">Processing...</span>' +
                "</div>" +
                "</div>"
        );

        $.ajax({
            url: "savephone",
            type: "POST",
            data: {
                phonenumber: phonenumber,
                _token: _token
            },
            success: function() {
                $(".sm-footer-alert-phone").html(
                    '<div class="sm-footer alert alert-primary w-75">' +
                        '<div class="p-2 "><i class="fas fa-smile-wink fa-2x"></i>' +
                        "Your email has been sent successfuly" +
                        "</div> </div>"
                );
                $(".sm-footer")
                    .delay(6000)
                    .fadeOut(2000);
                $(".s-form-phone").removeClass("was-validated");
                $(".s-form-phone").trigger("reset");
            },
            error: function() {
                $(".sm-footer-alert-phone").html(
                    '<div class="sm-footer alert alert-danger w-75">' +
                        '<div class="p-2 "><i class="fas fa-heart-broken "></i>' +
                        "Some Thing Went Wrong Try Again Later" +
                        "</div><div>"
                );
                $(".sm-footer")
                    .delay(6000)
                    .fadeOut(2000);
            }
        });
    }
});
