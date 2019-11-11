<?php namespace Models;

    class Theather {

        private $idTheather;
        private $ticket; // unico valor //
        private $adress;
        private $name;
        private $fullCapacity;

        public function __construct($idTheather, $ticket, $adress, $name, $fullCapacity){

            $this->idTheather = $idTheather;
            $this->ticket = $ticket;
            $this->adress = $adress;
            $this->name = $name;
            $this->fullCapacity = $fullCapacity;
        }

        public function getId(){

            return $this->idTheather;
        }

        public function getTicket(){

            return $this->ticket;
        }

        public function getAdress(){

            return $this->adress;
        }

        public function getName(){

            return $this->name;
        }

        public function getFullCapacity(){

            return $this->fullCapacity;
        }
    }
?>