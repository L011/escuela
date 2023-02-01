
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
            <h2 class="text-center text-xxl mb-4">GENERAR CONSTANCIA DE ESTUDIO</h2>

        <div class="row g-2">


            <div class="row">
                <div class="col">
                    <div class="form-floating mb-4">
                        <label for="scedula_usuario">Cédula</label>
                        <input type="text" class="form-control " id="cedula_usuario" name="cedula_usuario">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-4">
                        <label for="nombrePreescolar">Nombre</label>
                        <input type="text"  class="form-control" id="nombrePreescolar" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <label for="apellido_usuario">Apellido</label>
                        <input type="text" class="form-control" id="apellidoPreescolar" disabled>
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
        <script src="js/botonVolver.js"></script>
    </body>
</html>
