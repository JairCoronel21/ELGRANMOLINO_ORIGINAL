<?php include '../header.php' ?>

<?php
    if(!isset($_GET['id_producto'])){
        header('Location: ../panaderia_trabajo.php?mensaje=error');
        exit();
    }

    include_once '../../conexion.php';
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
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $productos->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required
                        value="<?php echo $productos->edad; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Signo: </label>
                        <input type="text" class="form-control" name="txtSigno" autofocus required
                        value="<?php echo $productos->signo; ?>">
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