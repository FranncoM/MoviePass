<?php

namespace Models;


class Purchase
{
    private $id_purchase;
    private $name_theather;
    private $id_room;
    private $movie;
    private $date;
    private $time;
    private $id_movie;
    private $price;
    private $id_rm;
    private $id_user;
    private $stock;



    public function __construct($id_user = '', $name_theather = '', $id_room = '', $movie = '', $date = '', $time = '', $id_movie = '', $id_purchase = '', $id_rm = '', $price = '', $stock = '')
    {

        $this->id_user = $id_user;
        $this->id_purchase = $id_purchase;
        $this->name_theather = $name_theather;
        $this->id_room = $id_room;
        $this->movie = $movie;
        $this->date = $date;
        $this->time = $time;
        $this->id_movie = $id_movie;
        $this->id_purchase = $id_purchase;
        $this->id_rm = $id_rm;
        $this->price = $price;
        $this->stock = $stock;
    }

    ////////////** SETTERS *//////////////////

    public function setId($id_purchase)
    {
        $this->id_purchase = $id_purchase;
    }

    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
    }

    public function setName_theather($name_theather)
    {

        $this->id_theather = $name_theather;
    }

    public function setId_room($id_room)
    {
        $this->id_room = $id_room;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function setId_movie($id_movie)
    {

        $this->id_movie = $id_movie;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function setId_purchase($id_purchase)
    {
        $this->id_purchase = $id_purchase;
    }


    public function setId_rm($id_rm)
    {
        $this->id_rm = $id_rm;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    ////////////** GETTERS *//////////////////

    public function getId()
    {
        return $this->id_purchase;
    }

    public function getId_user()
    {
        return $this->id_user;
    }


    public function getName_theather()
    {

        return $this->name_theather;
    }

    public function getId_room()
    {
        return $this->id_room;
    }
    public function getMovie()
    {

        return $this->movie;
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

    public function getId_movie()
    {

        return $this->id_movie;
    }

    public function getId_purchase()
    {
        return $this->id_purchase;
    }


    public function getId_rm()
    {
        return $this->id_rm;
    }

    public function getStock()
    {
        return $this->stock;
    }
}
