
$(document).ready(function () {
    // erase the input
    $("#erase").click(function () {
        $(this).prev().val("");
    });

    // preview and hide password
    $("#showPassword").click(function () {
        var foo = $(this).prev().attr("type");
        if (foo == "password") {
            $(this).prev().attr("type", "text");
        } else {
            $(this).prev().attr("type", "password");
        }
    });

    //show help
    $("#showHelp").click(function () {
        $("#help").toggle();
    });
});
