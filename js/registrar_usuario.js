
$(document).ready(function(){

	llenarLista();
	tabla();
	botonOff();
	//console.log("Main")
	//para obtener la fecha del servidor y calcular la
	//edad de nacimiento que debe ser mayor a 18

//VALIDACION DE DATOS
	$("#cedula").on("keypress",function(e){
		validarkeypress(/^[0-9-\b]*$/,e);
	});

	$("#cedula").on("keyup",function(){
		validarkeyup(/^[0-9]{7,8}$/,$(this),
		$("#scedula"),"El formato debe ser 9999999 ");
		if($("#cedula").val().length > 6){
		  var datos = new FormData();
		    datos.append('accion','consultatr');
			datos.append('cedula',$(this).val());
			enviaAjax(datos,'consultatr');
		}
		else {
			limpia2();
			botonOff();
			$("#incluir").prop('disabled', false);

		}
	});

	$("#clave").on("keypress",function(e){
		validarkeypress(/^[0-9a-zA-Z*\b-]*$/,e);
	});

	$("#clave").on("keyup",function(){
	    validarkeyup(/^[0-9a-zA-Z*\b-]{4,10}$/,$(this),$("#sclave"),"De 4 a 10 caracteres");
	});




//FIN DE VALIDACION DE DATOS



//CONTROL DE BOTONES

$("#incluir").on("click",function(){
	if(validarenvio()){
		//console.log("I1")
		var datos = new FormData();
		datos.append('accion','incluir');
		datos.append('cedula',$("#cedula").val());
		datos.append('clave',$("#clave").val());
		enviaAjax(datos,'incluir');
	}
});
$("#modificar").on("click",function(){

	confirmar();

	$('#si').on('click', function() {

		$('#botones').remove();
		
	if(validarenvio()){
		//console.log("M1");
		var datos = new FormData();
		datos.append('accion','modificar');
		datos.append('cedula',$("#cedula").val());
		datos.append('clave',$("#clave").val());
		enviaAjax(datos,'modificar');

	}

});
});

$("#eliminar").on("click",function(){


	confirmar();

	$('#si').on('click', function() {

		$('#botones').remove();
		

	if(validarkeyup(/^[0-9]{7,8}$/,$("#cedula"),
		$("#scedula"),"El formato debe ser 9999999")==0){
	    muestraMensaje("La cedula debe coincidir con el formato <br/>"+
						"99999999");

	}
	else{

		var datos = new FormData();
		datos.append('accion','eliminar');
		datos.append('cedula',$("#cedula").val());
		enviaAjax(datos,'eliminar');
	}

});

});

//FIN DE CONTROL DE BOTONES





});

function llenarLista() {
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');
}



//Validación de todos los campos antes del envio
function validarenvio(){
	if(validarkeyup(/^[0-9]{7,8}$/,$("#cedula"),
		$("#scedula"),"Formato 99999999")==0){
	    muestraMensaje("Formato 99999999");
		return false;
	}

	else if(validarkeyup(/^[0-9a-zA-Z*\b-]{4,10}$/,$("#clave"),
		 $("#sclave"),"De 4 a 8 caracteres")==0){
		 muestraMensaje("Clave De 4 a 8 caracteres");
	     return false;
	}
		llenarLista();
	return true;
}


//Funcion que muestra el modal con un mensaje
function muestraMensaje(mensaje){

	$("#contenidodemodal").html(mensaje);
			$("#mostrarmodal").modal("show");
			setTimeout(function() {
					$("#mostrarmodal").modal("hide");
			},5000);
}


//Función para validar por Keypress
function validarkeypress(er,e){

	key = e.keyCode;


    tecla = String.fromCharCode(key);


    a = er.test(tecla);

    if(!a){

		e.preventDefault();
    }


}
//Función para validar por keyup
function validarkeyup(er,etiqueta,etiquetamensaje,
mensaje){
	a = er.test(etiqueta.val());
	if(a){
		etiquetamensaje.text("");
		//console.log("A1");
		return 1;
	}
	else{
		etiquetamensaje.text(mensaje);
		return 0;
	}
}

//funcion para pasar de la lista a el formulario
function coloca(linea){
	botonOn();

	$("#cedula").val($(linea).find("td:eq(0)").text());
	$("#apellidos").val($(linea).find("td:eq(1)").text());
	$("#nombres").val($(linea).find("td:eq(2)").text());
	$("#cargo").val($(linea).find("td:eq(3)").text());
	$("#clave").val($(linea).find("td:eq(4)").text());
}

//funcion que envia y recibe datos por AJAX
function enviaAjax(datos,accion){

	$.ajax({
		    async: true,
            url: '', //la pagina a donde se envia por estar en mvc, se omite la ruta ya que siempre estaremos en la misma pagina
            type: 'POST',//tipo de envio
			contentType: false,
            data: datos,
			processData: false,
	        cache: false,
            success: function(respuesta) {//si resulto exitosa la transmision

			   if(accion=='consultar'){
				  $("#resultadoconsulta").html(respuesta);
				   }
			   else if(accion=='consultatr'){
				   lee = JSON.parse(respuesta);

				  //console.log(lee['resultado']);
				   if(lee['resultado']=='encontro'){
						 //habilita los botones para poder eliminar y modificar

						 botonOn();

					   $("#apellidos").val(lee[0].apellidos);
					   $("#nombres").val(lee[0].nombres);
						 $("#cargo").val(lee[0].cargo);
				   }
				   else if(lee['resultado']=='noencontro'){

				   }
				   else {
					   muestraMensaje(lee['resultado']);
				   }


			   }
			   else{
				   limpia();
					 botonOff();
				   muestraMensaje(respuesta);

			   }
            },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

    });







}





unction tabla(){




		var data=$("#tableajax").DataTable({
			ajax:{

			url:'modelo/tablarepresentante.php',
			
			},
			columns: [
			        { data: 0 },
			        { data: 1 },
			        { data: 2 },
			        { data: 3 },
			        { data: 4 },
			       	       
			   
			    	{"render": function () {
            return '<button type="button" id="ButtonEditar" class="editar edit-modal btn btn-warning botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"> M</span></button><button type="button" id="ButtonEliminar" class="eliminar edit-modal btn btn-warning botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"> E</span></button>';
        }},
    ]
		
	});
	editar("#tableajax tbody",data );

}


function editar(tbody, table){
  $(tbody).on("click","button.editar", function(){
	console.log("sakdopkaspo");
    if(table.row(this).child.isShown()){
        var data = table.row(this).data();
    }else{
        var data = table.row($(this).parents("tr")).data();
        console.log(data);
    }

botonOn();
	$("#incluir").prop('disabled', true);

  $("#cedula").val(data[0]);


  if($("#cedula").val().length > 6){
    var datos = new FormData();
      datos.append('accion','consultatr');
    datos.append('cedula',$("#cedula").val());
    enviaAjax(datos,'consultatr');
  }
 
   
    
    
  })
  $(tbody).on("click","button.eliminar", function(){
	console.log("sakdopkaspo");
    if(table.row(this).child.isShown()){
        var data = table.row(this).data();
    }else{
        var data = table.row($(this).parents("tr")).data();
        console.log(data);
    }

    $("#grado").val(data[0]);
	$("#seccion").val(data[1]);
	$("#anioe").val(data[2]);
	$("#maestro").val(data[3]);

   
    
    
  })
}


//desabulita los botones modificar y eliminar para un cdigo mas limpio
function botonOff() {
	$("#modificar").prop('disabled', true);
	$("#eliminar").prop('disabled', true);
}

function botonOn() {

	$("#incluir").prop('disabled', true);
	$("#modificar").prop('disabled', false);
	$("#eliminar").prop('disabled', false);
}

function limpia(){
	$("#cedula").val("");
	$("#apellidos").val("");
	$("#nombres").val("");
	$("#cargo").val("");
	$("#clave").val("");
}



//esta funcion lipia todo menos cedula
function limpia2(){
	$("#apellidos").val("");
	$("#nombres").val("");
	$("#cargo").val("");
	$("#clave").val("");
}
