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


	  $o = new inscripcion(); //ahora nuestro objeto //se llama $o y es una copia en memoria de la
	  //clase primaria

	  if(!empty($_POST)){

		  //como ya sabemos si estamos aca es //porque se recibio alguna informacion
		  //de la vista, por lo que lo primero que //debemos hacer ahora que tenemos una
		  //clase es guardar esos valores en ella //con los metodos set
		  $accion = $_POST['accion'];

		  if($accion=='consultar'){
			 echo  $o->consultar();
		  }
		  elseif($accion=='maestro_seccion'){
			 $o->set_grado($_POST['grado']);
			 $o->set_seccion($_POST['seccion']);
			 echo  $o->maestro_seccion();
		  }

		  elseif($accion=='consultatr'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->consultatr();
		  }

		   elseif($accion=='llenargrado'){
			 echo  $o->llenargrado();		 
		  }
		  elseif($accion=='llenarseccion'){
		  	 $o->set_grado($_POST['grado']);
			 echo  $o->llenarseccion();			 
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
				$o->set_id($_POST['id']);

			  	$o->set_cedulaEscolar($_POST['cedulaEscolar']);
				
				$o->set_cedula_m($_POST['cedula_m']);
			
				

			  if($accion=='incluir'){
				echo  $o->incluir();
			  }
			  elseif($accion=='inscribir'){
				echo  $o->inscribir();
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
