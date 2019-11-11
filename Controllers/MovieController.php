<?php namespace Controllers;

use Models\Movie as Movie;
use DAO\DAOMovie as Dao;

use Controllers\ViewController as C_View;

class MovieController
{
    protected $dao;
    private $viewController;

    function __construct()
    {
       // $this->dao = Dao::getInstance();
       $this->dao= new Dao;
        $this->viewController = new C_View;
    }
    /*
    *
    */

    public function create($title,$category,$age)
    {
                    
            $movie = new Movie(0,$title,$category,$age);
            

            $this->dao->create($movie);
  
    }



    public function readAll()
    {
        //guarda todos los user de la base de datos en la variable list

        $list = $this->dao->readAll();

        if (!is_array($list) && $list != false){ // si no hay nada cargado, readall devuelve false
            $array[] = $list;
            $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false
        }

        return $list;

    }
    

    public function read($id)
    {
        //DEVUELVE EL user CON ESE EMAIL EN CASO DE EXSISTIR


        return $movie = $this->dao->read($id);


    }


    public function readCategory($cat)
    {
        //DEVUELVE EL user CON ESE EMAIL EN CASO DE EXSISTIR


        return $list = $this->dao->readForCategory($cat);


    }




    public function delete($id)
    {
        
        $this->dao->delete($id);
        

        
    }

}


?>