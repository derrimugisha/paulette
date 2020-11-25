$(document).ready(function() {
    // let count = 0;
    $(".starnumber").each(function() {
        // count = count + 1;
        $(this).on("keyup", function() {
            if ($(this).val() == 1) {
                $(".one").css("color", "yellow");
            } else if ($(this).val() == 2) {
                $(".one").css("color", "yellow");
                $(".two").css("color", "yellow");
            } else if ($(this).val() == 3) {
                $(".one").css("color", "yellow");
                $(".two").css("color", "yellow");
                $(".three").css("color", "yellow");
            } else if ($(this).val() == 4) {
                $(".one").css("color", "yellow");
                $(".two").css("color", "yellow");
                $(".three").css("color", "yellow");
                $(".four").css("color", "yellow");
            } else if ($(this).val() == 5) {
                $(".one").css("color", "yellow");
                $(".two").css("color", "yellow");
                $(".three").css("color", "yellow");
                $(".four").css("color", "yellow");
                $(".five").css("color", "yellow");
            } else if ($(this).val() == "") {
                $(".one").css("color", "black");
                $(".two").css("color", "black");
                $(".three").css("color", "black");
                $(".four").css("color", "black");
                $(".five").css("color", "black");
            } else {
                $(".rate-error")
                    .toggle()
                    .css("color", "red");
            }
        });
    });
    // console.log(count);
});
