


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Gran Molino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a84584806f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!--Box icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!--link rel="stylesheet" href="../css/normalize.css"!-->
    <link rel="stylesheet" href="../css/productos.css">
</head>
<body>
    <h1>productos</h1>
    <div class="container">
    <?php
    include_once "../auth/conexion.php";
    $sentencia = $bd -> query("select * from productos");
    //$sentencia = $bd -> query("SELECT * FROM productos");
    while ($productos = $sentencia->fetchAll(PDO::FETCH_OBJ)) {

        ?>

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
                            </tr>

                            <?php 
                                }
                            ?>
        <?php
    }
    ?>
    </div>

</body>
<footer class="page-footer font-small pt-4 bg-dark ">
        <div class="container ">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top ">
                <div class="col-md-4 d-flex align-items-center "><img src="img/logo.png " alt=" " width="100px "><span class="text-muted ">&copy;
        2022 El Gran Molino,
        Inc</span></div>
                <div class="col-sm-12 col-md-2 text-light text-center ">
                    <p class="font-weight-bold ">Horarios de atencion:</p>
                    <p>Lunes a Domingo <br>06:00 - 21:00</p>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex ">
                    <li class="list-inline-item "><a class="btn-floating btn-fb mx-1 " href="https://www.facebook.com/GranMolinoOficial " target="_blank "><i class="fab fa-facebook-f text-muted foot_icon "></i></a></li>
                    <li class="list-inline-item "><a class="btn-floating btn-tw mx-1 " href="https://www.instagram.com/elgranmolino/ " target="_blank "><i class="fab fa-instagram text-white foot_icon "></i></a></li>
                    <li class="list-inline-item "><a class="btn-floating btn-gplus mx-1 " href="https://api.whatsapp.com/send?phone=+51900278717&text=Bienvenido,%20como%20Estas? " target="_blank "><i class="fab fa-whatsapp text-white foot_icon "></i></a></li>
                </ul>
            </footer>
        </div>
    </footer>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js "></script>
    <script src="../js/script.js "></script>

</html>  