<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toque</title>

    <link rel="stylesheet"  href="assets/css/index.css" type="text/css">

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
        <a class="navbar-brand text-light fToque fs-3" href="<?=base_url?>">Toque</a>
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
            <span class="navbar-brand text-warning"> | Bienvenido <?=$_SESSION['login']->nombre?></span>
          <?php endif; ?>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fontMenu">
            <li class="nav-item">
              <a class="nav-link fMenu" aria-current="page" href="<?=base_url?>">
                Inicio
              </a>
            </li>
            <?php if(!isset($_SESSION['login'])): ?>
            <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/login"> Ingresar </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/register">Crea tu cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/forget">Olvide mi Contraseña</a>
            </li>
            <?php elseif(isset($_SESSION['login'])): ?>
              <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/misToques"> Mis Toques </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/misDatos">Mis datos</a>
            </li>
            <?php endif; ?>
            <?php if(isset($_SESSION['admin'])):?>
              <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/logout">Cerrar Sesión</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
      
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>

      <!-- CARRUSEL IMAGENES -->

      <!-- falabella -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/css/img/publi.jpg" class="d-block " alt="..." width="100%" height="500px"/>
          <div class="carousel-caption d-none d-md-block">
            <h5>Nuestros Colaboradores</h5>
          </div>
        </div>
        <!-- ripley-->
        <div class="carousel-item">
          <img src="assets/css/img/publi2.jpg" class="d-block" alt="..." width="100%" height="500px"/>
          <div class="carousel-caption d-none d-md-block text-dark"">
            <h5>Nuestros Colaboradores</h5>
          </div>
        </div>
        <!-- paris -->
        <div class="carousel-item">
          <img src="assets/css/img/public3.jpg" class="d-block" alt="..." width="100%" height="500px" />
          <div class="carousel-caption d-none d-md-block text-dark"">
            <h5>Nuestros Colaboradores</h5>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container-flex linea"></div>

    <div class="container mt-5">

   

      <h1 class="text-center ded">Sobre Nosotros</h1>
      <p class="mt-3 mb-5 ded">
      Toque es una aplicación nacional que contempla un sistema de cambio y devolución de productos adquiridos por usuarios en diferentes tipos de comercios. Nace tras la alta demanda en las compras digitales, garantizando seguridad y confianza en el consumidor. El proceso es innovador y dinámico utilizando una extensión web dinámica y responsiva que permita una gran usabilidad, los trabajadores de Toque están comprometidos a realizar una operación rápida y efectiva, utilizando altos estándares de detección y empaquetado. Además, cuenta con una mesa de ayuda para trabajadores, usuarios y comercios asociados, permitiendo una comunicación fluida dentro de la comunidad
      </p>

      <p class="mb-5"></p>

    
    </div>
  </body>
</html>
