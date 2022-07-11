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
              <a class="nav-link fMenu" href="<?=base_url?>User/misToques"> Mis Toques </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/miCuenta">Mi Cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fMenu" href="<?=base_url?>User/forget">Olvide mi Contraseña</a>
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
      <img src="./../assets/css/img/publi.jpg" class="d-block w-100"  height="1100px" alt="...">
    </div>
       <!-- falabella -->
    <div class="carousel-item">
      <img src="./../assets/css/img/public3.pg.jpg" class="d-block w-100" alt="..."  height="1100px" >
    </div>
       <!-- falabella -->
    <div class="carousel-item">
      <img src="./../assets/css/img/publi2.jpg" class="d-block w-100" alt="..."  height="1100px">
    </div>
    <div class="carousel-item">
      <img src="./../assets/css/img/public3.jpg" class="d-block w-100" alt="..."height="1100">
    </div>
  </div>
</div>

<!-- formulario -->

<div class=" col-9  ">
<form action="" class="  bg-dev justify-content-center text-center">
  <section class="mt-5 container">

    <h2 class="mt-4 fToque colorRed mb-4">Ingresar Solicitud</h2>

   

    <p class="fMenu textform fs-5">Producto</p>
    <input type="text" id="producto" class="w-50 mb-3" placeholder="Bicicleta">


    <p class="fMenu textform fs-5">Comercio</p>
    <input type="text" id="comercio" class="w-50 mb-3" placeholder="Falabella">

    <p class="fMenu textform fs-5">N°Boleta/Factura</p>
    <input type="number" id="comercio" class=" w-50 mb-3" placeholder="765418819">

    <p  class="fMenu textform fs-5">Operación</p>
    <select name="" id="" class="w-50 mb-3">
      <option value="">Devolución</option>
      <option value="">Cambio</option>
    </select>

 
    <p class="fMenu textform fs-5 mt-3">Dirección</p>
 
    <p class="fMenu textform fs-6 mt-3 ">Región</p>
    <select name="region" class="w-50 mb-3"><option value="region13">Región Metropolitana</option><option value="region1">Región de Tarapacá</option><option value="" hidden="">Región</option><option value="region2">Región de Antofagasta</option><option value="region3">Región de Atacama</option><option value="region4">Región de Coquimbo</option><option value="region5">Región de Valparaíso</option><option value="region6">Región del Libertador General Bernardo OHiggins</option><option value="region7">Región del Maule</option><option value="region8">Región del Bío Bío</option><option value="region9">Región de la Araucanía</option><option value="region10">Región de los Lagos</option><option value="region14">Región de los Ríos</option><option value="region15">Región de Arica y Parinacota</option><option value="region16">Región del Ñuble</option></select>
    <p class="fMenu textform fs-6">Comuna</p>
    <select name="commune" class="w-50 mb-3"><option value="" hidden="">Comuna</option><option value="ALHUÉ">Alhué</option><option value="ALTO JAHUEL">Alto jahuel</option><option value="BATUCO">Batuco</option><option value="BOLLENAR">Bollenar</option><option value="BUIN">Buin</option><option value="CALERA DE TANGO">Calera de tango</option><option value="CALEU">Caleu</option><option value="CERRILLOS">Cerrillos</option><option value="CERRO NAVIA">Cerro navia</option><option value="CHAMPA">Champa</option><option value="CHICUREO">Chicureo</option><option value="COLINA">Colina</option><option value="CONCHALÍ">Conchalí</option><option value="CURACAVÍ">Curacaví</option><option value="EL BOSQUE">El bosque</option><option value="EL CANELO">El canelo</option><option value="EL COLORADO">El colorado</option><option value="EL MANZANO">El manzano</option><option value="EL MONTE">El monte</option><option value="ESMERALDA">Esmeralda</option><option value="ESTACIÓN CENTRAL">Estación central</option><option value="FARELLONES">Farellones</option><option value="HUECHURABA">Huechuraba</option><option value="HUELQUÉN">Huelquén</option><option value="INDEPENDENCIA">Independencia</option><option value="ISLA DE MAIPO">Isla de maipo</option><option value="LA CISTERNA">La cisterna</option><option value="LA DEHESA">La dehesa</option><option value="LA FLORIDA">La florida</option><option value="LA GRANJA">La granja</option><option value="LA OBRA">La obra</option><option value="LA PARVA">La parva</option><option value="LA PINTANA">La pintana</option><option value="LA REINA">La reina</option><option value="LAMPA">Lampa</option><option value="LAS CANTERAS">Las canteras</option><option value="LAS CONDES">Las condes</option><option value="LAS VERTIENTES">Las vertientes</option><option value="LAS VIZCACHAS">Las vizcachas</option><option value="LINDEROS">Linderos</option><option value="LO BARNECHEA">Lo barnechea</option><option value="LO CURRO">Lo curro</option><option value="LO ESPEJO">Lo espejo</option><option value="LO HERRERA">Lo herrera</option><option value="LO PRADO">Lo prado</option><option value="LOMAS DE LO AGUIRRE">Lomas de lo aguirre</option><option value="LONQUÉN">Lonquén</option><option value="MACUL">Macul</option><option value="MAIPÚ">Maipú</option><option value="MALLOCO">Malloco</option><option value="MARÍA PINTO">María pinto</option><option value="MELIPILLA">Melipilla</option><option value="MELOCOTÓN">Melocotón</option><option value="NOS">Nos</option><option value="NOVICIADO">Noviciado</option><option value="PADRE HURTADO">Padre hurtado</option><option value="PAINE">Paine</option><option value="PEDRO AGUIRRE CERDA">Pedro aguirre cerda</option><option value="PEÑAFLOR">Peñaflor</option><option value="PEÑALOLÉN">Peñalolén</option><option value="PIRQUE">Pirque</option><option value="POMAIRE">Pomaire</option><option value="PROVIDENCIA">Providencia</option><option value="PUDAHUEL">Pudahuel</option><option value="PUENTE ALTO">Puente alto</option><option value="QUILICURA">Quilicura</option><option value="QUINTA NORMAL">Quinta normal</option><option value="RECOLETA">Recoleta</option><option value="RENCA">Renca</option><option value="RUNGUE">Rungue</option><option value="SAN ALFONSO">San alfonso</option><option value="SAN BERNARDO">San bernardo</option><option value="SAN GABRIEL">San gabriel</option><option value="SAN JOAQUÍN">San joaquín</option><option value="SAN JOSÉ DE MAIPO">San josé de maipo</option><option value="SAN MANUEL">San manuel</option><option value="SAN MIGUEL">San miguel</option><option value="SAN PEDRO">San pedro</option><option value="SAN RAMÓN">San ramón</option><option value="SANTIAGO">Santiago</option><option value="TALAGANTE">Talagante</option><option value="TIL TIL">Til til</option><option value="VALLE NEVADO">Valle nevado</option><option value="VILUCO">Viluco</option><option value="VITACURA">Vitacura</option><option value="ÑUÑOA">Ñuñoa</option></select>

    <p class="fMenu textform fs-6">Calle</p>
    <input type="text" id="calle" class=" w-50 mb-3" placeholder="Marcoleta">

    <p class="fMenu textform fs-6">Numero</p>
    <input type="number" id="numero" class=" w-50 mb-3" placeholder="1408">

    <p class="fMenu textform fs-6">Dpto/Blocke</p>
    <input type="text" id="dpto" class=" w-50 mb-3" placeholder="202A">
    

    <p class="fMenu textform fs-5">Comentarios</p>
    <textarea class="wForm" id="" rows="2" cols="50"></textarea>



  </section>
  <button type="button" class="btn btn-outline-danger mt-4">Enviar</button>
</form>
</div>

      </div>
    </div>
  </body>
</html>
