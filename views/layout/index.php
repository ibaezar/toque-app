<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toque</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="css/index.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <div class="container">
        <a class="navbar-brand text-light" href="#">Toque</a>
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
              <a class="nav-link" aria-current="page" href="<?=base_url?>">
                Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url?>User/login"> Ingresar </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url?>User/register">Crea tu cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url?>User/forget">Olvide mi Contraseña</a>
            </li>
            <?php if(isset($_SESSION['admin'])):?>
              <li class="nav-item">
              <a class="nav-link" href="<?=base_url?>User/logout">Cerrar Sesión</a>
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
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/css/img/publi.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Nuestros Colaboradores</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita
              blanditiis incidunt quas deserunt recusandae eos dolorum, suscipit
              nesciunt! Placeat dolor similique distinctio quis quisquam. Harum
              labore recusandae perferendis earum neque.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/css/img/publi2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Nuestros Colaboradores</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
              magni cum aliquam omnis, placeat eum. Aliquid libero labore illo
              quaerat nam laborum id aliquam fugiat. Beatae sequi explicabo odio
              eos.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/css/img/publi3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Nuestros Colaboradores</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
              autem, amet voluptates dolorum laborum eum nisi necessitatibus
              sunt, doloribus debitis dolor? Quasi animi, ducimus eos iusto
              placeat totam dolore dicta!
            </p>
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

    <div class="container mt-5">
      <h1 class="text-center">¿Qué es Toque?</h1>
      <p class="mt-3 mb-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit eum
        obcaecati veritatis nulla alias distinctio excepturi veniam magnam
        aperiam mollitia ullam quos sit ad nostrum repellendus esse, recusandae
        aliquid necessitatibus? Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Praesentium incidunt, magni a culpa ex laudantium
        alias facere harum porro, natus perspiciatis eveniet dicta placeat
        reprehenderit asperiores tenetur iure maiores. Error. Lorem ipsum dolor
        sit amet consectetur adipisicing elit. Temporibus accusamus cupiditate
        tenetur. Architecto sed doloremque sunt autem enim, adipisci iusto
        perferendis recusandae nulla nisi reiciendis voluptates distinctio
        necessitatibus! Labore, ad?
      </p>

      <p class="mb-5"></p>
    </div>
  </body>
</html>
