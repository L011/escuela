
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
                <li class="breadcrumb-item active">Gestionar</li>
              </ul>
            </nav>
            <h1 class="text-center">Gestionar</h1>
          </div>
        </div>
      </div>
    </div>

    <?php if ($nivel == "Administrador"){ ?>

    <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Secciones</h5>
              <p>Gestionar Secciones</p>
              <a href="?pagina=seccion" class="btn btn-primary" >Gestionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Pre-escolar</h5>
              <p>Gestionar datos de niños antes de primaria</p>
              <a href="?pagina=gestionar_preescolar" class="btn btn-primary">Gestionar</a>
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
              <p>Gestionar datos escolares de nivel basico</p>
              <a href="?pagina=gestionar_primaria" class="btn btn-primary">Gestionar</a>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

<?php }
    else if ($nivel == "Maestro"){ ?>


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
                  <p>Gestionar datos de niños antes de primaria</p>
                  <a href="?pagina=gestionar_preescolar" class="btn btn-primary">Gestionar</a>
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
                  <p>Gestionar datos escolares de nivel basico</p>
                  <a href="?pagina=gestionar_primaria" class="btn btn-primary">Gestionar</a>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .container -->
      </div> <!-- .page-section -->


      <?php } else{ ?>


   <a href="?pagina=inicio" class="button">
       Acceder
      </a>
       <?php 
        }
          ?>


<?php
  require_once("comunes/footer.php");
?>
</body>
</html>
