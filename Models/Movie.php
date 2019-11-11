<?php namespace Models;

    class Movie{

        private $idMovie;
        private $title;
        private $category;
        private $date;
        private $age;   // ATP, +13, +18 
        private $id_tmbd; // ID DE API
        
        public function __construct($idMovie, $title, $category, $date, $age, $id_tmbd){

            $this->idMovie = $idMovie;
            $this->title = $title;
            $this->date = $date;
            $this->category = $category;
            $this->age = $age;
            $this->id_tmbd
        }

        public function getIdMovie (){

            return $this->idMovie;
        }

        public function getIdTmbd (){

            return $this->id_tmbd;
        }

        public function getTitle(){

            return $this->title;
        }

        public function getCategory(){

            return $this->category;
        }

        public function getDate(){

            return $this->date;
        }

        public function getAge(){

            return $this->age;
        }

        public function isCategory($data){

            
        }

        public function consult($data){


        }
    }
?>