<?php

namespace Controllers;

use Controllers\UserController as C_User;
use Controllers\MovieController as C_Movie;
use Controllers\TheatherController as C_theather;
use Controllers\SessionController as C_Session;
use Controllers\PurchaseController as C_Purchase;
use Controllers\TicketController as C_Ticket;


class ViewController
{

    private $userController;
    private $movieController;
    private $theatherController;
    private $sessionController;
    private $purchaseController;
    private $ticketController;


    public function __construct()
    {
    }

    public function home()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        require(VIEWS_PATH . "home.php");
    }


    public function userHome()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        require(VIEWS_PATH . "userHome.php");
    }


    public function login()
    {
        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        require(VIEWS_PATH . 'login.php');
    }


    public function singUp()
    {


        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        require(VIEWS_PATH . 'singup.php');
    }


    public function viewCartelera()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $this->sessionController = new C_Session;
        $SC_list = $this->sessionController->readAllByDate();

        if (isset($_GET['category']) && $_GET['category'] != 'all') {

            $category = $_GET['category'];
            $this->movieController = new C_Movie;
            $M_list = $this->movieController->readForGenre($category);
        } elseif (isset($_GET['date'])) {
            $date = $_GET['date'];
            $this->movieController = new C_Movie;
            $this->sessionController = new C_Session;
            $S_list = $this->movieController->readForDate($date);
        } else {
            $this->movieController = new C_Movie;
            $M_list = $this->movieController->readAll();
        }


        require(VIEWS_PATH . "viewCartelera.php");
    }


    public function viewList_sessions()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $this->theatherController = new C_theather;
        $T_list = $this->theatherController->readAll();

        if (isset($_GET["id_theather"])) {

            $id_theather = $_GET["id_theather"];


            $this->sessionController = new C_Session;
            $S_list = $this->sessionController->readFor_theather($id_theather);
        }

        if ($user) {
            require(VIEWS_PATH . "adminViewSession.php");
        } else {
            include(VIEWS_PATH . "validate-session.php");
        }
    }

    public function movieschedules($id_movie)
    {
        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $this->theatherController = new C_theather;
        $T_list = $this->theatherController->readAll();

        $this->movieController = new C_Movie;
        $movie = $this->movieController->read($id_movie);

        $this->theatherController = new C_theather;
        $T_list = $this->theatherController->readAll();

        $this->sessionController = new C_Session;
        $S_list = $this->sessionController->readForMovie($id_movie);

        require(VIEWS_PATH . "viewSchedule.php");
    }

    public function buy($id_session)
    {
        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $this->purchaseController = new C_Purchase;
        $purchase = $this->purchaseController->readForSession($id_session);


        if ($user) {
            require(VIEWS_PATH . "viewPurchase.php");
        } else {
            include(VIEWS_PATH . "validate-session.php");
        }
    }


    public function myPurchases()
    {
        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $this->ticketController = new C_Ticket;
        $T_list = $this->ticketController->readAllForUser($user->getId());

        require(VIEWS_PATH . "myPurchase.php");
    }

    /**Metodos Administrador */

    public function viewAddUser()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        require(VIEWS_PATH . "addUser.php");
    }


    public function viewAddMovie()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        require(VIEWS_PATH . "addMovie.php");
    }

    public function viewAddMovieTmdb()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        require(VIEWS_PATH . "addMovieTmdb.php");
    }


    public function viewAddSession()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $this->theatherController = new C_theather;
        $T_list = $this->theatherController->readAll();

        $this->movieController = new C_Movie;
        $M_list = $this->movieController->readAll();

        require(VIEWS_PATH . "addSession.php");
    }


    public function adminCartelera()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        if (isset($_GET["category"])) {

            $category = $_GET["category"];

            $this->movieController = new C_Movie;
            $M_list = $this->movieController->readForGenre($category);
        } else {
            $this->movieController = new C_Movie;
            $M_list = $this->movieController->readAll();
        }

        require(VIEWS_PATH . "adminCartelera.php");
    }

    public function listUsers()
    {
        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $list = $this->userController->readAll();

        require(VIEWS_PATH . "userlist.php");
    }


    public function listTheather()
    {


        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $this->theatherController = new C_Theather;
        $T_list = $this->theatherController->readAll();

        require(VIEWS_PATH . "adminTheatherList.php");
    }


    public function viewsAdminSettings()            //  por definir
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        if ($user && $user->getLevel() == 0) {
            require(FRONT_ROOT . "adminHome.php");
        } else {

            require(VIEWS_PATH . "Home.php");
        }
    }
}
