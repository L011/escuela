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


	  $o = new preescolar(); //ahora nuestro objeto //se llama $o y es una copia en memoria de la
	  //clase primaria

	  if(!empty($_POST)){

		  //como ya sabemos si estamos aca es //porque se recibio alguna informacion
		  //de la vista, por lo que lo primero que //debemos hacer ahora que tenemos una
		  //clase es guardar esos valores en ella //con los metodos set
		  $accion = $_POST['accion'];

		  if($accion=='consultar'){
			 echo  $o->consultar();
		  }
		  elseif($accion=='consultatr'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->consultatr();
		  }
		  elseif($accion=='eliminar'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->eliminar();
		  }
		  else{
				$o->set_grado($_POST['grado']);
				$o->set_seccion($_POST['seccion']);
				$o->set_turno($_POST['turno']);
				$o->set_anioe($_POST['anioe']);
				$o->set_maestro($_POST['maestro']);

			  $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			  $o->set_cedula_r($_POST['cedula_r']);
			  $o->set_cedula_m($_POST['cedula_m']);
			  $o->set_apellidoPri($_POST['apellidoPri']);
			  $o->set_nombrePri($_POST['nombrePri']);
			  $o->set_sexo($_POST['sexo']);
			  $o->set_fechaNaciPri($_POST['fechaNaciPri']);
			  $o->set_estado_p($_POST['estado_p']);
			  $o->set_ciudad_p($_POST['ciudad_p']);
			  $o->set_vive_con($_POST['vive_con']);
			  $o->set_canaima($_POST['canaima']);

				$o->set_pesoActual($_POST['pesoActual']); //agregarrr set
				$o->set_tallaActual($_POST['tallaActual']); //agregarrr set
				$o->set_camisa($_POST['camisa']); //agregarrr set
				$o->set_pantalon($_POST['pantalon']); //agregarrr set
				$o->set_calzado($_POST['calzado']); //agregarrr set




			  



/*

			  $o->set_nombre_hermano1($_POST['nombre_hermano1']);
			  $o->set_nombre_hermano2($_POST['nombre_hermano2']);
			  $o->set_nombre_hermano3($_POST['nombre_hermano3']);
			  $o->set_nombre_hermano4($_POST['nombre_hermano4']);
			  $o->set_quienRetirada($_POST['quienRetirada']);
			  $o->set_quienTelefono($_POST['quienTelefono']);

				$o->set_infom($_POST['infom']);
				$o->set_colab_c($_POST['colab_c']);
				$o->set_observacion($_POST['observacion']);
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
