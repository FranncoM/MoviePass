<?php namespace Models;

        class Movie{

            private $id;
            private $title;
            private $category;
            private $age;
            private $id_tmbd;


            public function __construct($id='',$title='',$category='',$age='',$id_tmbd=""){

                $this->id=$id;
                $this->title=$title;
                $this->category=$category;
                $this->age=$age;
                $this->id_tmbd=$id_tmbd;

            }

            public function setId($id) {
                $this->id=$id;

            }
            public function setTitle($title){

                $this->title=$title;
            }

            public function setCategory($category){

                $this->category=$category;

            }

            public function setAge($age){

                $this->age=$age;
            }

            public function setId_tmbd($id_tmbd){

                $this->id_tmbd=$id_tmbd;

            }


            public function getId() {
                return $this->id;

            }
            public function getTitle(){

                return $this->title;
            }

            public function getCategory(){

                return $this->category;

            }

            public function getAge(){

                return $this->age;

            }

            public function getId_tmbd(){

                return  $this->id_tmbd;

            }
        }
?>