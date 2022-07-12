<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toque</title>

    <link rel="stylesheet"  href="./../assets/css/indexUser.css" type="text/css">

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />

    <!-- js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>


    <!-- fuente Menu -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap"
      rel="stylesheet"
    />

    <!-- Fuente toque -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <div class="container">
        <a class="navbar-brand text-light fToque fs-3" href="#">Toque</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <?php if(isset($_SESSION['login'])): ?>
            <span class="navbar-brand text-warning fMenu"> | Bienvenido <?=$_SESSION['login']->nombre?></span>
          <?php endif; ?>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fontMenu">
            
            <li class="nav-item">
              <a class="nav-link fMenu active" href="<?=base_url?>User/misToques"> Mis Toques </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/miCuenta">Mi Cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/logout">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>




<div class="container-flex">
<div class="row grid">
<!-- carrusel -->
<div id="carouselExampleSlidesOnly" class="carousel slide col-3" data-bs-ride="carousel">
    <div class="carousel-inner">
       <!-- falabella -->
    <div class="carousel-item active">
      <img src="./../assets/css/img/publi.jpg" class="d-block w-100"  height="490px" alt="...">
    </div>
       <!-- falabella -->
    <div class="carousel-item">
      <img src="./../assets/css/img/public3.pg.jpg" class="d-block w-100" alt="..."  height="490px" >
    </div>
       <!-- falabella -->
    <div class="carousel-item">
      <img src="./../assets/css/img/publi2.jpg" class="d-block w-100" alt="..."  height="490px">
    </div>
    <div class="carousel-item">
      <img src="./../assets/css/img/public3.jpg" class="d-block w-100" alt="..."height="490px">
    </div>
  </div>
</div>


<div class="col-9">

<section class=" mt-4 bg-dev justify-content-center text-center" >
<div class="mt-5 container">
    <h2 class="fToque mb-4 colorRed fs-1">Ingreso Correcto!</h2>
       <img src="./../assets/css/img/toque.png" alt="" height="220px" width="220px" class="rounded sh-img">
       <p class="fMenu mt-3 fs-4 colorRed">A un Toque de tí =)</p>
          </div>
    </section>
 </div>
</div>
</div>

  </body>
</html>