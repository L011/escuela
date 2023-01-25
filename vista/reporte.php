
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
                <li class="breadcrumb-item active">Reporte</li>
              </ul>
            </nav>
            <h1 class="text-center">Reporte</h1>
          </div>
        </div>
      </div>

      <div class="container">

        <?php if ($nivel == "Administrador"){ ?>


        <div class="row">
          <div class="col-lg-4">
            <div class="card-service wow fadeInUp">
              <div class="header">
                <img src="img/services/service-1.svg" alt="">
              </div>
              <div class="body">
                <h5 class="text-secondary">Constancia</h5>
                <p>Generar Constancia de Estudio</p>
                <a href="?pagina=constancia" class="btn btn-primary">Entrar</a>
              </div>
            </div>
          </div>



          <div class="col-lg-4">
            <div class="card-service wow fadeInUp">
              <div class="header">
                <img src="img/services/service-1.svg" alt="">
              </div>
              <div class="body">
                <h5 class="text-secondary">Matricula Inicial</h5>
                <p>Generar Matricula Inicial</p>
                <a href="?pagina=matricula" class="btn btn-primary">Entrar</a>
              </div>
            </div>
          </div>

      </div> <!-- .container -->

      <?php }
    else if ($nivel == "Maestro"){ ?>


      <div class="row">
          <div class="col-lg-4">
            <div class="card-service wow fadeInUp">
              <div class="header">
                <img src="img/services/service-1.svg" alt="">
              </div>
              <div class="body">
                <h5 class="text-secondary">Constancia</h5>
                <p>Generar Constancia de Estudio</p>
                <a href="?pagina=constancia" class="btn btn-primary">Entrar</a>
              </div>
            </div>
          </div>

      </div>

      <?php } else{ ?>


   <a href="?pagina=inicio" class="button">
       Acceder
      </a>
       <?php 
        }
          ?>


  </div>




<?php
  require_once("comunes/footer.php");
?>
</body>
</html>
