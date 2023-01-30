
$(document).ready(function(){

	botonOff();

	 tabla();
	
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
			botonOff()
			$("#incluir").prop('disabled', false);

		}
	});



	$("#apellidos").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#apellidos").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#sapellidos"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#nombres").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#nombres").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#snombres"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#fechadenacimiento").on("keyup",function(){
		validarkeyup(/^(?:(?:1[6-9]|[2-9]\d)?\d{2})(?:(?:(\/|-|\.)(?:0?[13578]|1[02])\1(?:31))|(?:(\/|-|\.)(?:0?[13-9]|1[0-2])\2(?:29|30)))$|^(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(\/|-|\.)0?2\3(?:29)$|^(?:(?:1[6-9]|[2-9]\d)?\d{2})(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:0?[1-9]|1\d|2[0-8])$/,
		$(this),$("#sfechadenacimiento"),"Ingrese una fecha valida");
	});

	$("#correo").on("keypress",function(e){
		validarkeypress(/^[0-9A-Za-z@_.\b\u00f1\u00d1\u00E0-\u00FC-]*$/,e);
	});

	$("#correo").on("keyup",function(){
		validarkeyup(/^[A-Z0-9a-z_\u00f1\u00d1\u00E0-\u00FC-]{3,15}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,3}$/,
		$(this),$("#scorreo"),"Correo Valido alguien@servidor.com");
	});


	$("#telefono").on("keypress",function(e){
		validarkeypress(/^[0-9\b-]*$/,e);
	});

	$("#telefono").on("keyup",function(){
	    validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#stelefono"),"(9999)-9999999");
	});




//FIN DE VALIDACION DE DATOS



//CONTROL DE BOTONES

$("#incluir").on("click",function(){
	if(validarenvio()){
		//console.log("I1")
		var datos = new FormData();
		datos.append('accion','incluir');
		datos.append('cedula',$("#cedula").val());
		datos.append('apellidos',$("#apellidos").val());
		datos.append('nombres',$("#nombres").val());
		datos.append('fechadenacimiento',$("#fechadenacimiento").val());
		datos.append('sexo',$("#sexo").val());
		datos.append('correo',$("#correo").val());
		datos.append('telefono',$("#telefono").val());
		datos.append('cargo',$("#cargo").val());
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
			datos.append('apellidos',$("#apellidos").val());
			datos.append('nombres',$("#nombres").val());
			datos.append('fechadenacimiento',$("#fechadenacimiento").val());
			datos.append('sexo',$("#sexo").val());
			datos.append('correo',$("#correo").val());
			datos.append('telefono',$("#telefono").val());
			datos.append('cargo',$("#cargo").val());
			
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

//boton que muestra y oculta el formulario

$('#formulario').on('click', function() {
	$('#formulario').css('display', 'none');

	if ($('#contenido').is(":visible")) {
		console.log("no");
		$('#contenido').css('display', 'none');
	}else{
		$('#contenido').css('display', 'block');
		console.log("se ve");

	}

	/* Act on the event */
});

$('#formulario1').on('click', function() {


	$('#formulario').css('display', 'block');

	if ($('#contenido').is(":visible")) {
		console.log("no");
		$('#contenido').css('display', 'none');
	}else{
		$('#contenido').css('display', 'block');
		console.log("se ve");

	}

	/* Act on the event */
});


//FIN DE CONTROL DE BOTONES





});




//Validación de todos los campos antes del envio
function validarenvio(){
	if(validarkeyup(/^[0-9]{7,8}$/,$("#cedula"),
		$("#scedula"),"Formato 99999999")==0){
	    muestraMensaje("Formato 99999999");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#apellidos"),$("#sapellidos"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("APELLIDO <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombres"),$("#snombres"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if ($("#sexo").val() == null) {
		muestraMensaje("Sexo <br/> Seleccionar Sexo");
		return false;
	}
	else if(validarkeyup(/^(?:(?:1[6-9]|[2-9]\d)?\d{2})(?:(?:(\/|-|\.)(?:0?[13578]|1[02])\1(?:31))|(?:(\/|-|\.)(?:0?[13-9]|1[0-2])\2(?:29|30)))$|^(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(\/|-|\.)0?2\3(?:29)$|^(?:(?:1[6-9]|[2-9]\d)?\d{2})(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:0?[1-9]|1\d|2[0-8])$/,
		$("#fechadenacimiento"),$("#sfechadenacimiento"),"Ingrese una fecha valida")==0){
		muestraMensaje("FECHA MAYOR A 1920-01-01 Y MENOR A LA FECHA ACTUAL");
		return false;
	}
	else if(validarkeyup(/^[A-Z0-9a-z_\u00f1\u00d1\u00E0-\u00FC-]{3,30}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,3}$/,
		$("#correo"),$("#scorreo"),"FORMATO alguien@servidor.com")==0){
		muestraMensaje("FORMATO CORREO <br/> alguien@servidor.com");
		 return false;
	}
	else if(validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$("#telefono"),
		 $("#stelefono"),"FORMATO 9999-9999999")==0){
		 muestraMensaje("TELEFONO <br/>9999-9999999");
	     return false;
	}
	else if ($("#cargo").val() == null) {
		muestraMensaje("Cargo <br/> Seleccionar Cargo");
		return false;
	}
	else {
		var f1 = new Date(1920,01,01);
		var f2 = new Date($("#fechadenacimiento").val());
		var hoy = new Date();


		if(f2 < f1){
			muestraMensaje("Fecha de Nacimiento <br/>FECHA MAYOR A 01/01/1920");
			return false;
		}
		else if (hoy < f2) {
			//console.log("A3");
			muestraMensaje("Fecha de Nacimiento <br/>FECHA MENOR A LA ACTUAL");
			return false;
		}

	}


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
	$("#incluir").prop('disabled', true);

	$("#cedula").val($(linea).find("td:eq(0)").text());
	$("#apellidos").val($(linea).find("td:eq(1)").text());
	$("#nombres").val($(linea).find("td:eq(2)").text());
	$("#fechadenacimiento").val($(linea).find("td:eq(3)").text());
	$("#sexo").val($(linea).find("td:eq(4)").text());
	$("#correo").val($(linea).find("td:eq(5)").text());
	$("#telefono").val($(linea).find("td:eq(6)").text());
	$("#cargo").val($(linea).find("td:eq(7)").text());
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
						$("#incluir").prop('disabled', true);
						$("#apellidos").val(lee[0].apellidos);
						$("#nombres").val(lee[0].nombres);
						$("#fechadenacimiento").val(lee[0].fechadenacimiento);
						$("#sexo").val(lee[0].sexo);
						$("#correo").val(lee[0].correo);
						$("#telefono").val(lee[0].telefono);
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
					$('#contenido').css('display', 'none');
					$('#tableajax').DataTable().ajax.reload();
					if (!$('#formulario').is(":visible")) {
					$('#formulario').css('display', 'block');
				}

			   }
            },
            error: function(){
			   muestraMensaje("Error con ajax");
            }

    });

}

function tabla(){




		var data=$("#tableajax").DataTable({
			ajax:{

			url:'modelo/tablamaestro.php',
			
			},
			columns: [
			        { data: 0 },
			        { data: 1 },
			        { data: 2 },
			        { data: 3 },
			        { data: 5 },
			        { data: 4 },
			        { data: 6 },
			       
			       
			    
			    	{"render": function () {
            return '<button type="button" id="ButtonEditar" class="editar edit-modal btn btn-warning botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"> M</span></button><button type="button" id="ButtonEliminar" class="eliminar edit-modal btn btn-danger botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"> E</span></button>';
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
	$('#contenido').css('display', 'block');

    $("#cedula").val(data[0]);

	
		if($("#cedula").val().length > 6){
		  var datos = new FormData();
		    datos.append('accion','consultatr');
			datos.append('cedula',data[0]);
			enviaAjax(datos,'consultatr');
		}
		else {
			limpia2();
			botonOff()
			$("#incluir").prop('disabled', false);

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

    confirmar();

	$('#si').on('click', function() {

		$('#botones').remove();

	if(false){

	}
	else{

		var datos = new FormData();
		datos.append('accion','eliminar');
		datos.append('cedula',data[0]);
		enviaAjax(datos,'eliminar');
	}

});

   
    
    
  })
}

//actualizacion de datatables




//desabulita los botones modificar y eliminar para un cdigo mas limpio
function botonOff() {
	$("#modificar").prop('disabled', true);
	$("#eliminar").prop('disabled', true);
}

function botonOn() {

	$("#modificar").prop('disabled', false);
	$("#eliminar").prop('disabled', false);
}

function limpia(){
	$("#cedula").val("");
	$("#apellidos").val("");
	$("#nombres").val("");
	$("#sexo").prop("selectedIndex",0);
	$('input[type="date"]').val("");
	$("#correo").val("");
	$("#telefono").val("");
	$("#cargo").val("");
}

//esta funcion lipia todo menos cedula
function limpia2(){
	$("#apellidos").val("");
	$("#nombres").val("");
	$("#sexo").prop("selectedIndex",0);
	$('input[type="date"]').val("");
	$("#correo").val("");
	$("#telefono").val("");
	$("#cargo").val("");
}
