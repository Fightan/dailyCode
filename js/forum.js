$(function(){
    $("#editor").trumbowyg({
        autogrow: true
    }).on("tbwchange", function(){
        var test = $("#editor").html();

        if(!$("#editor").is(":empty")){
            $("#sendForm").removeClass("sendFormInactive").addClass("sendFormActive");
        }else{
            if($("#editor").html != "<p><br></p>"){
                $("#sendForm").addClass("sendFormInactive").removeClass("sendFormActive");
            }else{
                $("#sendForm").removeClass("sendFormInactive").addClass("sendFormActive");
            }
        }
    });
});