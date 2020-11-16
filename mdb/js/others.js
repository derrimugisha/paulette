$(document).ready(function() {
    let quantity = $("#quantity");
    let price = $("#price");
    let total = $("#mytotal");
    let pValue = parseInt(price.val());
    let qValue = parseInt(quantity.val());
    let tValue = pValue * qValue;
    total.text("UGX " + tValue);

    // console.log(tValue);
    quantity.on("keyup", function() {
        let quantity = $("#quantity");
        let price = $("#price");
        let pValue = parseInt(price.val());
        let qValue = parseInt(quantity.val());
        let Val = pValue * qValue;
        console.log(Val);
        $("#mytotal").text(Val);
    });
});

$("#showf").on("click", function() {
    // alert("the Test is working");
    $("#myfile").removeClass("d-none");
    $("#showf").addClass("d-none");
});
