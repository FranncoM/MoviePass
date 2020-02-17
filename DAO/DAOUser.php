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
                   $sql = "INSERT INTO users (name, lastname, email, password, level) VALUES (:name, :lastname, :email, :password, :level)";

                   $parameters['name'] = $_user->getName();
                   $parameters['lastname'] = $_user->getLastName();
                   $parameters['email'] = $_user->getEmail();
                   $parameters['password'] = $_user->getPassword();
                   
                   if($_user->getLevel()>0)
                   $parameters['level'] = $_user->getLevel();
                   else
                   $parameters['level'] = 0;
                

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
              
              public function delete($email) {

                   $sql = "DELETE FROM users WHERE email = :email";
                   $parameters['email'] = $email;

                   try {
                         
                         $this->connection = Connection::getInstance();
                         return $this->connection->ExecuteNonQuery($sql, $parameters);

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

                    return new M_Usuario($p['id'], $p['name'], $p['lastname'], $p['email'], $p['password'], $p['level']);
                }, $value);
                    
                   return count($resp) > 1 ? $resp : $resp['0'];
            }
         }
