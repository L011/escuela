<?php



    if (!is_file("modelo/".$pagina.".php")){
    //alli pregunte que si no es archivo se niega con !
    //si no existe envio mensaje y me salgo
    echo "Falta definir la clase ".$pagina;
    exit;
    }
    else{
    //llamda al archivo que contiene la clase
    //rusuarios, en ella estara el codigo que me premitira
    //generar el reporte haciando uso de la libreria DOMPDF
    require_once('modelo/constancia.php');
    }


    if(is_file("vista/".$pagina.".php")){


     $accion = '';
      $o = new constancia();
      
      if(!empty($_POST)){

        $accion = $_POST['accion'];


        if($accion=='consultatr'){
             $o->set_cedulaEscolar($_POST['cedulaEscolar']);
             echo  $o->consultatr();
          }

       elseif($accion == 'generar') {

      
      //bien si estamos aca es porque existe la vista y la clase
      //por lo que lo primero que debemos hace es realizar una instancia de la clase
      //instanciar es crear una variable local, que contiene los metodos de la clase
      //para poderlos usar
          $o->set_cedulaEscolar($_POST['cedulaEscolar']);
          $o->set_cedulaUsuario($_POST['user']);
          $o->generarPDF();

       }
          exit;
      }

      require_once("vista/".$pagina.".php"); 
    }      
  else{
      echo "pagina en construccion";
  }

?>