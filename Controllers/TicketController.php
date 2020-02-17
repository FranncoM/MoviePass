<?php

namespace Controllers;

use Models\Ticket as Ticket;
use DAO\DAOTicket as Dao;

use Controllers\UserController as C_User;
use Controllers\ViewController as C_View;
use Controllers\SessionController as C_Session;

class TicketController
{
    protected $dao;
    private $userController;
    private $viewController;
    private $sessionController;

    function __construct()
    {

        $this->dao = new Dao;
        $this->userController = new C_User;
        $this->viewController = new C_View;
        $this->sessionController = new C_Session;
    }


    public function create($quantity, $id_rm)
    {


        $id_user = $_SESSION['user']->getId();

        $session = $this->sessionController->read($id_rm);

        for ($i = 0; $i < $quantity; $i++) {

            $ticket = new Ticket($id_user, $session->getMovie(), $session->getRoom(), $session->getDate(), $session->getTime(), 0, $session->getTheather(), '', $session->getId(), '');
            $this->dao->create($ticket);
        }

        echo "<script> alert('Compra Exitosa');</script>";
        $this->viewController->home();
    }


    public function readAllForUser($id)
    {

        $list = $this->dao->readForUser($id);

        if (!is_array($list) && $list != false) {
            $array[] = $list;
            $list = $array;
        }

        return $list;
    }



    public function delete($email)
    {

        $user = $this->dao->read($email);

        if ($_SESSION['user']->getLevel() == 0 && $user->getId() != 1) {

            $this->dao->delete($email);

            $this->viewController->listUsers();
        } else {

            echo "<script> alert('Accion no disponible');</script>";

            $this->viewController->home();
        }
    }
}
