<?php namespace DAO;

    use Models\Movie as M_Movie;
    use DAO\connection as Connection;
    use PDOException;
         /**
          *
          */
         class DAOMovie
         {
              private $connection;

              function __construct() {

               $this->connection = null;
              }

              /**
               *
               */
              public function create($_movie) {

                   // Guardo como string la consulta sql utilizando como values, marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada
                   $sql = "INSERT INTO movies () VALUES ()";

                   $parameters['title'] = $_movie->getTitle();
                   $parameters['category'] = $_movie->getCategory();
                   $parameters['age'] = $_movie->getAge();
                   $parameters['id'] = $_movie->getId();
                   $parameters['id_tmbd'] = $_movie->getId_tmbd();
                   
                   try {
                         // creo la instancia connection
                         $this->connection = Connection::getInstance();
                         // Ejecuto la sentencia.
                    return $this->connection->ExecuteNonQuery($sql, $parameters);

                } catch(PDOException $ex) {
                       throw $ex;
                  }
              }
              
              
              public function read($_id) {
               
                   $sql = "SELECT * FROM movies where id = :id";


                   $parameters['id'] = $_id;

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


              public function readForCategory($category) {
        
                $sql = "SELECT * FROM movies
                 where category = :category";
    
                $parameters['category'] = $category;
    
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
                   $sql = "SELECT * FROM movies";

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
              

              public function edit($_movie) {

                   $sql = "UPDATE movies SET title = :title, category = :category, age = :age, id_tmbd = :id_tmbd";

                   $parameters['title'] = $_movie->getTitle();
                   $parameters['category'] = $_movie->getCategory();
                   $parameters['age'] = $_movie->getAge();
                   $parameters['id_tmdb'] = $_movie->getId_tmbd();
    
                   try {
                        // creo la instancia connection
                     $this->connection = Connection::getInstance();
                    // Ejecuto la sentencia.
                    return $this->connection->ExecuteNonQuery($sql, $parameters);
                } catch(\PDOException $ex) {
                       throw $ex;
                  }
              }
              
              
              public function delete($_id) {

                   $sql = "DELETE FROM movies WHERE id = :id";
                   $parameters['id'] = $_id;

                   try {
                         
                         $this->connection = Connection::getInstance();
                         return $this->connection->ExecuteNonQuery($sql, $parameters);

                   } catch(PDOException $Exception) {

                    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );

                }
              }

          /**
            * Transforma el listado de peliculas en
            * objetos de la clase Movie
            */
            protected function mapear($value) {

                $value = is_array($value) ? $value : [];

                $resp = array_map(function($p){
                    
                    return new M_Movie($p['id'], $p['title'], $p['category'], $p['age'],$p['id_tmbd']);  
                }, $value);
                    
                   return count($resp) > 1 ? $resp : $resp['0'];
            }
         }

?>