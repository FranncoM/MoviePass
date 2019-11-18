<?php

namespace DAO;

use Models\Room as M_Room;
use DAO\connection as Connection;
use PDOException;



class DAORoom
{
    private $connection;

    function __construct()
    {

        $this->connection = null;
    }

    /**
     *
     */
    public function create($_room)
    {

        // Guardo como string la consulta sql utilizando como values, marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada
        $sql = "INSERT INTO rooms (id_theather, name , tickets) VALUES (:id_theather, :name , :tickets)";

        $parameters['id_theather'] = $_room->getTheather();
        $parameters['name'] = $_room->getName();
        $parameters['tickets'] = $_room->getTickets();



        try {
            // creo la instancia connection
            $this->connection = Connection::getInstance();
            // Ejecuto la sentencia.
            return $this->connection->ExecuteNonQuery($sql, $parameters);
        } catch (PDOException $ex) {
            throw $ex;
        }
    }


    public function read($_id)
    {

        $sql = "SELECT * FROM rooms where id_room = :id";


        $parameters['id'] = $_id;

        try {
            $this->connection = Connection::getInstance();

            $resultSet = $this->connection->execute($sql, $parameters);
        } catch (Exception $ex) {
            throw $ex;
        }
        if (!empty($resultSet)) {

            return $this->mapear($resultSet);
        } else
            return false;
    }


    public function readAll()
    {
        $sql = "SELECT * FROM rooms";

        try {
            $this->connection = Connection::getInstance();

            $resultSet = $this->connection->execute($sql);
        } catch (Exception $ex) {

            throw $ex;
        }

        if (!empty($resultSet))
            return $this->mapear($resultSet);
        else
            return false;
    }


    public function readForTheather($theather)
    {
        $sql = "SELECT * FROM rooms
                where id_theather = :theather;";

        $parameters['theather'] = $theather;

        try {
            $this->connection = Connection::getInstance();

            $resultSet = $this->connection->execute($sql, $parameters);
        } catch (Exception $ex) {

            throw $ex;
        }

        if (!empty($resultSet))
            return $this->mapear($resultSet);
        else
            return false;
    }

    public function readForNameTheather($room, $id_theather)
    {

        /*$sql = "SELECT * FROM rooms 
        where (id_theather = :id_theather) AND (name LIKE :name );"; #No se porque no funciona así*/

        $sql = "SELECT * FROM rooms 
        where id_theather = ".$id_theather." AND name LIKE ".$room." ;"; #

        /*$sql="CALL Get_id_room(:room,:id_theather)";*/
        
        
        $parameters['name'] = $room;
        $parameters['id_theather'] = $id_theather;

        try {
            $this->connection = Connection::getInstance();

            $resultSet = $this->connection->execute($sql,$parameters);
            
       } catch(Exception $ex) {
           throw $ex;
       }
       if(!empty($resultSet)){
            
        return $this->mapear($resultSet);
       }
           
       else
            return false;
    }



    public function edit($_room)
    {

        $sql = "UPDATE rooms SET theather = :theather, name = :name, tickets = :tickets";

        $parameters['theather'] = $_room->getTheather();
        $parameters['name'] = $_room->getName();
        $parameters['tickets'] = $_room->getTickets();


        try {
            // creo la instancia connection
            $this->connection = Connection::getInstance();
            // Ejecuto la sentencia.
            return $this->connection->ExecuteNonQuery($sql, $parameters);
        } catch (\PDOException $ex) {
            throw $ex;
        }
    }


    public function delete($_id)
    {

        $sql = "DELETE FROM rooms WHERE id_room = :id";
        $parameters['id'] = $_id;

        try {

            $this->connection = Connection::getInstance();
            return $this->connection->ExecuteNonQuery($sql, $parameters);
        } catch (PDOException $Exception) {

            throw new MyDatabaseException($Exception->getMessage(), $Exception->getCode());
        }
    }

    /**
     * Transforooma el listado de peliculas en
     * objetos de la clase Movie
     */
    protected function mapear($value)
    {

        $value = is_array($value) ? $value : [];

        $resp = array_map(function ($p) {

            return new M_room($p["id_theather"], $p['name'], $p['tickets'], $p['id_room']);
        }, $value);

        return count($resp) > 1 ? $resp : $resp['0'];
    }
}
