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


	  $o = new representante(); //ahora nuestro objeto //se llama $o y es una copia en memoria de la
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
			  $o->set_apellidoRepre($_POST['apellidoRepre']);
			  $o->set_nombreRepre($_POST['nombreRepre']);
			  $o->set_telfRepre($_POST['telfRepre']);
			  $o->set_direccionRepre($_POST['direccionRepre']);
				$o->set_estudio($_POST['estudio']);
				$o->set_religion($_POST['religion']);
				$o->set_civil($_POST['civil']);
				$o->set_nacion($_POST['nacion']);
			  $o->set_ocupa($_POST['ocupa']);
				$o->set_parentesco($_POST['parentesco_con_niño']);
			  $o->set_correoRepre($_POST['correoRepre']);
			  $o->set_cuentaBancR($_POST['cuentaBancR']);
				$o->set_tipocuenta($_POST['cuenta_bancaria']);
				$o->set_banco($_POST['id_banco']);
			  $o->set_codigoCPR($_POST['codigoCPR']);
			  $o->set_serialCPR($_POST['serialCPR']);
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
