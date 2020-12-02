function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}

$(document).ready(function() {
    let quantity = $(".quantity");
    let price = $(".price");
    let total = $(".mytotal");
    let pValue = parseInt(price.val());
    let qValue = parseInt(quantity.val());
    let tValue = pValue * qValue;

    $(".pricef").each(function() {
        let pricer = $(this).text();
        $(this).html(formatNumber(pricer));
    });

    total.text("UGX " + tValue);

    // console.log(tValue);
});

$("#showf").on("click", function() {
    // alert("the Test is working");
    $("#myfile").removeClass("d-none");
    $("#showf").addClass("d-none");
});

$(".reviewer").on("click", function() {
    // alert("yee am working");
    $(".review-card").toggle();
});

$(".reviewer-b").on("click", function(e) {
    e.preventDefault();
    $(".review-card").toggle();
});

$(".quantity").each(function() {
    $(this).data("quantity");

    // console.log($(this).data("quantity"));

    $(this).on("keyup", function() {
        let price = $(".price");
        let qvalue = $(this).val();
        let pValue = price.val();
        let Val = pValue * qvalue;
        let mytotal = $(".mytotal");
        $(mytotal).val(formatNumber(Val));
        console.log(qvalue);
        if (mytotal.val() == "NaN") {
            mytotal.val("Put Number Of quantity");
        }
        $(".paybody").on("mouseleave", function() {
            $(".quantity").val(qvalue);
            $(".mytotal").val(formatNumber(Val));
        });
    });
});

$(".sb").each(function() {
    $(this).on("click", function(e) {
        let dd = $(this).data("formnumber");
        let starnumber = $("#starnumber" + dd).val();
        let header = $("#reviewheader" + dd).val();
        let writer = $("#writereview" + dd).val();
        let bookid = $("#bookreviewid" + dd).val();
        let _token = $("input[name=_token]").val();
        e.preventDefault();
        $(".rateform").append(
            "<div class='holder'>" +
                "<div class='spinner-grow text-primary' role='status'>" +
                "</div>"
        );
        $.ajax({
            url: "addrate",
            type: "POST",
            data: {
                header: header,
                body: writer,
                bookid: bookid,
                _token: _token,
                star: starnumber
            },
            success: function(response) {
                $(".rateform").trigger("reset");
                $(".holder").html(
                    "<div class='badge badge-success'>" +
                        response.msg +
                        "</div>"
                );
                setTimeout(function() {
                    $(".holder").html("");
                }, 4000);
            },
            error: function() {
                $(".holder").html(
                    "<div class='badge badge-danger'>Something Went Wrong Try Again later</div>"
                );
                setTimeout(function() {
                    $(".holder").html("");
                }, 4000);
            }
        });
    });
});

$(".alert-msg")
    .delay(5000)
    .fadeOut();
const icons = document.querySelectorAll("i");

icons.forEach(el => {
    el.addEventListener("onSelect.mdb.rating", e => {
        console.log("e.value");
    });
});
