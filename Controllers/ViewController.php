<?php

namespace Controllers;


use Controllers\UserController as C_User;
use Controllers\MovieController as C_Movie;
use Controllers\TheatherController as C_theather;
use Controllers\SessionController as C_Session;


use models\User as M_User;
use models\Movie as M_Movie;

/*$userController = new C_User;
    $user = $userController->checkSession();*/

class ViewController
{

    private $userController;
    private $movieController;
    private $theatherController;
    private $sessionController;

    public function __construct()
    { }

    public function home() // hay que poner una condicion si esta logeado o no.
    {
        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        require(VIEWS_PATH . "home.php");
    }

    public function userHome() // hay que poner una condicion si esta logeado o no.
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
            $M_list = $this->movieController->readForCategory($category);
        } elseif (isset($_GET['date'])) {
            $date = $_GET['date'];

            $this->sessionController = new C_Session;
            $S_list = $this->sessionController->readForDate($date);
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

        // comparar si el user es admin o no para mostrar las sesiones.
        require(VIEWS_PATH . "adminViewSession.php");
    }

    public function movieschedules()
    {
        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $this->sessionController = new C_Session;
        $S_list = $this->sessionController->readFor_theather(1);
        //$S_list = $this->sessionController->getSchedules_for_theather();

        require(VIEWS_PATH . "viewSchedule.php");
    }

    /**Metodos Administrador */

    public function viewAddMovie()
    {

        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        require(VIEWS_PATH . "addMovie.php");
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
            $M_list = $this->movieController->readForCategory($category);
        } else {
            $this->movieController = new C_Movie;
            $M_list = $this->movieController->readAll();
        }


        require(VIEWS_PATH . "adminCartelera.php");
    }

    public function listUsers()
    {

        //funcion para mostrar los datos del usuario: detalles, boletos comprados;
        $this->userController = new C_User;
        $user = $this->userController->checkSession();

        $list = $this->userController->readAll();

        require(VIEWS_PATH . "userlist.php"); //cambiar por pagina de admin para ver a todos los usuarios

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
