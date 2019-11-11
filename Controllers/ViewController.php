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
            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            if($user)
                require(VIEWS_PATH."userhome.php");
            else
                require(VIEWS_PATH."home.php");
            
           
        }

        public function userHome() // hay que poner una condicion si esta logeado o no.
        {
            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            require(VIEWS_PATH."userHome.php");
        }


        public function viewsAdminSettings()            //  por definir
        {

            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            if($user && $user->getLevel()==0)
            {
                require(FRONT_ROOT . "adminHome.php");

            }else{

                require(VIEWS_PATH."Home.php");
                echo '<script>alert("¡NO PUEDES PASAR!");</script>';

            }
          
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
