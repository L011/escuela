<?php

	require_once('datos.php');
	

	class seccion extends datos{

		function tabla(){




		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT s.grado, s.seccion, s.anio_escolar, s.cedula_mm, e.nombres, e.apellidos FROM seccion s 
INNER JOIN empleados e ON s.cedula_mm= e.cedula
");

			

			
			$rs = $resultado->fetchAll(PDO::FETCH_FUNC, fn ($grado, $seccion, $anio_escolar,$nombres, $apellidos, $cedula_mm) => [$grado, $seccion, $anio_escolar,$nombres, $apellidos, $cedula_mm] );
			echo json_encode(['data' => $rs,]);

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}
		}
}


$o = new seccion();

	echo  $o->tabla();

?>
