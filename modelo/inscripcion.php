<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('modelo/datos.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class inscripcion extends datos{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private


	private $grado;
	private $seccion;
	private $turno;
	private $anioe;
	private $maestro;

	



			//Primera parte

			function set_grado($valor){
				$this->grado = $valor;
			}
			function set_seccion($valor){
				$this->seccion = $valor;
			}
			function set_turno($valor){
				$this->turno = $valor;
			}
			function set_anioe($valor){
				$this->anioe = $valor;
			}
			function set_maestro($valor){
				$this->maestro = $valor;
			}


			function set_id($valor){
				$this->id = $valor;
			}


			// Segunda parteee


	function set_cedulaEscolar($valor){
		$this->cedulaEscolar = $valor; //fijencen como se accede a los elementos dentro de una clase
	}

	function set_cedula_r($valor){
		$this->cedula_r = $valor;
	}

	function set_cedula_m($valor){
		$this->cedula_m = $valor;
	}

	function set_apellidoPri($valor){
		$this->apellidoPri = $valor;
	}

	function set_nombrePri($valor){
		$this->nombrePri = $valor;
	}

	
	//ahora la misma cosa pero para leer, es decir get

	function get_cedulaEscolar(){
		return $this->cedulaEscolar;
	}

	function get_apellidoPri(){
		return $this->apellidoPri;
	}

	function get_nombrePri(){
		return $this->nombrePri;
	}

	function get_fechaNaciPri(){
		return $this->fechaNaciPri;
	}

	function get_estadoprimaria(){
		return $this->estadoprimaria;
	}

	function get_ciudadprimaria(){
		return $this->ciudadprimaria;
	}

	function get_viveConO(){
		return $this->viveConO;
	}

	function get_apellidoRepre(){
		return $this->apellidoRepre;
	}

	function get_nombreRepre(){
		return $this->nombreRepre;
	}

	function get_ciRepre(){
		return $this->ciRepre;
	}

	function get_telfRepre(){
		return $this->telfRepre;
	}

	function get_direccionRepre(){
		return $this->direccionRepre;
	}

	function get_profesionRepre(){
		return $this->profesionRepre;
	}

	function get_correoRepre(){
		return $this->correoRepre;
	}

	function get_cuentaBancR(){
		return $this->cuentaBancR;
	}

	function get_codigoCPR(){
		return $this->codigoCPR;
	}

	function get_serialCPR(){
		return $this->serialCPR;
	}

	function get_apellidoMadre(){
		return $this->apellidoMadre;
	}

	function get_nombreMadre(){
		return $this->nombreMadre;
	}

	function get_ciMadre(){
		return $this->ciMadre;
	}

	function get_telefonoMadre(){
		return $this->telefonoMadre;
	}

	function get_direccionMadre(){
		return $this->direccionMadre;
	}

	function get_apellidoPadre(){
		return $this->apellidoPadre;
	}

	function get_nombrePadre(){
		return $this->nombrePadre;
	}

	function get_ciPadre(){
		return $this->ciPadre;
	}

	function get_telefonoPadre(){
		return $this->telefonoPadre;
	}

	function get_direccionPadre(){
		return $this->direccionPadre;
	}

	function get_nombre_hermano1(){
		return $this->nombre_hermano1;
	}

	function get_nombre_hermano2(){
		return $this->nombre_hermano2;
	}

	function get_nombre_hermano3(){
		return $this->nombre_hermano3;
	}

	function get_nombre_hermano4(){
		return $this->nombre_hermano4;
	}

	function get_quienRetirada(){
		return $this->quienRetirada;
	}

	function get_quienTelefono(){
		return $this->quienTelefono;
	}



	//Lo siguiente que demos hacer es crear los metodos para incluir, consultar y eliminar

	function incluir(){
		//Ok ya tenemos la base de datos y la funcion conecta dentro de la clase
		//datos, ahora debemos ejecutar las operaciones para realizar las consultas

		//Lo primero que debemos hacer es consultar por el campo clave
		//en este caso la cedula, para ello se creo la funcion existe
		//que retorna true en caso de exitir el registro

	if( !$this->existe($this->cedulaEscolar)	){

			//si estamos aca es porque la cedula no existe es decir se puede incluir
			//los pasos a seguir son
			//1 Se llama a la funcion conecta



			$co = $this->conecta();
			$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



			//2 Se ejecuta el sql
			try {

				

				$co->query("insert into seccion_estudiante(
					seccion,
					grado,
					turno,
					anio_escolar,
					
					cedula_ma,
					
					)
					Values(
						'$this->seccion',
						'$this->grado',
						'$this->turno',
						'$this->anioe',
						
						'$this->cedula_m',
						

						)
				");

			



						return "Registro exitoso";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "Ya existe la cedula que desea ingresar";
		}

		//Listo eso es todo y es igual para el resto de las operaciones
		//incluir, modificar y eliminar
		//solo cambia para buscar
	}

	function inscribir(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->cedulaEscolar)){
			try {
					

						

						$co->query("Update seccion_estudiante set
							seccion_1='$this->id'
														
							where
							cedula_es='$this->cedulaEscolar'

						");

						return "Registro Modificado";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "Cedula no registrada";
		}

	}

	function eliminar(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->cedulaEscolar)){

			try {
					$co->query("UPDATE seccion_estudiante SET seccion_1 = NULL
					 WHERE cedula_es='$this->cedulaEscolar'");

						return "Registro Eliminado";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "Cedula no registrada";
		}
	}


	function consultar(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT s.cedula_mm, e.seccion_1, s.seccion, s.grado, eo.nombres, es.cedula_e, es.nombre, es.apellido, s.anio_escolar  FROM seccion s
				INNER JOIN seccion_estudiante e on s.id=e.seccion_1
				INNER JOIN empleados eo on s.cedula_mm=eo.cedula
				RIGHT JOIN estudiante es on es.cedula_e= e.cedula_es
				 
				");


			if($resultado){

				$respuesta = '';
				foreach($resultado as $r){
					$respuesta = $respuesta."<tr style='cursor:pointer' onclick='coloca(this);'>";
							$respuesta = $respuesta."<td>";
								$respuesta = $respuesta.$r['cedula_e'];
							$respuesta = $respuesta."</td>";
							$respuesta = $respuesta."<td>";
								$respuesta = $respuesta.$r['apellido'];
							$respuesta = $respuesta."</td>";
							$respuesta = $respuesta."<td>";
								$respuesta = $respuesta.$r['nombre'];
							$respuesta = $respuesta."</td>";
							$respuesta = $respuesta."<td>";

							if ($r['grado'] == '') {
								$respuesta = $respuesta."No Inscrito";
								# code...
							}else{

								$respuesta = $respuesta.$r['grado'];
							}
							$respuesta = $respuesta."</td>";
							$respuesta = $respuesta."<td>";

							if ($r['grado'] == '') {
								$respuesta = $respuesta."No Inscrito";
								# code...
							}else{
								
								
								$respuesta = $respuesta.$r['seccion'];
							}

							$respuesta = $respuesta."</td>";
							$respuesta = $respuesta."<td>";

							if ($r['grado'] == '') {
								$respuesta = $respuesta."No Inscrito";
								# code...
							}else{
								
								
								$respuesta = $respuesta.$r['anio_escolar'];
								
							}
							$respuesta = $respuesta."</td>";


						$respuesta = $respuesta."</tr>";

				}
				return $respuesta;

			}
			else{
				return '';
			}

		}catch(Exception $e){
			return $e->getMessage();
		}

	}


	private function existe($cedulaE){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from estudiante where cedula_e='$cedulaE'");


			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				return true;

			}
			else{

				return false;
			}

		}catch(Exception $e){
			return false;
		}
	}

	function consultatr(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT e.cedula_e, e.nombre,e.apellido, so.seccion, so.grado, so.anio_escolar FROM seccion_estudiante s
INNER JOIN estudiante e ON e.cedula_e = s.cedula_es
LEFT JOIN seccion so ON s.seccion_1 = so.id
WHERE e.cedula_e='$this->cedulaEscolar'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}

			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}


	function maestro_seccion(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT s.cedula_mm, s.id, e.nombres FROM seccion s
INNER JOIN empleados e on s.cedula_mm=e.cedula
WHERE s.grado='$this->grado' and s.seccion='$this->seccion'  ");

			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}

			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}

	
		function llenargrado(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			

		
			$resultado = $co->query("SELECT DISTINCT grado FROM seccion
				ORDER BY CASE
					WHEN grado = 'Pre-escolar' THEN 1
			        WHEN grado = 'Primer Grado' THEN 2
			        WHEN grado = 'Segundo Grado' THEN 3
			        WHEN grado = 'Tercer Grado' THEN 4
			        WHEN grado = 'Cuarto Grado' THEN 5
			        WHEN grado = 'Quinto Grado' THEN 6
			        WHEN grado = 'Sexto Grado' THEN 7
			       END;");
			if($resultado){

				$respuesta = '';
				$respuesta = $respuesta."<option value=''>Seleccionar</option>";
				foreach($resultado as $r){


					$respuesta = $respuesta."<option value=";
					$respuesta = $respuesta."'";

					$respuesta = $respuesta.$r['grado'];

					$respuesta = $respuesta."'";
					$respuesta = $respuesta.">";
					$respuesta = $respuesta.$r['grado'];
					
					$respuesta = $respuesta."</option>";

				}
				return $respuesta;

			}
			else{
				return '';
			}


		}catch(Exception $e){
			return false;
		}

	}


	function llenarseccion(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
	
			$resultado = $co->query("SELECT s.seccion FROM seccion s 
			WHERE s.grado='$this->grado'
            ORDER BY s.seccion ASC ");

			
			

			if($resultado){

				$respuesta = '';
				$respuesta = $respuesta."<option value=''>Seleccionar</option>";
				foreach($resultado as $r){


					$respuesta = $respuesta."<option value=";

					$respuesta = $respuesta."'";

					$respuesta = $respuesta.$r['seccion'];

					$respuesta = $respuesta."'";

					$respuesta = $respuesta.">";
					$respuesta = $respuesta.$r['seccion'];
					
					$respuesta = $respuesta."</option>";

				}
				return $respuesta;

			}
			else{
				return '';
			}


		}catch(Exception $e){
			return false;
		}

	}


	function obtienefecha(){
		$f = date('Y-m-d');
		$f1 = strtotime ('-18 year' , strtotime($f));
		$f1 = date ('Y-m-d',$f1);
		return $f1;
	}




}
?>
