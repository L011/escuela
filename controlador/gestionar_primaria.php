<?php

//llamada al archivo que contiene la clase
//usuarios, en ella estara el codigo que me //permitirá
//guardar, consultar y modificar dentro de mi base //de datos


//lo primero que se debe hacer es verificar al //igual que en la vista que exista el archivo
if (!is_file("modelo/".$pagina.".php")){
	//alli pregunte que si no es archivo se niega //con !
	//si no existe envio mensaje y me salgo
	echo "Falta definir la clase ".$pagina;
	exit;
}
require_once("modelo/".$pagina.".php");
  if(is_file("vista/".$pagina.".php")){

	  //bien si estamos aca es porque existe la //vista y la clase
	  //por lo que lo primero que debemos hace es //realizar una instancia de la clase
	  //instanciar es crear una variable local, //que contiene los metodos de la clase
	  //para poderlos usar


	  $o = new primaria(); //ahora nuestro objeto //se llama $o y es una copia en memoria de la
	  //clase primaria

	  if(!empty($_POST)){

		  //como ya sabemos si estamos aca es //porque se recibio alguna informacion
		  //de la vista, por lo que lo primero que //debemos hacer ahora que tenemos una
		  //clase es guardar esos valores en ella //con los metodos set
		  $accion = $_POST['accion'];

		  if($accion=='consultar'){
			 echo  $o->consultar();
		  }

		  elseif($accion=='consultarepre'){
			 $o->set_cedula_r($_POST['cedula_r']);
			 echo  $o->consultarepre();
		  }

		  elseif($accion=='consultatr'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->consultatr();
		  }
			elseif($accion=='consultamama'){
			 $o->set_ciMadre($_POST['ciMadre']);
			 echo  $o->consultamama();
		  }

			elseif($accion=='consultapapa'){
			 $o->set_ciPadre($_POST['ciPadre']);
			 echo  $o->consultapapa();
		  }
		  elseif($accion=='consultahermanos'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->consultahermanos();
		  }
		  elseif($accion=='eliminar'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->eliminar();
		  }
		  else{
				
			  $o->set_cedulaEscolar($_POST['cedulaEscolar']);
				$o->set_cedula_r($_POST['cedula_r']);
			  $o->set_apellidoPri($_POST['apellidoPri']);
			  $o->set_nombrePri($_POST['nombrePri']);
				$o->set_sexo($_POST['sexo']);
			  $o->set_fechaNaciPri($_POST['fechaNaciPri']);
			  $o->set_estado_p($_POST['estado_p']);
			  $o->set_ciudad_p($_POST['ciudad_p']);
			  $o->set_vive_con($_POST['vive_con']);
				$o->set_retirada($_POST['retirada']);
				$o->set_canaima($_POST['canaima']);

				$o->set_orden($_POST['orden']);
				$o->set_nacionalidad($_POST['nacionalidad']);
				$o->set_c_id($_POST['c_id']);

				$o->set_pesoActual($_POST['pesoActual']); //agregarrr set
				$o->set_tallaActual($_POST['tallaActual']); //agregarrr set
				$o->set_camisa($_POST['camisa']); //agregarrr set
				$o->set_pantalon($_POST['pantalon']); //agregarrr set
				$o->set_calzado($_POST['calzado']); //agregarrr set




			  $o->set_apellidoMadre($_POST['apellidoMadre']);
			  $o->set_nombreMadre($_POST['nombreMadre']);
			  $o->set_ciMadre($_POST['ciMadre']);
			  $o->set_telefonoMadre($_POST['telefonoMadre']);
			  $o->set_direccionMadre($_POST['direccionMadre']);

			  $o->set_apellidoPadre($_POST['apellidoPadre']);
			  $o->set_nombrePadre($_POST['nombrePadre']);
			  $o->set_ciPadre($_POST['ciPadre']);
			  $o->set_telefonoPadre($_POST['telefonoPadre']);
			  $o->set_direccionPadre($_POST['direccionPadre']);

				$o->set_nombre_hermano1($_POST['nombre_hermano1']);
				$o->set_grado_hermano1($_POST['grado_hermano1']);
				$o->set_turno_hermano1($_POST['turno_hermano1']);

				$o->set_nombre_hermano2($_POST['nombre_hermano2']);
				$o->set_grado_hermano2($_POST['grado_hermano2']);
				$o->set_turno_hermano2($_POST['turno_hermano2']);

				$o->set_nombre_hermano3($_POST['nombre_hermano3']);
				$o->set_grado_hermano3($_POST['grado_hermano3']);
				$o->set_turno_hermano3($_POST['turno_hermano3']);

				$o->set_nombre_hermano4($_POST['nombre_hermano4']);
				$o->set_grado_hermano4($_POST['grado_hermano4']);
				$o->set_turno_hermano4($_POST['turno_hermano4']);

				$o->set_infom($_POST['infom']);
				$o->set_colab_c($_POST['colab_c']);
				$o->set_observacion($_POST['observacion']);



/*

			  $o->set_nombre_hermano1($_POST['nombre_hermano1']);
			  $o->set_nombre_hermano2($_POST['nombre_hermano2']);
			  $o->set_nombre_hermano3($_POST['nombre_hermano3']);
			  $o->set_nombre_hermano4($_POST['nombre_hermano4']);
			  $o->set_quienRetirada($_POST['quienRetirada']);
			  $o->set_quienTelefono($_POST['quienTelefono']);
*/


			  if($accion=='incluir'){
				echo  $o->incluir();
			  }
			  elseif($accion=='modificar'){
				echo  $o->modificar();
			  }
		  }
		  exit;
	  }


	  require_once("vista/".$pagina.".php");
  }
  else{
	  echo "pagina en construccion";
  }
?>
