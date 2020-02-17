<?php

namespace Controllers;

use Models\Purchase as Purchase;
use DAO\DAOPurchase as Dao;
use Controllers\ViewController as C_View;


class PurchaseController
{

    protected $dao;

    private $viewController;

    function __construct()
    {
        $this->dao = new Dao;

        $this->viewController = new C_View;
    }


    public function create($id_user = '', $id_theather = '', $id_room = '', $movie = '', $date = '', $time = '', $id_movie = '', $id_purchase = '', $id_rm = '', $tickets = '')
    {

        $purchase = new Purchase($id_user, $id_theather, $id_room, $movie, $date, $time, $id_movie, $id_purchase, $id_rm, $tickets);


        $this->dao->create($purchase);
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


    public function readForSession($id_session)
    {

        return $purchase = $this->dao->readForSession($id_session);
    }
}
