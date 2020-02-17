<?php
  if(!isset($_SESSION["user"])){
  echo "<script> alert('Iniciar sesision o registrarse');</script>";
  require(VIEWS_PATH ."home.php") ; }
