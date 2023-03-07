<?php

	require_once('datos.php');
	

	class primaria extends datos{

		function tabla(){




		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT e.cedula_e, e.apellido,e.nombre,s.representante FROM `estudiante` e 
				INNER JOIN seccion_estudiante s ON e.cedula_e= s.cedula_es 
				INNER JOIN habitos h ON h.cedula_e= s.cedula_es");

			

			
			$rs = $resultado->fetchAll(PDO::FETCH_FUNC, fn (
				$cedula,
			 	$apellidos,
			 	$nombres,
			 	$representante
			 ) =>
			 [
			 	$cedula,
			 	$apellidos,
			 	$nombres,
			 	$representante
			 ] );
			echo json_encode(['data' => $rs,]);

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}
		}
}


$o = new primaria();

	echo  $o->tabla();

?>
