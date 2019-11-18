<?php namespace Controllers;

use Models\Movie as Movie;
use Models\Session as Session;

use Controllers\MovieController as C_Movie;
use Controllers\ViewController as C_View;

use DAO\DAOSession as Dao;




class SessionController{

    protected $dao;
    private $movieController;
    private $viewController;




    function __construct()
    {
        $this->dao= new Dao;
        $this->movieController= new C_Movie;
        $this->viewController = new C_View;
    }


    public function create($title,$category,$age,$id_tmbd,$id_theather,$id_room,$date,$time)
    {
                    
            $this->movieController->create(0,$title,$category,$age,$id_tmbd);
            $id_movie=$this->movieController->getId_for_name($title);

            $session = new Session($id_theather,$id_room,$id_movie,$date,$time);
            

            $this->dao->create($session);

            $this->viewController->viewsession();
  
    }



  

    public function readAll()
    {
        //guarda todos los user de la base de datos en la variable list

        $list = $this->dao->readAll_sessions();
      
        
        if (!is_array($list) && $list != false){ // si no hay nada cargado, readall devuelve false
            $array[] = $list;
            $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false
            
        }else if($list ==false){
            $list=[];

        }
        
        return $list;
    
    }








}