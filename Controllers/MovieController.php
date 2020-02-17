<?php

namespace Controllers;

use Models\Movie as Movie;
use DAO\DAOMovie as Dao;
use Controllers\ViewController as C_View;
use API\Tmdb as Tmdb;

class MovieController
{
    protected $dao;
    private $viewController;
    private $tmdb;

    function __construct()
    {

        $this->dao = new Dao;
        $this->viewController = new C_View;
        $this->tmdb = new Tmdb;
    }

    public function create($id_tmdb, $title, $genre, $age, $overview, $poster)
    {
        $movie = new Movie(0, $id_tmdb, $title, $genre, $age, $overview, $poster);

        $this->dao->create($movie);
        $this->viewController->adminCartelera();
    }

    public function createTmdb($id_tmdb, $genre, $age)
    {
        $movie = $this->tmdb->createMovie($id_tmdb, $genre, $age);
        $this->dao->create($movie);
        $this->viewController->adminCartelera();
    }



    public function readAll()
    {

        $list = $this->dao->readAll();

        if (!is_array($list) && $list != false) {
            $array[] = $list;
            $list = $array;
        } else if ($list == false) {
            $list = [];
        }

        return $list;
    }


    public function read($id)
    {
        return $movie = $this->dao->read($id);
    }


    public function readForGenre($cat)
    {
        return $list = $this->dao->readForGenre($cat);
    }


    public function getId_for_name($name)
    {
        $movie = $this->dao->readForName($name);

        return $movie->getId();
    }


    public function delete($id)
    {
        $this->dao->delete($id);
        $this->viewController->adminCartelera();
    }


    public function readForDate($date)
    {
        return $list = $this->dao->readForDate($date);
    }
}
