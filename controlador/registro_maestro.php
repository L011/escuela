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


	  $o = new registro_maestro(); //ahora nuestro objeto //se llama $o y es una copia en memoria de la
	  //clase registro_maestro

	  if(!empty($_POST)){

		  //como ya sabemos si estamos aca es //porque se recibio alguna informacion
		  //de la vista, por lo que lo primero que //debemos hacer ahora que tenemos una
		  //clase es guardar esos valores en ella //con los metodos set
		  $accion = $_POST['accion'];

		  if($accion=='consultar'){
			 echo  $o->consultar();
		  }
		  elseif($accion=='consultatr'){
			 $o->set_cedula($_POST['cedula']);
			 echo  $o->consultatr();
		  }
		  elseif($accion=='obtienefecha'){
			 echo $o->obtienefecha();
		  }
		  elseif($accion=='eliminar'){
			 $o->set_cedula($_POST['cedula']);
			 echo  $o->eliminar();
		  }
		  else{
			  $o->set_cedula($_POST['cedula']);
			  $o->set_apellidos($_POST['apellidos']);
			  $o->set_nombres($_POST['nombres']);
			  $o->set_fechadenacimiento($_POST['fechadenacimiento']);
			  $o->set_correo($_POST['correo']);
			  $o->set_telefono($_POST['telefono']);
			  $o->set_sexo($_POST['sexo']);
				$o->set_cargo($_POST['cargo']);

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
