<?php

	require_once('datos.php');
	

	class registro_maestro extends datos{

		function consultatr(){




		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT s.grado, s.seccion, s.anio_escolar, s.cedula_mm FROM seccion s 
INNER JOIN empleados e ON s.cedula_mm= e.cedula
");

			

			
			$rs = $resultado->fetchAll(PDO::FETCH_FUNC, fn ($grado, $seccion, $anio_escolar, $cedula_mm) => [$grado, $seccion, $anio_escolar, $cedula_mm] );
			echo json_encode(['data' => $rs,]);

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}
		}
}


$o = new registro_maestro();

	echo  $o->consultatr();

?>
