<?php

namespace DAO;

use Models\Ticket as M_Ticket;
use DAO\connection as Connection;


use PDOException;

/**
 *
 */
class DAOTicket
{
    private $connection;

    function __construct()
    {

        $this->connection = null;
    }

    /**
     *
     */
    public function create($_ticket)
    {

        // Guardo como string la consulta sql utilizando como values, marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada
        $sql = "insert into tickets(id_rm,id_user,movie,date,time,price,theather) values (:id_rm,:id_user,:movie,:date,:time,:price,:theather);";

        $parameters['id_rm'] = $_ticket->getId_rm();
        $parameters['id_user'] = $_ticket->getId_user();
        $parameters['movie'] = $_ticket->getMovie();
        $parameters['date'] = $_ticket->getDate();
        $parameters['time'] = $_ticket->getTime();
        $parameters['price'] = $_ticket->getPrice();
        $parameters['theather'] = $_ticket->getTheather();

        try {

            $this->connection = Connection::getInstance();
            return $this->connection->ExecuteNonQuery($sql, $parameters);
        } catch (PDOException $ex) {
            throw $ex;
        }
    }

    /*******Reads **********/
    public function read($_id)
    {

        $sql = "SELECT * FROM tickets where id_ticket = :id";


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


    public function readForUser($id)
    {
        $sql = "SELECT tk.id_ticket, m.title AS movie, r.name AS room, rm.date, rm.time, t.price, t.name as theather, rm.id_rm,t.adress  
        FROM tickets tk INNER JOIN room_x_movie rm ON tk.id_rm = rm.id_rm INNER JOIN rooms r ON rm.id_room = r.id_room INNER JOIN movies m on rm.id_movie = m.id 
        INNER JOIN theathers t ON t.id_theather = r.id_theather WHERE tk.id_user = :id ;";

        $parameters['id']=$id;

        try {
            $this->connection = Connection::getInstance();

            $resultSet = $this->connection->execute($sql,$parameters);

        } catch (Exception $ex) {

            throw $ex;
        }

        if (!empty($resultSet))
            return $this->mapear($resultSet);
        else
            return false;
    }

    public function readAll()
    {
        $sql = "SELECT * FROM tickets";

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

    /** */
    public function edit($_movie)
    { //modificar//////////////////////////////////////////

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
        } catch (\PDOException $ex) {
            throw $ex;
        }
    }


    public function delete($_id)
    {

        $sql = "DELETE FROM room_x_movie WHERE id_rm = :id";
        $parameters['id'] = $_id;

        try {

            $this->connection = Connection::getInstance();
            return $this->connection->ExecuteNonQuery($sql, $parameters);
        } catch (PDOException $Exception) {

            throw new MyDatabaseException($Exception->getMessage(), $Exception->getCode());
        }
    }

    /**
     * Transforma el listado de peliculas en
     * objetos de la clase Movie
     */
    protected function mapear($value)
    {

        $value = is_array($value) ? $value : [];

        $resp = array_map(function ($p) {

            return new M_Ticket( $p['id_user']='', $p['movie'], $p['room'], $p['date'], $p['time'], $p['price'], $p['theather'], $p['adress'], $p['id_rm'],$p["id_ticket"]);
        }, $value);

        return count($resp) > 1 ? $resp : $resp['0'];
    }
}
