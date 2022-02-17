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

    const checkTitle = /^[a-zA-Z0-9]*$/;
    $("#title").on("input", function(){
        if($(this).val().length < 3){
            $("#titleLengthError").removeClass("d-none")
            $(this).addClass("wrong").removeClass("notWrong");
        }else{
            $("#titleLengthError").addClass("d-none")
            $(this).removeClass("wrong").addClass("notWrong");
        }
        if(!checkTitle.test($(this).val())){
            $("#titleCharactersError").removeClass("d-none");
            $(this).addClass("wrong").removeClass("notWrong");
        }else{
            $("#titleCharactersError").addClass("d-none");
            $(this).removeClass("wrong").addClass("notWrong");
        }
    });

    $("#form").on("submit", function(event){
        if($("#title").val().match(checkTitle)){
            event.preventDefault();
        }else{
            $.post("?p=forum", $(this).serialize(), function(data){
                console.log(data);
            })
        }

    })

    if(window.history.replaceState){
        window.history.replaceState( null, null, window.location.href );
    }
});