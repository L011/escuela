
<html lang="es">
  <!--Llamada al head-->
  <?php
    require_once("comunes/encabezado.php")
  ?>
<body>
  <!-- Back to top button-->
  <div class="back-to-top"></div>
<header>
  <!--Llamada al encabezado-->
  <?php
    require_once("comunes/menu.php")
  ?>
    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5">
            <h1 class="mb-4">Optimicemos la Gestion Escolar</h1>
            <p class="text-lg text-grey mb-5">Una herramienta que te ayudara hacer mas facil y rapido el trabajo</p>
          </div>
          <div class="col-md-6 py-5">
            <div class="img-fluid text-center">
              <img src="img/banner_image_1.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
</header>

<!--Configuración de  modal para asegurar la hora-->

<div class="modal fade" id="modal_principal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Verificación de Fecha del Sistema </h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col">
                      <p align="center">¿La fecha actual es la correcta?</p>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3 ">
                                <input type="datetime" class="form-control" id="fecha" 
                                value="<?php echo date('d-M-Y h:i:s a'); ?>" 
                                placeholder=""  disabled>
                                <label for="fecha">Fecha</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                          <p><b>Debe tener la fecha actualizada para el uso correcto del sistema</b></p>                
                        </div>
                      </div>
                  <div class="modal-footer">
                    <div class="row">                   
                      <div class="col">   
                          <button type="button" class="btn btn-primary" data-dismiss="modal" id="modificar" name="modificar">Ya Esta Configurada!</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>            
</div>


<?php
  require_once("comunes/footer.php");
?>
</body>
<script src="js/modal_principal.js"></script>
</html>