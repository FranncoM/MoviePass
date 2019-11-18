<?php namespace Models;


class Room
{
    private $id_room;
    private $theather;
    private $name;
    private $tickets;


    public function __construct($theather='',$name='',$tickets='',$id_room=''){
        
        $this->id_room=$id_room;
        $this->theather=$theather;
        $this->name=$name;
        $this->tickets=$tickets;
    
    }

    ////////////** SETTERS *//////////////////

    public function setId($id_room)
    {
        $this->id_room->$id_room;
    }

    public function setTheather($theather){

        $this->theather=$theather;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setTickets($tickets)
    {
        $this->tickets=$tickets;
    }

    ////////////** GETTERS *//////////////////

    public function getId()
    {
        return $this->id_room;
    }

    public function getTheather(){

        return $this->theather;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTickets()
    {
        return $this->tickets;
    }


}
