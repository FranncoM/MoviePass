<?php
namespace Config;

class Autoload {

    public static function start () {

        spl_autoload_register(function($className){

            $classPath = ucwords(str_replace("\\", "/", ROOT . $className) . ".php");

            if(file_exists($classPath)){

                //echo $classPath;
                //echo "<br>";

                include_once($classPath);
            }

       });
    }
}
