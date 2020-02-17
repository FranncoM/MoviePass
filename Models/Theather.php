<?php namespace Models;


class Theather
{
    private $idTheather;
    private $name;
    private $adress;
    private $price; // unico valor //
    private $fullCapacity;

    public function __construct($idTheather = '', $name = '', $adress = '', $price = '', $fullCapacity = '')
    {

        $this->idTheather = $idTheather;
        $this->name = $name;
        $this->adress = $adress;
        $this->price = $price;
        $this->fullCapacity = $fullCapacity;
    }


    ////////////** SETTERS *//////////////////


    public function setId($id)
    {

        $this->id = $id;
    }

    public function setName($name)
    {

        $this->name = $name;
    }

    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    public function setPrice($price)
    {

        $this->price = $price;
    }

    public function setFullCapacity($fullCapacity)
    {

        $this->fullCapacity = $fullCapacity;
    }

    ////////////** GETTERS *//////////////////

    public function getId()
    {

        return $this->idTheather;
    }

    public function getName()
    {

        return $this->name;
    }

    public function getAdress()
    {

        return $this->adress;
    }

    public function getTicket()
    {

        return $this->price;
    }

    public function getPrice()
    {

        return $this->price;
    }

    public function getFullCapacity()
    {

        return $this->fullCapacity;
    }
}
