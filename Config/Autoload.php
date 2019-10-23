<?php
namespace Config;

class Autoload {

    public static function start () {

        spl_autoload_register(function($className){

            $classPath = ucwords(str_replace("\\", "/", ROOT . $className) . ".php");

            if(file_exists($classPath)){

                include_once($classPath);
            }

          //  file_exists($classPath)? include_once($classPath) : echo "No existe la clase"; *alternativa*
        });
    }
}
?>