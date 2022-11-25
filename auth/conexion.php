<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

function conectar(){
    $host="localhost";
    $user="root";
    $pass="bdmolino";

    $bd="alumno";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
?>