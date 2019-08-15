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


    var editTool;

    $("#editTool").on("click", function(ev) {
        ev.preventDefault();
        editTool = $("#editTool").parents("tr");
        // console.log(rowP.data("id"));
    });

    $("#editFormTool").on("click", function(ev) {
        ev.preventDefault();
        var form = $("#formEditTool");
        // console.log(form);
        var id = editTool.data("id");
        var url = form.attr("action").replace(":USER_ID", id);
        // console.log(url);
        $.ajax({
            url: url,
            method: form.attr("method"),
            data: form.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#editFormTool").val("Eliminando...");
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






    var deleteTool;
    // console.log(deleteTool);
    $("#deleteTool").on("click", function(ev) {
        ev.preventDefault();
        deleteTool = $("#deleteTool").parents("tr");
        // console.log(deleteTool.data("id"));
    });

    $("#deleteFormTool").on("click", function(ev) {
        ev.preventDefault();
        var form = $("#formDeleteTool");
        // console.log(form);
        var id = deleteTool.data("id");
        var url = form.attr("action").replace(":USER_ID", id);
        // console.log(url);
        $.ajax({
            url: url,
            method: form.attr("method"),
            data: form.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#deleteFormTool").val("Eliminando...");
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