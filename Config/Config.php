<?php
namespace Config;

define("ROOT", dirname(__DIR__) . "/");
define("FRONT_ROOT","/MoviePass/"); // Cambiar la direccion!
define("VIEWS_PATH","Views/");
define("CSS_PATH", FRONT_ROOT.VIEWS_PATH . "layout/styles/");
define("SCRIPT_PATH", FRONT_ROOT.VIEWS_PATH . "layout/scripts/");
define("IMG_PATH", FRONT_ROOT.VIEWS_PATH . "layout/img/");

define ("DB_HOST", "localhost");
define ("DB_NAME", "MoviePass");
define ("DB_PASS", "root");
define ("DB_USER", "root");

?>