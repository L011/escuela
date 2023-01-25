
<html lang="es">
  <!--Llamada al head-->
  <?php
    require_once("comunes/encabezado.php")
  ?>
  <head>


      <link href="css/principal.css" rel="stylesheet">
  </head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<body>
  <!-- Back to top button-->
  <div class="back-to-top"></div>
<header>
  <!--Llamada al encabezado-->
  <div class="mb-4">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" >U.E.N.<span class="text-primary"> Divino Niño</span></a>
          

  		<div class="collapse navbar-collapse" id="navbarNavDropdown">

  		</div>
      <span class="navbar-text">
      <a class="btn btn-outline-success my-2 my-sm-0" href="?pagina=inicio">Iniciar Sesión</a>
    </span>
    </nav>
  </div>
</header>

<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
      <h1>Unidad Educativa Nacional "Divino Niño"</h1>
      <p class="lead text-muted">     Optimizar y asegurar la atención educativa de los niños y niñas de la comunidad de Llano Alto y sus adyacentes, desde el momento de su ingreso al nivel prescolar hasta la educación básica, sumados a las políticas educativas a través de planes y programas de estudio basado en los lineamientos curriculares.<hr>Misión</p>
      <p>
        <a href="?pagina=inicio" class="btn btn-primary my-2">Iniciar Sesión</a>

      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
  <div class="container">

    <div class="row justify-content-between justify-content-sm-around">
      <div class="col-sm">
        <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/amm8.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          <div class="card-body">
            <p class="card-text text-muted">La Unidad Educativa Nacional Divino Niño, cuenta con una matrícula de 265 estudiantes aproximadamente.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/amm12.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          <div class="card-body">
            <p class="card-text text-muted">Se encuentra ubicada en el estado Lara, específicamente en la  ciudad de Barquisimeto Municipio Iribarren, parroquia Tamaca, sector  Llano Alto calle 3 entre carreras 2 y 3.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a type="button"  href="https://www.google.com/maps/@10.185128,-69.318987,18.46z?hl=es" target="_blank" class="btn btn-sm btn-outline-secondary">Ver en Google Maps</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<hr>
<section class="jumbotron text-center">
    <div class="container">
      <p class="lead text-muted">     Ser la institución pionera que contribuya a la formación integral de los niños y niñas de la comunidad desde el nivel prescolar y prosecución al subsistema primario enmarcado en las políticas educativas del estado venezolano y las exigencias curriculares, incorporando a la triada (Escuela-Familia-Comunidad), así como también realizar todas aquellas actividades y convenios que sean necesarias para la consecución de los objetivos.<hr>Visión</p>
      <p>
        <a href="?pagina=inicio" class="btn btn-primary my-2">Iniciar Sesión</a>

      </p>
    </div>
  </section>


</main>

<?php
  require_once("comunes/footer.php");
?>
</body>
</html>
