$(".sendmail").on("click", function() {
    let emailaddress = $("#b_email").val();
    let _token = $("input[name=_token]").val();
    if (!emailaddress) {
        return;
    } else {
        $(".b-footer-alert").html(
            '<div class="footer-alert alert alert-primary w-75">' +
                '<div class="p-2">' +
                '<div class="spinner-border spinner-border-sm text-success" role="status"></div>' +
                '<span class="px-2">Processing...</span>' +
                "</div>" +
                "</div>"
        );

        $.ajax({
            url: "saveemail",
            type: "POST",
            data: {
                emailaddress: emailaddress,
                _token: _token
            },
            success: function() {
                $(".b-footer-alert").html(
                    '<div  class="sm-footer footer-alert alert alert-primary w-75">' +
                        '<div class="p-2 "><i class="fas fa-smile-wink fa-2x"></i>' +
                        "Your email has been sent successfuly" +
                        "</div> </div>"
                );
                $(".sm-footer")
                    .delay(6000)
                    .fadeOut(2000);
                $(".b-form-email").removeClass("was-validated");
                $(".b-form-email").trigger("reset");
            },
            error: function() {
                $(".b-footer-alert").html(
                    '<div class="sm-footer footer-alert alert alert-danger w-75">' +
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

$(".sm-sendmail").on("click", function() {
    let emailaddress = $("#sm_email").val();
    let _token = $("input[name=_token]").val();

    if (!emailaddress) {
        return;
    } else {
        $(".sm-footer-alert").html(
            '<div class="alert alert-primary w-75">' +
                '<div class="p-2">' +
                '<div class="spinner-border spinner-border-sm text-success" role="status"></div>' +
                '<span class="px-2">Processing...</span>' +
                "</div>" +
                "</div>"
        );

        $.ajax({
            url: "saveemail",
            type: "POST",
            data: {
                emailaddress: emailaddress,
                _token: _token
            },
            success: function() {
                $(".sm-footer-alert").html(
                    '<div class="sm-footer alert alert-primary w-75">' +
                        '<div class="p-2 "><i class="fas fa-smile-wink fa-2x"></i>' +
                        "Your email has been sent successfuly" +
                        "</div> </div>"
                );
                $(".sm-footer")
                    .delay(6000)
                    .fadeOut(2000);
                $(".s-form-email").removeClass("was-validated");
                $(".s-form-email").trigger("reset");
            },
            error: function() {
                $(".sm-footer-alert").html(
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
