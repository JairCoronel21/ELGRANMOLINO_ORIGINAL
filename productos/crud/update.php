<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: ../panaderia_trabajo.php?mensaje=error');
    }

    include_once "../../auth/conexion.php";
    $id_producto= $_POST['id_producto'];
    $nombre_prod = $_POST['txtproducto'];
    $detalles_prod = $_POST['txtdetalles'];
    $precio_prod = $_POST['txtprecio'];
    $imagen_prod = $_POST['txtimagen'];
    $id_cat = $_POST['txtcategoria'];

    $sentencia = $bd->prepare("UPDATE productos SET nombre_prod = ?, detalles_prod = ?, precio_prod = ? , imagen_prod = ?, id_cat = ?where id_producto = ?;");
    $resultado = $sentencia->execute([$nombre_prod, $detalles_prod, $precio_prod, $imagen_prod, $id_cat, $id_producto]);

    if ($resultado === TRUE) {
        header('Location: ../panaderia_trabajo.php?mensaje=editado');
    } else {
        header('Location: ../panaderia_trabajo.php?mensaje=error');
        exit(); 
    }
    
?>   