<?php namespace Models;

class Theather {

    private $idTheather;
    private $price; // unico valor //
    private $adress;
    private $name;
    private $fullCapacity;

    public function __construct($idTheather, $price, $adress, $name, $fullCapacity){

        $this->idTheather = $idTheather;
        $this->price = $price;
        $this->adress = $adress;
        $this->name = $name;
        $this->fullCapacity = $fullCapacity;

    }


    public function getId(){

        return $this->idTheather;
    }

    public function getTicket(){

        return $this->price;
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