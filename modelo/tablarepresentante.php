<?php

	require_once('datos.php');
	

	class representante extends datos{

		function tabla(){




		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select cedula,nombre_r,apellido_r,telefono_r,correo from representante");

			

			
			$rs = $resultado->fetchAll(PDO::FETCH_FUNC, fn (
				$cedula,
			 	$apellidos,
			 	$nombres,
			 	$telefono, 
			 	$correo) =>
			 [
			 	$cedula,
			 	$apellidos,
			 	$nombres,
			 	$telefono, 
			 	$correo
			 ] );
			echo json_encode(['data' => $rs,]);

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}
		}
}


$o = new representante();

	echo  $o->tabla();

?>
