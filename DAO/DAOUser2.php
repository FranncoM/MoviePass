<?php namespace DAO ;

    class DAOUser{

        public static function getAllUsers($connection){

            $usuarios = array();

            if(isset($connection)){     // hay coonexion ? //

                try{

                    include_once ('User.php');
                    $sql = "SELECT* FROM MoviePass.users";    // traer todos
                    $sentence = $connection -> prepare($sql);  // evita la inyeccion en mysql 
                    $sentence = execute();
                    $result =  $sentence -> fetchAll ();    // devuelve todos los resultados existentes
                    
                    if (count($result)){    // devuelve 0 si no hay nadie

                        foreach ($result as $row){  // por cada fila va llenando el arreglo, la info esta en ROW

                            $usuarios[] = new User( $fila['name'], $fila['lastName'], $fila['userName'], $fila['email'], 
                                                    $fila['password'], $fila['level'], $fila['purchasedTickets'], $fila['dateTickets']);
                            
                        }
                    }else{

                        print "No hay ningun usuario";
                    } 

                }catch(PDOException $ex){

                    print "ERROR :" . $ex -> getMessage();
                }
            }
            return $usuarios;
        }
    }
?>
