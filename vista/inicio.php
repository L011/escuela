<html lang="en">
  <head>
    <?php
        require_once("comunes/encabezado.php");
        
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Iniciar Sesión</title>


<meta name="theme-color" content="#563d7c">


    <style>
      
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>



  <body class="text-center">


    <h1>Unidad Educativa Nacional<hr> "Divino Niño"</h1>

<form class="form-signin" method="post" action="" id="f">
  <input type="text" name="accion_inicio_sesion" style="display:none">

  <h1 class="h3 mb-3 font-weight-normal">Bienvenido</h1>


  <div id="mensajes" style="display:none">
<?php
  if(!empty($mensaje)){
    echo $mensaje;
  }
?>  
</div>

  <div class="form-group row">
  <label for="usuario" >Ingresar Cedula</label>
  <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Cedula" 
    pattern="[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]{4,12}" 
    required 
    maxlength="10" 
    minlength="4" 
    title="Solo numeros entre 4 y 10 caracteres" autofocus>
</div>
<div class="form-group row">
  <label for="contra" class="">Contraseña</label>
  <input type="password" id="contra" name="contra" class="form-control" placeholder="Contraseña" 
     pattern="[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]{6,12}" 
     required 
     maxlength="12" 
     minlength="3" 
     title="Solo letras y/o numeros y/o # - entre 6 y 12 caracteres"


  >
</div>


  <button class="btn btn-lg btn-primary btn-block" id="iniciar">Ingresar</button>
 <p class="mt-5 mb-3 text-muted">&copy; Luis Colmenarez</p>
</form>

 



  <div class="container" style="display: contents" id="modal1">    
    <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="modalcerrar">&times;</button>
                <div id="cabezerademodal">
          </div>
         </div>
         <div class="modal-body">
                <h4>Resultado</h4>
                <div id="contenidodemodal">
          </div>    
         </div>
         <div class="modal-footer">
            <a href="#" data-dismiss="modal" class="btn btn-primary">
        <span class="glyphicon glyphicon-home"></span>
        Cerrar</a>
         </div>
        </div>
       </div>
    </div>
</div>


  </body>

  <script type="text/javascript" src="js/inicio_sesion.js" ></script>
</html>
  