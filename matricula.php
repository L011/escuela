<?php
error_reporting(E_ALL | E_STRICT |  E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);
require_once('dompdf/vendor/autoload.php'); //archivo para cargar las funciones de la 
		//libreria DOMPDF
		// lo siguiente es hacer rerencia al espacio de trabajo
use Dompdf\Dompdf; //Declaracion del espacio de trabajo

require_once('modelo/datos.php');


class rusuarios extends datos{
	
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private
	
	private $cedula; //recuerden que en php, las variables no tienen tipo predefinido
	private $usuario;
	
	
	//Ok ya tenemos los atributos, pero como son privados no podemos acceder a ellos desde fueran
	//por lo que debemos colcoar metodos (funciones) que me permitan leer (get) y colocar (set)
	//valores en ello, esto es  muy mal llamado geters y seters por si alguien se los pregunta
	
	function set_cedula($valor){
		$this->cedula = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
		//a un elemento de this, es decir esta clase
		//luego el nombre del elemento sin el $
	}
	//lo mismo que se hizo para cedula se hace para usuario y clave
	
	function set_usuario($valor){
		$this->usuario = $valor;
	}
	
	//el siguiente metodo enlza con la la base de datos
	//crea el html a partir de la consulta y envia los datos a la
	//libreria DOMPDF
	function generarPDF(){
		
		//El primer paso es generar una consulta SQl tal cual como lo hemos hecho en las 
		//clases anteriores, en este caso la consulta sera sobre la tabla usuarios
		//y tendra como parametros para filtro la cedula y el usuario
		
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
			
			
			$resultado = $co->prepare("Select * from usuarios where cedula like :cedula and 
										usuario like :usuario");
			$resultado->bindValue(':cedula','%'.$this->cedula.'%');
			$resultado->bindValue(':usuario','%'.$this->usuario.'%');

			$resultado->execute();
			
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			
			//aqui es donde comienza el cambio, debido a que se va a armar una variable en memoria
			//con el contenido html que se enviara a la libreria dompdf
			$html = "<html><head></head><body>";
			$html = $html."<div style='display:table;width:100%;border:solid'>";
			$html = $html."<div style='display:table-row;width:100%;border:solid'>";
			$html = $html."<div style='display:table-cell;width:100%;border:solid'>";
			$html = $html."<table style='width:100%'>";
			$html = $html."<thead>";
			$html = $html."<tr>";
			$html = $html."<th>Cedula</th>";
			$html = $html."<th>Usuario</th>";
			$html = $html."</tr>";
			$html = $html."</thead>";
			$html = $html."<tbody>";
			if($fila){
				
				foreach($fila as $f){
					$html = $html."<tr>";
					$html = $html."<td style='text-align:center'>".$f['cedula']."</td>";
					$html = $html."<td style='text-align:center'>".$f['usuario']."</td>";
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
		echo $html;
        exit;
        //fin de comentario

 
		// Instanciamos un objeto de la clase DOMPDF.
		$pdf = new DOMPDF();
		 
		// Definimos el tamaño y orientación del papel que queremos.
		$pdf->set_paper("A4", "portrait");
		 
		// Cargamos el contenido HTML.
		$pdf->load_html(utf8_decode($html));
		 
		// Renderizamos el documento PDF.
		$pdf->render();
		
		// Enviamos el fichero PDF al navegador.
		$pdf->stream('ReporteUsuarios.pdf', array("Attachment" => false));
		
		
		
		
	}
	
	
	
	
	
	
	
	
}
?>
