<?php agespace DAO 

    use Models\Movie as Movie;
    use DAOConnection as Connection;
    use DAOException;

    class DAOmovie{                      ///     $idMovie, $title, $category, $date, $age

        private $connection;

        function __construct() {

            $this->connection = null;
        }

        public function create($movie) {

            $sql = "INSERT INTO movies (idMovie , id_tmbd, category, title, age, date) VALUES (:idMovie, :id_tmbd, :category, :title, :age, :date)";

            $parameters['age'] = $movie->getAge();
            $parameters['title'] = $movie->getTitle();
            $parameters['category'] = $movie->getCategory();
            $parameters['idMovie'] = $movie->getIdMovie();
            $parameters['date'] = $movie->getDate();
            $parameters['id_tmbd'] = $movie->getIdTmbd();

            try {

                $this->connection = Connection::getInstance();
                
            return $this->connection->ExecuteNonQuery($sql, $parameters);

            }catch(PDOException $ex){
                throw $ex;
            }
        }
        
        
        public function read($category) {
        
            $sql = "SELECT * FROM 
            movies where category = :category";

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
    
        public function edit($idMovie) {

            $sql = "UPDATE movies SET id_tmbd = :id_tmbd, age = :age, category = :category, title = :title, category = :category, date = :date";

            $parameters['age'] = $idMovie->getAge();
            $parameters['category'] = $idMovie->getCategory();
            $parameters['title'] = $idMovie->getTitle();
            $parameters['idMovie'] = $idMovie->getIdMovie();
            $parameters['date'] = $idMovie->getdate();
            $parameters['id_tmbd'] = $movie->getIdTmbd();
            
            try {

                $this->connection = Connection::getInstance();

            return $this->connection->ExecuteNonQuery($sql, $parameters);

            }catch(\PDOException $ex){

                throw $ex;
            }
        }
        
        public function delete($category) {

            $sql = "DELETE FROM movies WHERE category = :category";
            $obj_pdo = new Conexion();

            try {
                
                $conexion = $obj_pdo->conectar();
        
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(":category", $category);
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

            return new movie($p['age'], $p['title'], $p['category'], $p['date'], $p['idMovie']);
        }, $value);
            
            return count($resp) > 1 ? $resp : $resp['0'];
    }
}
?>