<?php
namespace Config;

define("ROOT", dirname(__DIR__) . "/");
define("FRONT_ROOT","/MoviePass2/");
define("VIEWS_PATH","Views/");
define("CSS_PATH", FRONT_ROOT.VIEWS_PATH . "layout/styles/");
define("SCRIPT_PATH", FRONT_ROOT.VIEWS_PATH . "layout/scripts/");
define("IMG_PATH", FRONT_ROOT.VIEWS_PATH . "layout/img/");

/**BD */
define ("DB_HOST", "localhost");
define ("DB_NAME", "MoviePass2");
define ("DB_PASS", "root");
define ("DB_USER", "root");

/*API TMDB */
define('TMBD_URL','https://api.themoviedb.org/3/');
define('APIKEY','716239c48567e4c438a86b18b3520440');
define('YT_URL','https://www.youtube.com/embed/');
define('URL_POSTER','https://image.tmdb.org/t/p/original');

?>