<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toque</title>

  <link rel="stylesheet" href="./../assets/css/indexUser.css" type="text/css" />

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

  <!-- fuente Menu -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet" />

  <!-- Fuente toque -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand text-light fToque fs-3" href="<?=base_url?>">Toque</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php if(isset($_SESSION['login'])): ?>
        <span class="navbar-brand text-warning fMenu">
          | Bienvenido
          <?=$_SESSION['login']->nombre?>
        </span>
        <?php endif; ?>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fontMenu">
          <li class="nav-item">
            <a class="nav-link active fMenu" aria-current="page" href="<?=base_url?>User/indexUser">
            Dar toque
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fMenu" href="<?=base_url?>User/misToques">
              Mis Toques
            </a>
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

  <!-- LOGIN -->

  <div class="container-flex">
    <div class="row grid">
      <!-- carrusel -->
      <div id="carouselExampleSlidesOnly" class="carousel slide col-3" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- falabella -->
          <div class="carousel-item active">
            <img src="./../assets/css/img/publi.jpg" class="d-block w-100" height="1100px" alt="..." />
          </div>
          <!-- falabella -->
          <div class="carousel-item">
            <img src="./../assets/css/img/public3.pg.jpg" class="d-block w-100" alt="..." height="1100px" />
          </div>
          <!-- falabella -->
          <div class="carousel-item">
            <img src="./../assets/css/img/publi2.jpg" class="d-block w-100" alt="..." height="1100px" />
          </div>
          <div class="carousel-item">
            <img src="./../assets/css/img/public3.jpg" class="d-block w-100" alt="..." height="1100" />
          </div>
        </div>
      </div>

      <!-- formulario -->

      <div class="col-9">
        <form action="<?=base_url?>Toque/save" method="POST" class="bg-dev justify-content-center text-center">
          <section class="mt-5 container">
            <h2 class="fToque fw-bold colorRed ">Dar Toque</h2>
            <h3 class="fToque colorRed mb-4 fs-3">Ingresa tu Solicitud</h3>

            <p class="fMenu textform fs-5">Producto</p>
            <input type="text" id="producto" name="producto" class="w-50 mb-3" placeholder="Bicicleta" />

            <p class="fMenu textform fs-6 mt-3">Comercio</p>
            <select name="comercio_id" class="w-50 mb-3">
              <option value="" hidden="">Comercios</option>
              <?php $comercios = Utils::showComercio() ?>
              <?php while($comercio = $comercios->fetch_object()): ?>
                <option value="<?=$comercio->id?>"><?=$comercio->nombre?></option>
              <?php endwhile; ?>
            </select>

            <p class="fMenu textform fs-5">N°Boleta/Factura</p>
            <input type="number" id="boleta_factura" name="boleta_factura" class="w-50 mb-3" placeholder="765418819" />

            <p class="fMenu textform fs-5">Operación</p>
            <select name="tipo" id="" class="w-50 mb-3">
              <option value="Devolución">Devolución</option>
              <option value="Cambio">Cambio</option>
            </select>

            <p class="fMenu textform fs-5 mt-3">Dirección</p>

            <p class="fMenu textform fs-6 mt-3">Región</p>
            <select name="region_id" class="w-50 mb-3">
              <option value="" hidden="">Región</option>
              <?php $regiones = Utils::showRegion() ?>
              <?php while($region = $regiones->fetch_object()): ?>
                <option value="<?=$region->id?>"><?=$region->nombre?></option>
              <?php endwhile; ?>
            </select>

            <p class="fMenu textform fs-6">Comuna</p>
            <select name="comuna_id" class="w-50 mb-3">
              <option value="" hidden="">Comuna</option>
            <?php $comunas = Utils::showComunas(1) ?>
            <?php while($comuna = $comunas->fetch_object()): ?>
              <option value="<?=$comuna->id?>"><?=$comuna->nombre?></option>
            <?php endwhile; ?>
            </select>

            <p class="fMenu textform fs-6">Calle</p>
            <input type="text" id="calle" name="calle" class="w-50 mb-3" placeholder="Marcoleta" />

            <p class="fMenu textform fs-6">Numero</p>
            <input type="number" id="numero" name="num_calle" class="w-50 mb-3" placeholder="1408" />

            <p class="fMenu textform fs-6">Dpto/Blocke</p>
            <input type="text" id="dpto" name="depto_block" class="w-50 mb-3" placeholder="202A" />

            <p class="fMenu textform fs-5">Comentarios</p>
            <textarea class="wForm" id="" name="comentario" rows="2" cols="50"></textarea>
          </section>
          <button type="submit" class="btn btn-outline-danger mt-4">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>