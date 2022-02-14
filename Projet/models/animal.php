<?php

    class animal extends table{
        private $nom_anim;
        private $id_name;
        const TABLE = "test";

        public function getNom(){
            return $this->nom_anim;
        }

        public function getUrl(){
            return "index.php?a=".$this->id_name;
        }

    }


?>