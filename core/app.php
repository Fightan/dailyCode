<?php

    class app{
        
        private static $get;
        private static $ressources;
        private static $db_name = "dailyCode";
        private static $db_user = "root";
        private static $db_pass = "root";
        private static $db_host = "localhost";
        private static $database;

        public static function DB(){
            if(self::$database === null){
                self::$database = new database(self::$db_name, self::$db_user, self::$db_pass, self::$db_host);
            }
            return self::$database;
        }

        public static function addRessource($url){
            if(is_null(self::$ressources)){
                self::$ressources = [];
            }
            self::$ressources[count(self::$ressources)] = new ressource($url);
        }

        public static function listRessources(){
            foreach(self::$ressources as $r){
                $r->getBalise();
            }
        }

        public static function afficher($controller){
            require("./controllers/".$controller.".php");
        }

        public static function get($v){
            $valeur = 0;
            if(isset(self::$get[$v])){
                $valeur = self::$get[$v];
            }else{
                if(!isset($_GET[$v])){
                    $valeur = null;
                }else{
                    self::$get[$v] = $_GET[$v];
                    $valeur = self::$get[$v];
                }
            }
            return $valeur;
        }

        public static function listGet(){
            foreach($_GET as $get){
                self::get($get);
            }
        }
    }


?>