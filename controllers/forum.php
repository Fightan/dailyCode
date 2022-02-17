<?php
    app::addRessource("https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css");
    app::addRessource("https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js");
    
    if(isset($_POST["title"]) && isset($_POST["editor"])){
        sujet::addSujet(); 
    }

    require("./views/header.php");
    require("./views/forum.php");
    require("./views/footer.php");
?>