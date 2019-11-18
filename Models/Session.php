<?php namespace Models;


class Session
{
    private $id_session;
    private $theather;
    private $room;
    private $movie;
    private $date;
    private $time;
    private $tickets;


    public function __construct($theather='',$room='',$movie='',$date='',$time='',$id_session='',$tickets=''){
        
        $this->id_session=$id_session;
        $this->theather=$theather;
        $this->room=$room;
        $this->movie=$movie;
        $this->date=$date;
        $this->time=$time;
        $this->tickets=$tickets;
    
    }

    ////////////** SETTERS *//////////////////

    public function setId($id_session)
    {
        $this->id_session=$id_session;
    }

    public function setTheather($theather){

        $this->theather=$theather;
    }

    public function setRoom($room)
    {
        $this->room=$room;
    }

    public function setMovie($movie)
    {
        $this->movie=$movie;
    }

    public function setDate($date)
    {
        $this->date=$date;
    }

    public function setTime($time)
    {
        $this->time=$time;
    }

    public function setTickets($tickets)
    {
        $this->tickets=$tickets;
    }

    ////////////** GETTERS *//////////////////

    public function getId()
    {
        return $this->id_session;
    }

    public function getTheather(){

        return $this->theather;
    }

    public function getRoom()
    {
        return $this->room;
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

    public function getTickets()
    {
        return $this->tickets;
    }


}

?>