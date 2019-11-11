<?php namespace Controllers;

    use Models\Movie as Movie;
    use DAO\DAOMovie as DAOMovie;

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
    
        public function create($idMovie, $title, $category, $date, $age)
        {
            //if(!empty($type)){
                //crea el objeto Movie para luego agregarlo a la base de datos
    
                $Movie = new Movie($idMovie, $title, $category, $date, $age);
    
                //llama al metodo del dao para guardarlo en la base de datos
    
                $this->dao->create($Movie);
    
            //}
            else {

                //crea el objeto Movie para luego agregarlo a la base de datos
                $Movie = new Movie($idMovie, $title, $category, $date, $age);
    
                //llama al metodo del dao para guardarlo en la base de datos
    
                $this->dao->create($Movie);
    
                //luego de guardarlo en la base de datos se muetra el inicio de la pagina
                $this->viewController->movies();
            }
        }
    

        public function readAll(){

            //guarda todos los Movie de la base de datos en la variable list
    
            $list = $this->dao->readAll();
            if (!is_array($list) && $list != false){ // si no hay nada cargado, readall devuelve false
                $array[] = $list;
                $list = $array; // para que devuelva un arreglo en caso de haber solo 1 objeto // esto para cuando queremos hacer foreach al listar, ya que no se puede hacer foreach sobre un objeto ni sobre un false
            }
    
            return $list;
        }
    
        public function read($category){

            //DEVUELVE EL Movie CON ESE category EN CASO DE EXSISTIR

            $Movie = $this->dao->read($category);
    
            //INCLUYE LA VISTA DONDE SE MUESTRA EL Movie
    
            //FALTA HACER LA VISTA
        }
    
        public function delete($idMovie)
        {
            //BORRA EL Movie QUE COINCIDE CON EL idMovie RECIBIDO POR PARAMETROS DE LA BASE DE DATOS
    
            $this->dao->delete($idMovie);
    
            //INCLUYE LA VISTA PRINCIPAL
    
            $this->viewController->viewAdmin();
        }
    }
?>