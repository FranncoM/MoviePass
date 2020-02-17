<?php

namespace DAO;

use Models\Movie as M_Movie;
use DAO\connection as Connection;
use PDOException;

/**
 *
 */
class DAOMovie
{

    private $connection;

    function __construct()
    {

        $this->connection = null;
    }

    /**
     *
     */
    public function create($_movie)
    {

        // Guardo como string la consulta sql utilizando como values, marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada
        $sql = "INSERT INTO movies (id_tmdb,title,genre,age,overview,poster) VALUES (:id_tmdb, :title, :genre, :age, :overview, :poster)";

        $parameters['id_tmdb'] = $_movie->getId_tmdb();
        $parameters['title'] = $_movie->getTitle();
        $parameters['genre'] = $_movie->getGenre();
        $parameters['age'] = $_movie->getAge();
        $parameters['overview'] = $_movie->getOverview();
        $parameters['poster'] = $_movie->getPoster();

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

        $sql = "SELECT * FROM movies where id = :id";


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


    public function readForGenre($genre)
    {

        $sql = "SELECT * FROM movies
                 where genre = :genre";

        $parameters['genre'] = $genre;

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

    public function readForName($title)
    {

        $sql = "SELECT * FROM movies where title LIKE :title limit 1";

        $parameters['title'] = $title;


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

    public function readForDate($date)
    {

        $sql = "SELECT m.id AS id, m.title AS title, m.id_tmdb AS id_tmdb, m.age AS age, m.genre AS genre, m.overview AS overview, m.poster AS poster
            FROM room_x_movie rm INNER JOIN  rooms r ON rm.id_room = r.id_room INNER JOIN theathers t ON t.id_theather = r.id_theather INNER JOIN movies m ON rm.id_movie = m.id
             where rm.date = :date group by m.title;";

        $parameters['date'] = $date;


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
        $sql = "SELECT * FROM movies";

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


    public function edit($_movie)
    {

        $sql = "UPDATE movies SET title = :title, genre = :genre, age = :age";

        $parameters['title'] = $_movie->getTitle();
        $parameters['genre'] = $_movie->getGenre();
        $parameters['age'] = $_movie->getAge();

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

        $sql = "DELETE FROM movies WHERE id = :id";
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

            return new M_Movie($p['id'], $p['id_tmdb'], $p['title'], $p['genre'], $p['age'], $p['overview'], $p['poster']);
        }, $value);

        return count($resp) > 1 ? $resp : $resp['0'];
    }
}
