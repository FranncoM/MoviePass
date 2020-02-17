<?php

namespace API;

use Models\Movie as Movie;

class Tmdb
{


    function __construct()
    {
    }


    function search($search, $date)
    {
        $channel = "movie";
        $cs = curl_init();
        curl_setopt($cs, CURLOPT_URL, TMBD_URL . "search/" . $channel . "?api_key=" . APIKEY . "&query=" . $search . "&year=" . $date);


        curl_setopt($cs, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($cs, CURLOPT_HEADER, FALSE);
        curl_setopt($cs, CURLOPT_HTTPHEADER, array("Accept: application/json"));
        $response = curl_exec($cs);
        curl_close($cs);
        $search = json_decode($response);

        foreach ($search->results as $p) {
            $id = $p->id;
        }

        return $id;
    }

    //// OBTRENER TRAILER////////////
    function urlTrailer($idMovie)
    {
        $ct = curl_init();
        curl_setopt($ct, CURLOPT_URL, TMBD_URL . "movie/" . $idMovie . "/videos?api_key=" . APIKEY);
        curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ct, CURLOPT_HEADER, FALSE);
        curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
        $response = curl_exec($ct);
        curl_close($ct);
        $movie = json_decode($response);

        foreach ($movie->results as $value) {

            if ($value->type == "Trailer")
                $keyYT = $value->key;
        }

        return YT_URL . $keyYT;
    }

    //////////////////////////////////////////

    function createMovie($idMovie, $genre, $age)
    {

        $ct = curl_init();
        curl_setopt($ct, CURLOPT_URL, TMBD_URL . "movie/" . $idMovie . "?api_key=" . APIKEY . "&language=es-ES");
        curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ct, CURLOPT_HEADER, FALSE);
        curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
        $response = curl_exec($ct);
        curl_close($ct);
        $array_movie = json_decode($response, true);

        $id_tmdb = $array_movie["id"];
        $title = $array_movie["title"];
        $overview = $array_movie["overview"];
        $poster = URL_POSTER . $array_movie["poster_path"];

        $film = new Movie(0, $id_tmdb, $title, $genre, $age, $overview,  $poster);

        return $film;
    }
}
