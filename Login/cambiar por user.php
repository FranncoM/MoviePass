<?php
    session_start();
?>

<?php

include ('connection.php');

$conexion = new mysqli($host_db, $user_db, $db_name);

if ($conexion->connect_error){

    die("La conexion fallo: " .$conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM $usuarios WHERE username = '$username' ";

$result = $conexion->query($sql);

if ($result->num_rows > 0) { }

    $row = $result->fetch_array(MYSQLI_ASSOC);
    // if (password_verify($password, $row['password']))

if($password==$row['password']){

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + ( 7 * 60 );

    echo "Bienvenido! " .$_SESSION['username'];
    echo "<br><br><a href=panel-control.php> Panel de control</a>";
    header('location : MoviePass/Login/panelDeControl.php');

}else{

    echo "Username o password son incorrectos, verifique y vuelva a intentarlo";
    echo "<br><a href='login.php'>Volver a intentarlo</a>";
}

mysqli_close($conexion);
?>
