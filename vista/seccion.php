
<html>
    <?php require_once("comunes/encabezado.php");  ?>
    <body>
        <?php  require_once("comunes/menu.php"); ?>
        <?php require_once("comunes/modal.php"); ?>
      <main>
          <form class="container mb-5">
            <h2 class="text-center">Gestionar Secciones</h2>
            <hr>


       

                <!-- iasndiansdi -->

                


                <div class="row">
                <div class="col">
                <label for="">Grado</label>
                    <select id="grado" name="grado" class="form-control form-select mb-3">
                        <option selected>Seleccionar</option>
                        <option value="0">Pre-escolar</option>
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
                      <label for="">Año Escolar</label>
                      <select id="anioe" name="anioe" class="form-control form-select mb-3">
                          <option value="">Seleccionar</option>
                          <?php $year = date("Y");
                              for ($i=2022; $i<=$year+1; $i++){
                                  echo '<option value="'.$i.'">'.$i.'</option>';
                              }
                          ?>
                      </select>
                  </div>
                 
                  <div class="col">
                <label for="">Maestro</label>
                    <select id="maestro" name="maestro" class="form-control form-select mb-3">
                         
                    </select>
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
             <button type="button" class="btn btn-primary" id="incluir" >Incluir </button>
           </div>
            <div class="col">
             <button type="button" class="btn btn-primary" id="actualizar" >Actualizar </button>
           </div>
           <div class="col">
             <button type="button" class="btn btn-primary" id="eliminar" >Eliminar</button>
           </div>


        </div>


    
            </form>
        </main>


        <div class="container mb-5">
        <table class="table table-striped table-hover" id="json_data">
         <thead>
         <tr>
         <th>Grado</th>
         <th>Sección</th>
         <th>Año</th>
         <th>Nombre</th>
         <th>Apellidos</th>
          <th>Cedula</th>
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
    <script src="js/seccion.js"></script>
</html>
