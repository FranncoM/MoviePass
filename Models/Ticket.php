<?php

namespace Models;


class Ticket
{
    private $id_ticket;
    private $id_user;
    private $movie;
    private $room;
    private $date;
    private $time;
    private $price;
    private $theather;
    private $adress;
    private $id_rm;

    public function __construct($id_user = '', $movie = '', $room = '', $date = '', $time = '', $price = '', $theather = '', $adress = '', $id_rm = '', $id_ticket = '')
    {
        $this->id_ticket = $id_ticket;
        $this->id_user = $id_user;
        $this->movie = $movie;
        $this->room = $room;
        $this->date = $date;
        $this->time = $time;
        $this->price = $price;
        $this->theather = $theather;
        $this->adress = $adress;
        $this->id_rm = $id_rm;
    }


    ////////////** SETTERS *//////////////////

    public function setId_ticket($id_ticket)
    {

        $this->id_ticket = $id_ticket;
    }

    public function setId_user($id_user)
    {

        $this->id_user = $id_user;
    }

    public function setMovie($movie)
    {

        $this->movie = $movie;
    }

    public function setRoom($room)
    {

        $this->room = $room;
    }

    public function setDate($date)
    {

        $this->date = $date;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function setPrice($price)
    {

        $this->price = $price;
    }

    public function setTheather($theather)
    {

        $this->theather = $theather;
    }

    public function setAdress($adress)
    {

        $this->adress = $adress;
    }

    public function setId_rm($id_rm)
    {

        $this->id_rm = $id_rm;
    }
    ////////////** GETTERS *//////////////////

    public function getId_ticket()
    {

        return $this->id_ticket;
    }

    public function getId_user()
    {

        return $this->id_user;
    }

    public function getMovie()
    {

        return $this->movie;
    }

    public function getRoom()
    {

        return $this->room;
    }

    public function getDate()
    {

        return $this->date;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getPrice()
    {

        return $this->price;
    }
    public function getTheather()
    {

        return $this->theather;
    }

    public function getAdress()
    {

        return $this->adress;
    }

    public function getId_rm()
    {

        return $this->id_rm;
    }
}
