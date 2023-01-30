<html>
    <?php
        require_once("comunes/encabezado.php");
    ?>
    <body>
        <?php
            require_once("comunes/modal.php");
            require_once("comunes/menu.php");
        ?>
        <main>
            <form class="container mb-5">
                <h2 class="text-center">GESTIONAR REPRESENTANTE</h2>
                <hr>

                <h3 class="text-center text-xl mt-4 mb-4">DATOS DEL REPRESENTANTE LEGAL</h3>
                <div class="row">
                  <div class="col">
                    <div class=" mb-3">
                      <label for="ciRepre">Cedula de Identidad</label>
                      <input type="text" class="form-control " id="cedula" name="cedula">
                      <span id="pCiRepre"></span>
                    </div>
                  </div>
                    <div class="col">
                        <div class=" mb-3">
                            <label for="apellidoRepre">Apellido</label>
                            <input type="text" class="form-control " id="apellidoRepre" name="apellidoRepre">
                            <span id="pApellidoRepre"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class=" mb-3">
                            <label for="nombreRepre">Nombre</label>
                            <input type="text" class="form-control " id="nombreRepre" name="nombreRepre">
                            <span id="pNombreRepre"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class=" mb-3">
                            <label for="telfRepre">Telefono</label>
                            <input type="text" class="form-control " id="telfRepre"  name="telfRepre">
                            <span id="pTeflRepre"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class=" mb-3">
                            <label for="direccionRepre">Dirección</label>
                            <input type="text" class="form-control " id="direccionRepre" name="direccionRepre" >
                            <span id="pDireccionRepre"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col">
                    <label for="">Nivel de estudio</label>
                    <select class="form-control form-select mb-3" id="estudio" name="estudio">
                        <option selected>Seleccionar</option>
                        <option value="primaria">Primaria</option>
                        <option value="bachillar">Bachiller</option>
                        <option value="universitario">Universitario</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Estado Civil</label>
                    <select class="form-control form-select mb-3" id="civil" name="civil">
                        <option selected>Seleccionar</option>
                        <option value="casado">Casado(a)</option>
                        <option value="soltero">Soltero(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                    </select>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <label for="nacionalidadRepresentante">Nacionalidad</label>
                        <select class="form-control" name="nacion" id="nacion">
                            <option selected>Seleccionar</option>
                            <option value="venezolano">Venezolano/a</option>
                            <option value="extranjero">Extranjero/a</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label for="">Religión</label>
                    <select class="form-control form-select mb-3" id="religion" name="religion">
                        <option selected>Seleccionar</option>
                        <option value="Ateísmo">Ateísmo</option>
                        <option value="Católica">Católica</option>
                        <option value="Evangélica">Evangélica</option>
                        <option value="Testigo de Jehová">Testigo de Jehová</option>
                        <option value="Otra">Otra</option>
                    </select>
                </div>
              </div>
                <div class="row">
                    <div class="col">
                    <label for="parentesco_con_niño">Parentesco</label>
                           <select class="form-control mb-3" id="parentesco_con_niño" name="parentesco_con_niño">
                                <option selected=""></option>
                                <option value="madre">Madre</option>
                                <option value="padre">Padre</option>
                                <option value="tia">Tia(o)</option>
                                <option value="abuelo">Abuelo(a)</option>
                                <option value="primo">Primo(a)</option>
                                <option value="sobrina">Sobrino(a)</option>
                            </select>
                    </div>
                    <div class="col">
                        <div class=" mb-3">
                            <label for="profesionRepre">Profesion u Ocupación</label>
                            <input type="text" class="form-control " id="ocupa" name="ocupa">
                            <span id="pProfesionRepre"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class=" mb-3">
                            <label for="correoRepre">Correo</label>
                            <input type="text" class="form-control " id="correoRepre" name="correoRepre">
                            <span id="pCorreoRepre"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class=" mb-3">
                            <label for="cuentaBancR">Cuenta bancaria</label>
                            <input type="text" class="form-control" id="cuentaBancR" name="cuentaBancR" placeholder="ej: 01020016486512349875">
                            <span id="pcuentaBancR"></span>
                        </div>
                    </div>
                    <div class="col">
                    <label for="cuenta_bancaria">Tipo de cuenta</label>
                        <div class=" mb-3">
                            <select class="form-control mb-3" id="cuenta_bancaria" name="cuenta_bancaria">
                                <option selected=""></option>
                                <option value="corriente">Corriente</option>
                                <option value="ahorro">Ahorro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class=" mb-3">
                            <label for="id_banco">Banco</label>
                            <select class="form-control" id="id_banco" name="id_banco">
                                <option value="" selected="selected">Seleccione</option>
                                <option value="2">Banesco</option>
                                <option value="3">Banco Mercantil</option>
                                <option value="4">Banco Provincial</option>
                                <option value="5">Banco de Venezuela</option>
                                <option value="6">Bicentenario Banco Universal</option>
                                <option value="7">Banco Occidental de Descuento</option>
                                <option value="8">Banco Exterior</option>
                                <option value="9">Bancaribe</option>
                                <option value="10">Banco del Tesoro</option>
                                <option value="11">Corp Banca BOD</option>
                                <option value="12">Banco Industrial de Venezuela</option>
                                <option value="13">Banco Nacional de Credito BNC</option>
                                <option value="14">BFC</option>
                                <option value="15">Banco Caroní</option>
                                <option value="16">Venezolano de Crédito</option>
                                <option value="17">Citibank</option>
                                <option value="18">Banco Plaza</option>
                                <option value="19">Banco Sofitasa</option>
                                <option value="20">Del Sur</option>
                                <option value="21">Banco Guayana</option>
                                <option value="22">Banco Agrícola de Venezuela</option>
                                <option value="23">Banco Activo</option>
                                <option value="24">100% Banco</option>
                                <option value="25">Banplus</option>
                                <option value="26">Banco Internacional de Desarrollo</option>
                                <option value="27">Banco de Exportación y Comercio</option>
                                <option value="28">BANDES</option>
                                <option value="29">Bancrecer</option>
                                <option value="30">Bangente (Bancaribe)</option>
                                <option value="31">Mi Banco</option>
                                <option value="32">Banco del Pueblo Soberano</option>
                                <option value="34">BANFANB</option>
                                <option value="36">Instituto Municipal de Crédito</option>
                                <option value="37">Bancamiga</option>
                            </select>
                            <span id="pid_banco"></span>
                        </div>
                    </div>


                </div>


                <div class="row">
                    <div class="col-auto">
                        <p><b>CARNET DE LA PATRIA</b></p>
                    </div>
                </div>
                <div class="row">
                     <div class="col">
                        <div class=" mb-3">
                            <label for="codigoCPR">Codigo</label>
                            <input type="text" class="form-control" id="codigoCPR" name="codigoCPR">
                            <span id="pcodigoCPR"></span>
                        </div>
                    </div>

                     <div class="col">
                        <div class=" mb-3">
                            <label for="serialCPR">Serial</label>
                            <input type="text" class="form-control" id="serialCPR" name="serialCPR">
                            <span id="pserialCPR"></span>
                        </div>
                    </div>
                </div><hr>

                <div class="row">
              		<div class="col">
              			<hr/>
              		</div>
              	</div>

<div class="container" style="  display: flex; justify-content: center;">
        
        

        <div class="row">


            <div class="col" style="margin-left: -2rem;">
          <a href="?pagina=registro" style="margin-left: -13rem;" class="btn btn-primary">
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




            </form>

            <div class="container mb-5">
            <table class="table table-striped table-hover" id="tableajax">
             <thead>
             <tr>
             <th>Cedula</th>
             <th>Apellidos</th>
             <th>Nombres</th>
             <th>Telefono</th>
             <th>Correo</th>
             <th>Acciones</th>
             </tr>
            </thead>

           

            <div class="modal-footer bg-light">
            <div class="col">

            </div>

            </div>
            </table>

          </div>

        </main>
        <?php
            require_once("comunes/footer.php");
        ?>
    </body>
    <script src="js/representante.js"></script>
    <script src="js/confirmar.js"></script>
</html>
