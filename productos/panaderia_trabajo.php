<?php
   include 'php/conexion.php';

  $query = "Select * from  produtos";

?>


<!DOCTYPE html>
<html lang="es">

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



    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/index.html">
                    <img src="/img/logo.png" alt="" width="100px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <ul class="nav__list">
                    <span>
        
      </span>
                    <div class="carrito__icon">
                        <i class="bx bx-cart"></i>
                        <span class="item__total">0</span>
                    </div>
                </ul>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/historia.html">Historia</a>
                        </li>
                        <!--li class="nav-item">
                            <a class="nav-link" href="../nosotros.html">Nosotros</a>
                        </!--li!-->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../productos/panaderia.html">Productos</a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Pedidos.html">Pedidos</a>
                        </li>


                </div>
            </div>
        </nav>
    </header>

    <!--Filter-->
    <!--Filter-->
    <section class="filter">
        <div class="grid">
            <div class="div">
                <label for="buscar"><span><i class="bx bx-search"></i></span></label>
                <input type="text" id="buscar" placeholder="Buscar Productos...">
            </div>
            <div class="category">
                <select id="category" onclick="categoryValue()">
        <option value="">Productos</option>
        <option value="panes">Panes</option>
        <option value="tortas">Tortas</option>
        <option value="pastel">Pasteles</option>
        <!--option value="rolexDay">Rolex Day</!--option!-->
        <!--option value="hublot">Hublot</!--option!-->
        <!--option value="tag">Tag Heuer</!--option!-->
      </select>
            </div>
        </div>
    </section>

    <!--Productos-->
    <section class="productos">
        <div class="productos__center">
            <!-- <div class="producto">
          <div class="image__container">
            <img src="https://cdn4.chrono24.com/images/topmodels/2875-7wlcl6ogfoc0qxg22ox6up9m-Original.png?auto=compress&amp;h=305" alt="">
          </div>
          <div class="producto__footer">
            <h1>Rejoles Originales</h1>
            <div class="rating">
              <span>
                <i class="bx bxs-star"></i>
              </span>
              <span>
                <i class="bx bxs-star"></i>
              </span>
              <span>
                <i class="bx bxs-star"></i>
              </span>
              <span>
                <i class="bx bxs-star"></i>
              </span>
              <span>
                <i class="bx bx-star"></i>
              </span>
            </div>
            <div class="price">102.00</div>
          </div>
          <div class="bottom">
            <div class="btn__group">
              <a href="#" class="btn addToCart">Añadir carrito</a>
              <a href="producto-detalles.html" class="btn view">Vista</a>
            </div>
          </div>
        </div> -->
        </div>
    </section>

    <!--Carrito-->

    <section class="carrito__overlay">
        <div class="carrito">
            <span class="close__carrito">
          <i class="bx bx-x"></i>
        </span>
            <h1>Su Carrito</h1>

            <div class="carrito__center">

                <!-- <div class="carrito__item">

            <img src="https://cdn4.chrono24.com/images/topmodels/2875-7wlcl6ogfoc0qxg22ox6up9m-Original.png?auto=compress&amp;h=305" alt="reloj">
            <div>
              <h3>Relojes Originales </h3>
              <p class="price">$122</p>
            </div>
            <div>
              <span>
                <i class="bx bxs-up-arrow"></i>
              </span>
              <p>1</p>
              <span>
                <i class="bx bxs-down-arrow"></i>
              </span>
            </div>
            <div>
              <span class="remove__item">
                <i class="bx bx-trash"></i>
              </span>
            </div>

            
          </div> -->
            </div>

            <div class="carrito__footer">
                <h3>Total: S/ <span class="carrito__total">0</span></h3>
                <button class="clear__carrito btn">Eliminar Carrito</button>
            </div>
        </div>
    </section>

    <footer class="page-footer font-small  pt-4 bg-dark">


        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">

                    <img src="img/logo.png" alt="" width="100px">

                    <span class="text-muted">&copy; 2022 El Gran Molino, Inc</span>
                </div>
                <div class="col-sm-12 col-md-2 text-light text-center">
                    <p class="font-weight-bold">Horarios de atencion:</p>
                    <p>Lunes a Domingo <br>06:00 - 21:00</p>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/GranMolinoOficial" target="_blank">
                            <i class="fab fa-facebook-f text-muted foot_icon"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-tw mx-1" href="https://www.instagram.com/elgranmolino/" target="_blank">
                            <i class="fab fa-instagram text-white foot_icon"></i>
                        </a>
                    </li>


                    <li class="list-inline-item">
                        <a class="btn-floating btn-gplus mx-1" href="https://api.whatsapp.com/send?phone=+51900278717&text=Bienvenido,%20como%20Estas?" target="_blank">
                            <i class="fab fa-whatsapp text-white foot_icon"></i>
                        </a>
                    </li>
                </ul>

            </footer>
        </div>

    </footer>

    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="../js/script.js"></script>


</body>

</html>