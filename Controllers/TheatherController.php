<?php

namespace Controllers;

use Models\Theather as Theather;
use DAO\DAOTheather as Dao;

use Controllers\ViewController as C_View;

class TheatherController
{
    protected $dao;
    private $viewController;

    function __construct()
    {
        $this->dao = new Dao;
        $this->viewController = new C_View;
    }


    public function create($name, $adress, $price, $full_capacity)
    {

        $theather = new Theather(0, $name, $adress, $price, $full_capacity);

        $this->dao->create($theather);
        $this->viewController->cartelera();
    }


    public function readAll()
    {
        $list = $this->dao->readAll();

        if (!is_array($list) && $list != false) {
            $array[] = $list;
            $list = $array;
        } else if ($list == false) {
            $list = [];
        }

        return $list;
    }


    public function read($id)
    {

        return $theather = $this->dao->read($id);
    }


    public function readadress($cat)
    {

        return $list = $this->dao->readForadress($cat);
    }


    public function delete($id)
    {

        $this->dao->delete($id);
        $this->viewController->cartelera();
    }
}
