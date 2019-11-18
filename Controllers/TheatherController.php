<?php namespace Controllers;

use Models\Theather as Theather;
use DAO\DAOTheather as Dao;

use Controllers\ViewController as C_View;

class TheatherController
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

    public function create($name,$adress,$price,$full_capacity)
    {
                    
            $theather = new Theather(0,$name,$adress,$price,$full_capacity);
            

            $this->dao->create($theather);

            $this->viewController->cartelera();
  
    }



    public function readAll()
    {
        //guarda todos los user de la base de datos en la variable list

        $list = $this->dao->readAll();

        if (!is_array($list) && $list != false){ // si no hay nada cargado, readall devuelve false
            $array[] = $list;
            $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false
        }else if($list ==false){
            $list=[];

        }
        
        return $list;

    }
    

    public function read($id)
    {
        //DEVUELVE EL user CON ESE EMAIL EN CASO DE EXSISTIR


        return $theather = $this->dao->read($id);


    }


    public function readadress($cat)
    {
        //DEVUELVE EL user CON ESE EMAIL EN CASO DE EXSISTIR


        return $list = $this->dao->readForadress($cat);


    }




    public function delete($id)
    {
        
        $this->dao->delete($id);
        $this->viewController->cartelera();
        

        
    }

}


?>