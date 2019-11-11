<?php namespace DAO 

    use Models\Theather as Theather;
    use DAOConnection as Connection;
    use DAOException;

    class DAOTheather{

        private $connection;

        function __construct() {

            $this->connection = null;
        }

        public function create($theather) {

            $sql = "INSERT INTO theathers (idTeather, ticket, idTeather, name, fullCapacity) VALUES (:idTeather, :ticket, :idTeather, :name, :fullCapacity)";

            $parameters['name'] = $theather->getName();
            $parameters['ticket'] = $theather->getTicket();
            $parameters['idTeather'] = $theather->getidTeather();
            $parameters['idTeather'] = $theather->getidTeather();
            $parameters['fullCapacity'] = $theather->getFullCapacity();

            try {

                $this->connection = Connection::getInstance();
                
            return $this->connection->ExecuteNonQuery($sql, $parameters);

            }catch(PDOException $ex){
                throw $ex;
            }
        }
        
        
        public function read($idTeather) {
        
            $sql = "SELECT * FROM theathers where idTeather = :idTeather";

            $parameters['idTeather'] = $idTeather;

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

            $sql = "SELECT * FROM theathers";

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
    
        public function edit($idTeather) {//adress id teather

            $sql = "UPDATE theathers SET name = :name, idTeather =:idTeather, adress =:adress, ticket = :ticket, fullCapacity = :fullCapacity";

            $parameters['name'] = $_user->getName();
            $parameters['adress'] = $_user->getAdress();
            $parameters['ticket'] = $_user->getUserName();
            $parameters['idTheather'] = $_user->getIdTheather();
            $parameters['fullCapacity'] = $_user->getfullCapacity();
            
            try {

                $this->connection = Connection::getInstance();

            return $this->connection->ExecuteNonQuery($sql, $parameters);

            }catch(\PDOException $ex){

                throw $ex;
            }
        }
        
        public function delete($idTheather) {

            $sql = "DELETE FROM users WHERE idTeather = :idTeather";
            $obj_pdo = new Conexion();

            try {
                
                $conexion = $obj_pdo->conectar();
        
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(":idTeather", $idTeather);
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

            return new Theather($p['name'], $p['ticket'], $p['idTeather'], $p['fullCapacity'], $p['adress']);
        }, $value);
            
            return count($resp) > 1 ? $resp : $resp['0'];
    }
}
?>