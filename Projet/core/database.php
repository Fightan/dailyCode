<?php

    class database{

        private static $_instance;
        private $db_name;
        private $db_user;
        private $db_pass;
        private $db_host;
        private $db;

        public static function getInstance($name, $user="root", $pass="root", $host="localhost"){
            if(is_null(self::$_instance)){
                self::$_instance = new database($name, $user, $pass, $host);
            }
            return self::$_instance;
        }

        private function __construct($name, $user="root", $pass="root", $host="localhost"){
            $this->db_name = $name;
            $this->db_user = $user;
            $this->pass = $pass;
            $this->db_host = $host;
        }
        
        private function PDO(){
            if($this->db === null){
                $this->db = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name.";charset=utf8", $this->db_user, $this->db_pass);
            }
        }

        public function query($sql, $class_name){
            $this->PDO();
            $response = $this->db->query($sql);
            return $response->fetchAll(PDO::FETCH_CLASS, $class_name);
        }

        public function prepare($sql, $values, $class_name){
            $this->PDO();
            $response = $this->db->prepare($sql);
            $response->execute($values);
            $datas = $response->fetchAll(PDO::FETCH_CLASS, $class_name);
            return $datas;
        }
    }
?>