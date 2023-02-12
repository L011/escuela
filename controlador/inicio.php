<?php
  //verifica que exista la vista de
  //la pagina

    if (!is_file("modelo/".$pagina.".php")){
      //alli pregunte que si no es archivo se niega //con !
      //si no existe envio mensaje y me salgo
      echo "Falta definir la clase ".$pagina;
      exit;
    }
    require_once("modelo/".$pagina.".php");


    if(is_file("vista/".$pagina.".php")){ 
    if(!empty($_POST)){
   
      $o = new inicio();
      
      $o->set_usuario($_POST['usuario']);
      $o->set_clave($_POST['contra']);

      $cedulaMaestro = $_POST['usuario'];
      

      $arrayEmpleado = $o->busca();

      $mensaje = $arrayEmpleado[0][0];
      $cedulaEmpleado = $arrayEmpleado[0][1];
      
      if($mensaje == "Administrador" or $mensaje=="Maestro"){
      session_start();
      $_SESSION['nivel'] = $arrayEmpleado;

      header("Location: .?pagina=principal");
      }
      else{
        $mensaje = "Usuario o clave invalida";
      }
      
    }
    
    require_once("vista/".$pagina.".php"); 
  }
  else{
	  echo "pagina en construccion";
  }
?>