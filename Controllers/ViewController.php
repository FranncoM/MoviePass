<?php namespace Controllers;


    use Controllers\UserController as C_User;
    use Controllers\MovieController as C_Movie;


    use models\User as M_User;
    use models\Movie as M_Movie;

    /*$userController = new C_User;
    $user = $userController->checkSession();*/

    class ViewController {

        private $userController;
        private $movieController;

        public function __construct()
        {

        }

        public function home() // hay que poner una condicion si esta logeado o no.
        {
            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            if($user)
                require(VIEWS_PATH."userHome.php");
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



        public function listUsers(){

            //funcion para mostrar los datos del usuario: detalles, boletos comprados;
            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            $list=$this->userController->readAll();

            require(VIEWS_PATH."userlist.php"); //cambiar por pagina de admin para ver a todos los usuarios

        }

        public function cartelera(){

            $this->userController = new C_User;
            $user = $this->userController->checkSession();

            $this->movieController = new C_Movie;
            $C_list = $this->movieController->readAll();
            
            require(VIEWS_PATH."cartelera.php");

        }
    

















        
    }

       
?>
