<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('modelo/datos.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class primaria extends datos{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private


	private $cedulaEscolar;
	private $cedula_r;
	private $cedula_m;
	private $ci;
	private $apellidoPri;
	private $nombrePri;
	private $sexo;
	private $fechaNaciPri;
	private $estado_p;
	private $ciudad_p;
	private $vive_con;
	private $infom;
	private $observacion;

	private $vacuna_name;

	private $orden;
	private $nacionalidad;
	private $c_id;

	private $pesoActual;
	private $tallaActual;
	private $camisa;
	private $pantalon;
	private $calzado;
	private $colab_c;

	private $apellidoMadre;
	private $nombreMadre;
	private $ciMadre;
	private $telefonoMadre;
	private $direccionMadre;
	private $apellidoPadre;
	private $nombrePadre;
	private $ciPadre;
	private $telefonoPadre;
	private $direccionPadre;

	private $nombre_hermano1;
	private $nombre_hermano2;
	private $nombre_hermano3;
	private $nombre_hermano4;

	private $grado_hermano1;
	private $grado_hermano2;
	private $grado_hermano3;
	private $grado_hermano4;

	private $turno_hermano1;
	private $turno_hermano2;
	private $turno_hermano3;
	private $turno_hermano4;

	private $quienRetirada;
	private $quienTelefono;

	private $vacuna1;
	private $dosis1;
	private $vacuna2;
	private $dosis2;
	private $vacuna3;
	private $dosis3;
	private $vacuna4;
	private $dosis4;
	private $vacuna5;
	private $dosis5;
	private $vacuna6;
	private $dosis6;
	private $vacuna7;
	private $dosis7;
	private $vacuna8;
	private $dosis8;
	private $vacuna9;
	private $dosis9;
	private $vacuna10;
	private $dosis10;

	


	//2

	function set_vacuna1($valor){
		$this->vacuna1 = $valor;
	}
	function set_vacuna2($valor){
		$this->vacuna2 = $valor;
	}
	function set_vacuna3($valor){
		$this->vacuna3 = $valor;
	}
	function set_vacuna4($valor){
		$this->vacuna4 = $valor;
	}
	function set_vacuna5($valor){
		$this->vacuna5 = $valor;
	}
	function set_vacuna6($valor){
		$this->vacuna6 = $valor;
	}
	function set_vacuna7($valor){
		$this->vacuna7 = $valor;
	}
	function set_vacuna8($valor){
		$this->vacuna8 = $valor;
	}
	function set_vacuna9($valor){
		$this->vacuna9 = $valor;
	}
	function set_vacuna10($valor){
		$this->vacuna10 = $valor;
	}

	function set_dosis1($valor){
		$this->dosis1 = $valor;
	}
	function set_dosis2($valor){
		$this->dosis2 = $valor;
	}
	function set_dosis3($valor){
		$this->dosis3 = $valor;
	}
	function set_dosis4($valor){
		$this->dosis4 = $valor;
	}
	function set_dosis5($valor){
		$this->dosis5 = $valor;
	}
	function set_dosis6($valor){
		$this->dosis6 = $valor;
	}
	function set_dosis7($valor){
		$this->dosis7 = $valor;
	}
	function set_dosis8($valor){
		$this->dosis8 = $valor;
	}
	function set_dosis9($valor){
		$this->dosis9 = $valor;
	}
	function set_dosis10($valor){
		$this->dosis10 = $valor;
	}
	



	//vacuna

	function set_agregar_v($valor){
		$this->vacuna_name = $valor;
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

	function set_sexo($valor){
		$this->sexo = $valor;
	}

	function set_fechaNaciPri($valor){
		$this->fechaNaciPri = $valor;
	}

	function set_estado_p($valor){
		$this->estado_p = $valor;
	}

	function set_orden($valor){
		$this->orden = $valor;
	}
	function set_nacionalidad($valor){
		$this->nacionalidad = $valor;
	}
	function set_c_id($valor){
		$this->c_id = $valor;
	}

	function set_ciudad_p($valor){
		$this->ciudad_p = $valor;
	}

	function set_vive_con($valor){
		$this->vive_con = $valor;
	}
	function set_retirada($valor){
		$this->retirada = $valor;
	}
	function set_canaima($valor){
		$this->canaima = $valor;
	}

	function set_pesoActual($valor){
		$this->pesoActual = $valor;
	}
	function set_tallaActual($valor){
		$this->tallaActual = $valor;
	}
	function set_camisa($valor){
		$this->camisa = $valor;
	}
	function set_pantalon($valor){
		$this->pantalon = $valor;
	}
	function set_calzado($valor){
		$this->calzado = $valor;
	}



		//tercera partee

	function set_apellidoMadre($valor){
		$this->apellidoMadre = $valor;
	}

	function set_nombreMadre($valor){
		$this->nombreMadre = $valor;
	}

	function set_ciMadre($valor){
		$this->ciMadre = $valor;
	}

	function set_telefonoMadre($valor){
		$this->telefonoMadre = $valor;
	}

	function set_direccionMadre($valor){
		$this->direccionMadre = $valor;
	}

	function set_apellidoPadre($valor){
		$this->apellidoPadre = $valor;
	}

	function set_nombrePadre($valor){
		$this->nombrePadre = $valor;
	}

	function set_ciPadre($valor){
		$this->ciPadre = $valor;
	}

	function set_telefonoPadre($valor){
		$this->telefonoPadre = $valor;
	}

	function set_direccionPadre($valor){
		$this->direccionPadre = $valor;
	}

	//		CUARTA PARTEE

	function set_nombre_hermano1($valor){
		$this->nombre_hermano1 = $valor;
	}

	function set_nombre_hermano2($valor){
		$this->nombre_hermano2 = $valor;
	}

	function set_nombre_hermano3($valor){
		$this->nombre_hermano3 = $valor;
	}

	function set_nombre_hermano4($valor){
		$this->nombre_hermano4 = $valor;
	}

	function set_grado_hermano1($valor){
		$this->grado_hermano1 = $valor;
	}

	function set_grado_hermano2($valor){
		$this->grado_hermano2 = $valor;
	}

	function set_grado_hermano3($valor){
		$this->set_grado_hermano3 = $valor;
	}

	function set_grado_hermano4($valor){
		$this->grado_hermano4 = $valor;
	}

	function set_turno_hermano1($valor){
		$this->turno_hermano1 = $valor;
	}

	function set_turno_hermano2($valor){
		$this->turno_hermano2 = $valor;
	}

	function set_turno_hermano3($valor){
		$this->turno_hermano3 = $valor;
	}

	function set_turno_hermano4($valor){
		$this->turno_hermano4 = $valor;
	}

	function set_quienRetirada($valor){
		$this->quienRetirada = $valor;
	}

	function set_quienTelefono($valor){
		$this->quienTelefono = $valor;
	}

			//  		Quinta parte

			function set_infom($valor){
				$this->infom = $valor;
			}

			function set_colab_c($valor){
				$this->colab_c = $valor;
			}

			function set_observacion($valor){
				$this->observacion = $valor;
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

				if (!$this->existemama($this->ciMadre)) {
					// code...
					$co->query("insert into padres(
						cedula_m,
						nombre_m,
						apellido_m,
						telefono_m,
						direc_trab
						)
						Values(
							'$this->ciMadre',
							'$this->nombreMadre',
							'$this->apellidoMadre',
							'$this->telefonoMadre',
							'$this->direccionMadre'

							)
							");
				}
				if (!$this->existepapa($this->ciPadre)) {
					// code...
					$co->query("insert into padres(
						cedula_m,
						nombre_m,
						apellido_m,
						telefono_m,
						direc_trab
						)
						Values(
							'$this->ciPadre',
							'$this->nombrePadre',
							'$this->apellidoPadre',
							'$this->telefonoPadre',
							'$this->direccionPadre'

							)
							");
				}



				$co->query("insert into estudiante(
					cedula_e,
					nombre,
					apellido,
					sexo,
					fecha_n,
					estado_n,
					ciudad_n,
					quien_vive,
					cedula_mama,
					cedula_p,
					retira_solo,
					posee_canai,
					inf_medica,
					observ,
					orden,
					nacionalidad,
					c_id


					)
					Values(
						'$this->cedulaEscolar',
						'$this->nombrePri',
						'$this->apellidoPri',
						'$this->sexo',
						'$this->fechaNaciPri',
						'$this->estado_p',
						'$this->ciudad_p',
						'$this->vive_con',
						'$this->ciMadre',
						'$this->ciPadre',
						'$this->retirada',
						'$this->canaima',
						'$this->infom',
						'$this->observacion',
						'$this->orden',
						'$this->nacionalidad',
						'$this->c_id'
						)
				");


				$co->query("insert into seccion_estudiante(
					
					representante,
					cedula_es,
					talla,
					peso,
					calzado,
					camisa,
					pantalon,
					colab_comun
					)
					Values(
						'$this->cedula_r',
						'$this->cedulaEscolar',
						'$this->tallaActual',
						'$this->pesoActual',
						'$this->calzado',
						'$this->camisa',
						'$this->pantalon',
						'$this->colab_c'

						)
				");
				if ($this->nombre_hermano1) {
				$co->query("insert into hermanos(
						cedula_e,
						nom_ape,
						grado,
						turno
					)
					Values(
						'$this->cedulaEscolar',
						'$this->nombre_hermano1',
						'$this->grado_hermano1',
						'$this->turno_hermano1'
						)
				");

					if ($this->nombre_hermano2) {
						
					$co->query("insert into hermanos(
							cedula_e,
							nom_ape,
							grado,
							turno
						)
						Values(
							'$this->cedulaEscolar',
							'$this->nombre_hermano2',
							'$this->grado_hermano2',
							'$this->turno_hermano2'
							)
					");


						if ($this->nombre_hermano3) {
							
						$co->query("insert into hermanos(
								cedula_e,
								nom_ape,
								grado,
								turno
							)
							Values(
								'$this->cedulaEscolar',
								'$this->nombre_hermano3',
								'$this->grado_hermano3',
								'$this->turno_hermano3'
								)
						");
							if ($this->nombre_hermano4) {
								
							$co->query("insert into hermanos(
									cedula_e,
									nom_ape,
									grado,
									turno
								)
								Values(
									'$this->cedulaEscolar',
									'$this->nombre_hermano4',
									'$this->grado_hermano4',
									'$this->turno_hermano4'
									)
							");
							}
						}
					}

					
				}

				if ($this->vacuna1) {
					
				$co->query("insert into vacunacion(
						id_vacuna,
						cedula_e,
						dosis
					)
					Values(
						'$this->vacuna1',
						'$this->cedulaEscolar',
						'$this->dosis1'
						)
				");
				if ($this->vacuna2) {
					
				$co->query("insert into vacunacion(
						id_vacuna,
						cedula_e,
						dosis
					)
					Values(
						'$this->vacuna2',
						'$this->cedulaEscolar',
						'$this->dosis2'
						)
				");

				if ($this->vacuna3) {
					
				$co->query("insert into vacunacion(
						id_vacuna,
						cedula_e,
						dosis
					)
					Values(
						'$this->vacuna3',
						'$this->cedulaEscolar',
						'$this->dosis3'
						)
				");
				if ($this->vacuna4) {
					
				$co->query("insert into vacunacion(
						id_vacuna,
						cedula_e,
						dosis
					)
					Values(
						'$this->vacuna4',
						'$this->cedulaEscolar',
						'$this->dosis4'
						)
				");
				if ($this->vacuna5) {
					
				$co->query("insert into vacunacion(
						id_vacuna,
						cedula_e,
						dosis
					)
					Values(
						'$this->vacuna5',
						'$this->cedulaEscolar',
						'$this->dosis5'
						)
				");

				
				}
				}
				}
				}
				}




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

	function modificar(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->cedulaEscolar)){
			try {
					$co->query("Update estudiante set

						cedula_e = '$this->cedulaEscolar',
						nombre = '$this->nombrePri',
						apellido = '$this->apellidoPri',
						sexo = '$this->sexo',
						fecha_n = '$this->fechaNaciPri',
						estado_n = '$this->estado_p',
						ciudad_n = '$this->ciudad_p',
						retira_solo = '$this->retirada',
						posee_canai = '$this->canaima',
						inf_medica = '$this->infom',
						observ = '$this->observacion',
						quien_vive = '$this->vive_con',
						orden = '$this->orden',
						nacionalidad = '$this->nacionalidad',
						c_id = '$this->c_id'
						where
						cedula_e = '$this->cedulaEscolar'
						");


						$co->query("Update padres set
							cedula_m='$this->ciMadre',
							nombre_m=	'$this->nombreMadre',
							apellido_m='$this->apellidoMadre',
							telefono_m='$this->telefonoMadre',
							direc_trab='$this->direccionMadre'
							where
							cedula_m = '$this->ciMadre'
						");

						$co->query("Update padres set
							cedula_m=	'$this->ciPadre',
							nombre_m=	'$this->nombreMadre',
							apellido_m='$this->apellidoMadre',
							telefono_m='$this->telefonoMadre',
							direc_trab='$this->direccionMadre'
							where
							cedula_m = '$this->ciPadre'
						");

						$co->query("Update seccion_estudiante set
							talla='$this->tallaActual',
							peso='$this->pesoActual',
							calzado=	'$this->calzado',
							camisa=	'$this->camisa',
							pantalon=	'$this->pantalon',
							colab_comun=	'$this->colab_c'
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
					$co->query("delete from estudiante
						where
						cedula_e = '$this->cedulaEscolar'
						");

						$co->query("delete from seccion_estudiante
							where
							cedula_es = '$this->cedulaEscolar'
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

	function agregar_v(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$co->query("insert into vacuna(
						vacuna
						
						)
						Values(
							'$this->vacuna_name'				

							)
							");

		}catch(Exception $e){
			return false;
		}
	}

		function consultarVacuna(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from vacuna");

			if($resultado){

				$respuesta = '';
					$a="1";
				foreach($resultado as $r){
					$respuesta = $respuesta."<tr>";

						$respuesta = $respuesta."
						<td scope='row'>";
							$respuesta = $respuesta.$a;
							$a++;
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['vacuna'];
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

	function consultarVacuna2(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select id, vacuna from vacuna");
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

	private function existemama($cedula){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from padres where cedula_m='$cedula'");


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

	private function existepapa($cedula){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from padres where cedula_m='$cedula'");


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





		function consultarepre(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select nombre_r, apellido_r from representante where cedula='$this->cedula_r'");
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

	


	function consultatr(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT estudiante.*, seccion_estudiante.*, padres.* FROM seccion_estudiante
			INNER JOIN estudiante ON estudiante.cedula_e = seccion_estudiante.cedula_es
			INNER JOIN padres ON estudiante.cedula_mama = padres.cedula_m
			WHERE estudiante.cedula_e='$this->cedulaEscolar'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia, JSON_FORCE_OBJECT);

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


	function consultahermanos(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT h.nom_ape, h.grado, h.turno FROM hermanos h
			INNER JOIN estudiante e ON e.cedula_e = h.cedula_e
			WHERE e.cedula_e='$this->cedulaEscolar'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia, JSON_FORCE_OBJECT);

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



	function consultamama(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT `cedula_m`, `nombre_m`, `apellido_m`, `telefono_m`,
				 `direc_trab`, `parentesco` FROM `padres` WHERE cedula_m='$this->ciMadre'");
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

	function consultapapa(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT `cedula_m`, `nombre_m`, `apellido_m`, `telefono_m`,
				 `direc_trab`, `parentesco` FROM `padres` WHERE cedula_m='$this->ciPadre'");
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

	function obtienefecha(){
		$f = date('Y-m-d');
		$f1 = strtotime ('-18 year' , strtotime($f));
		$f1 = date ('Y-m-d',$f1);
		return $f1;
	}




}
?>
