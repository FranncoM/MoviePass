<?php

namespace DAO;

use Models\Purchase as M_Purchase;
use DAO\connection as Connection;
use PDOException;



class DAOPurchase
{
    private $connection;

    function __construct()
    {

        $this->connection = null;
    }

    /**
     *
     */
    public function create($_purchase)
    {

        // Guardo como string la consulta sql utilizando como values, marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada
        $sql = "insert into purchase (id_user,price,tickets,id_rm) values (:id_user,:price,);";

        $parameters['id_rm'] = $_purchase->getId_rm();
        $parameters['price'] = $_purchase->getPrice();
        $parameters['tickets'] = $_purchase->getTickets();
        $parameters['id_user'] = $_purchase->getId_user();

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

        $sql = "SELECT  FROM purchases where id_purchase = :id";


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
        $sql = "SELECT * FROM purchases";

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

    public function readForSession($id_session)
    {
        $sql = "SELECT m.title as movie, t.name as name_theather, rm.date, rm.time, t.price, m.id as id_movie, rm.id_rm, rm.tickets as stock
        FROM room_x_movie rm INNER JOIN  rooms r ON rm.id_room = r.id_room 
        INNER JOIN theathers t ON t.id_theather = r.id_theather INNER JOIN movies m ON rm.id_movie = m.id 
        where id_rm = :id_session ; ";

        $parameters['id_session'] = $id_session;

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


    public function edit($_purchase)
    {

        $sql = "UPDATE purchases SET ";

        $parameters[''] = $_purchase->getTheather();
        $parameters[''] = $_purchase->getName();
        $parameters[''] = $_purchase->getTickets();


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

        $sql = "DELETE FROM purchases WHERE id_purchase = :id";
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

            return new M_purchase($p['id_user'] = '', $p['name_theather'], $p['id_room'] = '', $p['movie'], $p['date'], $p['time'], $p['id_movie'], $p['id_purchase'] = '', $p['id_rm'], $p['price'], $p['stock']);
        }, $value);

        return count($resp) > 1 ? $resp : $resp['0'];
    }
}
