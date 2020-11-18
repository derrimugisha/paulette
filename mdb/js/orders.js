$(document).ready(function() {
    //notifications
    let ajaxurl = "notf";
    function load_unseen() {
        $.ajax({
            url: ajaxurl,
            method: "GET",
            data: { view: "view" },
            dataType: "json",
            success: function(data) {
                if (data.unseen_notification == 0) {
                    // console.log("There are no orders yet")
                    // $("#nt").addClass("d-none");
                    $("#nt").html(0);
                } else {
                    // console.log("this is it " + data.unseen_notification);
                    console.log(data.notification[0]);
                    console.log(data.notification.length);
                    // $("#nt").toggle("d-none");
                    $("#nt").html(data.unseen_notification);
                    // console.log("******************************");
                    $("#vnt").html(
                        '<ul class="list-group list-group-flush p-2" id="lister"></ul>'
                    );
                    for (i = 0; i < data.notification.length; i++) {
                        console.log(data.notification[i].id);
                        $("#lister").append(
                            '<li class="list-group-item ">' +
                                "Email:" +
                                data.notification[i].email +
                                "  Phone Number:" +
                                data.notification[i].phone +
                                '<span class="px-2" ><span id="' +
                                data.notification[i].id +
                                '"></span></span>' +
                                "</li>"
                        );
                        $("#" + data.notification[i].id).html(
                            '<a class="btn btn-success btn-sm" href="/paulette/seeorders/' +
                                data.notification[i].id +
                                '">View</a>'
                        );
                    }
                }
            }
        });
    }
    load_unseen();
    setInterval(function() {
        load_unseen();
    }, 5000);
});
