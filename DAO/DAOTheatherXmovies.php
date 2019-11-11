<?php namespace DAO 

    use Models\Movie as Movie;
    use Models\Theather as Theather;
    use DAOConnection as Connection;
    use DAOException;

    class DAOmovie{                     

        private $connection;

        function __construct() {

            $this->connection = null;
        }

        public function putMovieInTheather ($movie, $theather) {

            $sql = "INSERT INTO theatherXmovies (idMovie ,idTheather) VALUES (:idMovie ,:idTheather)";

            $parameters['idTheather'] = $theather>getIdTheather();
            $parameters['idMovie'] = $movie->getIdMovie();

            try {

                $this->connection = Connection::getInstance();
                
            return $this->connection->ExecuteNonQuery($sql, $parameters);

            }catch(PDOException $ex){
                throw $ex;
            }
        } 
        
        public function readAvailable ($movie){


        }    
        
        // que tenga el cine y que hayan entradas

        public function read($idTheatherXmovies) {
        
            $sql = "SELECT * FROM 
                    movies where idTheather = :idTheather",
                    theathers

            $parameters['idTheather'] = $idTheather;

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
    
        public function edit($idMovie) {

            $sql = "UPDATE movies SET age = :age, idTheather = :idTheather, title = :title, idTheather = :idTheather, date = :date";

            $parameters['age'] = $idMovie->getAge();
            $parameters['idTheather'] = $idMovie->getidTheather();
            $parameters['title'] = $idMovie->getTitle();
            $parameters['idMovie'] = $idMovie->getIdMovie();
            $parameters['date'] = $idMovie->getdate();
            
            try {

                $this->connection = Connection::getInstance();

            return $this->connection->ExecuteNonQuery($sql, $parameters);

            }catch(\PDOException $ex){

                throw $ex;
            }
        }
        
        public function delete($idTheather) {

            $sql = "DELETE FROM movies WHERE idTheather = :idTheather";
            $obj_pdo = new Conexion();

            try {
                
                $conexion = $obj_pdo->conectar();
        
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(":idTheather", $idTheather);
                $sentencia->execute();

            }catch(PDOException $Exception){

                throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode());
            }
        }

    /**
     * Transforma el listado de usuario en

     * @param  Array $gente Listado de personas a transformar
     */
    protected function mapear($value) {

        $value = is_array($value) ? $value : [];

        $resp = array_map(function($p){

            return new movie($p['age'], $p['title'], $p['idTheather'], $p['date'], $p['idMovie']);
        }, $value);
            
            return count($resp) > 1 ? $resp : $resp['0'];
    }
}
?>