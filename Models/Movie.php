<?php

namespace Models;

class Movie
{

    private $id;
    private $id_tmdb;
    private $title;
    private $genre;
    private $age;
    private $overview;
    private $poster;


    public function __construct($id = '', $id_tmdb = '', $title = '', $genre = '', $age = '', $overview = '', $poster = '')
    {

        $this->id = $id;
        $this->id_tmdb = $id_tmdb;
        $this->title = $title;
        $this->genre = $genre;
        $this->age = $age;
        $this->overview = $overview;
        $this->poster = $poster;
    }


    ////////////** SETTERS *//////////////////


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setId_tmdb($id_tmdb)
    {
        $this->id_tmdb = $id_tmdb;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setOverview($overview)
    {
        $this->overview = $overview;
    }

    public function setPoster($poster)
    {
        $this->poster = $poster;
    }


    ////////////** GETTERS *//////////////////

    public function getId()
    {
        return $this->id;
    }

    public function getId_tmdb()
    {
        return $this->id_tmdb;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getGenre()
    {

        return $this->genre;
    }

    public function getAge()
    {

        return $this->age;
    }

    public function getOverview()
    {
        return $this->overview;
    }

    public function getPoster()
    {
        return $this->poster;
    }
}
