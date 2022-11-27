<?php 
    if(!isset($_GET['id_producto'])){
        header('Location: ../panaderia_trabajo.php?mensaje=error');
        exit();
    }

    include_once "../../auth/conexion.php";
    $id_producto = $_GET['id_producto'];

    $sentencia = $bd->prepare("DELETE FROM productos where id_producto = ?;");
    $resultado = $sentencia->execute([$id_producto]);

    if ($resultado === TRUE) {
        header('Location: ../panaderia_trabajo.php?mensaje=eliminado');
    } else {
        header('Location: ../panaderia_trabajo.php?mensaje=error');
    }
    
?>