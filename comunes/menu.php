<div class="mb-4">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="?pagina=principal">U.E.N.<span class="text-primary"> Divino Niño</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
		        data-target="#navbarNavDropdown" 
		        aria-controls="navbarNavDropdown" aria-expanded="false" 
				aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> 
       
		<div class="collapse navbar-collapse" id="navbarNavDropdown">

     <?php  
      if(empty($_SESSION)){
      session_start();
      }
        if(isset($_SESSION['nivel'])){
       $nivel = $_SESSION['nivel'];
      }   
      else{
        $nivel = "";
      }
      ?> 

      <?php if ($nivel == "Administrador"){ ?>

		 <ul class="navbar-nav me-auto mb-2 mb-lg-0">   

          <li class="nav-item active">
            <a class="nav-link" href="?pagina=principal">Inicio</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="?pagina=registro">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=gestionar">Gestionar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=inscripciones">Inscripciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=reporte">Reportes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link"href="?pagina=cerrar_sesion">Cerrar Sesión</a>
          </li> 
          <li class="nav-item">
           <button type="button" class="btn btn-secondary"><?php echo $nivel; ?></button> 
          </li>       
      </ul>

<?php }
    else if ($nivel == "Maestro"){ ?>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">   

          <li class="nav-item active">
            <a class="nav-link" href="?pagina=principal">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=registro">Registro</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="?pagina=gestionar">Gestionar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=inscripciones">Inscripciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=reporte">Reportes</a>
          </li>
         

          <li class="nav-item">
            <a class="nav-link" href="?pagina=cerrar_sesion">Cerrar Sesión</a>
          </li> 
          <li class="nav-item">
           <button type="button" class="btn btn-secondary"><?php echo $nivel; ?></button> 
          </li>


               
      </ul>
 <?php } else{ ?>

        <a href="?pagina=inicio" class="button">
       Acceder
      </a>
       <?php 
        }
          ?>
     

		</div>
  </nav>
</div>  



