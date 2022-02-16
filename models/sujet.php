<?php

    class sujet extends table{
        private static $sujets;
        private $id_sujet;
        private $nom_sujet;
        private $auteur;
        private $reponses;
        private $date;
        const TABLE = "forum";
       
        public function __construct($id_sujet = "00000", $nom_sujet = "New subject", $auteur = "Anonym", $reponses = 0, $date = "Today"){
            if($id_sujet !== "00000"){
                $this->id_sujet = $id_sujet;
                $this->nom_sujet = $nom_sujet;
                $this->auteur = $auteur;
                $this->reponses = $reponses;
                $this->date = $date;
            }
        }

        public static function getAll(){
            if(is_null(self::$sujets)){
                self::$sujets = self::all();
            }
            return self::$sujets;
        }

        public function getId_sujet()
        {
            return $this->id_sujet;
        }
        
        public function getNom_sujet()
        {
            return $this->nom_sujet;
        }

        public function getAuteur()
        {
            return $this->auteur;
        }
        
        public function getReponses()
        {
            return $this->reponses;
        }

        public function getDate()
        {
            return $this->date;
        }

        // public function setId_sujet($id_sujet)
        // {
        //     $this->id_sujet = $id_sujet;
        //     return $this;
        // }

        // public function setNom_sujet($nom_sujet)
        // {
        //     $this->nom_sujet = $nom_sujet;
        //     return $this;
        // }

        // public function setAuteur($auteur)
        // {
        //     $this->auteur = $auteur;
        //     return $this;
        // }

        // public function setReponses($reponses)
        // {
        //     $this->reponses = $reponses;
        //     return $this;
        // }

        // public function setDate($date)
        // {
        //     $this->date = $date;
        //     return $this;
        // }
    }

?>