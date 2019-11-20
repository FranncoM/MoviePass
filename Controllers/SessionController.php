<?php

namespace Controllers;

use Models\Movie as Movie;
use Models\Session as Session;

use Controllers\MovieController as C_Movie;
use Controllers\RoomController as C_Room;
use Controllers\ViewController as C_View;

use DAO\DAOSession as Dao;




class SessionController
{

    protected $dao;
    private $movieController;
    private $roomController;
    private $viewController;




    function __construct()
    {
        $this->dao = new Dao;
        $this->movieController = new C_Movie;
        $this->roomController = new C_Room;
        $this->viewController = new C_View;
    }


    public function create($id_movie, $id_theather, $date, $time, $name_room)
    {

        // $this->movieController->create($title,$category,$age,$id_tmbd);

        // $id_movie=$this->movieController->getId_for_name($title);


        $id_room = $this->roomController->getId_for_name_theather($name_room, $id_theather);


        $session = new Session($id_theather, $id_room, $id_movie, $date, $time);


        $this->dao->create($session);

        $this->viewController->viewList_sessions();
    }

    public function readAll()
    {
        //guarda todos los user de la base de datos en la variable list

        $list = $this->dao->readAll_sessions();


        if (!is_array($list) && $list != false) { // si no hay nada cargado, readall devuelve false
            $array[] = $list;
            $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false

        } else if ($list == false) {
            $list = [];
        }

        return $list;
    }

    public function readAllByDate()
    {
        //guarda todos los user de la base de datos en la variable list

        $list = $this->dao->readAll_sessionsByDate();


        if (!is_array($list) && $list != false) { // si no hay nada cargado, readall devuelve false
            $array[] = $list;
            $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false

        } else if ($list == false) {
            $list = [];
        }

        return $list;
    }

    public function readForDate($date)
    {
        //guarda todos los user de la base de datos en la variable list

        $list = $this->dao->readSessionsByDate($date);


        if (!is_array($list) && $list != false) { // si no hay nada cargado, readall devuelve false
            $array[] = $list;
            $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false

        } else if ($list == false) {
            $list = [];
        }

        return $list;
    }


    public function readFor_theather($id_theather)
    {

        $list = $this->dao->readForTheather($id_theather);


        if (!is_array($list) && $list != false) { // si no hay nada cargado, readall devuelve false
            $array[] = $list;
            $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false

        } else if ($list == false) {
            $list = [];
        }

        return $list;
    }

    public function readForMovie($id_movie)
    {
        $list = $this->dao->readForMovie($id_movie);


        if (!is_array($list) && $list != false) { // si no hay nada cargado, readall devuelve false
            $array[] = $list;
            $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false

        } else if ($list == false) {
            $list = [];
        }

        return $list;
    }

    public function delete($id)
    { }
}
