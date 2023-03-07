<?php
error_reporting(E_ALL | E_STRICT |  E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);
require_once('dompdf/vendor/autoload.php'); //archivo para cargar las funciones de la 
		//libreria DOMPDF
		// lo siguiente es hacer rerencia al espacio de trabajo
use Dompdf\Dompdf; //Declaracion del espacio de trabajo

require_once('modelo/datos.php');


class matricula extends datos{
	
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private
	
	private $grado; //recuerden que en php, las variables no tienen tipo predefinido
	private $seccion;
	
	
	//Ok ya tenemos los atributos, pero como son privados no podemos acceder a ellos desde fueran
	//por lo que debemos colcoar metodos (funciones) que me permitan leer (get) y colocar (set)
	//valores en ello, esto es  muy mal llamado geters y seters por si alguien se los pregunta
	
	function set_grado($valor){
		$this->grado = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
		//a un elemento de this, es decir esta clase
		//luego el nombre del elemento sin el $
	}
	//lo mismo que se hizo para cedula se hace para usuario y clave
	
	function set_seccion($valor){
		$this->seccion = $valor;
	}


	function llenarseccion(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
	
			$resultado = $co->query("SELECT DISTINCT s.seccion FROM seccion s
			INNER JOIN seccion_estudiante e ON s.id=e.seccion_1
			WHERE s.grado='$this->grado'");

			$cuenta = $co->query("SELECT COUNT(seccion) AS numero FROM seccion s
			INNER JOIN seccion_estudiante e ON s.id=e.seccion_1
			WHERE s.grado='$this->grado'");

			if($resultado){

				$respuesta = '';
				$respuesta = $respuesta."<option value=''>Seleccionar</option>";

				foreach($resultado as $r){

					$respuesta = $respuesta."<option value=";

					$respuesta = $respuesta."'";

					$respuesta = $respuesta.$r['seccion'];

					$respuesta = $respuesta."'";

					$respuesta = $respuesta.">";
					$respuesta = $respuesta.$r['seccion'];
					
					$respuesta = $respuesta."</option>";

				}
				return $respuesta;

			}
			else{
				return '';
			}


		}catch(Exception $e){
			return false;
		}
	}
	
	
	function generarPDF(){
		
		//El primer paso es generar una consulta SQl tal cual como lo hemos hecho en las 
		//clases anteriores, en este caso la consulta sera sobre la tabla usuarios
		//y tendra como parametros para filtro la cedula y el usuario
		
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
			
			
			$resultado = $co->prepare("Select e.nombre, e.apellido, e.cedula_e, e.sexo, e.fecha_n, e.estado_n, e.ciudad_n, s.talla, s.peso, s.calzado, s.camisa, s.pantalon, s.representante, r.nombre_r, r.apellido_r, r.paren_repre, r.telefono_r, se.anio_escolar, se.seccion, em.cedula, em.nombres, em.apellidos  from seccion_estudiante s 
				INNER JOIN estudiante e ON e.cedula_e = s.cedula_es
                INNER JOIN representante r ON r.cedula = s.representante
                INNER JOIN seccion se ON se.id = s.seccion_1
                INNER JOIN empleados em ON em.cedula = se.cedula_mm
				WHERE s.seccion_1=(SELECT id FROM seccion WHERE grado=:grado and seccion=:seccion) ");
			$resultado->bindValue(':grado',$this->grado);
			$resultado->bindValue(':seccion',$this->seccion);

			$resultado->execute();


			$cuenta = $co->query("SELECT COUNT(seccion) AS numero FROM seccion s
			INNER JOIN seccion_estudiante e ON s.id=e.seccion_1
			WHERE s.grado='$this->grado' and s.seccion='$this->seccion'");

			$admin = $co->query("SELECT cedula, nombres, apellidos, telefono FROM `empleados` 
			WHERE cargo='Administrador'");


			$cuenta_m = $co->query("SELECT es.sexo, COUNT(*) as cuenta
			FROM seccion s
			INNER JOIN seccion_estudiante e ON s.id=e.seccion_1
		    INNER JOIN estudiante es ON es.cedula_e= e.cedula_es
			WHERE es.sexo='m' and s.grado='$this->grado' and s.seccion='$this->seccion' ");

			$cuenta_f = $co->query("SELECT es.sexo, COUNT(*) as cuenta
			FROM seccion s
			INNER JOIN seccion_estudiante e ON s.id=e.seccion_1
		    INNER JOIN estudiante es ON es.cedula_e= e.cedula_es
			WHERE es.sexo='f' and s.grado='$this->grado' and s.seccion='$this->seccion' ");

			$masculino = $cuenta_m->fetchAll(PDO::FETCH_BOTH);
			$femenino = $cuenta_f->fetchAll(PDO::FETCH_BOTH);

			$num = $cuenta->fetchAll(PDO::FETCH_BOTH);
			
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			$fila_admin = $admin->fetchAll(PDO::FETCH_BOTH);
			
			//aqui es donde comienza el cambio, debido a que se va a armar una variable en memoria
			//con el contenido html que se enviara a la libreria dompdf
			$html="";
			$html = $html."<html>";
$html = $html."<head>";
	$html = $html."<meta charset='utf-8'>";
	$html = $html."<meta name='viewport' content='width=device-width, initial-scale=1'>";
$html = $html."</head>";
$html = $html."<style type='text/css'> body{ font-family: DejaVu Sans; }</style>";
$html = $html."<body style='text-align: center; align-content: center;font-size: 0.6em' >";


	$html = $html."<div style='display:table;width:100%'>";
	$html = $html."	<table style='font-size: 0.6em;border-collapse: collapse;width:100%'>";
			$html = $html."<tbody>";

				$html = $html."<tr> ";
					$html = $html."<td>Imagen del ministerio</u>";
					$html = $html."</td>";

					$html = $html."<td><h1>Matricula Inicial</h1></u>";
					$html = $html."</td>";

					$html = $html."<td> Imagen de la institucion</u>";
					$html = $html."</td>";
				$html = $html."</tr>";

				$html = $html."<tr>";
					$html = $html."<td>Institución: <u> Unidad Educativa Nacional ";
					$html = $html.'"Divino niño"</u>';

					$html = $html."</td>";

					$html = $html."<td>Dependencia:<u> Nacional </u>";
					$html = $html."</td>";

					$html = $html."<td> Codigo: <u> 02347823523</u>";
					$html = $html."</td>";
				$html = $html."</tr>";

				$html = $html."<tr> ";
					$html = $html."<td> Año escolar:<u>".$fila[0]['anio_escolar']." </u>";
					$html = $html."</td>";

					$html = $html."<td> Ubicacion: <u> Urbana </u>";
					$html = $html."</td>";

					$html = $html."<td> Municipio: <u> Iribarren </u>";
					$html = $html."</td>";

				
				$html = $html."</tr>";

				$html = $html."<tr> ";
					$html = $html."<td> Direccion: <u> Av 2 Divino Niño entre calles 3A y 4. Llano Alto </u>";
					$html = $html."</td>";

					$html = $html."<td> Telefono:<u> ----------------- </u>";
					$html = $html."</td>";

					$html = $html."<td> Turno: <u> ".$fila[0]['seccion']." </u>";
					$html = $html."</td>";

					$html = $html."<td> Matricula: <u> M : ".$masculino[0]['cuenta']." </u>    <u> F: ".$femenino[0]['cuenta']." </u>";
					$html = $html."</td>";

					$html = $html."<td> Total: <u>".$num[0]['numero']."</u>";
					$html = $html."</td>";
				$html = $html."</tr>";

				$html = $html."<tr> ";
					$html = $html."<td> Directora: <u> ".$fila_admin[0]['nombres']." 
					".$fila_admin[0]['apellidos']." </u>";
					$html = $html."</td>";

					$html = $html."<td> Cedula de identidad: <u> ".$fila_admin[0]['cedula']." </u>";
					$html = $html."</td>";

					$html = $html."<td> Telefono: <u> ".$fila_admin[0]['telefono']." </u>";
					$html = $html."</td>";
					
				$html = $html."</tr>";
				$html = $html."<tr> ";
					$html = $html."<td> Maestro (a): <u>".$fila[0]['nombres']."
					".$fila[0]['apellidos']."</u>";
					$html = $html."</td>";

					$html = $html."<td> Cedula de identidad: <u>".$fila[0]['cedula']." </u>";
					$html = $html."</td>";

					
				$html = $html."</tr>";

				



			$html = $html."</tbody>";

		$html = $html."</table>";
	$html = $html."</div>";


			$html = $html."<table style='font-size: 0.6em;border-collapse: collapse;width:100%' border='1'>";
			$html = $html."<thead>";

			$html = $html."<tr>";
			$html = $html."<th colspan='1'></th>";
			$html = $html."<th colspan='6'>Datos del Niño</th>";
			$html = $html."<th colspan='3'> Talla</th>";
			$html = $html."<th colspan='1'></th>";
			$html = $html."<th colspan='4'>Datos Representante</th>";


			$html = $html."</tr>";
			$html = $html."<tr>";


			$html = $html."<th>N°</th>";
			$html = $html."<th>Nombre y apellido</th>";
			$html = $html."<th>Cedula Estudiantil</th>";
			$html = $html."<th>Sexo</th>";

			$html = $html."<th>Fecha Nacimiento</th>";
			$html = $html."<th>Entidad Federal</th>";
			$html = $html."<th>Lugar de Nacimiento</th>";
			$html = $html."<th>C</th>";
			$html = $html."<th>P</th>";
			$html = $html."<th>Z</th>";

			$html = $html."<th>Peso</th>";

			$html = $html."<th>Apellido y nombre del Representante Legal</th>";

			$html = $html."<th>C.I.</th>";
			$html = $html."<th>Parentesco</th>";
			$html = $html."<th>Telefono</th>";

			$html = $html."</tr>";
			$html = $html."</thead>";
			$html = $html."<tbody>";
			if($fila){
				$a='1';
				
				foreach($fila as $f){
					$html = $html."<tr>";

					$html = $html."<th>";

					$html = $html.$a;
					$a++;

					$html = $html."</th>";
					$html = $html."<td style='text-align:center'>".$f['nombre']." ".$f['apellido']."</td>";
					
					$html = $html."<td style='text-align:center'>".$f['cedula_e']."</td>";
					$html = $html."<td style='text-align:center'>".$f['sexo']."</td>";
				
					$html = $html."<td style='text-align:center'>".$f['fecha_n']."</td>";
					$html = $html."<td style='text-align:center'>".$f['estado_n']."</td>";
					$html = $html."<td style='text-align:center'>".$f['ciudad_n']."</td>";
					$html = $html."<td style='text-align:center'>".$f['camisa']."</td>";

					$html = $html."<td style='text-align:center'>".$f['pantalon']."</td>";
					$html = $html."<td style='text-align:center'>".$f['calzado']."</td>";
					$html = $html."<td style='text-align:center'>".$f['peso']."</td>";
					$html = $html."<td style='text-align:center'>".$f['apellido_r']." ".$f['nombre_r']."</td>";
					$html = $html."<td style='text-align:center'>".$f['representante']."</td>";
					$html = $html."<td style='text-align:center'>".$f['paren_repre']."</td>";
					$html = $html."<td style='text-align:center'>".$f['telefono_r']."</td>";
					$html = $html."</tr>";
				}

				
				
			}
			else{
				
				
			}
			$html = $html."</tbody>";
			$html = $html."</table>";
		    $html = $html."</div></div></div>";
			$html = $html."</body></html>";
			
			
		}catch(Exception $e){
			
		}

		
		//comentar esto al probar en su casa
		//echo $html;
     	//exit;
      //fin de comentario

 
		// Instanciamos un objeto de la clase DOMPDF.
		$pdf = new DOMPDF();
		 
		// Definimos el tamaño y orientación del papel que queremos.
		$pdf->set_paper("A4", "landscape");
		 
		// Cargamos el contenido HTML.
		$pdf->load_html($html);
		 
		// Renderizamos el documento PDF.
		$pdf->render();
		
		// Enviamos el fichero PDF al navegador.
		$pdf->stream("Matricula.pdf", array("Attachment" => false));


		exit;
		
	}
	
	
	
	
	
	
	
	
}
?>
