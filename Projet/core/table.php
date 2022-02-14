<?php

    class table{

        public function __get($key){
            $method = "get".ucfirst($key);
            return $this->$method();
        }

        public static function all(){
            return app::DB()->query("select * from ".static::TABLE, get_called_class());
        }

        public static function afficher(){
            require("./controllers/".static::TABLE.".php");
        }
    } 


?>