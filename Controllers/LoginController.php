<?php  namespace Controllers;

    class LoginController{

        public function Index($message = "")
        {
            require_once(VIEWS_PATH."login.php");
        }   
    }

?>