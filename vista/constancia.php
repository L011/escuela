
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
                        <label for="cedulaEscolar">Cédula Estudiante</label>
                        <input type="text" class="form-control " id="cedulaEscolar" name="cedulaEscolar">
                        <span id="scedulaEscolar"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-4">
                        <label for="nombre">Nombre</label>
                        <input type="text"  class="form-control" id="nombre" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <label for="grado">Grado</label>
                        <input type="text" class="form-control" id="grado" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <label for="seccion">Sección</label>
                        <input type="text" class="form-control" id="seccion" disabled>
                    </div>
                </div>
                <input type="text" name="user" id="user" style="display: none;" value="<?php echo $cedulaUser ?>">

            </div>
        </div>
        <div class="row">
            <div class="col">
                   <button type="button" class="btn btn-primary" id="generar" name="generar">GENERAR</button>
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
        <script type="text/javascript" src="js/constancia.js"></script>
        <script src="js/botonVolver.js"></script>
    </body>
</html>
