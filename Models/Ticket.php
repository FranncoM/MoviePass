<?php

namespace Models;


class Ticket
{
    private $id_ticket;
    private $sala;
    private  $code;
    private $name_movie;
    private $date;
    private $name_theather;
    private $adress;
    private $price;

    public function __construct($id_ticket = '', $sala = '', $code = '', $name_movie = '', $date = '', $name_theather = '', $adress = '', $price = '')
    {
        $this->id_ticket = $id_ticket;
        $this->sala = $sala;
        $this->code = $code;
        $this->name_movie = $name_movie;
        $this->date = $date;
        $this->name_theather = $name_theather;
        $this->adress = $adress;
        $this->price = $price;
    }


    ////////////** SETTERS *//////////////////

    public function setId_ticket($id_ticket)
    {

        $this->id_ticket = $id_ticket;
    }

    public function setSala($sala)
    {

        $this->sala = $sala;
    }

    public function setCode($code)
    {

        $this->code = $code;
    }

    public function setName_movie($name_movie)
    {

        $this->name_movie = $name_movie;
    }


    public function setDate($date)
    {

        $this->date = $date;
    }

    public function setName_theather($name_theather)
    {

        $this->name_theather = $name_theather;
    }

    public function setAdress($adress)
    {

        $this->adress = $adress;
    }

    public function setPrice($price)
    {

        $this->price = $price;
    }



    ////////////** GETTERS *//////////////////

    public function getId_ticket()
    {

        return $this->id_ticket;
    }

    public function getSala()
    {

        return $this->sala;
    }

    public function getCode()
    {

        return $this->code;
    }

    public function getName_movie()
    {

        return $this->name_movie;
    }


    public function getDate()
    {

        return $this->date;
    }

    public function getName_theather()
    {

        return $this->name_theather;
    }

    public function getAdress()
    {

        return $this->adress;
    }

    public function getPrice()
    {

        return $this->price;
    }
}
