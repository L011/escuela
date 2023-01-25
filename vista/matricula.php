
<html>
    <?php
        require_once("comunes/encabezado.php");
    ?>
    <body>
    <?php
        require_once("comunes/menu.php");
    ?>
    <div class="container">

        <form class="container mb-5">
            <h2 class="text-center text-xxl mb-4">Matricula Inicial</h2>

        <div class="row g-2">


            <div class="row">


                <div class="col mb-3">
                   <label for="sexo">Grado</label>
                   <select class="form-control" id="cargo" name="cargo" >
                      <option disabled selected value="">Seleccionar Opcion</option>
                    <option value="preescolar">Preescolar</option>
                    <option value="primer">Primer Grado</option>
                    <option value="segundo">Segundo Grado</option>
                    <option value="tercer">Tercer Grado</option>
                    <option value="cuarto">Cuarto Grado</option>
                    <option value="quinto">Quinto Grado</option>
                    <option value="sexto">Sexto Grado</option>
                   </select>
                </div>

                <div class="col">
                  <div class="col mb-3">
                     <label for="sexo">Sección</label>
                     <select class="form-control" id="cargo" name="cargo" >
                        <option disabled selected value="">Seleccionar Opcion</option>
                      <option value="a">A</option>
                      <option value="b">B</option>
                      <option value="c">C</option>
                      <option value="d">D</option>
                     </select>
                  </div>
                </div>
                          </div>
        </div>
        <p>*Buscando formato para completar</p>
        <div class="row">
            <div class="col">
                   <button type="button" class="btn btn-primary" id="incluir" name="incluir">GENERAR</button>
            </div>


            <div class="col">
                   <a href="?pagina=reporte" class="btn btn-primary">REGRESAR</a>
            </div>
        </div>

        </form>


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
        <script type="text/javascript" src="js/incripcion_primaria.js"></script>
    </body>
</html>
