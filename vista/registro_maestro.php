<html>
<?php require_once("comunes/encabezado.php"); ?>
<body>
<!--Llamada a archivo modal.php, dentro de el hay una sección modal-->
<?php require_once("comunes/modal.php"); ?>
<?php require_once('comunes/menu.php'); ?>
<div class="container text-center h2 text-primary">
<h2 class="text-center text-xxl mb-4">REGISTRAR EMPLEADOS</h2>
<hr/>
</div>
<div class="container mb-4"> <!-- todo el contenido ira dentro de esta etiqueta-->
<div class="container">
	<div class="row">
		<div class="col-4 mb-3">
		   <label for="cedula">Cedula de Identidad</label>
		   <input class="form-control" type="text" id="cedula" name="cedula" />
		   <span id="scedula"></span>
		</div>
		<div class="col-4 mb-3">
		   <label for="apellidos">Apellidos</label>
		   <input class="form-control" type="text" id="apellidos" name="apellidos" />
		   <span id="sapellidos"></span>
		</div>

		<div class="col-4 mb-3">
		   <label for="nombres">Nombres</label>
		   <input class="form-control" type="text" id="nombres" name="nombres" />
		   <span id="snombres"></span>
		</div>
	</div>
	<div class="row">
		<div class="col mb-3">
		   <label for="sexo">Sexo</label>
		   <select class="form-control" id="sexo" name="sexo" >
		   		<option disabled selected value="">Seleccionar Opcion</option>
				<option value="M">Masculino</option>
				<option value="F">Femenino</option>
		   </select>
		</div>
		<div class="col-3 mb-3">
		   <label for="fechadenacimiento">Fecha de Nacimiento</label>
		   <input class="form-control" type="date" id="fechadenacimiento" name="fechadenacimiento"
		   value="<?php
						$f = date('Y-m-d');
						$f1 = strtotime ('-18 year' , strtotime($f));
					    $f1 = date ('Y-m-d',$f1);
					echo $f1; ?>"
		   />
		   <span id="sfechadenacimiento"></span>
		</div>

		<div class="col mb-3">
		   <label for="correo">Correo</label>
		   <input class="form-control" type="text" id="correo" name="correo" />
		   <span id="scorreo"></span>
		</div>

		<div class="col mb-3">
		   <label for="telefono">Telefono</label>
		   <input class="form-control" type="text" id="telefono" name="telefono" />
		   <span id="stelefono"></span>
		</div>
	</div>

	<div class="row">
		<div style="justify-contend:center">
		<div class="col mb-3">
		   <label for="sexo">Cargo</label>
		   <select class="form-control" id="cargo" name="cargo" >
		   		<option disabled selected value="">Seleccionar Opcion</option>
				<option value="Administrador">Administrador</option>
				<option value="Maestro">Maestro</option>
		   </select>
		</div>
	</div>
	</div>



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
	
</div>

<hr/>

<div>

<h2> Lista de empleados</h2>
</div>

<table class="table table-striped table-hover" id="tableajax">
	<thead>
	<tr>
	<th>Cedula</th>
	<th>Apellidos</th>
	<th>Nombres</th>
	<th>Fecha Nac</th>
	<th>Sexo</th>
	<th>Correo</th>
	<th>Telefono</th>
	<th>Cargo</th>
	<th>Accciones</th>
	</tr>
</thead>

<tbody id="resultadoconsulta">



</tbody>

<div class="modal-footer bg-light">
<div class="col">

</div>

</div>
</table>

</div> <!-- fin de container -->


<?php require_once("comunes/footer.php"); ?>
<script type="text/javascript" src="js/registro_maestro.js"></script>
<script src="js/confirmar.js"></script>

</body>
</html>
