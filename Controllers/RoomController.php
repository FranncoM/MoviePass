<?php

namespace Controllers;

use Models\Room as Room;


use Controllers\ViewController as C_View;

use DAO\DAORoom as Dao;




class RoomController
{

    protected $dao;

    private $viewController;




    function __construct()
    {
        $this->dao = new Dao;

        $this->viewController = new C_View;
    }


    public function create($theather, $name, $tickets)
    {


        $room = new Room($theather, $name, $tickets);


        $this->dao->create($room);
    }

    public function readAll()
    {
        //guarda todos los user de la base de datos en la variable list

        $list = $this->dao->readAll();


        if (!is_array($list) && $list != false) { // si no hay nada cargado, readall devuelve false
            $array[] = $list;
            $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false

        } else if ($list == false) {
            $list = [];
        }

        return $list;
    }

    public function getId_for_name_theather($name_room, $id_theather)
    {
        $name_room = ("'" . $name_room . "'");

        $room = $this->dao->readForNameTheather($name_room, $id_theather);

        return $room->getId();
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
}
