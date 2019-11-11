<?php namespace Controllers;

    use Controller\MovieController as C_Movie;
    use Controllers\UserController as C_User;
    
    use models\Movie as M_Movie;
    use models\User as M_User;
    

    $movieController = new C_Movie;

    $userController = new C_User;
    $user = $userController->checkSession();

    class ViewController {

        private $userController;

        public function __construct()
        {

        }

        public function home() // hay que poner una condicion si esta logeado o no.
        {

            require(VIEWS_PATH."home.php");
        }


        public function index()
        {

            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            require(VIEWS_PATH."logeado.php");
        }

        public function movies(){

            $this->movieController = new C_Movie;

            require(VIEWS_PATH. "moviesList.php");
        }

        public function login()
        {
            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            require(VIEWS_PATH.'login.php');
        }

        public function singUp()
        {
            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            require(VIEWS_PATH.'singup.php');
        }


        
    }
    
?>
