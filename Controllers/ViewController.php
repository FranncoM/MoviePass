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

        public function index()
        {

            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            require(VIEWS_PATH."logeado.php");
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
