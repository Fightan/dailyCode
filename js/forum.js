$(function(){
    $("#editor").trumbowyg({
        autogrow: true
    }).on("tbwchange", function(){
        var test = $("#editor").html();

        if(!$("#editor").is(":empty")){
            $("#sendForm").removeClass("sendFormInactive").addClass("sendFormActive");
            $("#sendForm").removeAttr("disabled");
        }else{
            if($("#editor").html != "<p><br></p>"){
                $("#sendForm").addClass("sendFormInactive").removeClass("sendFormActive");
                $("#sendForm").attr("disabled", "disabled");
            }else{
                $("#sendForm").removeClass("sendFormInactive").addClass("sendFormActive");
                $("#sendForm").attr("disabled", "disabled");
            }
        }
    });
    $(".trumbowyg-box").on("focusin", function(){
        $(this).removeClass("editorInactive").addClass("editorActive");
    });
    $(".trumbowyg-box").on("focusout", function(){
        $(this).addClass("editorInactive").removeClass("editorActive");
    });

    // $("#form").on("submit", function(event){
    //     event.preventDefault();

    //     $.post("?p=forum", $(this).serialize(), function(data){
    //         console.log(data);
    //     })
    // })

    if(window.history.replaceState){
        window.history.replaceState( null, null, window.location.href );
    }
});