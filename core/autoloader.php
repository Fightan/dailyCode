<?php

    class autoloader{

        public static function register(){
            spl_autoload_register(array(__CLASS__, "autoload"));
        }

        private static function autoload($class){
            if(file_exists("./core/".$class.".php")){
                include("./core/".$class.".php");
            }
            if(file_exists("./models/".$class.".php")){
                include("./models/".$class.".php");
            }
        }
    }

?>