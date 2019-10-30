<?php namespace DAO 

    class connection2{
    

        private static $connection;

        public static function openConnection(){

            if (!isset(self::$connection)){

                try{

                    include_once('DAOConfig.php');
                    self::$connection = new PDO("mysql:host= ". DB_HOST . ";dbname= ". DB_NAME, DB_USER, DB_PASS);
                    self::$connection -> setAtributte(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    self::$connection -> exec("SET CHARACTER UTF-8");
                    print "connection ON";

                }catch (Exception ex){

                    print "ERROR: " . $ex -> getMessage() . "<br>";
                    die();
                }
            }
        }

        public static function closeConnection(){

            if (isset(self::$connection)){

                self::$connection = NULL;
                print "connection OFF";
            }
        }

        public static function getConnection (){

            return self::$connection;
        }
    }
?>