
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
            <h2 class="text-center text-xxl mb-4">INGRESO PRIMARIA</h2>
            
        </div>
        <div class="col">
            <div class   ="col">
          <button type ="button" class="btn btn-primary" id="formulario1" >
           X
          </button>
        </div>


            
        </div>
        
    </div>

<hr>
</div>
          



      <form class="container mb-5">


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


             <!-- Inicio segunda parte parteee-->

                    <h3 class="text-center text-xl mt-4 mb-4">DATOS DEL NIÑO, LA NIÑA</h3>
                                  <div class="row">


                                  </div>
                                  <div class="row">                                     

                                      <div class="col">
                                          <div class="mb-3" >
                                              <label for="cedulaEscolar">Cedula Representante</label>
                                              <input type="text" class="form-control"id="cedula_r" name="cedula_r" >
                                              <span id="pcedula_r"></span>
                                          </div>
                                      </div>
                                      
                                  </div>

                                 

                                  <div class="row">
                                      <div class="col">
                                          <div class=" mb-3">
                                              <label for="apellidoPri">Apellido</label>
                                              <input type="text" class="form-control " id="apellidoPri"  name="apellidoPri">
                                              <span id="pApellidoPri"></span>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class=" mb-3">
                                              <label for="nombrePri">Nombre</label>
                                              <input type="text" class="form-control " id="nombrePri"  name="nombrePri">
                                              <span id="pNombrePri"></span>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <label for="">Sexo</label>
                                          <select id="sexo" name="sexo" class="form-control mb-3"> 
                                              <option value='0' selected >Seleccionar</option>
                                              <option value="m">Masculino</option>
                                              <option value="f">Femenino</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col">
                                          <div class=" mb-3">
                                              <label for="fechaNaciPri">Fecha de Nacimiento</label>
                                              <input type="date" class="form-control " id="fechaNaciPri" name="fechaNaciPri">
                                              <span id="pFechaNaciPri"></span>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form-floating mb-3">
                                              <label for="estadoprimaria">Estado de nacimiento</label>
                                              <input type="text" class="form-control" id="estado_p" name="estado_p">
                                              <span id="estadoprimaria"></span>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form-floating mb-3">
                                              <label for="ciudadprimaria">Ciudad de nacimiento</label>
                                              <input type="text" class="form-control" id="ciudad_p" name="ciudad_p">
                                              <span id="pciudadprimaria"></span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">

                                    <div class="col">
                                          <label for="">Orden del parto</label>
                                          <select id="sexo" name="sexo" class="form-control mb-3"> 
                                              <option value='0' selected >Seleccionar</option>
                                              <option value="1">Primero</option>
                                              <option value="2">Segundo (Escojer al ser Gemelos-Morochos)</option>
                                              <option value="3">Tercero (Escojer al ser Trillizos)</option>
                                          </select>
                                      </div>

                                     <div class="col">
                                          <label for="">Nacionalidad</label>
                                          <select id="nacionalidad" name="nacionalidad" class="form-control mb-3">
                                              <option value="0" selected>Seleccionar</option>
                                              <option value="V">Venezolano(a)</option>
                                              <option value="E">Extranjero(a)</option>
                                          </select>
                                      </div>

                                      <div class="col">
                                          <div class="mb-3" >
                                              <label for="cedulaEscolar">Cédula Escolar</label>
                                              <input type="text" class="form-control"id="cedulaEscolar" name="cedulaEscolar" disabled>
                                              <span id="pCedulaEscolar"></span>
                                          </div>
                                      </div>
                                      <!--  Un check para cedula de ciIdentidad -->
                                    
                                  </div>

                                  <div class="row">


                                   

                                      <div class="col">
                                          <label for="">Vive en casa con:</label>
                                          <select id="vive_con" name="vive_con" class="form-control mb-3">
                                              <option value="0" selected>Seleccionar</option>
                                              <option value="papamama">Papá y Mamá</option>
                                              <option value="papa">Solo papá</option>
                                              <option value="mama">Mamá</option>
                                              <option value="abue">Abuelos</option>
                                              <option value="oto">Otros</option>
                                          </select>
                                      </div>

                                      <div class="col">
                                          <label for="">Posee canaima</label>
                                          <select id="canaima" name="canaima" class="form-control mb-3">
                                              <option value="0" selected>Seleccionar</option>
                                              <option value="si">Si</option>
                                              <option value="no">No</option>
                                          </select>
                                      </div>

                                      <div class="col">
                                          <label for="">Se retira solo de la institucion</label>
                                          <select id="retirada" name="retirada" class="form-control mb-3">
                                              <option value="0" selected>Seleccionar</option>
                                              <option value="si">Si</option>
                                              <option value="no">No</option>
                                          </select>
                                      </div>

                                    <hr>

                                  </div>

                                  <div class="row">
                                      <div class="col">
                                          <div class="form-floating mb-3">
                                              <label for="pesoActual">Peso actual (Kg.)</label>
                                              <input type="text" class="form-control" id="pesoActual"  name="pesoActual">
                                              <span id="ppesoActual"></span>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form-floating mb-3">
                                              <label for="tallaActual">Talla actual (Cm.)</label>
                                              <input type="text" class="form-control" id="tallaActual" name="tallaActual">
                                              <span id="ptallaActual"></span>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form-floating mb-3">
                                              <label for="camisa">Talla Camisa</label>
                                              <input type="text" class="form-control" id="camisa" name="camisa">
                                              <span id="pcamisa"></span>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form-floating mb-3">
                                              <label for="pantalon">Talla Pantalon</label>
                                              <input type="text" class="form-control" id="pantalon" name="pantalon">
                                              <span id="ppantalon"></span>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form-floating mb-3">
                                              <label for="calzado">Talla Calzado</label>
                                              <input type="text" class="form-control" id="calzado" name="calzado">
                                              <span id="pcalzado"></span>
                                          </div>
                                      </div>
                                  </div>
                                  <hr>
                
            </div>


            <!-- fin de la primera parteee-->

      
                        <!-- Fin de la segundaaa parte parteee-->




        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                    <!--Inicio de la tercera parteeparte parteee-->
                    <div class="row">
                      <div class="col-auto">
                          <p class="mb-3"><strong>DATOS DE LA MADRE</strong></p>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class=" mb-3">
                        <label for="ciMadre">Cedula de Identidad</label>
                        <input type="text" class="form-control " id="ciMadre" name="ciMadre">
                        <span id="pCiMadre"></span>
                      </div>
                    </div>
                      <div class="col">
                          <div class=" mb-3">
                              <label for="apellidoMadre">Apellido</label>
                              <input type="text" class="form-control " id="apellidoMadre" name="apellidoMadre">
                              <span id="pApellidoMadre"></span>
                          </div>
                      </div>
                      <div class="col">
                          <div class=" mb-3">
                              <label for="nombreMadre">Nombre</label>
                              <input type="text" class="form-control " id="nombreMadre" name="nombreMadre">
                              <span id="pNombreMadre"></span>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <div class=" mb-3">
                              <label for="telefonoMadre">Telefono</label>
                              <input type="text" class="form-control " id="telefonoMadre" name="telefonoMadre">
                              <span id="pTelefonoMadre"></span>
                          </div>
                      </div>
                      <div class="col">
                          <div class=" mb-3">
                              <label for="direccionMadre">Dirección de Trabajo</label>
                              <input type="text" class="form-control " id="direccionMadre" name="direccionMadre">
                              <span id="pDireccionMadre"></span>
                          </div>
                      </div>
                  </div>

                <div class="row">
                    <div class="col-auto">
                        <p class="mb-3"><strong>DATOS DEL PADRE</strong></p>
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class=" mb-3">
                      <label for="ciPadre">Cedula de Identidad</label>
                      <input type="text" class="form-control " id="ciPadre" name="ciPadre">
                      <span id="pCiPadre"></span>
                    </div>
                  </div>
                    <div class="col">
                        <div class=" mb-3">
                            <label for="apellidoPadre">Apellido</label>
                            <input type="text" class="form-control " id="apellidoPadre" name="apellidoPadre">
                            <span id="pApellidoPadre"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class=" mb-3">
                            <label for="nombrePadre">Nombre</label>
                            <input type="text" class="form-control " id="nombrePadre" name="nombrePadre">
                            <span id="pNombrePadre"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class=" mb-3">
                            <label for="telefonoPadre">Telefono</label>
                            <input type="text" class="form-control " id="telefonoPadre" name="telefonoPadre">
                            <span id="pTelefonoPadre"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class=" mb-3">
                            <label for="direccionPadre">Dirección de Trabajo</label>
                            <input type="text" class="form-control " id="direccionPadre" name="direccionPadre">
                            <span id="pDireccionPadre"></span>
                        </div>
                    </div>
                </div>
                <hr>

              </div>


        <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">


                <!--- Inicio 4ta partee-->


                <div class="row">
                    <div class="col-auto">
                        <p class="mb-3"><strong>DE TENER HERMANOS EN LA INSTITUCIÓN NOMBRE A CONTINUACIÓN</strong></p>
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <div class=" mb-3">
                            <label for="nombre_hermano1">Nombre y Apellido</label>
                            <input type="text" class="form-control " id="nombre_hermano1" name="nombre_hermano1">
                            <span id="pnombre_hermano1"></span>
                        </div>
                    </div>

                    <div class="col-2">
                        <label for="">Grado</label>
                        <div class=" mb-3">
                             <select class="form-control mb-3" id="grado_hermano1" name="grado_hermano1">
                                <option value="0" selected>Seleccionar</option>
                                <option value="preescolar">Pre-escolar</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <label for="">Turno</label>
                        <div class=" mb-3">
                             <select class="form-control mb-3" id="turno_hermano1" name="turno_hermano1">
                                <option value="0" selected>Seleccionar</option>
                                <option value="m">Mañana</option>
                                <option value="t">Tarde</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">
                        <div class=" mb-3">
                            <label for="nombre_hermano2">Nombre y Apellido</label>
                            <input type="text" class="form-control " id="nombre_hermano2" name="nombre_hermano">
                            <span id="pnombre_hermano2"></span>
                        </div>
                    </div>

                    <div class="col-2">
                        <label for="">Grado</label>
                        <div class=" mb-3">
                             <select class="form-control mb-3" id="grado_hermano2" name="grado_hermano2">
                                <option value="0" selected>Seleccionar</option>
                                <option value="preescolar">Pre-escolar</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <label for="">Turno</label>
                        <div class=" mb-3">
                             <select class="form-control mb-3" id="turno_hermano2" name="turno_hermano2">
                                <option value="0" selected>Seleccionar</option>
                                <option value="m">Mañana</option>
                                <option value="t">Tarde</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col">
                        <div class=" mb-3">
                            <label for="nombre_hermano3">Nombre y Apellido</label>
                            <input type="text" class="form-control " id="nombre_hermano3" name="nombre_hermano3">
                            <span id="pnombre_hermano3"></span>
                        </div>
                    </div>

                    <div class="col-2">
                        <label for="">Grado</label>
                        <div class=" mb-3">
                             <select class="form-control mb-3" id="grado_hermano3" name="grado_hermano3">
                                <option value="0" selected>Seleccionar</option>
                                <option value="preescolar">Pre-escolar</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <label for="">Turno</label>
                        <div class=" mb-3">
                             <select class="form-control mb-3" id="turno_hermano3" name="turno_hermano3">
                                <option value="0" selected>Seleccionar</option>
                                <option value="m">Mañana</option>
                                <option value="t">Tarde</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col">
                        <div class=" mb-3">
                            <label for="nombre_hermano4">Nombre y Apellido</label>
                            <input type="text" class="form-control " id="nombre_hermano4" name="nombre_hermano4">
                            <span id="pnombre_hermano4"></span>
                        </div>
                    </div>

                    <div class="col-2">
                        <label for="">Grado</label>
                        <div class=" mb-3">
                             <select class="form-control mb-3" id="grado_hermano4" name="grado_hermano4">
                                <option value="0" selected>Seleccionar</option>
                                <option value="preescolar">Pre-escolar</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <label for="">Turno</label>
                        <div class=" mb-3">
                             <select class="form-control mb-3" id="turno_hermano4" name="turno_hermano4">
                                <option value="0" selected>Seleccionar</option>
                                <option value="m">Mañana</option>
                                <option value="t">Tarde</option>
                            </select>
                        </div>
                    </div>

                </div>


                <!---final 4ta parteee -->

              </div>


        <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">


                <div class="row">
                    <div class="col">
                        <div class=" mb-3">
                            <label for="importanInfoMedic">Información Importante a Nivel Medico</label>
                            <textarea type="text" class="form-control " id="infom" name="infom"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class=" mb-3">
                            <label for="colaboracionComu">Colaboración Comunitaria</label>
                            <textarea type="text" class="form-control " id="colab_c" name="colab_c"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class=" mb-3">
                            <label for="observacion">Observación</label>
                            <textarea type="text" class="form-control " id="observacion" name="observacion"></textarea>
                        </div>
                    </div>
                </div><hr>

    <div class="container" style="  display: flex; justify-content: center;">
    
    

    <div class="row">


      <div class="col" style="margin-left: -2rem;">
          <a href="?pagina=gestionar" style="margin-left: -13rem;" class="btn btn-primary">
            <svg xmlns="img/arrow-return-left.svg" width="25" height="22" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
            </svg>
          </a>
        </div>

        <div class   ="col">
          <button type ="button" class="btn btn-primary" id="incluir" >
            <svg xmlns   ="img/file-earmark-plus.svg" width="25" height="22" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
            <path d      ="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
            <path d      ="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
            </svg>
          </button>
        </div>

        <div class="col">
           <button type="button" class="btn btn-primary" id="modificar" >
            <svg xmlns="img/pencil-fill.svg" width="25" height="22" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
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

              </div>

        <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact3-tab">
    </div>

  </div>




    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sección</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Padres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">Hermanos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Observaciones</a>
      </li>
    </ul>
    </form>
        </main>

        <div class="container mb-5">
        <table class="table table-bordered table-hover" id="tableajax">
         <thead class="thead-dark">
         <tr>
         <th>Cedula</th>
         <th>Apellidos</th>
         <th>Nombres</th>
         <th>Representante</th>
         <th>Acciones</th>

         </tr>
        </thead>


        <tfoot class="thead-dark">
         <tr>
         <th>Cedula</th>
         <th>Apellidos</th>
         <th>Nombres</th>
         <th>Representante</th>
         <th>Acciones</th>

         </tr>
        </tfoot>

        <tbody id="resultadoconsulta">



        </tbody>

        <div class="modal-footer">
        <div class="col-6"><h2> Lista de estudiantes</h2></div>

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





    </body>
    <script src="js/gestionar_primaria.js"></script>
    <script src="js/confirmar.js"></script>
    <script src="js/botonVolver.js"></script>
</html>
