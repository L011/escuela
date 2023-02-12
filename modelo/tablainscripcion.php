<?php

	require_once('datos.php');



	

	class inscripcion extends datos{

		

		
			private $cedulaMaestro;

		function set_cedulaMaestro($valor)
		{
			// code...

			$this->cedulaMaestro = $valor;
		}



		function llenarTablaMaestro(){






			$co = $this->conecta();
			$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			try{

				$resultado = $co->prepare("SELECT es.cedula_e, es.nombre, es.apellido, s.grado, s.seccion, s.anio_escolar  FROM seccion s
					INNER JOIN seccion_estudiante e on s.id=e.seccion_1
					INNER JOIN empleados eo on s.cedula_mm=eo.cedula
					RIGHT JOIN estudiante es on es.cedula_e= e.cedula_es
					WHERE eo.cedula =:cedula OR eo.cedula IS NULL");

				$resultado->bindValue(':cedula',$this->cedulaMaestro);
			
				$resultado->execute();

				 $rows = $resultado->rowCount();

       			 if ($rows > 0) {

					
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

				}
				
				

			}catch(Exception $e){
				$envia = array('resultado'=>$e->getMessage());
				return json_encode($envia);
			}

		}


		function llenarTablaAdministrador(){



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

	$cedulaU = $_POST['cedulau'];
	$cargoU = $_POST['cargou'];


	if ($cargoU == "Maestro") {
		// code...
		$o->set_cedulaMaestro($cedulaU);
		echo $o->llenarTablaMaestro();

	}elseif ($cargoU == "Administrador") {
		// code...
	echo $o->llenarTablaAdministrador();
	}





		


	



?>

