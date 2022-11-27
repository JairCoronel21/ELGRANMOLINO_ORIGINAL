<?php include '../header.php' ?>

<?php
    if(!isset($_GET['id_producto'])){
        header('Location: ../panaderia_trabajo.php?mensaje=error');
        exit();
    }

    include_once "../../auth/conexion.php";
    $id_producto = $_GET['id_producto'];

    $sentencia = $bd->prepare("select * from productos where id_producto = ?;");
    $sentencia->execute([$id_producto]);
    $productos = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar Productos:
                </div>
                <form class="p-4" method="POST" action="update.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre Producto: </label>
                        <input type="text" class="form-control" name="txtproducto" required 
                        value="<?php echo $productos->nombre_prod; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Detalle: </label>
                        <input type="text" class="form-control" name="txtdetalles" autofocus required
                        value="<?php echo $productos->detalles_prod; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio: </label>
                        <input type="number" class="form-control" name="txtprecio" autofocus required
                        value="<?php echo $productos->precio_prod; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen: </label>
                        <input type="file" name="txtimagen" class="from-control">
                        <img width="100" src="data:image/jpeg;base64,<?php echo  base64_encode($row['imagen_prod']); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria: </label>
                        <input type="text" class="form-control" name="txtcategoria" autofocus required
                        value="<?php echo $productos->id_cat; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id_producto" value="<?php echo $productos->id_producto; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php' ?>