<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('modelo/datos.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class seccion extends datos{
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

	
	


	//Lo siguiente que demos hacer es crear los metodos para incluir, consultar y eliminar

	function incluir(){
		//Ok ya tenemos la base de datos y la funcion conecta dentro de la clase
		//datos, ahora debemos ejecutar las operaciones para realizar las consultas

		//Lo primero que debemos hacer es consultar por el campo clave
		//en este caso la cedula, para ello se creo la funcion existe
		//que retorna true en caso de exitir el registro

	
			if(!$this->existe($this->maestro)){
			//si estamos aca es porque la cedula no existe es decir se puede incluir
			//los pasos a seguir son
			//1 Se llama a la funcion conecta



			$co = $this->conecta();
			$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			//2 Se ejecuta el sql
			try {

				

				$co->query("insert into seccion(
					seccion,
					grado,
					anio_escolar,					
					cedula_mm
					)
					Values(
						'$this->seccion',
						'$this->grado',
						'$this->anioe',
						'$this->maestro'
						

						)
				");


			



						return "Registro exitoso";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		
		}
		else{
			return "Ya esta asignado a una sección";
		}

		//Listo eso es todo y es igual para el resto de las operaciones
		//incluir, modificar y eliminar
		//solo cambia para buscar
	}

	function actualizar(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->maestro)){
			try {
					

						

						$co->query("Update seccion set
							seccion='$this->seccion',
							grado='$this->grado',
							anio_escolar=	'$this->anioe'
							
							where
							cedula_mm='$this->maestro'

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
		if($this->existe($this->maestro)){

			try {
					$co->query("delete from seccion
						where
						cedula_mm = '$this->maestro'
						");


						return "Registro Eliminado";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "Cedula no registrada";
		}
	}




	private function existe($cedulaE){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from seccion where cedula_mm='$cedulaE'");


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


		function tabla(){

		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			try{

				$resultado = $co->query("Select cedula, apellidos, nombres, sexo,fechadenacimiento, telefono  from empleados");

				

				
				$rs = $resultado->fetchAll(PDO::FETCH_FUNC, fn ($cedula, $apellido, $nombre, $sexo, $fechadenacimiento, $telefono ) => [$cedula, $apellido, $nombre, $sexo, $fechadenacimiento, $telefono] );
				echo json_encode(['data' => $rs,]);

			}catch(Exception $e){
				$envia = array('resultado'=>$e->getMessage());
				return json_encode($envia);
			}
		}


	function consultatr(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

		
			$resultado = $co->query("SELECT nombres, apellidos, cedula FROM empleados");
			if($resultado){

				$respuesta = '';
				$respuesta = $respuesta."<option value=''>Seleccionar</option>";
				foreach($resultado as $r){


					$respuesta = $respuesta."<option value=";
					$respuesta = $respuesta.$r['cedula'];
					$respuesta = $respuesta.">";
					$respuesta = $respuesta.$r['cedula'];
					$respuesta = $respuesta." ";
					$respuesta = $respuesta.$r['nombres'];

					$respuesta = $respuesta." ";				

					$respuesta = $respuesta.$r['apellidos'];

					

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
