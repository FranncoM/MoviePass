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

            require(ROOT . VIEWS . 'home.php');
        }

    
        public function login()
        {
            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            require(ROOT . VIEWS . 'login.php');
        }
        
    }
    
?>
