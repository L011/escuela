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
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Documentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Datos niño</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Datos Familiares</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact0-tab" data-toggle="pill" href="#pills-contact0" role="tab" aria-controls="pills-contact0" aria-selected="false">Salud</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact1-tab" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact1" aria-selected="false">Habitos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact3-tab" data-toggle="pill" href="#pills-contact3" role="tab" aria-controls="pills-contact3" aria-selected="false">Emocional</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact4-tab" data-toggle="pill" href="#pills-contact4" role="tab" aria-controls="pills-contact4" aria-selected="false">Antecedentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact5-tab" data-toggle="pill" href="#pills-contact5" role="tab" aria-controls="pills-contact5" aria-selected="false">Desarrollo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact6-tab" data-toggle="pill" href="#pills-contact6" role="tab" aria-controls="pills-contact6" aria-selected="false">Colaboración</a>
              </li>

            </ul>



          <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">


                <h3 class="text-center text-xl mt-4 mb-4">DOCUMENTOS PRESENTADOS PARA LA INSCRIPCIÓN</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  id="partida_na"
                             name="doc[]" value="partida_na">
                            <label class="form-check-label" for="partida_na">Partida de Nacimiento</label>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  id="vacuna_c" name="doc[]" value="vacuna_c">
                            <label for="vacuna_c" class="form-check-label">Certificado de Vacuna</label>
                        </div>
                    </div>
                    <div class="col-auto  mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  id="fotos" name="doc[]"  value="fotos">
                            <label for="fotos" class="form-check-label">Fotos</label>
                        </div>
                    </div>
                    <div class="col-auto  mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  id="copia_ce"  name="doc[]" value="copia_ce">
                            <label for="copia_ce" class="form-check-label">Copias de Cédula de Representates</label>
                        </div>
                    </div>
                    <div class="col-auto  mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  id="sano_n"  name="doc[]"value="sano_n">
                            <label for="sano_n" class="form-check-label">Constancia de Niño Sano</label>
                        </div>
                    </div>
                </div><hr>


              </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

               

                              
                 <!-- Inicio segunda parte parteee-->

                                  <div class="row" style="background-color: tomato;border-radius: 8px;" id="repre">                                     
                                    <div class="col mb-3 mt-4 ml-5">
                                         <label for="cedula_r">Cedula Representante</label>
                                    </div>
                                      <div class="col">
                                          <div class="mb-3 mt-3" >
                                            
                                              <input type="text" class="form-control"id="cedula_r" name="cedula_r" >
                                              <span id="pcedula_r"></span>
                                          </div>
                                      </div>
                                      <div class="col">
                                        <p id="representanten" style="margin-top: 9%;"></p>
                                      </div>
                                      <div class="col">
                                        <p id="representantea" style="margin-top: 9%;"></p>
                                      </div>
                                      
                                  </div>
                    <h3 class="text-center text-xl mt-4 mb-4">DATOS DEL NIÑO, LA NIÑA</h3>
                                  <div class="row">


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
                                          <select id="orden" name="orden" class="form-control mb-3"> 
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
                                          <label for="">¿Posee cedula de identidad?</label>
                                          <select id="c_id" name="c_id" class="form-control mb-3">
                                              <option value="0" selected>Seleccionar</option>
                                              <option value="n">No</option>
                                              <option value="s">Si</option>
                                          </select>
                                      </div>

                                      
                                      <!--  Un check para cedula de ciIdentidad -->
                                    
                                  </div>

                                   <div class="row" style="background-color: #daf4f9;border-radius: 8px; display:none;" id="cedula_div" >                                     
                                    <div class="col mb-3 mt-4 ml-5">
                                         <label for="cedulaEscolar">Cedula Escolar</label>
                                    </div>

                                    <div class="col">
                                          <div class="mb-3 mt-3" >
                                            
                                              <input type="text" class="form-control"id="cedulaEscolar" name="cedulaEscolar" >
                                              <span id="pCedulaEscolar"></span>
                                          </div>
                                      </div>
                                      
                                      <div class="col" id="col_boton">
                                        <button type="button" id="generar" class="btn btn-primary" style="margin-top: 6%;">Generar</button>
                                      </div>
                                      
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
                


              <!-- fin de la primera parteee-->

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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="1" name="llegar[]" value="1" checked>
                            <label class="form-check-label" for="aPie">A pie</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="2" name="llegar[]" value="2">
                            <label class="form-check-label" for="transporte">Transporte</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="3" name="llegar[]" value="3">
                            <label class="form-check-label" for="particular">Particular</label>
                        </div>
                    </div>

                </div>
               


                      <hr>
          </div>

              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                <h3 class="text-center text-xl mt-4 mb-4">DATOS FAMILIARES (ASPECTO SOCIO ECONOMICO)</h3>
                <p><b>Personas que viven en el hogar con el niño</b></p>
                <table class="table table-light">

                    <tr style="text-align: center;">
                        <th></th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>

                    </tr>


                    <tr>
                        <th scope="row">Nombres</th>

                        <th><input id="n1" name="n1"  class="form-control" type="text"><span id="sn1"></span></th>
                        <th><input id="n2" name="n2" class="form-control" type="text"><span id="sn2"></span></th>
                        <th><input id="n3" name="n3" class="form-control" type="text"><span id="sn3"></span></th>
                        <th><input id="n4" name="n4" class="form-control" type="text"><span id="sn4"></span></th>
                    </tr>
                    <tr>
                        <th scope="row">Apellidos</th>
                        <th><input id="a1" name="a1" class="form-control" type="text"><span id="sa1"></span></th>
                        <th><input id="a2" name="a2" class="form-control" type="text"><span id="sa2"></span></th>
                        <th><input id="a3" name="a3" class="form-control" type="text"><span id="sa3"></span></th>
                        <th><input id="a4" name="a4" class="form-control" type="text"><span id="sa4"></span></th>
                    </tr>
                    <tr>
                        <th scope="row">Sexo</th>
                        <th>
                            <select class="form-control" name="sx1" id="sx1">
                                <option selected>Seleccionar</option>
                                <option value="m">Masculino</option>
                                <option value="f">Femenino</option>
                            </select>
                        </th>
                        <th>
                            <select class="form-control" name="sx2" id="sx2">
                                <option selected>Seleccionar</option>
                                <option value="m">Masculino</option>
                                <option value="f">Femenino</option>
                            </select>
                        </th>
                        <th>
                            <select class="form-control" name="sx3" id="sx3">
                                <option selected>Seleccionar</option>
                                <option value="m">Masculino</option>
                                <option value="f">Femenino</option>
                            </select>
                        </th>
                        <th>
                            <select class="form-control" name="sx4" id="sx4">
                                <option selected>Seleccionar</option>
                                <option value="m">Masculino</option>
                                <option value="f">Femenino</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th scope="row">Edad</th>
                        <th><input id="ed1" name="ed1" class="form-control" type="date"></th>
                        <th><input id="ed2" name="ed2" class="form-control" type="date"></th>
                        <th><input id="ed3" name="ed3" class="form-control" type="date"></th>
                        <th><input id="ed4" name="ed4" class="form-control" type="date"></th>
                    </tr>
                    <tr>
                        <th scope="row">Parentesco</th>
                        <th><input id="pt1"name="pt1"  class="form-control" type="text"><span id="spt1"></span></th>
                        <th><input id="pt2"name="pt2"  class="form-control" type="text"><span id="spt2"></span></th>
                        <th><input id="pt3"name="pt3"  class="form-control" type="text"><span id="spt3"></span></th>
                        <th><input id="pt4"name="pt4" class="form-control" type="text"><span id="spt4"></span></th>
                    </tr>
                    <tr>
                        <th scope="row">Ocupación</th>
                        <th><input id="oc1" name="oc1" class="form-control" type="text"><span id="soc1"></span></th>
                        <th><input id="oc2" name="oc2" class="form-control" type="text"><span id="soc2"></span></th>
                        <th><input id="oc3" name="oc3" class="form-control" type="text"><span id="soc3"></span></th>
                        <th><input id="oc4" name="oc4" class="form-control" type="text"><span id="soc4"></span></th>

                    </tr>
                </table>
                  <hr>

                  <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <label for="ingresoMenFam">Ingreso mensual del grupo familiar</label>
                                        <input type="text" class="form-control" id="ingreso_m" placeholder="20000bs">
                                        <span id="pingresoMenFam"></span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating mb-3">
                                        <label for="personasDepIngre">Nro de personas que dependen de ese ingreso</label>
                                        <input type="range" class="form-control" id="personas_ingreso_dep">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Tipo de Vivienda</label>
                                    <select class="form-control form-select mb-3" id="tipo_vivienda">
                                        <option selected value="0">Seleccionar</option>
                                        <option value="1">Rancho</option>
                                        <option value="2">Casa</option>
                                        <option value="3">Quinta</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control form-select mb-3" id="tenencia_vivienda">
                                        <option selected value="0">Tenencia de la Vivienda</option>
                                        <option value="1">Propia</option>
                                        <option value="2">Pagada</option>
                                        <option value="3">Alquilada</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                              <p>Personas que cuidan a niño mientas esta en casa</p>
                            </div>
                            <div class="row">
                               
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="familiar[]"  id="1" value="1" >
                                        <label for="cuidadorPadre" class="form-check-label">Padre</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="familiar[]"  id="2" value="2" >
                                        <label for="cuidadorMadre" class="form-check-label">Madre</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="familiar[]"  id="3"  value="3">
                                        <label for="cuidadorHermano" class="form-check-label">Hermano(a)</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="familiar[]"  id="4" value="4"  >
                                        <label for="cuidadorPariente" class="form-check-label">Pariente</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="familiar[]"  id="5" value="5"  >
                                        <label for="cuidadorOtro" class="form-check-label">Otro</label>
                                    </div>
                                </div>
                            </div>
                            <hr>

              </div>

              <div class="tab-pane fade" id="pills-contact0" role="tabpanel" aria-labelledby="pills-contact0-tab">

                      <h3 class="text-xl mb-3">SALUD</h3>
                      <div class="row">
                          <div class="col-md-3">
                              <select class="form-control form-select mb-3" id="blood" name="blood">
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
                          
                          <button type="button" class="btn btn-outline-success">ADD</button>


                      </div>

                      <div class="row">
                        

                        <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Vacuna</th>
                            <th>Dosis</th>
                            
                             <th><button type="button" class="btn btn-outline-success" id="add">ADD</button>
</th>
                            
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



                      <div class="row">
                          <div class="col-md-2">
                          <p>Vacunas recibidas:</p>
                              <div class="form-check  mb-3 ">
                                  <input class="form-check-input" name="vacunas[]" type="checkbox"  id="vacBCG" value="vacBCG">
                                  <label class="form-check-label" for="vacBCG">BCG</label>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-check  mb-3 ">
                                  <input class="form-check-input" name="vacunas[]" type="checkbox"  id="vacTriple" value="vacTriple">
                                  <label class="form-check-label" for="vacTriple">TRIPLE</label>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-check  mb-3 ">
                                  <input class="form-check-input" name="vacunas[]" type="checkbox"  id="vacPolio" value="vacPolio">
                                  <label class="form-check-label" for="vacPolio">POLIO</label>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-check  mb-3 ">
                                  <input class="form-check-input" name="vacunas[]" type="checkbox"  id="vacSarampion" value="vacSarampion">
                                  <label class="form-check-label" for="vacSarampion">SARAMPION</label>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-check  mb-3 ">
                                  <input class="form-check-input" name="vacunas[]" type="checkbox"  id="vacPPD" value="vacPPD">
                                  <label class="form-check-label" for="vacPPD">PPD (Trivalente)</label>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-check  mb-3 ">
                                  <input class="form-check-input" name="vacunas[]" type="checkbox"  id="vacAntite" value="vacAntite">
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

                      <h3 class="text-left text-xl">DIFICULTADES OBSERVADAS</h3>
                      <div class="row">
                      <div class="col-md-12">
                          <p>¿Han observado alguna dificuldad o problema en su hijo?</p>
                      </div>
                          
                      </div>
                          <div class="row mb-3">
                              <div class="col-md-6">
                                  <div class="form-floating mb-3">
                                      <label for="expliqueDificuldad">Explique la Dificultad</label>
                                      <textarea id="ex_dificultad" name="ex_dificultad" class="form-control "></textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating mb-3">
                                      <label for="solucionarDificuldad">Como ha tratado de solucionarlo</label>
                                      <textarea id="sol_df" name="sol_df" class="form-control "></textarea>
                                  </div>
                              </div>
                          </div>
                      
                      <div class="row">
                          <div class="col-md-12">
                              <p>¿Ha asistido su niño alguna vez a consulta con el psicólogo, psicopedagogo, neurólogo o terapeuta de lenguage?</p>
                          </div>

                      </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-floating mb-3">
                                  <label for="psicologoExplique">¿Por qué?</label>
                                      <textarea id="psico_pq" name="psico_pq" class="form-control"></textarea>
                                  </div>
                              </div>
                          </div>
                      <hr>
                      
                      <div class="row">
                          <div class="col-auto">
                              <p>Enfermedades que a padecido:</p>
                          </div>
                          <div class="col-md-2">
                              <div class="form-check  mb-3 ">
                                  <input type="checkbox" class="form-check-input" name="enfermedades[]" id="1" value="1" >
                                  <label for="sarampionSi" class="form-check-label">Sarampión</label>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-check  mb-3 ">
                                  <input type="checkbox" class="form-check-input" name="enfermedades[]" id="2" value="2"  >
                                  <label for="rubeolaSi" class="form-check-label">Rubeola</label>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-check  mb-3 ">
                                  <input type="checkbox" class="form-check-input" name="enfermedades[]" id="3" value="3"  >
                                  <label for="lechinaSi" class="form-check-label">Lechina</label>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-check  mb-3 ">
                                  <input type="checkbox" class="form-check-input" name="enfermedades[]" id="4" value="4" >
                                  <label for="parotiditisSi" class="form-check-label">Parotiditis</label>
                              </div>
                          </div>
                      </div>




                      <div class="row">
                          <div class="col-auto">
                              <p></p>
                          </div>
                      
                         
                              <div class="col-md-6">
                                  <div class="form-floating mb-3">
                                  <label for="atenEspExplique">¿Padece alguna afección que requiere atención especial atención?</label>
                                      <textarea type="text" class="form-control" id="afeccion" name="afeccion"></textarea>
                                  </div>
                              </div>
                         
                      
                          <div class="col-auto">
                              <p>Ha sido su hijo sometido a alguna intervención quirurgica?</p>

                       

                              <label for="interQueTipo">De que tipo</label>
                              <input type="text" class="form-control" id="quirurgica" name="quirurgica">
                          
                          </div>             

                      

                        </div>
                      <div class="row">
                         
                     
                      
                              <div class="col-md-6">
                                
                                      <label for="alergiasAQue">¿A que presenta alergias el niño?</label>
                                      <input type="text" class="form-control" id="alergia" name="alergia">
                                      <span id="palergiasAQue"></span>
                              </div>
                              
                    
                     
                     
                              <div class="col-md-6">
                                 
                                      <label for="desparTiempo">¿Cada Cuanto Tiempo Ha sido desparasitado?</label>
                                      <input type="text" class="form-control" id="despa" name="despa">
                                      <span id="pdesparTiempo"></span>
                                  
                              </div>
                         
                      
                          <div class="col-md-6">
                              
                              <label for="fiebreAltMed">En caso de fiebre alta ¿cúal medicamento acostumbra administrarle?</label>
                              <input type="text" class="form-control" id="fiebre_a" name="fiebre_a">
                             
                          </div>
                      </div>
                     
                      <hr>


              </div>

              <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact1-tab">

                <h3 class="text-xl mb-3">HÁBITOS:</h3>
                <div class="row">
                    <div class="col-auto"><p>ALIMENTACIÓN:</p></div>
                    <div class="col-md-3">
                      <label for="alimNoConsCual">Comidas Al Día</label>

                        <select class="form-control form-select mb-3" id="alimento" name="alimento">
                            <option selected value="0">Seleccionar</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                      <label for="alimNoConsCual">¿Come solo?</label>
                        <select class="form-control form-select mb-3" id="come" name="come">
                            <option selected value="0">Seleccionar</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                      <label for="alimNoConsCual">¿Buen Apetito?</label>
                        <select class="form-control form-select mb-3" id="apetito" name="apetito">
                            <option selected value="0">Seleccionar</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                      <label for="alimNoConsCual">¿Come Antes de Venir?</label>
                        <select class="form-control form-select mb-3" id="comeantes" name="comeantes">
                            <option selected value="0">Seleccionar</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <label for="alimNoConsCual">¿Existe algún alimento que no pueda ingerir por prescripción médica?</label>
                                <input type="text" class="form-control" id="alimento_no" name="alimento_no">
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
                                <option selected value="0">Seleccionar</option>
                                <option value="1">07:00 p.m.</option>
                                <option value="2">08:00 p.m.</option>
                                <option value="3">09:00 p.m.</option>
                                <option value="4">10:00 p.m.</option>
                                <option value="5">11:00 p.m.</option>
                                <option value="6">12:00 a.m.</option>
                                <option value="7">01:00 a.m.</option>
                                <option value="8">02:00 a.m.</option>
                                <option value="">03:00 a.m.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating mb-3">
                        <label for="horaLevan">¿A que hora se levanta?</label>
                        <select class="form-control" name="horaLevan" id="horaLevan">
                                <option selected value="0">Seleccionar</option>
                                <option value="1">05:00 a.m.</option>
                                <option value="2">06:00 a.m.</option>
                                <option value="3">07:00 a.m.</option>
                                <option value="4">08:00 a.m.</option>
                                <option value="5">09:00 a.m.</option>
                                <option value="6">10:00 a.m.</option>
                                <option value="7">11:00 a.m.</option>
                                <option value="8">12:00 p.m.</option>
                                <option value="9">01:00 p.m.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <label for="conQuienDuerme">¿Con quien duerme el niño?</label>
                            <input type="text" class="form-control" id="quien_sleep" name="quien_sleep">
                            <span id="pconQuienDuerme"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <label for="conQuienDuerme">¿Como es el sueño del niño?</label>
                        <select class="form-control form-select mb-3" id="sueno_nino" name="sueno_nino">
                            <option selected value="0">Seleccionar</option>
                            <option value="1">Tranquilo</option>
                            <option value="2">Agitado</option>
                            <option value="3">Insomne</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                       <label for="conQuienDuerme">¿Se despierta constantemente?</label>
                     
                        <select class="form-control form-select mb-3" id="despierta" name="despierta">
                            <option selected value="0">Seleccionar</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                      <label for="conQuienDuerme">¿Le rechinan los dientes?</label>
                     
                        <select class="form-control form-select mb-3" id="dientes" name="dientes">
                            <option selected value="0">Seleccionar</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
                <h3 class="text-xl mb-3">OTROS</h3>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="habito[]"  id="ha1" value="1" >
                                        <label for="ha1">Se lava las manos solo</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="habito[]"  id="ha2" value="2">
                                        <label for="ha1">Se cepilla los dientes solo</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="habito[]"  id="ha3" value="3">
                                        <label for="ha2">Se viste sin ayuda</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="habito[]"  id="ha4" value="4">
                                        <label for="ha3">Se desviste sin ayuda</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="habito[]"  id="ha5" value="5">
                                        <label for="ha4">Ordena sus juguetes</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="habito[]"  id="ha6" value="6">
                                        <label for="ha5">Utiliza cubiertos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3">
                                        <input type="checkbox" class="form-check-input" name="habito[]"  id="ha7"  value="7">
                                        <label for="ha6">Participa en tareas del hogar</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="habito[]"  id="ha8"  value="8">
                                        <label for="ha7">Utiliza normas de cortesia</label>
                                    </div>
                                </div>
                            </div><hr>

                            <h3 class="text-xl mb-3">CONTROL DE EFÍNTERES:</h3>
                            <div class="row">
                                <div class="col">
                                    <p>¿Se orina?</p>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check   mb-3">
                                                <input type="checkbox" name="control[]" id="1" value="1"  class="form-check-input">
                                                <label for="seOrinaDia" class="form-check-label">De Dia</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check   mb-3">
                                                <input type="checkbox" name="control[]" id="2" value="2" class="form-check-input">
                                                <label for="seOrinaNoche" class="form-check-label">De Noche</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                    <label for="dejoPanalesEdad">¿Puede ir al Baño sin Solicitar Ayuda?</label>
                                    <select class="form-control" name="solo_bano" id="solo_bano">
                                        <option selected value="0">Seleccionar</option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                        
                                    </select>
                                    </div>
                                </div>




                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                    <label for="dejoPanalesEdad">¿A que edad dejó de usar pañales?</label>
                                    <select class="form-control" name="dejoPanalEdad" id="dejoPanalEdad">
                                        <option selected  value="0">Seleccionar</option>
                                        <option value="1">Antes del primer año</option>
                                        <option value="2">1 Año</option>
                                        <option value="3">2 Año</option>
                                        <option value="4">3 Año</option>
                                        <option value="5">4 Año</option>
                                        <option value="6">5 Año</option>
                                    </select>
                                    </div>
                                </div>

                            </div>
                                    
                          <hr>


              </div>


              <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact3-tab">


                            <h3 class="text-xl mb-3">EQUILIBRIO EMOCIONAL</h3>
                            <div class="row">

                              <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                    <label for="dejoPanalesEdad">¿El niño es?</label>
                                    <select class="form-control" name="nino_obe" id="nino_obe">
                                        <option selected  value="0">Seleccionar</option>
                                        <option value="1">Obediente</option>
                                        <option value="2">Desobediente</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <div class="form-floating">
                                        <label for="formaReprender">¿Usted que hace cuando el niño presenta conductas no adecuadas?</label>
                                        <input type="text" class="form-control" id="formaReprender" name="formaReprender">
                                        <span id="pformaReprender"></span>
                                    </div>
                                </div>

                              </div>
                                <div class="row">
                              
                               
                                <div class="col-md-2">
                                    <div class="form-check    -3 ">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="1" value="1" >
                                        <label for="agresivoSi">Agresivo</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="2" value="2">
                                        <label for="timidoSi">Timido</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="3" value="3" >
                                        <label for="lloraMuchoSi">Llora con frecuencia</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="4" value="4" >
                                        <label for="habitNerviSi">Ha manifestado habitos nerviosos?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]" id="5" value="5" >
                                        <label for="pataleosSi">Pataleos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]" id="6" value="6" >
                                        <label for="caprichosSi">Caprichos</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="7" value="7" >
                                        <label for="presenciaDiscucionSi" class="form-check-label">Ha presenciado discuciones fuertes entre adultos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check  mb-3 ">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="8" value="8" >
                                        <label for="tieneAmigosSi" class="form-check-label">Tiene amigos</label>
                                    </div>
                                </div>
                            </div>
                           <hr>
                            <div class="row">
                                <p>Miedos</p>
                            </div>
                           
                                <div class="row">
                                    <div class="col-auto">
                                        <p>A que demuestra miedo?</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check  mb-3 ">
                                            <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="9" value="9" >
                                            <label for="miedoSoledadSi">Soledad</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check  mb-3 ">
                                            <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="10" value="10" >
                                            <label for="miedoAnimalesSi">Animales</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check  mb-3 ">
                                            <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="11" value="11" >
                                            <label for="miedoPersonasSi">Personas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check  mb-3 ">
                                            <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="12" value="12" >
                                            <label for="miedoOtrosSi">Otros</label>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            
                            <div class="row">
                               <p>Juguetes</p>
                            </div>
                               
                                    <div class="row">
                                        <div class="col-md-5">
                                            
                                                <label for="jugueteFav">Cual prefiere?</label>
                                                <input type="text" class="form-control" id="jugueteFav" name="jugueteFav">
                                                <span id="pjugueteFav"></span>
                                           
                                        </div>
                                        <div class="col-md-4">
                                           
                                                <label for="espacioJuego">Que espacio utiliza para jugar</label>
                                                <input type="text" class="form-control" id="espacioJuego" name="espacioJuego">
                                                <span id="pespacioJuego"></span>
                                         
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check  mb-3 ">
                                                <input type="checkbox" class="form-check-input" name="equilibrio[]"  id="13" value="13" >
                                                <label for="comparteJuguetesSi" class="form-check-label">Los comparte</label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                               
                            <div class="row">
                               <p>TV</p>
                            </div>
                               
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3">
                                                    <label for="tiempoTv">Tiempo</label>
                                                    <input type="text" class="form-control" id="tiempoTv" name="tiempoTv" placeholder="Horas">
                                                    <span id="ptiempoTv"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <label for="programasTv">Programas</label>
                                                    <input type="text" class="form-control" id="programasTv" name="programasTv">
                                                    <span id="pprogramasTv"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3">
                                                    <label for="imitaPersonaje">Personaje que imita</label>
                                                    <input type="text" class="form-control" id="imitaPersonaje" name="imitaPersonaje">
                                                    <span id="pimitaPersonaje"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                    
                            <div class="row">
                                <p>Imitar escenas de la vida familiar</p>
                            </div>
                       
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <label for="imitaFamiEscen">Cuales</label>
                                        <input type="text" class="form-control" id="imitaFamiEscen" name="imitaFamiEscen">
                                        <span id="pimitaFamiEscen"></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                                
                            <div class="row">
                                
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p>Le gusta asistir a:</p>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]" id="14" value="14">
                                        <label for="asistirFiestInf" class="form-check-label">Fiestas infantiles</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]" id="15" value="15">
                                        <label for="asistirPaseos" class="form-check-label">Paseos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]" id="16" value="16">
                                        <label for="asistirCine" class="form-check-label">Cine</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]" id="17" value="17">
                                        <label for="asistirMuseos" class="form-check-label">Museos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline mb-3">
                                        <input type="checkbox" class="form-check-input" name="equilibrio[]" id="18" value="18">
                                        <label for="asistirAireLibre" class="form-check-label">Aire libre</label>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            
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
                                
                                   
                                        <div class="col-md-6">
                                            
                                              <label for="tipoJuegoPref">¿Como ha orientado al niño respecto a su ingreso a esta institución?</label>
                                                <input type="text" class="form-control" id="orientComo" name="orientComo" placeholder="Como lo ha hecho">
                                                <span id="porientComo"></span>
                                           
                                        </div>
                                         <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <label for="anteriorPreecolar">Si el niño ha asistido anteriormente a otro preescolar, especifique cual fue</label>
                                        <input type="text" class="form-control" id="anteriorPreescolar" name="anteriorPreescolar" placeholder="Explique">
                                        <span id="panteriorPreecolar"></span>
                                    </div>
                                </div>
                                    
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <label for="tipoJuegoPref">Que tipo de juegos prefiere</label>
                                        <input type="text" class="form-control" id="tipoJuegoPref" name="tipoJuegoPref">
                                        <span id="ptipoJuegoPref"></span>
                                    </div>
                                </div>
                         
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <label for="conQuienJuega">Con quien juega generalmente</label>
                                        <input type="text" class="form-control" id="conQuienJuega" name="conQuienJuega">
                                        <span id="pconQuienJuega"></span>
                                    </div>
                                </div>
                            </div>
                           

                         
                            
                            <hr>

                      </div>



              <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact4-tab">


                <h3 class="text-xl mb-3">AREAS FISICAS Y DE SALUD</h3>
                <div class="row">

                  <div class="col">
                          <div class="form-floating mb-3">
                              <label for="cuandoHablo">Tipo embarazo</label>
                              <select class="form-control" name="embarazo" id="embarazo">
                                  <option selected value="0">Seleccionar</option>
                                  <option value="1">Embarazo deseado</option>
                                  <option value="2">Embarazo no deseado</option>
                              </select>
                          </div>
                      </div>

                      <div class="col">
                          <div class="form-floating mb-3">
                              <label for="cuandoHablo">Tipo embarazo</label>
                              <select class="form-control" name="embarazo1" id="embarazo1">
                                  <option selected value="0">Seleccionar</option>
                                  <option value="1">Prematuro</option>
                                  <option value="2">Prolongado</option>
                              </select>
                          </div>
                      </div>

                      <div class="col">
                          <label for="trabajoEmbarazoTipo">¿Trabajo en embarazo?</label>
                                <input type="text" class="form-control" id="trabajoEmbarazoTipo" name="trabajoEmbarazoTipo" placeholder="Explique">
                                <span id="ptrabajoEmbarazoTipo"></span>
                      </div>

                      <div class="col">
                          <div class="form-floating mb-3">
                              <label for="cuandoHablo">Tiempo de trabajo</label>
                              <select class="form-control" name="tiempo_trabajo" id="tiempo_trabajo">
                                  <option selected value="0">Seleccionar</option>
                                  <option value="1">Semanas</option>
                                  <option value="2">Meses</option>
                              </select>
                          </div>
                      </div>


                    
                </div>

                <div class="row" > 

                    <div class="col-auto">
                        <p>Enfermedades durante el embarazo</p>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="1" value="1">
                            <label for="embarazoRubeola" class="form-check-label">Rubeola</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="2" value="2">
                            <label for="embarazoToxo" class="form-check-label">Toxoplasmosis</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="3" value="3">
                            <label for="embarazoHipert" class="form-check-label">Hipertensión</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="4" value="4">
                            <label for="embarazoAnemia" class="form-check-label">Anemia</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="5" value="5">
                            <label for="embarazoPreclam" class="form-check-label">Preclampsia</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="6" value="6">
                            <label for="embarazoOtras" class="form-check-label">Otras</label>
                        </div>
                    </div>
                </div>
                

                <div class="row"> 

                    <div class="col-auto">
                        <p><b>Como fue el parto?</b></p>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="7" value="7">
                            <label for="partoNormal" class="form-check-label">Normal</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="8" value="8">
                            <label for="partoCesárea" class="form-check-label">Cesárea</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="9" value="9">
                            <label for="partoTermino" class="form-check-label">A termino</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline mb-3">
                            <input type="checkbox" class="form-check-input" name="antece[]" id="10" value="10">
                            <label for="partoforceps" class="form-check-label">Se utilizo Fórceps al nacer</label>
                        </div>
                    </div>
                </div>
              
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <label for="partoEdadMadre">Edad de la madre al momento del parto</label>
                            <input type="text" class="form-control" id="partoEdadMadre" name="partoEdadMadre">
                            <span id="ppartoEdadMadre"></span>
                        </div>
                    </div>
               
               
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <label for="partoExplique">¿Surgió algún problema a la hora del parto?</label>
                                <input type="text" class="form-control" id="partoExplique" name="partoExplique" placeholder="Explique">
                                <span id="ppartoExplique"></span>
                            </div>
                        </div>
                    </div>
               <hr>
                <h3 class="text-xl mb-3">ANTECEDENTES POSTNATALES</h3>
                <div class="row">
                    <div class="col-auto">
                        <div class="form-floating mb-3">
                            <label for="pesoNatal">Peso (Kg.)</label>
                            <input type="text" class="form-control" id="pesoNatal" name="pesoNatal">
                            <span id="ppesoNatal"></span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-floating mb-3">
                            <label for="tallaNatal">Talla (Cm.)</label>
                            <input type="text" class="form-control" id="tallaNatal" name="tallaNatal">
                            <span id="ptallaNatal"></span>
                        </div>
                    </div>
                    <div class="col">
                            <div class="form-floating mb-3">
                                <label for="defectosNatalEspe">¿Tuvo defectos?</label>
                                <input type="text" class="form-control" id="defectosNatalEspe" placeholder="Explique" >
                                <span id="pdefectosNatalEspe"></span>
                            </div>
                        </div>


                </div>
                <div class="row">
                    <div class="col-auto">
                        <p>¿Se presentaron problemas en los primeros días despues del nacimiento?</p>
                    </div>
                </div>
                
                
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline mb-3">
                                <input type="checkbox" class="form-check-input" name="antece[]" id="11" value="11">
                                <label for="amarilloNatal" class="form-check-label">Se puso Amarillo</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline mb-3">
                                <input type="checkbox" class="form-check-input" name="antece[]" id="12" value="12">
                                <label for="moradoNatal" class="form-check-label">Se puso Morado</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline mb-3">
                                <input type="checkbox" class="form-check-input" name="antece[]" id="13" value="13">
                                <label for="convulsionesNatal" class="form-check-label">Convulsiones</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline mb-3">
                                <input type="checkbox" class="form-check-input" name="problemasNatales" id="14" value="14">
                                <label for="trastRespiNatal" class="form-check-label">Trastornos repiratorios</label>
                            </div>
                        </div>
                    </div>
              
              <hr>


              </div>

              <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact5-tab">

                  <h3 class="text-center text-xl mt-4 mb-4">DESARROLLLO EVOLUTIVO</h3>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <label for="quienLoCuido">Quien lo atendió en los primeros meses</label>
                              <input type="text" class="form-control" id="quienLoCuido" name="quienLoCuido">
                              <span id="pquienLoCuido"></span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <label for="cuandoGateo">A los cuantos meses gateo?</label>
                              <select class="form-control" name="cuandoGateo" id="cuandoGateo">
                                  <option selected value="0">Seleccionar Mes</option>
                                  <option value="1">Primer Mes</option>
                                  <option value="2">Segundo Mes</option>
                                  <option value="3">Tercero Mes</option>
                                  <option value="4">Cuarto Mes</option>
                                  <option value="5">Quinto Mes</option>
                                  <option value="6">Sexo Mes</option>
                                  <option value="7">Séptimo Mes</option>
                                  <option value="8">Octavo Mes</option>
                                  <option value="9">Noveno Mes</option>
                                  <option value="10">Decimo Mes</option>
                                  <option value="11">Decimo Primer Mes</option>
                                  <option value="12">Decimo Segundo Mes</option>
                                  <option value="13">Mas de un año</option>
                              </select>
                              <span id="pcuandoGateo"></span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <label for="caminarSinApoyo">A que edad aproximada comenzó a caminar (sin apoyo)</label>
                              <select class="form-control" name="caminarSinApoyo" id="caminarSinApoyo">
                                  <option selected value="0">Seleccionar Edad</option>
                                  <option value="1">Antes del primer año</option>
                                  <option value="2">1 año</option>
                                  <option value="3">2 años</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <label for="cuandoHablo">A que edad aproximada comenzó a hablar (frases)?</label>
                              <select class="form-control" name="cuandoHablo" id="cuandoHablo">
                                  <option selected value="0">Seleccionar</option>
                                  <option value="1">Antes del primer año</option>
                                  <option value="2">1 año</option>
                                  <option value="3">2 años</option>
                                  <option value="4">3 años</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <label for="cuandoHablo">Tono de voz</label>
                              <select class="form-control" name="tono_voz" id="tono_voz">
                                  <option selected value="0">Seleccionar</option>
                                  <option value="1">Tono de voz demasiado bajo</option>
                                  <option value="2">Tono de voz demasiado bajo</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          
                              <label for="mano_u">Mano que utiliza frecuentemente</label>
                              <select class="form-control" name="mano_u" id="mano_u">
                                  <option selected value="0">Seleccionar</option>
                                  <option value="1">Derecha</option>
                                  <option value="2">Izquierda</option> 
                                  <option value="3">Ambas</option>
                              </select>
                        
                      </div>
                       <div class="col-md-6">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="checkbox" class="form-check-input" name="desarrollo[]" id="1" value="1">
                                      <label for="forzadoDerecha" class="form-check-label">Lo ha forzado a utilizar la mano derecha</label>
                                  </div>
                              </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="2" value="2">
                              <label for="dificultadHablarSi" class="form-check-label">Tiene dificultad para pronunciar palabras</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="3" value="3">
                              <label for="gustaConversarSi" class="form-check-label">Le gusta conversar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="4" value="4">
                              <label for="respondeLlamadoSi" class="form-check-label">Responde cuando se le llama</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="5" value="5">
                              <label for="volteaAlSonidoSi" class="form-check-label">Voltea la cabeza en dirección al sonido</label>
                          </div>
                      </div>
                      
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="6" value="6" >
                              <label for="chupaDedoSi" class="form-check-label">Se chupa el dedo</label>
                          </div>
                          
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="7" value="7">
                              <label for="escaleraSinApoyoSi" class="form-check-label">Sube y baja las escaleras sin apoyo</label>
                          </div>
                      </div>
                       <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="8" value="8" >
                              <label for="restriegaOjosSi" class="form-check-label">Frecuentemente se restriega los ojos</label>
                          </div>
                          
                              <div class="row">
                                  <div class="col-auto">
                                      <div class="form-check form-check-inline mb-3">
                                          <input type="checkbox" class="form-check-input" name="desarrollo[]" id="9" value="9">
                                          <label for="dueleOjosSi" class="form-check-label">Le duele</label>
                                      </div>
                                  </div>
                                  <div class="col-auto">
                                      <div class="form-check form-check-inline mb-3">
                                          <input type="checkbox" class="form-check-input" name="desarrollo[]" id="10" value="10">
                                          <label for="arrugaOjosSi" class="form-check-label">Los arruga</label>
                                      </div>
                                  </div>
                              </div>
                         
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="11" value="11">
                              <label for="lanzarObjetosSi" class="form-check-label">¿Puede lanzar objetos?</label>
                          </div>
                          
                              <div class="row">
                                  <div class="col-auto">
                                      <div class="form-check form-check-inline mb-3">
                                          <input type="checkbox" class="form-check-input" name="desarrollo[]" id="12" value="12">
                                          <label for="recibirObjetos" class="form-check-label">Recibirlos</label>
                                      </div>
                                  </div>
                              </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="13" value="13">
                              <label for="ruedaPelotaSi" class="form-check-label">Rueda la pelota</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="14" value="14">
                              <label for="abotonarseSi" class="form-check-label">Es capaz de abotonarse</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="15" value="15">
                              <label for="sabeTrenzar" class="form-check-label">Sabe trenzar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="16" value="16">
                              <label for="sabeAnudar" class="form-check-label">Sabe anudar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="17" value="17">
                              <label for="reconoceCuerpoSi" class="form-check-label">Reconoce las partes del cuerpo</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check form-check-inline mb-3">
                              <input type="checkbox" class="form-check-input" name="desarrollo[]" id="18" value="18">
                              <label for="problemasCaminarSi" class="form-check-label">Presenta problemas al caminar</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          
                              <div class="form-check form-check-inline mb-3">
                                  <input type="checkbox" class="form-check-input" name="desarrollo[]" id="19" value="19">
                                  <label for="caminarCorrectivo" class="form-check-label">Utiliza algún correctivo</label>
                              </div>
                        
                          <div class="row">
                            <div class="col-auto">
                              
                                <div class="form-check form-check-inline mb-3">
                                    <input type="checkbox" class="form-check-input" name="desarrollo[]" id="20" value="20">
                                    <label for="metePie" class="form-check-label">Mete algún pie</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check form-check-inline mb-3">
                                    <input type="checkbox" class="form-check-input" name="desarrollo[]" id="21" value="21">
                                    <label for="pegaRodillas" class="form-check-label">Pega las rodillas</label>
                                </div>
                            </div>
                          </div>
                      </div>


                          <div class="col-md-6">
                      
                         
                              <div class="form-check form-check-inline mb-3">
                                  <input type="checkbox" class="form-check-input" name="desarrollo[]" id="22" value="22">
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
                                      <input type="checkbox" class="form-check-input" name="desarrollo[]" id="23" value="23">
                                      <label for="sindromeDown" class="form-check-label">Sindrome Down</label>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="checkbox" class="form-check-input" name="desarrollo[]" id="24" value="24">
                                      <label for="sindromeAutista" class="form-check-label">Sindrome Autista</label>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <div class="form-check form-check-inline mb-3">
                                      <input type="checkbox" class="form-check-input" name="desarrollo[]" id="25" value="25" data-toggle="collapse" data-target="#sindromeColl" aria-expanded="off" aria-controls="sindromeColl">
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
