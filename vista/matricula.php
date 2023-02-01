
<html>
    <?php
        require_once("comunes/encabezado.php");
    ?>
    <body>
    <?php
        require_once("comunes/modal.php");
        require_once("comunes/menu.php");
    ?>
    <div class="container mb-4" > <!-- todo el contenido ira dentro de esta etiqueta-->
        <div class="container"  id="contenido">

        <form method="post" action="" id="f" target="_blank">
            <h2 class="text-center text-xxl mb-4">Matricula Inicial</h2>

      


            <div class="row">


                <div class="col mb-3">
                   <label for="grado">Grado</label>
                   <select class="form-control" id="grado" name="grado" >
                      <option disabled selected value="">Seleccionar Opcion</option>
                    <option value="Pre-escolar">Preescolar</option>
                    <option value="Primer Grado">Primer Grado</option>
                    <option value="Segundo Grado">Segundo Grado</option>
                    <option value="Tercer Grado">Tercer Grado</option>
                    <option value="Cuarto Grado">Cuarto Grado</option>
                    <option value="Quinto Grado">Quinto Grado</option>
                    <option value="Sexto Grado">Sexto Grado</option>
                   </select>
                </div>

                <div class="col">
                     <label for="seccion">Sección</label>
                     <select class="form-control" id="seccion" name="seccion" >
                        
                     </select>
                
                </div>
            </div>
      <div class="container" style="justify-content: center;">
          
        <div class="row" style=" justify-content: center;" >
            
                   <button type="submit" class="btn btn-primary" id="generar" name="generar">GENERAR</button>
            

        </div>
      </div>

        </form>

        </div>
    </div>


        <?php
            require_once("comunes/footer.php");
        ?>

        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header mb-4">
                    <h5 class="modal-title" id="exampleModalLabel"> Buscar Estudiante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>

                </div>
                <div class="modal-body">

                    <div class="row">

                    <div class="col">
                        <div class="form-floating mb-4">
                            <input type="text"  class="form-control" id="nombrePreescolar">
                            <label for="nombrePreescolar">Buscar</label>
                        </div>
                    </div>

                     </div>
                 </div>

            </div>

        </div>

    </div>



    <!--Llamada a las librerias de javascript para las validaciones de esta pagina -->
        <script src="js/matricula.js"></script>
        <script src="js/botonVolver.js"></script>


    </body>
</html>
