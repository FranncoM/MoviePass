<?php   namespace controllers;

    class LoginController{

        public function Index($message = "")
        {
            require_once(VIEWS_PATH."login.php");
        }   
    }

?>