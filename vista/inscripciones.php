
<html lang="en">
<?php
  require_once("comunes/encabezado.php");
?>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <?php
      require_once("comunes/menu.php");
    ?>
  </header>
    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="?pagina=principal">Inicio</a></li>
                <li class="breadcrumb-item active">Inscripciones</li>
              </ul>
            </nav>
            <h1 class="text-center">Inscripciones</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Pre-escolar</h5>
              <p>Inscripciones para niños antes de primaria</p>
              <a href="?pagina=preescolar" class="btn btn-primary">Inscribir</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="img/services/service-2.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Primaria</h5>
              <p>Inscripciones escolares de nivel basico</p>
              <a href="?pagina=primaria" class="btn btn-primary">Inscribir</a>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

<?php
  require_once("comunes/footer.php");
?>
</body>
</html>
