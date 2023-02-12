<?php
error_reporting(E_ALL | E_STRICT |  E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);
require_once('dompdf/vendor/autoload.php'); //archivo para cargar las funciones de la 
		//libreria DOMPDF
		// lo siguiente es hacer rerencia al espacio de trabajo
use Dompdf\Dompdf; //Declaracion del espacio de trabajo

require_once('modelo/datos.php');


class constancia extends datos{
	
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private
	
	private $cedulaEscolar; //recuerden que en php, las variables no tienen tipo predefinido
	private $cedulaUsuario;
	
	
	//Ok ya tenemos los atributos, pero como son privados no podemos acceder a ellos desde fueran
	//por lo que debemos colcoar metodos (funciones) que me permitan leer (get) y colocar (set)
	//valores en ello, esto es  muy mal llamado geters y seters por si alguien se los pregunta
	
	function set_cedulaEscolar($valor){
		$this->cedulaEscolar = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
		//a un elemento de this, es decir esta clase
		//luego el nombre del elemento sin el $
	}

	function set_cedulaUsuario($valor){
		$this->cedulaUsuario = $valor;
	}
	//lo mismo que se hizo para cedula se hace para usuario y clave



	function consultatr(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT es.cedula_e, es.nombre, es.apellido, s.grado, s.seccion, s.anio_escolar  FROM seccion s
					INNER JOIN seccion_estudiante e on s.id=e.seccion_1
					INNER JOIN empleados eo on s.cedula_mm=eo.cedula
					INNER JOIN estudiante es on es.cedula_e= e.cedula_es
                    WHERE es.cedula_e ='$this->cedulaEscolar'");

			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}

			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}
	
	
	
	function generarPDF(){
		
		//El primer paso es generar una consulta SQl tal cual como lo hemos hecho en las 
		//clases anteriores, en este caso la consulta sera sobre la tabla usuarios
		//y tendra como parametros para filtro la cedula y el usuario
		
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
			
			$resultado = $co->prepare("Select es.cedula_e, es.nombre, es.apellido, es.ciudad_n, es.fecha_n, s.grado, s.seccion, s.anio_escolar, eo.cedula, eo.nombres, eo.apellidos 
				FROM seccion s 
				INNER JOIN seccion_estudiante e on s.id=e.seccion_1 
				INNER JOIN empleados eo on s.cedula_mm=eo.cedula 
				INNER JOIN estudiante es on es.cedula_e= e.cedula_es 
				WHERE es.cedula_e= :cedula AND eo.cedula=:cedulau;
				 ");

			$resultado->bindValue(':cedula',$this->cedulaEscolar);
			$resultado->bindValue(':cedulau',$this->cedulaUsuario);
			
			$resultado->execute();
			
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			$html =$html."<html><head><meta charset='utf-8'></head><style type='text/css'> body{ font-family: DejaVu Sans; }</style>";
			$html =$html."<body style='font-family: sans-serif;text-align: center; align-content: center;' >";
			$html =$html."<p style='FONT-STYLE: italic;'>			
			    		REPÚBLICA BOLIVARIANA DE VENEZUELA<br>
						MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÓN<br>
						UNIDAD EDUCATIVA NACIONAL ";
			$html= $html.' "DIVINO NIÑO"';


			$html= $html."<br>TAMACA - EDO LARA<br><br><br>	CONSTANCIA DE ESTUDIOS</p><br><br><br>	";


			
			//aqui es donde comienza el cambio, debido a que se va a armar una variable en memoria
			//con el contenido html que se enviara a la libreria dompdf
			
			if($fila){
				
				foreach($fila as $f){

					$nacimiento = new DateTime($f['fecha_n']);
					$ahora = new DateTime(date("Y-m-d"));
					$diferencia= $ahora->diff($nacimiento);
					$fecha_na =$diferencia->format("%y");
					$dia = date("d");
					$mes =date("m");
					$anio =date("Y");
					
			
				$html= $html."<p style='line-height: 24px;margin-left: 5rem;margin-right: 5rem;font-style: italic;'>Quien suscribe, ";

				$html= $html."<u>";
				$html= $html.$f['nombres'];
				$html= $html." ";
				$html= $html.$f['apellidos'];
				$html= $html."</u>";

				$html= $html."; titular de la cedula de identidad N.: ";

				$html= $html."<u>";
				$html= $html.$f['cedula'];
				$html= $html."</u>";

				$html= $html." ,Subdirector Academinco (e) de la Unidad Educativa Nacional";
				$html= $html.' "Divino Niño"';
				$html= $html.", ubicada en la
				 			hace constar por medio de la presente que el (la) estudiante: ";
				

				$html= $html."<u>";
				 $html= $html.$f['nombre'];
				 $html= $html." ";
				 $html= $html.$f['apellido'];
				 $html= $html." ";

				 $html= $html."</u>";

				 $html= $html."Cedula Escolar o Identidad: ";
				
				$html= $html."<u>";
				 $html= $html.$f['cedula_e'];
				 $html= $html."</u>";

				 $html= $html." ";

				
				 $html= $html." Nacido(a) en: ";

				 $html= $html."<u>";
				 $html= $html.$f['ciudad_n'];
				 $html= $html."</u> ";


				 $html= $html." de ";


				 $html= $html."<u>"; 
				 $html= $html.$fecha_na;
				 $html= $html."</u> ";

			
				 $html= $html." años de edad. Cursa en esta institucion el ";

				 $html= $html."<u>";
				 $html= $html.$f['grado'];
				 $html= $html."</u> ";

				 $html= $html." Grado, Seccion:";

				 $html= $html."<u>";
				 $html= $html.$f['seccion'];
				 $html= $html."</u> ";

				 
				 $html= $html."de Educacion Primaria durante el Año Escolar: ";

				 $html= $html."<u>";
				 $html= $html.$f['anio_escolar'];
				 $html= $html."</u> ";
				}

				
				
			}
			else{
				
				
			}
			

				$html= $html."</p>
			
					<p style='font-style: italic;'>
						
						Constancia que se expide en Tamaca; a los ";
				$html= $html.$dia;
				$html= $html." dias del mes  ";
				$html= $html.$mes;
				$html= $html." del año ";
				$html= $html.$anio;


				$html= $html."</p><br><br><br>
			
					<p>
						
						(SELLO)
					</p><br><br><br>
			
			
					<p style='font-style: italic;'>
							
						Lcda. XXXXXX XXXXXXXX<br>
						C.I. N° V-9893749834<br>
						Directora	
			
			
					</p>
			</body>
			</html>";
			
			
		}catch(Exception $e){
			
		}

		
		//comentar esto al probar en su casa
		//echo $html;
     	//exit;
      //fin de comentario

 
		// Instanciamos un objeto de la clase DOMPDF.
		$pdf = new DOMPDF();
		 
		// Definimos el tamaño y orientación del papel que queremos.
		$pdf->set_paper("A4", "portrait");
		 
		// Cargamos el contenido HTML.
		$pdf->load_html($html);
		 
		// Renderizamos el documento PDF.
		$pdf->render();
		
		// Enviamos el fichero PDF al navegador.
		$pdf->stream("Matricula.pdf", array("Attachment" => false));


		exit;
		
	}	

	function obtener_edad($fecha_nacimiento){

		$nacimiento = new DateTime($fecha_nacimiento);
		$ahora = new DateTime(date("Y-m-d"));
		$diferencia= $ahora->diff($nacimiento);
		return $diferencia->format("%y");
	}

}
?>
