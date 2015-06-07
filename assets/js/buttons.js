$( document ).ready(function() {

});


current_id = null;
$("a[role='button']").click(function(){
    var id = $(this).attr('id');
    if (id === "place" || id === "shop" || id === "online") {
        var container = "#form-container-online";

    } else if (id === "other" || id === "media") {
        var container = "#form-container-other";


    }
    console.log($(window).width());

    if($(window).width() < 990){
        if(current_id == id){
            if($("#form-container-" + id).is(":visible")){
                $("#form-container-" + id).hide("slow");
                current_id = null;
                current_container = null;
            }
            else {
                $("#form-container-" + id).load("forms/" + id + ".html" , function(){
                    $("#form-container-" + id).show("slow");
                });
                current_id = $(this).attr('id');
                current_container = "#form-container-" + id;
            }
        }
        else if(current_id == null){

            $("#form-container-" + id).load("forms/" + id + ".html" , function(){
                $("#form-container-" + id).show("slow");
            });
            current_id = $(this).attr('id');
            current_container = "#form-container-" + id;
        }
        else{
            if($("#form-container-" + current_id).is(":visible")) {
                $("#form-container-" + current_id).hide("slow");
                $("#form-container-" + id).load("forms/" + id + ".html", function () {
                    $("#form-container-" + id).show("slow");
                });
                current_id = $(this).attr('id');
                current_container = "#form-container-" + id;
            }
            else {
                $("#form-container-" + id).load("forms/" + id + ".html" , function(){
                    $("#form-container-" + id).show("slow");
                });
                current_id = $(this).attr('id');
            }
        }

    }else {
        if (current_id == id) {
            if ($(container).is(":visible")) {
                $(container).hide("slow");
                current_id = null;
                current_container = null;
            }
            else {
                $(container).load("forms/" + id + ".html", function () {
                    $(container).show("slow");
                });
                current_id = $(this).attr('id');
                current_container = container;
            }
        }
        else if (current_id == null) {
            $(container).load("forms/" + id + ".html", function () {
                $(container).show("slow");
            });
            current_id = $(this).attr('id');
            current_container = container;
        }
        else {
            if ($(current_container).is(":visible")) {

                $(current_container).hide("slow");

                $(container).load("forms/" + id + ".html", function () {
                    $(container).show("slow");
                });
                current_id = $(this).attr('id');
                current_container = container;
            }
            else {
                $(current_container).load("forms/" + current_id + ".html", function () {
                    $(current_container).show("slow");
                });
                current_id = $(this).attr('id');
            }
        }
    }
    });