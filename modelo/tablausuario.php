<?php

	require_once('datos.php');
	

	class registro_usuario extends datos{

		function tabla(){




		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select e.cedula, e.apellidos, e.nombres, e.cargo , e.clave from empleados e");

			

			
			$rs = $resultado->fetchAll(PDO::FETCH_FUNC, fn (
				$cedula,
			 	$apellidos,
			 	$nombres,
			 	$cargo,
			 	$clave
			 ) =>
			 [
			 	$cedula,
			 	$apellidos,
			 	$nombres,
			 	$cargo,
			 	$clave
			 ] );
			echo json_encode(['data' => $rs,]);

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}
		}
}


$o = new registro_usuario();

	echo  $o->tabla();

?>
