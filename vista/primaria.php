
<html>
    <?php require_once("comunes/encabezado.php");  ?>
    <body>
        <?php  require_once("comunes/menu.php"); ?>
        <?php require_once("comunes/modal.php"); ?>
      <main>
          <form class="container mb-5">
            <h2 class="text-center">INSCRIPCIONES NIVEL PRIMARIA</h2>
            <hr>


       

                <!-- iasndiansdi -->

                <div class="row">
                  
                  <div class="col-md-6">
                      <div class="mb-3" >
                          <label for="cedulaEscolar">Cédula Escolar</label>
                          <input type="text" class="form-control"id="cedulaEscolar" name="cedulaEscolar" >
                          <span id="pCedulaEscolar"></span>
                      </div>
                  </div>

                   <div class="col">
                      <div class=" mb-3">
                          <label for="apellidoPri">Apellido</label>
                          <input type="text" class="form-control " id="apellidoPri"  name="apellidoPri" disabled>
                          <span id="pApellidoPri"></span>
                      </div>
                  </div>
                  <div class="col">
                      <div class=" mb-3">
                          <label for="nombrePri">Nombre</label>
                          <input type="text" class="form-control " id="nombrePri"  name="nombrePri" disabled>
                          <span id="pNombrePri"></span>
                      </div>
                  </div>


                </div>


                <div class="row">
                <div class="col">
                <label for="">Grado</label>
                    <select id="grado" name="grado" class="form-control form-select mb-3">
                        <option selected>Seleccionar</option>
                        <option value="1">1er Grado</option>
                        <option value="2">2do Grado</option>
                        <option value="3">3er Grado</option>
                        <option value="4">4to Grado</option>
                        <option value="5">5to Grado</option>
                        <option value="6">6to Grado</option>
                    </select>
                </div>

                  <div class="col">
                  <label for="">Sección</label>
                      <select id="seccion" name="seccion" class="form-control form-select mb-3">
                          <option selected>Seleccionar</option>
                          <option value="1">Sección 1</option>
                          <option value="2">Sección 2</option>
                          <option value="3">Sección 3</option>
                          <option value="4">Sección 4</option>
                      </select>
                  </div>
                  <div class="col">
                      <label for="">Turno</label>
                      <select id="turno" name="turno" class="form-control form-select mb-3">
                          <option selected>Seleccionar</option>
                          <option value="mañana">Mañana</option>
                          <option value="tarde">Tarde</option>
                      </select>
                  </div>
                  <div class="col">
                      <label for="">Año Escolar</label>
                      <select id="anioe" name="anioe" class="form-control form-select mb-3">
                          <option value="">Seleccionar</option>
                          <?php $year = date("Y");
                              for ($i=2022; $i<=$year; $i++){
                                  echo '<option value="'.$i.'">'.$i.'</option>';
                              }
                          ?>
                      </select>
                  </div>
                  <div class="col-md-4">
                      <div class=" mb-3">
                          <label for="maestro">Maestro</label>
                          <input type="text" class="form-control" id="maestro" name="maestro" disabled>
                          <span id="smaestro"></span>
                      </div>
                  </div>
                  <div class="col">
                      <div class=" mb-3 ">
                          <label for="fecha">Fecha</label>
                          <input type="datetime" class="form-control" id="fecha" value="<?php echo date('d-M-Y'); ?>" disabled>
                      </div>
                  </div>
              </div><hr>

               <div class="row">

            <div class="col">
             <button type="button" class="btn btn-primary" id="inscribir" >Inscribir </button>
           </div>
           <div class="col">
             <button type="button" class="btn btn-primary" id="eliminar" >Eliminar alumno </button>
           </div>


        </div>


    
            </form>
        </main>


        <div class="container mb-5">
        <table class="table table-striped table-hover" id="json_data">
         <thead>
         <tr>
         <th>Cedula</th>
         <th>Apellidos</th>
         <th>Nombres</th>
         <th>Grado</th>
         <th>Sección</th>
         <th>Turno</th>
         </tr>
        </thead>

        <tbody id="resultadoconsulta">



        </tbody>

        <div class="modal-footer bg-light">
        <div class="col">

        </div>

        </div>
        </table>

      </div>


    </body>
    <script src="js/primaria.js"></script>
</html>
