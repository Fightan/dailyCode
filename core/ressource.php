<?php

    class ressource{
        private $type;
        private $url;

        public function __construct($url){
            $this->url = $url; 
            $path = parse_url($url, PHP_URL_PATH);
            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $this->type = $extension;
        }

        public function getBalise(){
            if($this->type === "js"){
                echo "<script src='".$this->url."'></script>";
            }
            if($this->type === "css"){
                echo "<link rel='stylesheet' href='".$this->url."'>";
            }
            if($this->type === "less"){
                echo "<link rel='stylesheet/less' href='".$this->url."'>";
            }
        }
    }


?>