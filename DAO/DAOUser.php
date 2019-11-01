<?php namespace DAO;

    use Models\User as M_Usuario;
    use DAO\connection as Connection;
    use PDOException;
         /**
          *
          */
         class DAOUser 
         {
              private $connection;

              function __construct() {

               $this->connection = null;
              }

              /**
               *
               */
              public function create($_user) {

                   // Guardo como string la consulta sql utilizando como values, marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada
                   $sql = "INSERT INTO users (name, lastname, username, email, password, level, purchased_tickets, date_tickets) VALUES (:name, :lastname, :username, :email, :password, :level, :purchased_tickets, :date_tickets)";

                   $parameters['name'] = $_user->getName();
                   $parameters['lastname'] = $_user->getLastName();
                   $parameters['username'] = $_user->getUserName();
                   $parameters['email'] = $_user->getEmail();
                   $parameters['password'] = $_user->getPassword();
                   $parameters['level'] = $_user->getLevel();
                   $parameters['purchased_ticket'] = $_user->getPurchasedTickects();
                   $parameters['date_tickets'] = $_user->DateTickets();

                   try {
                         // creo la instancia connection
                     $this->connection = Connection::getInstance();
                         // Ejecuto la sentencia.
                    return $this->connection->ExecuteNonQuery($sql, $parameters);

                } catch(PDOException $ex) {
                       throw $ex;
                  }
              }
              
              
              public function read($_email) {
               
                   $sql = "SELECT * FROM users where email = :email";


                   $parameters['email'] = $_email;

                   try {
                        $this->connection = Connection::getInstance();

                        $resultSet = $this->connection->execute($sql, $parameters);
                        
                   } catch(Exception $ex) {
                       throw $ex;
                   }
                   if(!empty($resultSet)){
                        
                    return $this->mapear($resultSet);
                   }
                       
                   else
                        return false;
              }
              

              public function readAll() {
                   $sql = "SELECT * FROM users";

                   try {
                        $this->connection = Connection::getInstance();

                        $resultSet = $this->connection->execute($sql);

                   } catch(Exception $ex) {

                       throw $ex;
                   }

                   if(!empty($resultSet))
                        return $this->mapear($resultSet);
                   else
                        return false;

              }
              

              public function edit($_user) {

                   $sql = "UPDATE users SET name = :name, lastname = :lastname, username = :username, email = :email, password = :password, level = :level, purchased_tickets = :purchased_tickets, date_tickets = :date_tickets";

                   $parameters['name'] = $_user->getName();
                   $parameters['lastname'] = $_user->getLastName();
                   $parameters['username'] = $_user->getUserName();
                   $parameters['email'] = $_user->getEmail();
                   $parameters['password'] = $_user->getPassword();
                   $parameters['level'] = $_user->getLevel();
                   $parameters['purchased_ticket'] = $_user->getPurchasedTickects();
                   $parameters['date_tickets'] = $_user->DateTickets();
                  
                   try {
                        // creo la instancia connection
                     $this->connection = Connection::getInstance();
                    // Ejecuto la sentencia.
                    return $this->connection->ExecuteNonQuery($sql, $parameters);
                } catch(\PDOException $ex) {
                       throw $ex;
                  }
              }
              
              
              public function delete($email) {

                   $sql = "DELETE FROM users WHERE email = :email";
                   $obj_pdo = new Conexion();

                   try {
                        $conexion = $obj_pdo->conectar();
                    // Creo una sentencia llamando a prepare. Esto devuelve un objeto statement
                    $sentencia = $conexion->prepare($sql);
                        $sentencia->bindParam(":email", $email);
                        $sentencia->execute();
                   } catch(PDOException $Exception) {

                    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );

                }
              }

          /**
            * Transforma el listado de usuario en
            * objetos de la clase Usuario
            *
            * @param  Array $gente Listado de personas a transformar
            */
            protected function mapear($value) {

                $value = is_array($value) ? $value : [];

                $resp = array_map(function($p){

                    return new M_Usuario($p['id'], $p['name'], $p['lastname'], $p['username'], $p['email'], $p['password'], $p['level']);
                }, $value);
                    
                   return count($resp) > 1 ? $resp : $resp['0'];
            }
         }

?>