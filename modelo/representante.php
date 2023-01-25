<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('modelo/datos.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class representante extends datos{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private


	private $cedula;
	private $apellidoRepre;
	private $nombreRepre;
	private $telfRepre;
	private $direccionRepre;
	private $estudio;
	private $religion;
	private $civil;
	private $nacion;

	private $parentesco;
	private $ocupa;
	private $correoRepre;
	private $cuentaBancR;
	private $tipocuenta;
	private $banco;
	private $codigoCPR;
	private $serialCPR;

	//Ok ya tenemos los atributos, pero como son privados no podemos acceder a ellos desde fueran
	//por lo que debemos colcoar metodos (funciones) que me permitan leer (get) y colocar (set)


	function set_apellidoRepre($valor){
		$this->apellidoRepre = $valor;
	}

	function set_nombreRepre($valor){
		$this->nombreRepre = $valor;
	}

	function set_cedula($valor){
		$this->cedula = $valor;
	}

	function set_telfRepre($valor){
		$this->telfRepre = $valor;
	}

	function set_direccionRepre($valor){
		$this->direccionRepre = $valor;
	}

	function set_estudio($valor){
		$this->estudio = $valor;
	}

	function set_civil($valor){
		$this->civil = $valor;
	}

	function set_nacion($valor){
		$this->nacion = $valor;
	}

	function set_religion($valor){
		$this->religion = $valor;
	}

	function set_parentesco($valor){
		$this->parentesco = $valor;
	}

	function set_ocupa($valor){
		$this->ocupa = $valor;
	}

	function set_correoRepre($valor){
		$this->correoRepre = $valor;
	}

	function set_cuentaBancR($valor){
		$this->cuentaBancR = $valor;
	}

	function set_tipocuenta($valor){
		$this->tipocuenta = $valor;
	}
	function set_banco($valor){
		$this->banco = $valor;
	}

	function set_codigoCPR($valor){
		$this->codigoCPR = $valor;
	}

	function set_serialCPR($valor){
		$this->serialCPR = $valor;
	}



		//Lo siguiente que demos hacer es crear los metodos para incluir, consultar y eliminar

	function incluir(){
		//Ok ya tenemos la base de datos y la funcion conecta dentro de la clase
		//datos, ahora debemos ejecutar las operaciones para realizar las consultas

		//Lo primero que debemos hacer es consultar por el campo clave
		//en este caso la cedula, para ello se creo la funcion existe
		//que retorna true en caso de exitir el registro

		if(!$this->existe($this->cedula)){
			//si estamos aca es porque la cedula no existe es decir se puede incluir
			//los pasos a seguir son
			//1 Se llama a la funcion conecta
			$co = $this->conecta();
			$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//2 Se ejecuta el sql
			try {
					$co->query("INSERT INTO representante (cedula,
						 nombre,
						 apellido,
						 telefono,
						 direc,
						 estudio,
						 religion,
						 civil,
						 nacion,
						 paren_repre,
						 ocupa,
						correo,
						 cuenta_b,
						 tipo_c,
						 banco,
						 carnet_p,
						 serial_p)
											  VALUES
							('$this->cedula',
								'$this->nombreRepre',
								 '$this->apellidoRepre',
								'$this->telfRepre',
								'$this->direccionRepre',
								'$this->estudio',
								'$this->religion',
								'$this->civil',
								'$this->nacion',
								'$this->parentesco',
							'$this->ocupa',
							'$this->correoRepre',
								 '$this->cuentaBancR',
						'$this->tipocuenta',
							'$this->banco',
							'$this->codigoCPR',
								 '$this->serialCPR')");
						return "Registro incluido";
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
		if($this->existe($this->cedula)){
			try {
					$co->query("Update representante set
					cedula = '$this->cedula',
					nombre = '$this->nombreRepre',
					apellido = '$this->apellidoRepre',
					telefono = 	'$this->telfRepre',
					direc = 	'$this->direccionRepre',
					estudio = 	'$this->estudio',
					religion = 	'$this->religion',
					civil = 	'$this->civil',
					nacion = 	'$this->nacion',
					paren_repre = '$this->parentesco',
					ocupa = '$this->ocupa',
					correo = '$this->correoRepre',
					cuenta_b = '$this->cuentaBancR',
					tipo_c = '$this->tipocuenta',
					banco = '$this->banco',
					carnet_p = '$this->codigoCPR',
					serial_p = '$this->serialCPR'
					where
					cedula = '$this->cedula'
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
		if($this->existe($this->cedula)){
			try {
					$co->query("delete from representante
						where
						cedula = '$this->cedula'
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

			$resultado = $co->query("Select * from representante");

			if($resultado){

				$respuesta = '';
				foreach($resultado as $r){
					$respuesta = $respuesta."<tr style='cursor:pointer' onclick='coloca(this);'>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['cedula'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['apellido'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['nombre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['telefono'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['correo'];
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


	private function existe($cedula){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from representante where cedula='$cedula'");


			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}
			else{

				return false;;
			}

		}catch(Exception $e){
			return false;
		}
	}

	function consultatr(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from representante where cedula='$this->cedula'");
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
