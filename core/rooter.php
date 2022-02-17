<?php

    ini_set("display_errors", 1);
    include("./core/autoloader.php");
    autoloader::register();
    app::listGet();

    ob_start();
    switch(app::get("p")){
        case "accueil":
            $titre = "Accueil";
            $cssJs = "accueil";
            app::afficher("accueil");
            break;
        case "articles":
            $titre = "Articles";
            $cssJs = "articles";
            app::afficher("Articles"); //votre_article::afficher();
            break;
        case "forum":
            $titre = "Forum";
            $cssJs = "forum";
            require("./controllers/forum.php"); //forum::afficher();   
            break;
        case "contact":
            $titre = "Contact";
            $cssJs = "contact";
            app::afficher("contact");
            break;
        case "a_propos":
            $titre = "À propos";
            $cssJs = "a_propos";
            app::afficher("a_propos");
            break;
        default:
            $titre = "Accueil";
            $cssJs = "accueil";
            app::afficher("accueil");
    }

    $content = ob_get_contents();
    ob_end_clean();

?>