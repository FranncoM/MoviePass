<?php namespace DAO;


    class Connection {

            private $pdo = null;
            private $pdoStatament = null;
            private static $instance = null;

            

            public function __construct (){

                try{

                    $this->pdo = new \PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
                    $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                }catch (Exception $ex){

                    throw $ex;
                }
            }

            public static function getInstance(){

                if (self::$instance == null)
                    self::$instance = new Connection();

                return self::$instance;
            }

            public function execute($query, $parameters = array()){

                try{
                    // Creo una sentencia llamando a prepare. Esto devuelve un objeto statement
                    $this->pdoStatament = $this->pdo->prepare($query);


                    foreach($parameters as $parameterName => $value){


                        // Reemplazo los marcadores de parametro por los valores reales utilizando el método bindParam().
                        $this->pdoStatament->bindParam(":".$parameterName, $value);
                        
                    }
                    
                    $this->pdoStatament->execute();
                    return $this->pdoStatament->fetchAll();
                    
                }catch(Exception $ex){
                    throw $ex;
                
                }
            }

        
        public function executeNonQuery ($query, $parameters = array()){

            try{

                // creo una sentencia llamando a prepare, devuelve objeto statament
                $this->pdoStatament = $this->pdo->prepare($query);

                foreach($parameters as $parameterName => $value){

                    $this->pdoStatament->bindParam(":$parameterName", $parameters[$parameterName]);
                }

                $this->pdoStatament->execute();
                return $this->pdoStatament->rowCount();

            }catch(\PDOException $ex){

                throw $ex;
            }
               
        }
    }

