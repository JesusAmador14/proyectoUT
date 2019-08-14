jQuery(document).ready(function($) {
    var rowP;
    $("#deleteStudent").on("click", function(ev) {
        ev.preventDefault();
        rowP = $("#deleteStudent").parents("tr");
        // console.log(rowP.data("id"));
    });

    $("#deleteFormStudent").on("click", function(ev) {
        ev.preventDefault();
        var form = $("#formDeleteStudent");
        // console.log(form);
        var id = rowP.data("id");
        var url = form.attr("action").replace(":USER_ID", id);
        // console.log(url);
        $.ajax({
            url: url,
            method: form.attr("method"),
            data: form.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#deleteFormStudent").val("Eliminando...");
            },
            success: function(result) {
                alert(result);
                location.reload();
            },
            error: function(e) {
                console.log("Error: ", e);
            }
        });
        return false;
    });
});