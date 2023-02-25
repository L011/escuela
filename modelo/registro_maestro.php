<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('modelo/datos.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class registro_maestro extends datos{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private

	private $cedula; //recuerden que en php, las variables no tienen tipo predefinido
	private $apellidos;
	private $nombres;
	private $fechadenacimiento;
	private $sexo;
	private $correo;
	private $telefono;
	private $cargo;

	//Ok ya tenemos los atributos, pero como son privados no podemos acceder a ellos desde fueran
	//por lo que debemos colcoar metodos (funciones) que me permitan leer (get) y colocar (set)

	function set_cedula($valor){
		$this->cedula = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte

	}

	function set_apellidos($valor){
		$this->apellidos = $valor;
	}

	function set_nombres($valor){
		$this->nombres = $valor;
	}

	function set_fechadenacimiento($valor){
		$this->fechadenacimiento = $valor;
	}

	function set_sexo($valor){
		$this->sexo = $valor;
	}

	function set_correo($valor){
		$this->correo = $valor;
	}
	function set_telefono($valor){
		$this->telefono = $valor;
	}
	function set_cargo($valor){
		$this->cargo = $valor;
	}


	//ahora la misma cosa pero para leer, es decir get

	function get_cedula(){
		return $this->cedula;
	}

	function get_apellidos(){
		return $this->apellidos;
	}

	function get_nombres(){
		return $this->nombres;
	}

	function get_fechadenacimiento(){
		return $this->fechadenacimiento;
	}

	function get_sexo(){
		return $this->sexo;
	}

	function get_correo(){
		return $this->correo;
	}

	function get_telefono(){
		return $this->telefono;
	}
	function get_cargo(){
		return $this->cargo;
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
					$co->query("Insert into empleados(
						cedula,
						apellidos,
						nombres,
						fechadenacimiento,
						sexo,
						correo,
						telefono,
						cargo
						)
						Values(
						'$this->cedula',
						'$this->apellidos',
						'$this->nombres',
						'$this->fechadenacimiento',
						'$this->sexo',
						'$this->correo',
						'$this->telefono',
						'$this->cargo'
						)");
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
					$co->query("Update empleados set
					    cedula = '$this->cedula',
						apellidos = '$this->apellidos',
						nombres = '$this->nombres',
						fechadenacimiento = '$this->fechadenacimiento',
						sexo = '$this->sexo',
						correo = '$this->correo',
						telefono = '$this->telefono',
						cargo = '$this->cargo'
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
					$co->query("delete from empleados
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




	private function existe($cedula){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from empleados where cedula='$cedula'");


			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				return true;

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

			$resultado = $co->query("Select * from empleados where cedula='$this->cedula'");
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
