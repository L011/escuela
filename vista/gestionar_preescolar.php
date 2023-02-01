<html>
    <?php
        require_once("comunes/encabezado.php");
    ?>
    <main>
    <?php require_once("comunes/menu.php"); ?>
    <?php require_once("comunes/modal.php"); ?>
        <form class="container mb-5">
            <h2 class="text-center text-xxl mb-4">INSCRIPCIONES NIVEL PRE-ESCOLAR</h2><hr>




            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Prueba1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Prueba2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact1-tab" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact1" aria-selected="false">Prueba3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact2-tab" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact2" aria-selected="false">Prueba4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact3-tab" data-toggle="pill" href="#pills-contact3" role="tab" aria-controls="pills-contact3" aria-selected="false">Prueba5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact4-tab" data-toggle="pill" href="#pills-contact4" role="tab" aria-controls="pills-contact4" aria-selected="false">Prueba6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact5-tab" data-toggle="pill" href="#pills-contact5" role="tab" aria-controls="pills-contact5" aria-selected="false">Prueba7</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact6-tab" data-toggle="pill" href="#pills-contact6" role="tab" aria-controls="pills-contact6" aria-selected="false">Prueba8</a>
              </li>

            </ul>



          <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                <!--Botones de inscripcion y reinscripcion-->
                <!--
                <div class="row">
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                            <label class="btn btn-outline-primary">Inscripción
                                <input type="radio" name="inscripcion" id="inscripcion">
                            </label>
                            <label class="btn btn-outline-primary">Reinscripción
                                <input type="radio" name="inscripcion" id="reinscripcion" role="button" data-toggle="collapse" href="#mostrar_consultar" >
                            </label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                           <button type="button" class="btn btn-outline-primary" id="consultar"
                           data-toggle="modal" data-target="#modal1" name="consultar">Consultar</button>
                        </div>
                    </div>
                </div>

                        <div class="row collapse mb-3" id="mostrar_consultar">

                        <div class="col-4 form-floating mb-3">
                            <label for="buscar_estudiante"></label>
                            <input type="text" class="form-control" id="buscar_estudiante" placeholder="Cédula Estudiantil">
                        </div>

                         <div class="col">
                            <button type="button" class="btn btn-primary" id="modificar" name="modificar">MODIFICAR</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary" id="eliminar" name="eliminar">ELIMINAR</button>
                        </div>

                      </div>

                    -->

                <div class="row">

                  <div class="col">
                  <label for="">Grado</label>
                      <select class="form-control form-select mb-3">
                          <option selected>Seleccionar</option>
                          <option value="">1er Nivel</option>
                          <option value="">2do Nivel</option>
                          <option value="">3er Nivel</option>
                          <option value="">4to Nivel</option>
                      </select>
                  </div>
                    <div class="col">
                        <label for="">Sección</label>
                        <select class="form-control form-select mb-3">
                            <option selected>Seleccionar</option>
                            <option value="">Sección 1</option>
                            <option value="">Sección 2</option>
                            <option value="">Sección 3</option>
                            <option value="">Sección 4</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Turno</label>
                        <select class="form-control form-select mb-3">
                            <option selected>Seleccionar</option>
                            <option value="">Mañana</option>
                            <option value="">Tarde</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Año Escolar</label>
                        <select name="year" class="form-control form-select mb-3">
                            <option value="">Seleccionar</option>
                            <?php $year = date("Y");
                                for ($i=2022; $i<=$year; $i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating mb-3">
                            <label for="maestro">Maestro</label>
                            <input type="text" class="form-control" id="maestro" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 ">
                            <label for="fecha">Fecha</label>
                            <input type="datetime" class="form-control" id="fecha" value="<?php echo date('d-M-Y'); ?>" disabled>
                        </div>
                    </div>
                </div><hr>
                <h3 class="text-center text-xl mt-4 mb-4">DOCUMENTOS PRESENTADOS PARA LA INSCRIPCIÓN</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  id="partidaNacimiento"
                             name="doc[]" value="si">
                            <label class="form-check-label" for="partidaNacimiento">Partida de Nacimiento</label>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  id="certificadoVacuna" name="doc[]" value="si">
                            <label for="certificadoVacuna" class="form-check-label">Certificado de Vacuna</label>
                        </div>
                    </div>
                    <div class="col-auto  mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  id="fotos" name="doc[]"  value="si">
                            <label for="fotos" class="form-check-label">Fotos</label>
                        </div>
                    </div>
                    <div class="col-auto  mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  id="copiasCedulaRepre"  name="doc[]" value="si">
                            <label for="copiasCedulaRepre" class="form-check-label">Copias de Cédula de Representates</label>
                        </div>
                    </div>
                    <div class="col-auto  mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  id="constanciaNinoSano"  name="doc[]"value="si">
                            <label for="constanciaNinoSano" class="form-check-label">Constancia de Niño Sano</label>
                        </div>
                    </div>
                </div><hr>


              </div>

              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                <h3 class="text-center text-xl mt-4 mb-4">DATOS DEL NIÑO</h3>
                <div class="row">
                                      <div class="col-md-6">
                                          <div class="mb-3" >
                                              <label for="cedulaEscolar">Cédula Escolar</label>
                                              <input type="text" class="form-control"id="cedulaEscolar" name="cedulaEscolar" >
                                              <span id="pCedulaEscolar"></span>
                                          </div>
                                      </div>
                                      <!--  Un check para cedula de ciIdentidad -->

                                      <div class="form-check mb-3">
                                          <div class="col">
                                              <input type="radio" id="ciIdentidad" name="ciEstudiante" class="form-check-input" data-target="#ciIdentidadColl" data-toggle="collapse" aria-expanded="off" aria-controls="ciIdentidadColl">
                                              <label class="form-check-label" for="ciIdentidad">CÉDULA DE IDENTIDAD</label>
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="mb-3" >
                                              <label for="cedulaEscolar">Cedula Representante</label>
                                              <input type="text" class="form-control"id="cedula_r" name="cedula_r" >
                                              <span id="pCedulaEscolar"></span>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="mb-3" >
                                              <label for="cedulaEscolar">Cedula Maestro</label>
                                              <input type="text" class="form-control"id="cedula_m" name="cedula_m" >
                                              <span id="pCedulaEscolar"></span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="collapse mb-3" >
                                              <label for="cedulaIdent">Cédula de Identidad</label>
                                              <input type="text" class="form-control " id="ci" name="ci">
                                              <span id="pCedulaIdent"></span>
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

                <p>Personas autorizadas para retirar al niño(a) de la institución </p>

                <div class="row">
                  <div class="col">
                      <div class="form-floating mb-3">
                          <label for="personasAutorizadas">Nombre y Apellido</label>
                          <input type="text" class="form-control" id="personasAuto" name="personasAuto">
                          <span id="SpersonasAuto"></span>
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-floating mb-3">
                          <label for="telefonoautorizado">Telefono</label>
                          <input type="text" class="form-control" id="telefonoauto"  name="telefonoauto">
                          <span id="ptelefonoautorizado"></span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                      <div class="form-floating mb-3">
                          <label for="personasAutorizadas1">Nombre y Apellido</label>
                          <input type="text" class="form-control" id="personasAuto1" name="personasAuto1">
                          <span id="ppersonasAutorizadas1"></span>
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-floating mb-3">
                          <label for="telefonoautorizado1">Telefono</label>
                          <input type="text" class="form-control" id="telefonoauto1" name="telefonoauto1">
                          <span id="ptelefonoautorizado1"></span>
                      </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><b>Medios utilizados para llegar al preescolar</b></p>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" id="formaLlegar1" name="doc[]" value="option1" checked>
                            <label class="form-check-label" for="aPie">A pie</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" id="formaLlegar2" name="formaLlegar2" value="option2">
                            <label class="form-check-label" for="transporte">Transporte</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" id="formaLlegar3" name="formaLlegar3" value="option4">
                            <label class="form-check-label" for="particular">Particular</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><b>¿Tiene hermanos en la institución?</b></p>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="numeroHermanos">Nro de hermanos en la institución</label>
                                <select class="form-control mb-3 " id="numeroHermanos">
                                <option selected="">Seleccionar Opción</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                        <label for="lugar_entre_hermanos">Lugar entre los hermanos</label>
                            <select class="form-control mb-3 " id="lugar_entre_hermanos">
                                <option selected="">Seleccionar Opción</option>
                                <option value="primero">Primero</option>
                                <option value="intermedio">Intermedio</option>
                                <option value="ultimo">Ultimo</option>
                            </select>
                        </div>
                        </div>

                      <hr>
                    </div>

              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                <h3 class="text-center text-xl mt-4 mb-4">DATOS FAMILIARES (ASPECTO SOCIO ECONOMICO)</h3>
                <p><b>Personas que viven en el hogar con el niño</b></p>
                <table class="table table-light">
                    <tr>
                        <th scope="row">Nombres</th>
                        <th><input id="nombresFamili1" class="form-control" type="text"><span id="pnombresFamili1"></span></th>
                        <th><input id="nombresFamili2" class="form-control" type="text"><span id="pnombresFamili2"></span></th>
                        <th><input id="nombresFamili3" class="form-control" type="text"><span id="pnombresFamili3"></span></th>
                        <th><input id="nombresFamili4" class="form-control" type="text"><span id="pnombresFamili4"></span></th>
                    </tr>
                    <tr>
                        <th scope="row">Apellidos</th>
                        <th><input id="apellidosFamili1" class="form-control" type="text"><span id="papellidosFamili1"></span></th>
                        <th><input id="apellidosFamili2" class="form-control" type="text"><span id="papellidosFamili2"></span></th>
                        <th><input id="apellidosFamili3" class="form-control" type="text"><span id="papellidosFamili3"></span></th>
                        <th><input id="apellidosFamili4" class="form-control" type="text"><span id="papellidosFamili4"></span></th>
                    </tr>
                    <tr>
                        <th scope="row">Sexo</th>
                        <th>
                            <select class="form-control" name="sexoFamili1" id="sexoFamili1">
                                <option selected>Seleccionar</option>
                                <option value="">Masculino</option>
                                <option value="">Femenino</option>
                            </select>
                        </th>
                        <th>
                            <select class="form-control" name="sexoFamili2" id="sexoFamili2">
                                <option selected>Seleccionar</option>
                                <option value="">Masculino</option>
                                <option value="">Femenino</option>
                            </select>
                        </th>
                        <th>
                            <select class="form-control" name="sexoFamili3" id="sexoFamili3">
                                <option selected>Seleccionar</option>
                                <option value="">Masculino</option>
                                <option value="">Femenino</option>
                            </select>
                        </th>
                        <th>
                            <select class="form-control" name="sexoFamili4" id="sexoFamili4">
                                <option selected>Seleccionar</option>
                                <option value="">Masculino</option>
                                <option value="">Femenino</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th scope="row">Edad</th>
                        <th><input id="edadFamili1" class="form-control" type="date"></th>
                        <th><input id="edadFamili2" class="form-control" type="date"></th>
                        <th><input id="edadFamili3" class="form-control" type="date"></th>
                        <th><input id="edadFamili4" class="form-control" type="date"></th>
                    </tr>
                    <tr>
                        <th scope="row">Parentesco</th>
                        <th><input id="parentescoFamiliares1" class="form-control" type="text"><span id="parentescoFamiliares1"></span></th>
                        <th><input id="parentescoFamiliares2" class="form-control" type="text"><span id="parentescoFamiliares2"></span></th>
                        <th><input id="parentescoFamiliares3" class="form-control" type="text"><span id="parentescoFamiliares3"></span></th>
                        <th><input id="parentescoFamiliares4" class="form-control" type="text"><span id="parentescoFamiliares4"></span></th>
                    </tr>
                    <tr>
                        <th scope="row">Ocupación</th>
                        <th><input id="ocupacionFamiliares1" class="form-control" type="text"><span id="ocupacionFamiliares1"></span></th>
                        <th><input id="ocupacionFamiliares2" class="form-control" type="text"><span id="ocupacionFamiliares2"></span></th>
                        <th><input id="ocupacionFamiliares3" class="form-control" type="text"><span id="ocupacionFamiliares3"></span></th>
                        <th><input id="ocupacionFamiliares4" class="form-control" type="text"><span id="ocupacionFamiliares4"></span></th>

                    </tr>
                </table>
                  <hr>

              </div>

              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                <h3 class="text-left text-xl">DIFICULTADES OBSERVADAS</h3>
                <div class="row">
                <div class="col-md-12">
                    <p>¿Han observado alguna dificuldad o problema en su hijo?</p>
                </div>
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                            <label for="dificultadSi" class="btn btn-outline-primary">Si
                                <input type="radio" class="btn-check" name="dificultad" id="dificultadSi" data-toggle="collapse" data-target="#dificultadColl" aria-expanded="off" aria-controls="dificultadColl">
                            </label>
                            <label for="dificultadNo" class="btn btn-outline-primary">No
                                <input type="radio" class="btn-check" name="dificultad" id="dificultadNo">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="dificultadColl">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <label for="expliqueDificuldad">Explique la Dificultad</label>
                                <textarea id="expliqueDificultad" class="form-control "></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <label for="solucionarDificuldad">Como ha tratado de solucionarlo</label>
                                <textarea id="solucionarDificultad" class="form-control "></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>¿Ha asistido su niño alguna vez a consulta con el psicólogo, psicopedagogo, neurólogo o terapeuta de lenguage?</p>
                    </div>
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                            <label for="psicologoSi" class="btn btn-outline-primary">
                                <input type="radio" class="btn-check" name="psicologo" id="psicologoSi" data-toggle="collapse" data-target="#psicologoColl" aria-expanded="off" aria-controls="psicologoColl">
                            Si</label>
                            <label for="psicologoNo" class="btn btn-outline-primary">
                                <input type="radio" class="btn-check" name="psicologo" id="psicologoNo" >
                            No</label>
                        <label for="psicologoOtro" class="btn btn-outline-primary">
                                <input type="radio" class="btn-check" name="psicologo" id="psicologoOtro" data-toggle="collapse" data-target="#psicologoColl" aria-expanded="off" aria-controls="psicologoColl">
                            Otro</label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="psicologoColl">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                            <label for="psicologoExplique">Explique</label>
                                <textarea id="psicologoExplique" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div><hr>
                <h3 class="text-xl mb-3">SALUD</h3>
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-control form-select mb-3">
                            <option selected>Tipo de Sangre</option>
                            <option value="">A positivo (A+)</option>
                            <option value="">A negativo (A-)</option>
                            <option value="">B positivo (B+)</option>
                            <option value="">B negativo (B-)</option>
                            <option value="">O positivo (O+)</option>
                            <option value="">O negativo (O-)</option>
                            <option value="">AB positivo (AB+)</option>
                            <option value=""> ABnegativo (AB-)</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    <p>Vacunas recibidas:</p>
                        <div class="form-check  mb-3 ">
                            <input class="form-check-input" name="vacunas" type="checkbox"  id="vacBCG">
                            <label class="form-check-label" for="vacBCG">BCG</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check  mb-3 ">
                            <input class="form-check-input" name="vacunas" type="checkbox"  id="vacTriple">
                            <label class="form-check-label" for="vacTriple">TRIPLE</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check  mb-3 ">
                            <input class="form-check-input" name="vacunas" type="checkbox"  id="vacPolio">
                            <label class="form-check-label" for="vacPolio">POLIO</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check  mb-3 ">
                            <input class="form-check-input" name="vacunas" type="checkbox"  id="vacSarampion">
                            <label class="form-check-label" for="vacSarampion">SARAMPION</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check  mb-3 ">
                            <input class="form-check-input" name="vacunas" type="checkbox"  id="vacPPD">
                            <label class="form-check-label" for="vacPPD">PPD (Trivalente)</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check  mb-3 ">
                            <input class="form-check-input" name="vacunas" type="checkbox"  id="vacAntite">
                            <label class="form-check-label" for="vacAntite">ANTITETANICA</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                        <label for="vacOtra">Otra Vacuna</label>
                            <textarea id="vacOtra" class="form-control "></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p><b>Vacunas Covid:</b></p>
                    </div>
                    <div class="col-auto">
                        <div class="form-check  mb-3">
                            <input class="form-check-input" name="vacunas" type="checkbox" role="switch" id="vac1d">
                            <label class="form-check-label" for="vac1d">1ra Dosis</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="form-check mb-3">
                            <input class="form-check-input" name="vacunas" type="checkbox" role="switch" id="vac2d">
                            <label class="form-check-label" for="vac2d">2da Dosis</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="form-check mb-3">
                            <input class="form-check-input" name="vacunas" type="checkbox" role="switch" id="vac3d">
                            <label class="form-check-label" for="vac3d">3ra Dosis</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="form-check mb-3">
                            <input class="form-check-input" name="vacunas" type="checkbox" role="switch" id="vac4d">
                            <label class="form-check-label" for="vac4d">4ta Dosis</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p>Enfermedades que a padecido:</p>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check  mb-3 ">
                            <input type="checkbox" class="form-check-input" name="enfermedades" id="sarampionSi" >
                            <label for="sarampionSi" class="form-check-label">Sarampión</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check  mb-3 ">
                            <input type="checkbox" class="form-check-input" name="enfermedades" id="rubeolaSi" >
                            <label for="rubeolaSi" class="form-check-label">Rubeola</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check  mb-3 ">
                            <input type="checkbox" class="form-check-input" name="enfermedades" id="lechinaSi" >
                            <label for="lechinaSi" class="form-check-label">Lechina</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check  mb-3 ">
                            <input type="checkbox" class="form-check-input" name="enfermedades" id="parotiditisSi" >
                            <label for="parotiditisSi" class="form-check-label">Parotiditis</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p>Padece alguna afección que requiere atención especial atención?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                            <label for="atenEspSi" class="btn btn-outline-primary">Si
                                <input type="radio" class="btn-check" name="atenEsp" id="atenEspSi" data-toggle="collapse" data-target="#atenEspColl" aria-expanded="off" aria-controls="atenEspColl">
                            </label>
                            <label for="atenEspNo" class="btn btn-outline-primary">No
                                <input type="radio" class="btn-check" name="atenEsp" id="atenEspNo">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="atenEspColl">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                            <label for="atenEspExplique">Explique</label>
                                <textarea type="text" class="form-control" id="atenEspExplique"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p>Ha sido su hijo sometido a alguna intervención quirurgica?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                        <label for="interQueSi" class="btn btn-outline-primary">Si
                            <input type="radio" class="btn-check" name="interQue" id="interQueSi" data-toggle="collapse" data-target="#interQueColl" aria-expanded="off" aria-controls="interQueColl">
                            </label>
                        <label for="interQueNo" class="btn btn-outline-primary">No
                            <input type="radio" class="btn-check" name="interQue" id="interQueNo">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="interQueColl">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                            <label for="interQueTipo">De que tipo</label>
                            <input type="text" class="form-control" id="interQueTipo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p>¿El niño presenta alergias?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                        <label for="alergiasSi" class="btn btn-outline-primary">Si
                            <input type="radio" class="btn-check" name="alergias" id="alergiasSi" data-toggle="collapse" data-target="#alergiasColl" aria-expanded="off" aria-controls="alergiasColl">
                            </label>
                        <label for="alergiasNo" class="btn btn-outline-primary">No
                            <input type="radio" class="btn-check" name="alergias" id="alergiasNo">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="alergiasColl">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <label for="alergiasAQue">¿A que?</label>
                                <input type="text" class="form-control" id="alergiasAQue">
                                <span id="palergiasAQue"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p>¿Ha sido desparasitado?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                        <label for="desparasitadoSi" class="btn btn-outline-primary">Si
                            <input type="radio" class="btn-check" name="desparasitado" id="desparasitadoSi" data-toggle="collapse" data-target="#desparasitadoColl" aria-expanded="off" aria-controls="desparasitadoColl">
                            </label>
                        <label for="desparasitadoNo" class="btn btn-outline-primary">No
                            <input type="radio" class="btn-check" name="desparasitado" id="desparasitadoNo" >
                            </label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="desparasitadoColl">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <label for="desparTiempo">Cada Cuanto Tiempo</label>
                                <input type="text" class="form-control" id="desparTiempo">
                                <span id="pdesparTiempo"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                        <label for="fiebreAltMed">En caso de fiebre alta ¿cúal medicamento acostumbra administrarle?</label>
                        <input type="text" class="form-control" id="fiebreAltMed">
                        </div>
                    </div>
                </div><hr>


              </div>

              <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact1-tab">

                <h3 class="text-xl mb-3">HÁBITOS:</h3>
                <div class="row">
                    <div class="col-auto"><p>ALIMENTACIÓN:</p></div>
                    <div class="col-md-3">
                        <select class="form-control form-select mb-3">
                            <option selected>Comidas Al Día</option>
                            <option value="m">1</option>
                            <option value="f">2</option>
                            <option value="f">3</option>
                            <option value="f">4</option>
                            <option value="f">5</option>
                            <option value="f">6</option>
                            <option value="f">7</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control form-select mb-3">
                            <option selected>Come solo</option>
                            <option value="m">Si</option>
                            <option value="f">No</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control form-select mb-3">
                            <option selected>Buen Apetito</option>
                            <option value="m">Si</option>
                            <option value="f">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control form-select mb-3">
                            <option selected>Come Antes de Venir</option>
                            <option value="m">Si</option>
                            <option value="f">No</option>
                        </select>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <label for="alimNoConsCual">¿Existe algún alimento que no pueda ingerir por prescripción médica?</label>
                                <input type="text" class="form-control" id="alimNoConsCual">
                                <span id="palimNoConsCual"></span>
                            </div>
                        </div>
                    </div>

                <p><b>SUEÑO</b></p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-floating mb-3">
                            <label for="horaSueno">¿A que hora se acuesta?</label>
                            <select class="form-control" name="horaSueno" id="horaSueno">
                                <option selected>Seleccionar</option>
                                <option value="">07:00 p.m.</option>
                                <option value="">08:00 p.m.</option>
                                <option value="">09:00 p.m.</option>
                                <option value="">10:00 p.m.</option>
                                <option value="">11:00 p.m.</option>
                                <option value="">12:00 a.m.</option>
                                <option value="">01:00 a.m.</option>
                                <option value="">02:00 a.m.</option>
                                <option value="">03:00 a.m.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating mb-3">
                        <label for="horaLevan">¿A que hora se levanta?</label>
                        <select class="form-control" name="horaLevan" id="horaLevan">
                                <option selected>Seleccionar</option>
                                <option value="">05:00 a.m.</option>
                                <option value="">06:00 a.m.</option>
                                <option value="">07:00 a.m.</option>
                                <option value="">08:00 a.m.</option>
                                <option value="">09:00 a.m.</option>
                                <option value="">10:00 a.m.</option>
                                <option value="">11:00 a.m.</option>
                                <option value="">12:00 p.m.</option>
                                <option value="">01:00 p.m.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <label for="conQuienDuerme">¿Con quien duerme el niño?</label>
                            <input type="text" class="form-control" id="conQuienDuerme">
                            <span id="pconQuienDuerme"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <select class="form-control form-select mb-3">
                            <option selected>¿Como es el sueño del niño?</option>
                            <option value="m">Tranquilo</option>
                            <option value="f">Agitado</option>
                            <option value="f">Insomne</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control form-select mb-3">
                            <option selected>¿Se despierta constantemente?</option>
                            <option value="m">Si</option>
                            <option value="f">No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control form-select mb-3">
                            <option selected>¿Le rechinan los dientes?</option>
                            <option value="m">Si</option>
                            <option value="f">No</option>
                        </select>
                    </div>
                </div><hr>


              </div>

              <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab">


                            <h3 class="text-xl mb-3">CONTROL DE EFÍNTERES:</h3>
                            <div class="row">
                                <div class="col">
                                    <p>¿Se orina?</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                        <label for="seOrinaSi" class="btn btn-outline-primary">Si
                                        <input type="radio" class="btn-check" name="seOrina" id="seOrinaSi" data-toggle="collapse" data-target="#seOrinaColl" aria-expanded="false" aria-controls="seOrinaColl" >
                                        </label>
                                        <label for="seOrinaNo" class="btn btn-outline-primary">No
                                        <input type="radio" class="btn-check" name="seOrina" id="seOrinaNo" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                                <div class="collapse" id="seOrinaColl">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check   mb-3">
                                                <input type="checkbox" name="seOrinaHora" id="seOrinaDia"  class="form-check-input">
                                                <label for="seOrinaDia" class="form-check-label">De Dia</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check   mb-3">
                                                <input type="checkbox" name="seOrinaHora" id="seOrinaNoche"  class="form-check-input">
                                                <label for="seOrinaNoche" class="form-check-label">De Noche</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p>¿Puede ir al Baño Solo?</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                    <label for="soloBanoSi" class="btn btn-outline-primary">Si
                                        <input type="radio" class="btn-check" name="soloBano" id="soloBanoSi" data-toggle="collapse" data-target="#soloBanoColl" aria-expanded="false" aria-controls="soloBanoColl" >
                                        </label>
                                    <label for="soloBanoNo" class="btn btn-outline-primary">No
                                        <input type="radio" class="btn-check" name="soloBano" id="soloBanoNo" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="soloBanoColl">
                                <div class="row">
                                    <div class="col-auto">
                                        <p>Sin Solicitar Ayuda?</p>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check mb-3">
                                            <input type="radio" class="form-check-input" name="ayudaBano"  id="ayudaBanoSi" >
                                            <label for="ayudaBanoSi" class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check mb-3">
                                            <input type="radio" class="form-check-input" name="ayudaBano"  id="ayudaBanoNo" >
                                            <label for="ayudaBanoNo" class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                    <label for="dejoPanalesEdad">¿A que edad dejó de usar pañales?</label>
                                    <select class="form-control" name="dejoPanalEdad" id="dejoPanalEdad">
                                        <option selected>Seleccionar</option>
                                        <option value="">antes del primer año</option>
                                        <option value="">1 Año</option>
                                        <option value="">2 Año</option>
                                        <option value="">3 Año</option>
                                        <option value="">4 Año</option>
                                        <option value="">5 Año</option>
                                    </select>
                                    </div>
                                </div>
                            </div><hr>
                            <h3 class="text-xl mb-3">OTROS</h3>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="lavaManos"  id="lavaManosSi" >
                                        <label for="lavaManosSi">Se lava las manos solo</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="cepillaDient"  id="cepillaDientSi" >
                                        <label for="cepillaDientSi">Se cepilla los dientes solo</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="visteSolo"  id="visteSoloSi" >
                                        <label for="visteSoloSi">Se viste sin ayuda</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="desvisteSolo"  id="desvisteSoloSi" >
                                        <label for="desvisteSoloSi">Se desviste sin ayuda</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="ordenaJuguetes"  id="ordenaJuguetesSi" >
                                        <label for="ordenaJuguetesSi">Ordena sus juguetes</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="usaCubiertos"  id="usaCubiertosSi" >
                                        <label for="usaCubiertosSi">Utiliza cubiertos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3">
                                        <input type="checkbox" class="form-check-input" name="reglasHogar"  id="reglasHogarSi" data-toggle="collapse" data-target="#reglasHogarColl" aria-expanded="false" aria-controls="reglasHogarColl" >
                                        <label for="reglasHogarSi">Participa en tareas del hogar</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="normasCortes"  id="normasCortesSi" data-toggle="collapse" data-target="#normasCortesColl" aria-expanded="false" aria-controls="normasCortesColl" >
                                        <label for="normasCortesSi">Utiliza normas de cortesia</label>
                                    </div>
                                </div>
                            </div>
                            <hr>

              </div>

              <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact3-tab">


                            <h3 class="text-xl mb-3">EQUILIBRIO EMOCIONAL</h3>
                            <div class="row">
                                <div class="col-auto">
                                    <p>¿El niño es?</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="radio" class="form-check-input" name="obediencia"  id="obedienteSi" >
                                        <label for="obedienteSi">Obediente</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="radio" class="form-check-input" name="obediencia"  id="desobedienteSi" >
                                        <label for="desobedienteSi">Desobediente</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="agresivo"  id="agresivoSi" >
                                        <label for="agresivoSi">Agresivo</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="timido"  id="timidoSi" >
                                        <label for="timidoSi">Timido</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="lloraMucho"  id="lloraMuchoSi" >
                                        <label for="lloraMuchoSi">Llora con frecuencia</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="habitNervi"  id="habitNerviSi" >
                                        <label for="habitNerviSi">Ha manifestado habitos nerviosos?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="pataleos"  id="pataleosSi" >
                                        <label for="pataleosSi">Pataleos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="caprichos"  id="caprichosSi" >
                                        <label for="caprichosSi">Caprichos</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p>Cuando el niño presenta conductas no adecuadas</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <label for="formaReprender">¿cómo actúa usted?</label>
                                        <input type="text" class="form-control" id="formaReprender">
                                        <span id="pformaReprender"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="miedo"  id="miedoSi" data-toggle="collapse" data-target="#miedoColl" aria-expanded="false" aria-controls="miedoColl" >
                                        <label for="miedoSi">Demuestra miedo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="miedoColl">
                                <div class="row">
                                    <div class="col-auto">
                                        <p>A que demuestra miedo?</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check  mb-3 ">
                                            <input type="checkbox" class="form-check-input" name="miedoSoledad"  id="miedoSoledadSi" >
                                            <label for="miedoSoledadSi">Soledad</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check  mb-3 ">
                                            <input type="checkbox" class="form-check-input" name="miedoAnimales"  id="miedoAnimalesSi" >
                                            <label for="miedoAnimalesSi">Animales</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check  mb-3 ">
                                            <input type="checkbox" class="form-check-input" name="miedoPersonas"  id="miedoPersonasSi" >
                                            <label for="miedoPersonasSi">Personas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check  mb-3 ">
                                            <input type="checkbox" class="form-check-input" name="miedoOtros"  id="miedoOtrosSi" >
                                            <label for="miedoOtrosSi">Otros</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="tieneJuguetes"  id="tieneJuguetesSi" data-toggle="collapse" data-target="#tieneJuguetesColl" aria-expanded="false" aria-controls="tieneJuguetesColl" >
                                        <label for="tieneJuguetesSi" class="form-check-label">Tiene juguetes</label>
                                    </div>
                                </div>
                            </div>
                                <div class="collapse" id="tieneJuguetesColl">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-floating mb-3">
                                                <label for="jugueteFav">Cual prefiere?</label>
                                                <input type="text" class="form-control" id="jugueteFav">
                                                <span id="pjugueteFav"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating mb-3">
                                                <label for="espacioJuego">Que espacio utiliza para jugar</label>
                                                <input type="text" class="form-control" id="espacioJuego">
                                                <span id="pespacioJuego"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check  mb-3 ">
                                                <input type="checkbox" class="form-check-input" name="comparteJuguetes"  id="comparteJuguetesSi" >
                                                <label for="comparteJuguetesSi" class="form-check-label">Los comparte</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="tv"  id="tvSi" data-toggle="collapse" data-target="#tvColl" aria-expanded="false" aria-controls="tvColl" >
                                        <label for="tvSi" class="form-check-label">Tv</label>
                                    </div>
                                </div>
                            </div>
                                <div class="collapse" id="tvColl">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3">
                                                    <label for="tiempoTv">Tiempo</label>
                                                    <input type="text" class="form-control" id="tiempoTv">
                                                    <span id="ptiempoTv"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <label for="programasTv">Programas</label>
                                                    <input type="text" class="form-control" id="programasTv">
                                                    <span id="pprogramasTv"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3">
                                                    <label for="imitaPersonaje">Personaje que imita</label>
                                                    <input type="text" class="form-control" id="imitaPersonaje">
                                                    <span id="pimitaPersonaje"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="imitaFamilia"  id="imitaFamiliaSi" data-toggle="collapse" data-target="#imitaFamiliaColl" aria-expanded="false" aria-controls="imitaFamiliaColl" >
                                        <label for="imitaFamiliaSi" class="form-check-label">Imita escenas de la vida familiar</label>
                                    </div>
                                </div>
                            </div>
                                <div class="collapse" id="imitaFamiliaColl">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <label for="imitaFamiEscen">Cuales</label>
                                                <input type="text" class="form-control" id="imitaFamiEscen">
                                                <span id="pimitaFamiEscen"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="presenciaDiscucion"  id="presenciaDiscucionSi" >
                                        <label for="presenciaDiscucionSi" class="form-check-label">Ha presenciado discuciones fuertes entre adultos</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="tieneAmigos"  id="tieneAmigosSi" >
                                        <label for="tieneAmigosSi" class="form-check-label">Tiene amigos</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <label for="ingresoMenFam">Ingreso mensual del grupo familiar</label>
                                        <input type="text" class="form-control" id="ingresoMenFam">
                                        <span id="pingresoMenFam"></span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating mb-3">
                                        <label for="personasDepIngre">Nro de personas que dependen de ese ingreso</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Tipo de Vivienda</label>
                                    <select class="form-control form-select mb-3">
                                        <option selected>Seleccionar</option>
                                        <option value="m">Rancho</option>
                                        <option value="f">Casa</option>
                                        <option value="f">Quinta</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control form-select mb-3">
                                        <option selected>Tenencia de la Vivienda</option>
                                        <option value="m">Propia</option>
                                        <option value="f">Pagada</option>
                                        <option value="f">Alquilada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p>Personas que cuidan al niño durante el tiempo que permanece en el hogar</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="cuidador"  id="cuidadorPadre" >
                                        <label for="cuidadorPadre" class="form-check-label">Padre</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="cuidador"  id="cuidadorMadre" >
                                        <label for="cuidadorMadre" class="form-check-label">Madre</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="cuidador"  id="cuidadorHermano" >
                                        <label for="cuidadorHermano" class="form-check-label">Hermano(a)</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="cuidador"  id="cuidadorPariente" data-toggle="collapse" data-target="#cuidadorOtroColl" aria-expanded="false" aria-controls="cuidadorOtroColl" >
                                        <label for="cuidadorPariente" class="form-check-label">Pariente</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="cuidador"  id="cuidadorOtro" data-toggle="collapse" data-target="#cuidadorOtroColl" aria-expanded="false" aria-controls="cuidadorOtroColl" >
                                        <label for="cuidadorOtro" class="form-check-label">Otro</label>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="cuidadorOtroColl">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <label for="cuidadorEspecificar">Especificar pariente u otro</label>
                                            <input type="text" class="form-control" id="cuidadorEspecificar">
                                            <span id="pcuidadorEspecificar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p>Ha asistido anteriormente al preescolar</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                    <label for="preescolarAnteSi" class="btn btn-outline-primary">Si
                                        <input type="radio" class="btn-check" name="preescolarAnte" id="preescolarAnteSi" data-toggle="collapse" data-target="#preescolarAnteColl" aria-expanded="false" aria-controls="preescolarAnteColl" >
                                        </label>
                                    <label for="preescolarAnteNo" class="btn btn-outline-primary">No
                                        <input type="radio" class="btn-check" name="preescolarAnte" id="preescolarAnteNo" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="preescolarAnteColl">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                        <label for="otroPreescolarNo" class="btn btn-outline-primary">A este centro
                                            <input type="radio" class="btn-check" name="otroPreescolar" id="otroPreescolarNo" checked>
                                            </label>
                                        <label for="otroPreescolarSi" class="btn btn-outline-primary">Otro centro
                                            <input type="radio" class="btn-check" name="otroPreescolar" id="otroPreescolarSi" data-toggle="collapse" data-target="#otroPreescolarColl" aria-expanded="false" aria-controls="otroPreescolarColl" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="otroPreescolarColl">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <label for="anteriorPreecolar">Especificar anterior preescolar</label>
                                                <input type="text" class="form-control" id="anteriorPreescolar">
                                                <span id="panteriorPreecolar"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p>Ha orientado al niño respecto a su ingreso a esta institución</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                    <label for="orientNuePre" class="btn btn-outline-primary">Si
                                        <input type="radio" class="btn-check" id="orientNuePre" name="orientadoNuePre" data-toggle="collapse" data-target="#orientNuePreColl" aria-expanded="false" aria-controls="orientNuePreColl" >
                                        </label>
                                    <label for="orientNuePreNo" class="btn btn-outline-primary">No
                                        <input type="radio" class="btn-check" id="orientNuePreNo" name="orientadoNuePre">
                                        </label>
                                    </div>
                                </div>
                                <div class="collapse" id="orientNuePreColl">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="orientComo" placeholder="Como lo ha hecho">
                                                <span id="porientComo"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <label for="tipoJuegoPref">Que tipo de juegos prefiere</label>
                                        <input type="text" class="form-control" id="tipoJuegoPref">
                                        <span id="ptipoJuegoPref"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                    <label for="juegaSoloSi" class="btn btn-outline-primary">Juega solo
                                        <input type="radio" class="btn-check" name="juegaSolo" id="juegaSoloSi" >
                                        </label>
                                    <label for="juegaSoloNo" class="btn btn-outline-primary">Acompañado
                                        <input type="radio" class="btn-check" name="juegaSolo" id="juegaSoloNo" data-toggle="collapse" data-target="#juegaSoloColl" aria-expanded="false" aria-controls="juegaSoloColl" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                                <div class="collapse" id="juegaSoloColl">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <label for="conQuienJuega">Con quien juega generalmente</label>
                                                <input type="text" class="form-control" id="conQuienJuega">
                                                <span id="pconQuienJuega"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-auto">
                                    <p>Tiene un lugar para jugar en la casa?</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                    <label for="lugarJugarSi" class="btn btn-outline-primary">Si
                                        <input type="radio" class="btn-check" name="lugarJugar" id="lugarJugarSi" data-toggle="collapse" data-target="#lugarJugarColl" aria-expanded="off" aria-controls="lugarJugarColl" >
                                        </label>
                                    <label for="lugarJugarNo" class="btn btn-outline-primary">No
                                        <input type="radio" class="btn-check" name="lugarJugar" id="lugarJugarNo" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="lugarJugarColl">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <label for="lugJugEsp">Especificar lugar</label>
                                            <input type="text" class="form-control" id="lugJugEsp">
                                            <span id="plugJugEsp"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p>Le gusta asistir a:</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="asistirA" id="asistirFiestInf">
                                        <label for="asistirFiestInf" class="form-check-label">Fiestas infantiles</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="asistirA" id="asistirPaseos">
                                        <label for="asistirPaseos" class="form-check-label">Paseos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="asistirA" id="asistirCine">
                                        <label for="asistirCine" class="form-check-label">Cine</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="asistirA" id="asistirMuseos">
                                        <label for="asistirMuseos" class="form-check-label">Museos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="asistirA" id="asistirAireLibre">
                                        <label for="asistirAireLibre" class="form-check-label">Aire libre</label>
                                    </div>
                                </div>
                            </div><hr>

                      </div>



              <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact4-tab">


                <h3 class="text-xl mb-3">AREAS FISICAS Y DE SALUD</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check form-check-inline mb-3">
                            <input type="radio" class="form-check-input" name="deseado" id="deseadoSi">
                            <label for="deseadoSi" class="form-check-label">Embarazo deseado</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check form-check-inline mb-3">
                            <input type="radio" class="form-check-input" name="deseado" id="deseadoNo" class="form-check-label">
                            <label for="deseadoNo" class="form-check-label">Embarazo no deseado</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check form-check-inline mb-3">
                            <input type="radio" class="form-check-input" name="prematuro" id="prematuroSi">
                            <label for="prematuroSi" class="form-check-label">Prematuro</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check form-check-inline mb-3">
                            <input type="radio" class="form-check-input" name="prematuro" id="prematuroNo">
                            <label for="prematuroNo" class="form-check-label">Prolongado</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p>Enfermedades durante el embarazo</p>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="embarazoEnfer" id="embarazoRubeola">
                            <label for="embarazoRubeola" class="form-check-label">Rubeola</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="embarazoEnfer" id="embarazoToxo">
                            <label for="embarazoToxo" class="form-check-label">Toxoplasmosis</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="embarazoEnfer" id="embarazoHipert">
                            <label for="embarazoHipert" class="form-check-label">Hipertensión</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="embarazoEnfer" id="embarazoAnemia">
                            <label for="embarazoAnemia" class="form-check-label">Anemia</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="embarazoEnfer" id="embarazoPreclam">
                            <label for="embarazoPreclam" class="form-check-label">Preclampsia</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="embarazoEnfer" id="embarazoOtras">
                            <label for="embarazoOtras" class="form-check-label">Otras</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="trabajoEmbarazo" id="trabajoEmbarazoSi" data-toggle="collapse" data-target="#trabajoEmbarazoColl" aria-expanded="off" aria-controls="trabajoEmbarazoColl">
                            <label for="trabajoEmbarazoSi" class="form-check-label">Trabajo durante el embarazo</label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="trabajoEmbarazoColl">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-floating mb-3">
                                <label for="trabajoEmbarazoTipo">Que tipo de trabajo</label>
                                <input type="text" class="form-control" id="trabajoEmbarazoTipo">
                                <span id="ptrabajoEmbarazoTipo"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <label for="trabajoEmbarazoTiempo">Tiempo</label>
                                <input type="text" class="form-control" id="trabajoEmbarazoTiempo">
                                <span id="ptrabajoEmbarazoTiempo"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p><b>Como fue el parto?</b></p>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="parto" id="partoNormal">
                            <label for="partoNormal" class="form-check-label">Normal</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="parto" id="partoCesárea">
                            <label for="partoCesárea" class="form-check-label">Cesárea</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="parto" id="partoTermino">
                            <label for="partoTermino" class="form-check-label">A termino</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="parto" id="partoforceps">
                            <label for="partoforceps" class="form-check-label">Se utilizo Fórceps al nacer</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <label for="partoEdadMadre">Edad de la madre al momento del parto</label>
                            <input type="text" class="form-control" id="partoEdadMadre">
                            <span id="ppartoEdadMadre"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="partoProblema" id="partoProblemaSi" data-toggle="collapse" data-target="#partoProblemaColl" aria-expanded="off" aria-controls="partoProblemaColl">
                            <label for="partoProblemaSi" class="form-check-label">Surgió algún problema a la hora del parto</label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="partoProblemaColl">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <label for="partoExplique">Explique</label>
                                <input type="text" class="form-control" id="partoExplique">
                                <span id="ppartoExplique"></span>
                            </div>
                        </div>
                    </div>
                </div><hr>
                <h3 class="text-xl mb-3">ANTECEDENTES POSTNATALES</h3>
                <div class="row">
                    <div class="col-auto">
                        <div class="form-floating mb-3">
                            <label for="pesoNatal">Peso (Kg.)</label>
                            <input type="text" class="form-control" id="pesoNatal">
                            <span id="ppesoNatal"></span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-floating mb-3">
                            <label for="tallaNatal">Talla (Cm.)</label>
                            <input type="text" class="form-control" id="tallaNatal">
                            <span id="ptallaNatal"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p>Se presentaron problemas en los primeros días despues del nacimiento</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                        <label for="problemasNatalSi" class="btn btn-outline-primary">Si
                            <input type="radio" class="btn-check" name="problemasNatal" id="problemasNatalSi" data-toggle="collapse" data-target="#problemasNatalColl" aria-expanded="off" aria-controls="problemasNatalColl" >
                            </label>
                        <label for="problemasNatalNo" class="btn btn-outline-primary">No
                            <input type="radio" class="btn-check" name="problemasNatal" id="problemasNatalNo" >
                            </label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="problemasNatalColl">
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-check form-check-inline mb-3">
                                <input type="checkbox" class="form-check-input" name="problemasNatales" id="amarilloNatal">
                                <label for="amarilloNatal" class="form-check-label">Se puso Amarillo</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline mb-3">
                                <input type="checkbox" class="form-check-input" name="problemasNatales" id="moradoNatal">
                                <label for="moradoNatal" class="form-check-label">Se puso Morado</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline mb-3">
                                <input type="checkbox" class="form-check-input" name="problemasNatales" id="convulsionesNatal">
                                <label for="convulsionesNatal" class="form-check-label">Convulsiones</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline mb-3">
                                <input type="checkbox" class="form-check-input" name="problemasNatales" id="trastRespiNatal">
                                <label for="trastRespiNatal" class="form-check-label">Trastornos repiratorios</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <p>Padece defectos</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                        <label for="defectosNatalSi" class="btn btn-outline-primary">Si
                            <input type="radio" class="btn-check" name="defectosNatal" id="defectosNatalSi" data-toggle="collapse" data-target="#defectosNatalColl" aria-expanded="off" aria-controls="defectosNatalColl" >
                            </label>
                        <label for="defectosNatalNo" class="btn btn-outline-primary">No
                            <input type="radio" class="btn-check" name="defectosNatal" id="defectosNatalNo" >
                            </label>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="defectosNatalColl">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <label for="defectosNatalEspe">Especifique</label>
                                <input type="text" class="form-control" id="defectosNatalEspe">
                                <span id="pdefectosNatalEspe"></span>
                            </div>
                        </div>
                    </div>
                </div><hr>


              </div>

              <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact5-tab">

                  <h3 class="text-center text-xl mt-4 mb-4">DESARROLLLO EVOLUTIVO</h3>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <label for="quienLoCuido">Quien lo atendió en los primeros meses</label>
                              <input type="text" class="form-control" id="quienLoCuido">
                              <span id="pquienLoCuido"></span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <label for="cuandoGateo">A los cuantos meses gateo?</label>
                              <select class="form-control" name="cuandoGateo" id="cuandoGateo">
                                  <option selected>Seleccionar Mes</option>
                                  <option value="">Primer Mes</option>
                                  <option value="">Segundo Mes</option>
                                  <option value="">Tercero Mes</option>
                                  <option value="">Cuarto Mes</option>
                                  <option value="">Quinto Mes</option>
                                  <option value="">Sexo Mes</option>
                                  <option value="">Séptimo Mes</option>
                                  <option value="">Octavo Mes</option>
                                  <option value="">Noveno Mes</option>
                                  <option value="">Decimo Mes</option>
                                  <option value="">Decimo Primer Mes</option>
                                  <option value="">Decimo Segundo Mes</option>
                                  <option value="">Mas de un año</option>
                              </select>
                              <span id="pcuandoGateo"></span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <label for="caminarSinApoyo">A que edad aproximada comenzó a caminar (sin apoyo)</label>
                              <select class="form-control" name="caminarSinApoyo" id="caminarSinApoyo">
                                  <option selected>Seleccionar Edad</option>
                                  <option value="">Antes del primer año</option>
                                  <option value="">1 año</option>
                                  <option value="">2 años</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <label for="cuandoHablo">A que edad aproximada comenzó a hablar (frases)?</label>
                              <select class="form-control" name="cuandoHablo" id="cuandoHablo">
                                  <option selected>Seleccionar</option>
                                  <option value="">Antes del primer año</option>
                                  <option value="">1 año</option>
                                  <option value="">2 años</option>
                                  <option value="">3 años</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="dificultaHablar" id="dificultadHablarSi">
                              <label for="dificultadHablarSi" class="form-check-label">Tiene dificultad para pronunciar palabras</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="gustaConversar" id="gustaConversarSi">
                              <label for="gustaConversarSi" class="form-check-label">Le gusta conversar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="radio" class="form-check-input" name="tonoVoz" id="tonoVozBajo">
                              <label for="tonoVozBajo" class="form-check-label">Habla con un tono de voz demasiado bajo</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="radio" class="form-check-input" name="tonoVoz" id="tonoVozAlto">
                              <label for="tonoVozAlto" class="form-check-label">Habla con un tono de voz demasiado alto</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="respondeLlamado" id="respondeLlamadoSi">
                              <label for="respondeLlamadoSi" class="form-check-label">Responde cuando se le llama</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="volteaAlSonido" id="volteaAlSonidoSi">
                              <label for="volteaAlSonidoSi" class="form-check-label">Voltea la cabeza en dirección al sonido</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="restriegaOjos" id="restriegaOjosSi" data-toggle="collapse" data-target="#restriegaOjosColl" aria-expanded="off" aria-controls="restriegaOjosColl">
                              <label for="restriegaOjosSi" class="form-check-label">Frecuentemente se restriega los ojos</label>
                          </div>
                          <div class="collapse" id="restriegaOjosColl">
                              <div class="row">
                                  <div class="col-auto">
                                      <div class="form-check form-check-inline mb-3">
                                          <input type="checkbox" class="form-check-input" name="dueleOjos" id="dueleOjosSi">
                                          <label for="dueleOjosSi" class="form-check-label">Le duele</label>
                                      </div>
                                  </div>
                                  <div class="col-auto">
                                      <div class="form-check form-check-inline mb-3">
                                          <input type="checkbox" class="form-check-input" name="arrugaOjos" id="arrugaOjosSi">
                                          <label for="arrugaOjosSi" class="form-check-label">Los arruga</label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="chupaDedo" id="chupaDedoSi" data-toggle="collapse" data-target="#chupaDedoColl" aria-expanded="off" aria-controls="chupaDedoColl">
                              <label for="chupaDedoSi" class="form-check-label">Se chupa el dedo</label>
                          </div>
                          <div class="collapse" id="chupaDedoColl">
                              <div class="row">
                                  <div class="col-auto">
                                      <div class="form-floating mb-3">
                                          <input type="text" class="form-control" id="chupaDedoCual" placeholder="¿Cual?">
                                          <span id="pchupaDedoCual"></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="escaleraSinApoyo" id="escaleraSinApoyoSi">
                              <label for="escaleraSinApoyoSi" class="form-check-label">Sube y baja las escaleras sin apoyo</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="lanzarObjetos" id="lanzarObjetosSi" data-toggle="collapse" data-target="#lanzarObjetosColl" aria-expanded="off" aria-controls="lanzarObjetosColl">
                              <label for="lanzarObjetosSi" class="form-check-label">Puede lanzar objetos</label>
                          </div>
                          <div class="collapse" id="lanzarObjetosColl">
                              <div class="row">
                                  <div class="col-auto">
                                      <div class="form-check form-check-inline mb-3">
                                          <input type="checkbox" class="form-check-input" name="lanzarObjetos" id="recibirObjetos">
                                          <label for="recibirObjetos" class="form-check-label">Recibirlos</label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="ruedaPelota" id="ruedaPelotaSi">
                              <label for="ruedaPelotaSi" class="form-check-label">Rueda la pelota</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="abotonarse" id="abotonarseSi">
                              <label for="abotonarseSi" class="form-check-label">Es capaz de abotonarse</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="abotonarse" id="desabotonarseSi">
                              <label for="desabotonarseSi" class="form-check-label">Es capaz de desabotonarse</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="trenzar" id="sabeTrenzar">
                              <label for="sabeTrenzar" class="form-check-label">Sabe trenzar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="anudar" id="sabeAnudar">
                              <label for="sabeAnudar" class="form-check-label">Sabe anudar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="reconoceCuerpo" id="reconoceCuerpoSi">
                              <label for="reconoceCuerpoSi" class="form-check-label">Reconoce las partes del cuerpo</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="problemasCaminar" id="problemasCaminarSi" data-toggle="collapse" data-target="#problemasCaminarColl" aria-expanded="off" aria-controls="problemasCaminarColl">
                              <label for="problemasCaminarSi" class="form-check-label">Presenta problemas al caminar</label>
                          </div>
                      </div>
                  </div>
                  <div class="collapse" id="problemasCaminarColl">
                      <div class="row">
                          <div class="col-auto">
                              <div class="form-check form-check-inline mb-3">
                                  <input type="checkbox" class="form-check-input" name="problemasCaminar" id="caminarCorrectivo">
                                  <label for="caminarCorrectivo" class="form-check-label">Utiliza algún correctivo</label>
                              </div>
                          </div>
                          <div class="col-auto">
                              <div class="form-check form-check-inline mb-3">
                                  <input type="checkbox" class="form-check-input" name="problemasCaminar" id="metePie">
                                  <label for="metePie" class="form-check-label">Mete algún pie</label>
                              </div>
                          </div>
                          <div class="col-auto">
                              <div class="form-check form-check-inline mb-3">
                                  <input type="checkbox" class="form-check-input" name="problemasCaminar" id="pegaRodillas">
                                  <label for="pegaRodillas" class="form-check-label">Pega las rodillas</label>
                              </div>
                          </div>
                       </div>
                     </div>

                          <div class="row">
                              <div class="col-auto">
                                  <p>Mano que utiliza Frecuentemente</p>
                              </div>
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="radio" class="form-check-input" name="manoDominante" id="manoDerecha">
                                      <label for="manoDerecha" class="form-check-label">Derecha</label>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="radio" class="form-check-input" name="manoDominante" id="manoIzquierda">
                                      <label for="manoIzquierda" class="form-check-label">Izquierda</label>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="radio" class="form-check-input" name="manoDominante" id="ambasManos">
                                      <label for="ambasManos" class="form-check-label">Ambas</label>
                                   </div>
                              </div>
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="checkbox" class="form-check-input" name="manoDominante" id="forzadoDerecha">
                                      <label for="forzadoDerecha" class="form-check-label">Lo ha forzado a utilizar la mano derecha</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <div class="form-floating mb-3">
                                      <label for="pesoActual">Peso actual (Kg.)</label>
                                      <input type="text" class="form-control" id="pesoActual">
                                      <span id="ppesoActual"></span>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-floating mb-3">
                                      <label for="tallaActual">Talla actual (Cm.)</label>
                                      <input type="text" class="form-control" id="tallaActual">
                                      <span id="ptallaActual"></span>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-floating mb-3">
                                      <label for="camisa">Talla Camisa</label>
                                      <input type="text" class="form-control" id="camisa">
                                      <span id="pcamisa"></span>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-floating mb-3">
                                      <label for="pantalon">Talla Pantalon</label>
                                      <input type="text" class="form-control" id="pantalon">
                                      <span id="ppantalon"></span>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-floating mb-3">
                                      <label for="calzado">Talla Calzado</label>
                                      <input type="text" class="form-control" id="calzado">
                                      <span id="pcalzado"></span>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="checkbox" class="form-check-input" name="zapatosOrtopedicos" id="zapatosOrtopedicosSi">
                                      <label for="zapatosOrtopedicosSi" class="form-check-label">Utiliza zapatos ortopédicos</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-auto">
                              <p>Tiene algún hermano con:</p>
                              </div>
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="checkbox" class="form-check-input" name="sindromeD" id="sindromeD">
                                      <label for="sindromeDown" class="form-check-label">Sindrome Down</label>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="checkbox" class="form-check-input" name="sindromeA" id="sindromeA">
                                      <label for="sindromeAutista" class="form-check-label">Sindrome Autista</label>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="checkbox" class="form-check-input" name="sindrome" id="sindromeOtro" data-toggle="collapse" data-target="#sindromeColl" aria-expanded="off" aria-controls="sindromeColl">
                                      <label for="sindromeOtro" class="form-check-label">Otro</label>
                                  </div>
                              </div>
                          </div>
                          <div class="collapse" id="sindromeColl">
                              <div class="row">
                                  <div class="col-auto">
                                      <div class="form-floating mb-3">
                                          <input type="text" class="form-control" id="sindromeExplique" placeholder="Explique">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <hr>

              </div>

              <div class="tab-pane fade" id="pills-contact6" role="tabpanel" aria-labelledby="pills-contact6-tab">


                        <h3 class="text-center text-xl mt-4 mb-4">COLABORACION VOLUNTARIA</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                    <label for="colaboracionInicial">De que forma colaboraria usted y otro familiar en la sección de inicial a la que será asignado a su representado?</label>
                                        <textarea class="form-control" id="colaboracionInicial"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p>Dias disponibles para colaborar con las actividades diarias</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="diaColaborar" id="diaLunes">
                                        <label for="diaLunes" class="form-check-label">Lunes</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="diaColaborar" id="diaMartes">
                                        <label for="diaMartes" class="form-check-label">Martes</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="diaColaborar" id="diaMiercoles">
                                        <label for="diaMiercoles" class="form-check-label">Miercoles</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="diaColaborar" id="diaJueves">
                                        <label for="diaJueves" class="form-check-label">Jueves</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="diaColaborar" id="diaViernes">
                                        <label for="diaViernes" class="form-check-label">Viernes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="form-floating mb-3">
                                    <label for="Horario">Horario</label>
                                        <input type="text" class="form-control" id="horarioColaborar">
                                    </div>
                                </div>
                            </div><hr>
                            <div class="col">
                     <button type="button" class="btn btn-primary" id="incluir" >INCLUIR

                     </button>
                </div>

              </div>


          </div>



















        </form>
        <?php
            require_once("comunes/footer.php");
        ?>
    </main>
</body>
<script src="js/gestionar_preescolar.js"></script>
<script src="js/botonVolver.js"></script>
</html>
