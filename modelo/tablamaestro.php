<?php

	require_once('datos.php');
	

	class maestro extends datos{

		function tabla(){




		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select cedula, apellidos, nombres, sexo, telefono, correo, cargo from empleados
");

			

			
			$rs = $resultado->fetchAll(PDO::FETCH_FUNC, fn (
				$cedula,
			 	$apellidos,
			 	$nombres,
			 	$sexo, 
			 	$telefono, 
			 	$correo, 
			 	$cargo) =>
			 [
			 	$cedula, 
			 	$apellidos, 
			 	$nombres, 
			 	$sexo,  
			 	$telefono, 
			 	$correo, 
			 	$cargo
			 ] );
			echo json_encode(['data' => $rs,]);

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}
		}
}


$o = new maestro();

	echo  $o->tabla();

?>
