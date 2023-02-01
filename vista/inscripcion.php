
<html>
    <?php require_once("comunes/encabezado.php");  ?>
    <body>
        <?php  require_once("comunes/menu.php"); ?>
        <?php require_once("comunes/modal.php"); ?>
      <main>

<div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
     
  <div class="container" style="display: none;" id="contenido">
    <div class="container text-center h2 text-primary">

        <div class="row">
            <div class="col">

            </div>
            <div class="col-6">
                <h2 class="text-center text-xxl mb-4">REGISTRAR INSCRIPCIONES</h2>
                
            </div>
            <div class="col">
                <div class   ="col">
              <button type ="button" class="btn btn-primary" id="formulario1" >
                X
              </button>
            </div>


                
            </div>
        </div>


    </div>


        
          <form class="container mb-5">
           
            <hr>


       

                <!-- iasndiansdi -->

                <div class="row">
                  <div class="col" style="display: none">
                     
                          
                          <input type="text" class="form-control" id="id" name="id" >
                      
                  </div>

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
                        <option disabled selected value="">Seleccionar</option>
                     
                    </select>
                </div>

                  <div class="col">
                  <label for="">Sección</label>
                      <select id="seccion" name="seccion" class="form-control form-select mb-3">
                        
                      </select>
                  </div>
                  <div class="col">
                      <label for="">Año Escolar</label>
                      <select id="anioe" name="anioe" class="form-control form-select mb-3">
                          <option value="">Seleccionar</option>
                          <?php $year = date("Y");
                              for ($i=2022; $i<=$year+1; $i++){
                                  echo '<option value="'.$i."-".($i+1).'">'.$i."-".($i+1).'</option>';
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

<div class="container" style="  display: flex;
    justify-content: center;">

      <div class="row">

        <div class="col" style="margin-left: -2rem;">
          <a onclick ="history.back()" style="margin-left: -13rem;" class="btn btn-primary">
            <svg xmlns="img/arrow-return-left.svg" width="25" height="22" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
            </svg>
          </a>
        </div>

        <div class   ="col">
          <button type ="button" class="btn btn-primary" id="inscribir" >
            <svg xmlns   ="img/file-earmark-plus.svg" width="25" height="22" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
            <path d      ="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
            <path d      ="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
            </svg>
          </button>
        </div>


        <div class   ="col">
          <button type="button" class="btn btn-primary" id="eliminar" >
            <svg xmlns ="img/trash-fill.svg" width="25" height="22" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d    ="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
          </button>
        </div>



        </div>

        </div>


    
            </form>

          </div>
        </main>

      </body>

<div class="container mb-5">
        <table class="table table-bordered table-hover" id="tableajax">
         <thead class="thead-dark">
         <tr>
         <th>Cedula</th>
         <th>Apellidos</th>
         <th>Nombres</th>
         <th>Grado</th>
         <th>Sección</th>
         <th>Año</th>
         <th>Acciones</th>

         </tr>
        </thead>

        <tfoot class="thead-dark">
         <tr>
         <th>Cedula</th>
         <th>Apellidos</th>
         <th>Nombres</th>
         <th>Grado</th>
         <th>Sección</th>
         <th>Año</th>
         <th>Acciones</th>

         </tr>
        </tfoot>

      

      <div class="modal-footer">
        <div class="col"><h3> Lista de estudiantes</h3></div>

        <div class="col"></div>

        <div class  ="col">
                <button type ="button" class="btn btn-primary" id="formulario" >
                  <svg xmlns   ="img/file-earmark-plus.svg" width="25" height="22" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                  <path d      ="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                  <path d      ="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                  </svg>
                </button>
        </div>

      </div>
     </table>

      </div>

    </div>


    </body>
    <script src="js/inscripcion.js"></script>
    <script src="js/confirmar.js"></script>
     <script src="js/botonVolver.js"></script>
</html>
