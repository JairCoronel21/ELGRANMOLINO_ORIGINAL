<?php 
    include("../../auth/conexion.php");
    $link=conectar();

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA PRODUCTOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_producto" placeholder="id_producto">
                                    <input type="text" class="form-control mb-3" name="nombre_prod" placeholder="nombre_prod">
                                    <input type="text" class="form-control mb-3" name="detalles_prod" placeholder="detalles_prod">
                                    <input type="text" class="form-control mb-3" name="precio_prod" placeholder="precio_prod">
                                    <input type="text" class="form-control mb-3" name="imagen_prod" placeholder="imagen_prod">
                                    <input type="text" class="form-control mb-3" name="id_cat" placeholder="id_cat">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Detalles</th>
                                        <th>Precio</th>
                                        <th>Imagen</th>
                                        <th>Categoria</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_producto']?></th>
                                                <th><?php  echo $row['nombre_prod']?></th>
                                                <th><?php  echo $row['detalles_prod']?></th>
                                                <th><?php  echo $row['precio_prod']?></th>  
                                                <th><?php  echo $row['imagen_prod']?></th> 
                                                <th><?php  echo $row['id_cat']?></th>   
                                                <th><a href="crud/actualizar_productos.php?id=<?php echo $row['id_producto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="crud/eliminiar_productos.php?id=<?php echo $row['id_producto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>