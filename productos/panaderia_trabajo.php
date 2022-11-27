
<?php include 'header.php' ?>
<?php
    include_once "../auth/conexion.php";
    $sentencia = $bd -> query("select * from productos");
    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
            <div class="card">
                <div class="card-header">
                    Lista de productos
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Detalle</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Categoria</th>
                                <th scope="col" colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($productos as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->id_producto; ?></td>
                                <td><?php echo $dato->nombre_prod; ?></td>
                                <td><?php echo $dato->detalles_prod; ?></td>
                                <td><?php echo $dato->precio_prod; ?></td>
                                <td><img width="100" src="data:image/jpeg;base64,<?php echo base64_encode($dato->imagen_prod); ?>"></td>
                                <td><?php echo $dato->id_cat; ?></td>
                                <td><a class="text-success" href="crud/actualizar_productos.php?id_producto=<?php echo $dato->id_producto; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="crud/eliminar_productos.php?id_producto=<?php echo $dato->id_producto; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="crud/insertar_productos.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre Producto: </label>
                        <input type="text" class="form-control" name="txtproducto" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Detalles: </label>
                        <input type="text" class="form-control" name="txtdetalles" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio del Producto: </label>
                        <input type="number" class="form-control" name="txtprecio" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen: </label>
                        <!--input type="text" class="form-control" name="txtimagen" autofocus required!-->
                        <input type="file" name="txtimagen" class="from-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria: </label>
                        <input type="text" class="form-control" name="txtcategoria" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>