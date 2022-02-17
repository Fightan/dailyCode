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
            app::afficher("articles"); //votre_article::afficher();
            break;
        case "forum":
            $titre = "Forum";
            $cssJs = "forum";
            app::afficher("forum");
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
        case "compte":
            $titre = "Compte";
            $cssJs = "compte";
            app::afficher("compte");
            break;
        default:
            $titre = "Accueil";
            $cssJs = "accueil";
            app::afficher("accueil");
    }

    $content = ob_get_contents();
    ob_end_clean();

?>