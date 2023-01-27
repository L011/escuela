
<html>
    <?php require_once("comunes/encabezado.php");  ?>
    <body>
        <?php  require_once("comunes/menu.php"); ?>
        <?php require_once("comunes/modal.php"); ?>
      <main>
          <form class="container mb-5">
            <h2 class="text-center">INSCRIPCIONES NIVEL PRIMARIA</h2>
            <hr>



    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


             <!-- Inicio segunda parte parteee-->

                    <h3 class="text-center text-xl mt-4 mb-4">DATOS DEL NIÑO, LA NIÑA</h3>
                                  <div class="row">


                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="mb-3" >
                                              <label for="cedulaEscolar">Cédula Escolar</label>
                                              <input type="text" class="form-control"id="cedulaEscolar" name="cedulaEscolar" >
                                              <span id="pCedulaEscolar"></span>
                                          </div>
                                      </div>
                                      <!--  Un check para cedula de ciIdentidad -->

                                     

                                      <div class="col-md-6">
                                          <div class="mb-3" >
                                              <label for="cedulaEscolar">Cedula Representante</label>
                                              <input type="text" class="form-control"id="cedula_r" name="cedula_r" >
                                              <span id="pCedulaEscolar"></span>
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
                                      <div class="col-2">
                                          <label for="">Sexo</label>
                                          <select id="sexo" name="sexo" class="form-control mb-3">
                                              <option selected="">Seleccionar</option>
                                              <option value="m">Masculino</option>
                                              <option value="f">Femenino</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-3">
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
                                              <span id="'estadoprimaria"></span>
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

                                      <div class="col-2">
                                          <label for="">Vive en casa con:</label>
                                          <select id="vive_con" name="vive_con" class="form-control mb-3">
                                              <option selected="">Seleccionar</option>
                                              <option value="papamama">Papá y Mamá</option>
                                              <option value="papa">Solo papá</option>
                                              <option value="mama">Mamá</option>
                                              <option value="abue">Abuelos</option>
                                              <option value="oto">Otros</option>
                                          </select>
                                      </div>

                                      <div class="col-2">
                                          <label for="">Posee canaima</label>
                                          <select id="canaima" name="canaima" class="form-control mb-3">
                                              <option selected="">Seleccionar</option>
                                              <option value="si">Si</option>
                                              <option value="no">No</option>
                                          </select>
                                      </div>

                                      <div class="col-2">
                                          <label for="">Se retira solo de la institucion</label>
                                          <select id="retirada" name="retirada" class="form-control mb-3">
                                              <option selected="">Seleccionar</option>
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
                                <option selected="">Seleccionar</option>
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
                                <option selected="">Seleccionar</option>
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
                                <option selected="">Seleccionar</option>
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
                                <option selected="">Seleccionar</option>
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
                                <option selected="">Seleccionar</option>
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
                                <option selected="">Seleccionar</option>
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
                                <option selected="">Seleccionar</option>
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
                                <option selected="">Seleccionar</option>
                                <option value="m">Mañana</option>
                                <option value="t">Tarde</option>
                            </select>
                        </div>
                    </div>

                </div>



                <div class="row">
                    <div class="col-2">
                        <p class="mb-3"><strong>El niño se retira solo de la institución:</strong></p>
                    </div>
                    <div class="col-2">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                            <label for="retiradaSi" class="btn btn-outline-primary ">Si
                                <input type="radio" class="btn-check" name="retirada" id="retiradaSi" autocomplete="off" data-toggle="collapse" data-target="#retiradaColl" aria-expanded="off" aria-controls="retiradaColl">
                            </label>
                            <label for="retiradaNo" class="btn btn-outline-primary ">No
                                <input type="radio" class="btn-check" name="retirada" id="retiradaNo" autocomplete="off">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="retiradaColl">
                    <div class="row">
                        <div class="col">
                            <div class=" mb-3">
                                <label for="quienRetirada">Con quien</label>
                                <input type="text" class="form-control " id="quienRetirada">
                                <span id="pQuienRetirada"></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class=" mb-3">
                                <label for="quienTelefono">Telefono</label>
                                <input type="text" class="form-control " id="quienTelefono">
                                <span id="pQuienTelefono"></span>
                            </div>
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


      <div class="row">

            <div class="col">
             <button type="button" class="btn btn-primary" id="incluir" >INCLUIR </button>
           </div>
           <div class="col">
             <button type="button" class="btn btn-primary" id="modificar" >Modificar alumno </button>
           </div>

           <div class="col">
             <button type="button" class="btn btn-primary" id="eliminar" >Eliminar alumno</button>
           </div>

        </div>

              </div>

        <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact3-tab">
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
        <table class="table table-striped table-hover" id="json_data">
         <thead>
         <tr>
         <th>Cedula</th>
         <th>Apellidos</th>
         <th>Nombres</th>
         <th>Representante</th>
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
    <script src="js/gestionar_primaria.js"></script>
</html>
