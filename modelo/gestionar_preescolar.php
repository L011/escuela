<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('modelo/datos.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class preescolar extends datos{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private


	private $partidaNacimiento;
	private $certificadoVacuna;
	private $fotos;
	private $copiasCedulaRepre;
	private $constanciaNinoSano;

	private $grado;
	private $seccion;
	private $turno;
	private $anioe;
	private $maestro;

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

	private $pesoActual;
	private $tallaActual;
	private $camisa;
	private $pantalon;
	private $calzado;

/*
	

	
*/
			function set_partidaNacimiento($valor){
				$this->partidaNacimiento = $valor;
			}
			function set_certificadoVacuna($valor){
				$this->certificadoVacuna = $valor;
			}
			function set_fotos($valor){
				$this->fotos = $valor;
			}
			function set_copiasCedulaRepre($valor){
				$this->copiasCedulaRepre = $valor;
			}
			function set_constanciaNinoSano($valor){
				$this->constanciaNinoSano = $valor;
			}


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

	function set_sexo($valor){
		$this->sexo = $valor;
	}

	function set_fechaNaciPri($valor){
		$this->fechaNaciPri = $valor;
	}

	function set_estado_p($valor){
		$this->estado_p = $valor;
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

	if(   !$this->existe($this->cedulaEscolar)	){

			//si estamos aca es porque la cedula no existe es decir se puede incluir
			//los pasos a seguir son
			//1 Se llama a la funcion conecta



			$co = $this->conecta();
			$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



			//2 Se ejecuta el sql
			try {


				


/*
				$co->query("insert into estudiante(
					cedula_e,
					nombre,
					apellido,
					sexo,
					fecha_n,
					estado_n,
					ciudad_n

					)
					Values(
						'$this->cedulaEscolar',
						'$this->nombrePri',
						'$this->apellidoPri',
						'$this->sexo',
						'$this->fechaNaciPri',
						'$this->estado_p',
						'$this->ciudad_p'
				");
				*/

				$co->query("insert into documentos(
					cedula_est,
					partida,
					certificado_v,
					fotos,
					cedula_r,
					constancia_s
					)
					Values(
						'$this->cedulaEscolar',
						'$this->nombrePri',
						'$this->apellidoPri',
						'$this->sexo',
						'$this->fechaNaciPri',
						'$this->estado_p'
						
						)
				");


				$co->query("insert into seccion_estudiante(
					seccion,
					grado,
					turno,
					anio_escolar,
					representante,
					cedula_es,
					cedula_m,
					talla,
					peso,
					calzado,
					camisa,
					pantalon
					)
					Values(
						'$this->seccion',
						'$this->grado',
						'$this->turno',
						'$this->anioe',
						'$this->cedula_r',
						'$this->cedulaEscolar',
						'$this->cedula_m',
						'$this->tallaActual',
						'$this->pesoActual',
						'$this->calzado',
						'$this->camisa',
						'$this->pantalon'

						)
				");

				
				/*

				$co->query("insert into hermanos(
						nom_ape,
						grado,
						turno
					)
					Values(
						'$this->nombre_hermano1',
						'$this->grado_hermano1',
						'$this->turno_hermano1'
						)
				");
				$co->query("insert into hermanos(
						nom_ape,
						grado,
						turno
					)
					Values(
						'$this->nombre_hermano2',
						'$this->grado_hermano2',
						'$this->turno_hermano2'
						)
				");
				$co->query("insert into hermanos(
						nom_ape,
						grado,
						turno
					)
					Values(
						'$this->nombre_hermano3',
						'$this->grado_hermano3',
						'$this->turno_hermano3'
						)
				");
				$co->query("insert into hermanos(
						nom_ape,
						grado,
						turno
					)
					Values(
						'$this->nombre_hermano4',
						'$this->grado_hermano4',
						'$this->turno_hermano4'
						)
				");

*/
				/*
					$co->query("Insert into registrar_maestro(
						cedulaEscolar,
						apellidoPri,
						nombrePri,
						fechaNaciPri,
						estadoprimaria,
						ciudadprimaria,
						telefono,
						viveConO,
						apellidoRepre,
						nombreRepre,
						ciRepre,
						telfRepre,
						direccionRepre,
						profesionRepre,
						correoRepre,
						cuentaBancR,
						codigoCPR,
						serialCPR,
						apellidoMadre,
						nombreMadre,
						ciMadre,
						telefonoMadre,
						direccionMadre,
						apellidoPadre,
						nombrePadre,
						ciPadre,
						telefonoPadre,
						direccionPadre,
						nombre_hermano1,
						nombre_hermano2,
						nombre_hermano3,
						nombre_hermano4,
						quienRetirada,
						quienTelefono
						)
						Values(
						'$this->cedulaEscolar',
						'$this->apellidoPri',
						'$this->nombrePri',
						'$this->fechaNaciPri',
						'$this->estadoprimaria',
						'$this->ciudadprimaria',
						'$this->viveConO'
						'$this->apellidoRepre'
						'$this->nombreRepre'
						'$this->ciRepre'
						'$this->telfRepre'
						'$this->direccionRepre'
						'$this->profesionRepre'
						'$this->correoRepre'
						'$this->cuentaBancR'
						'$this->codigoCPR'
						'$this->serialCPR'
						'$this->apellidoMadre'
						'$this->nombreMadre'
						'$this->ciMadre'
						'$this->telefonoMadre'
						'$this->direccionMadre'
						'$this->apellidoPadre'
						'$this->nombrePadre'
						'$this->ciPadre'
						'$this->telefonoPadre'
						'$this->direccionPadre'
						'$this->nombre_hermano1'
						'$this->nombre_hermano2'
						'$this->nombre_hermano3'
						'$this->nombre_hermano4'
						'$this->quienRetirada'
						'$this->quienTelefono'
						)");

						*/
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
					$co->query("Update registrar_maestro set
					    cedulaEscolar = '$this->cedulaEscolar',
						apellidoPri = '$this->apellidoPri',
						nombrePri = '$this->nombrePri',
						fechaNaciPri = '$this->fechaNaciPri',
						estadoprimaria = '$this->estadoprimaria',
						ciudadprimaria = '$this->ciudadprimaria',
						viveConO = '$this->viveConO'
						apellidoRepre = '$this->apellidoRepre'
						nombreRepre = '$this->nombreRepre'
						ciRepre = '$this->ciRepre'
						telfRepre = '$this->telfRepre'
						direccionRepre = '$this->direccionRepre'
						profesionRepre = '$this->profesionRepre'
						correoRepre = '$this->correoRepre'
						cuentaBancR = '$this->cuentaBancR'
						codigoCPR = '$this->codigoCPR'
						serialCPR = '$this->serialCPR'
						apellidoMadre = '$this->apellidoMadre'
						nombreMadre = '$this->nombreMadre'
						ciMadre = '$this->ciMadre'
						telefonoMadre = '$this->telefonoMadre'
						direccionMadre = '$this->direccionMadre'
						apellidoPadre = '$this->apellidoPadre'
						nombrePadre = '$this->nombrePadre'
						ciPadre = '$this->ciPadre'
						telefonoPadre = '$this->telefonoPadre'
						direccionPadre = '$this->direccionPadre'
						nombre_hermano1 = '$this->nombre_hermano1'
						nombre_hermano2 = '$this->nombre_hermano2'
						nombre_hermano3 = '$this->nombre_hermano3'
						nombre_hermano4 = '$this->nombre_hermano4'
						quienRetirada = '$this->quienRetirada'
						quienTelefono = '$this->quienTelefono'

						where
						cedulaEscolar = '$this->cedulaEscolar'
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
					$co->query("delete from registrar_maestro
						where
						cedulaEscolar = '$this->cedulaEscolar'
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


	function consultar(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from registrar_maestro");

			if($resultado){

				$respuesta = '';
				foreach($resultado as $r){
					$respuesta = $respuesta."<tr style='cursor:pointer' onclick='coloca(this);'>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['cedulaEscolar'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['apellidoPri'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['nombrePri'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['fechaNaciPri'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['estadoprimaria'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['ciudadprimaria'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['viveConO'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['apellidoRepre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['nombreRepre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['ciRepre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['telfRepre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['direccionRepre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['profesionRepre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['correoRepre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['cuentaBancR'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['codigoCPR'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['serialCPR'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['apellidoMadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['nombreMadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['ciMadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['telefonoMadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['direccionMadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['apellidoPadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['nombrePadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['ciPadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['telefonoPadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['direccionPadre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['nombre_hermano1'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['nombre_hermano2'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['nombre_hermano3'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['nombre_hermano4'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['quienRetirada'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."</tr>";
							$respuesta = $respuesta.$r['quienTelefono'];
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


private function existe($cedulaEscolar){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from estudiante where cedula_e='$cedulaEscolar'");


			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){
				alert("sjdhiashdaus");
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

			$resultado = $co->query("Select * from registrar_maestro where cedulaEscolar='$this->cedulaEscolar'");
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
