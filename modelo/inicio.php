<?php

require_once('modelo/datos.php');

class inicio extends datos{

	
	
	private $usuario;
	private $clave;
	
	
	function set_usuario($valor){
		$this->usuario = $valor;
	}
	
	function set_clave($valor){
		$this->clave = $valor;
	}
	

	
	function get_clave(){
		return $this->clave;
	}
	
	function get_usuario(){
		return $this->usuario;
	}
	
	function busca(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
		
			$resultado = $co->prepare("SELECT cargo, cedula, nombres FROM empleados WHERE 
			cedula=:usuario AND clave=:clave");
			
			$resultado->bindParam(':usuario',$this->usuario);
			$resultado->bindParam(':clave',$this->clave);
			
			$resultado->execute();
			
			
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			
			if($fila){
			
				return $fila;
			    
			}
			else{
				
				return "¡Error en los datos ingresados!";
			}
			
		}catch(Exception $e){
			return $e;
		}
	}
	
}
?>