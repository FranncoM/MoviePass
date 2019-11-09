<?php namespace Controllers;


    use Controllers\UserController as C_User;

    use models\User as M_User;

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


        public function adminHome()
        {

            $this->userController = new C_User;
            $user = $this->userController->checkSession();
          
            require(VIEWS_PATH."adminHome.php");

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



        public function infoUser(){

            //funcion para mostrar los datos del usuario: detalles, boletos comprados;

        }
    

















        
    }

       
?>
