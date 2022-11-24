<?php

  $servidor= "localhost";
  $usuario="root";
  $password="";
  $db="bdazemy";
  $conexion=mysqli_connect($servidor, $usuario, $password, $db)or die ($mysqli->connect_errno);



/*
$mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";*/

