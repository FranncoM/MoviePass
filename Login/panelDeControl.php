<?php
    session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

}else{

    echo "error";
    /* echo "Inicia sesion para acceder a este contenido.<br>";
    echo "<br><a href='home.php'>Login</a>"; HACER VOLVER AL REGISTRO DE USER
    echo "<br><br><a href='index.php'" */

    exit;
}

$now = time ();

if ($now > $_SESSION['expire']){

    session_destroy();
    header('Location : /Views/login.php');
    echo "Tu sesion ha expirado" //HACER VOLVER A INICIAR SESION
    exit;
}
?>
<html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Perfil</title>
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax"