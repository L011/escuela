<?php

	require_once('datos.php');
	

	class inscripcion extends datos{

		function tabla(){




		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT es.cedula_e, es.nombre, es.apellido, s.grado, s.seccion, s.anio_escolar  FROM seccion s
				INNER JOIN seccion_estudiante e on s.id=e.seccion_1
				INNER JOIN empleados eo on s.cedula_mm=eo.cedula
				RIGHT JOIN estudiante es on es.cedula_e= e.cedula_es");

			

			
			$rs = $resultado->fetchAll(PDO::FETCH_FUNC, fn (
				$cedula,
			 	$apellidos,
			 	$nombres,
			 	$grado, 
			 	$seccion,
			 	$anio_escolar 
			 ) =>
			 [
			 	$cedula,
			 	$apellidos,
			 	$nombres,
			 	$grado, 
			 	$seccion,
			 	$anio_escolar 
			 ] );
			echo json_encode(['data' => $rs,]);

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}
		}
}


$o = new inscripcion();

	echo  $o->tabla();

?>
