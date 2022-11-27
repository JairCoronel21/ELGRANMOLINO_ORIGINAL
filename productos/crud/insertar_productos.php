<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtproducto"]) || empty($_POST["txtdetalles"]) || empty($_POST["txtprecio"])  || empty($_POST["txtimagen"])  || empty($_POST["txtcategoria"])){
        header('Location:  ../panaderia_trabajo.php?mensaje=falta');
        exit();
    }

    include_once "../../auth/conexion.php";
    $nombre_prod = $_POST['txtproducto'];
    $detalles_prod = $_POST['txtdetalles'];
    $precio_prod = $_POST['txtprecio'];
    $imagen_prod = $_POST['txtimagen'];
    $id_cat = $_POST['txtcategoria'];
    
    $sentencia = $bd->prepare("INSERT INTO productos(nombre_prod,detalles_prod,precio_prod,imagen_prod,id_cat) VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre_prod,$detalles_prod,$precio_prod,$imagen_prod,$id_cat]);

    if ($resultado === TRUE) {
        header('Location: ../panaderia_trabajo.php?mensaje=registrado');
    } else {
        header('Location: ../panaderia_trabajo.php?mensaje=error');
        exit();
    }
    
?>