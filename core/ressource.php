<?php

    class ressource{
        private $type;
        private $url;

        public function __construct($url){
            $this->url = $url; 
            $extension = substr($url, stripos($url, ".")+1);
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