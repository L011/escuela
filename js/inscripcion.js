$(document).ready(function(){

llenarLista();
tabla();
inicio();

//tabla();


//VALIDACION DE DATOS

//activar campo de cedula de identidad si esta seleccionado la opcion y si no
//se calcula la cedula Estudiantil

//DATOS DEL NINO

$("#cedulaEscolar").on("keypress",function(e){
		validarkeypress(/^[0-9-\b]*$/,e);
	});

	$("#cedulaEscolar").on("keyup",function(){
		validarkeyup(/^[0-9]{7,15}$/,$(this),
		$("#scedula"),"El formato debe ser 9999999 ");
		if($("#cedulaEscolar").val().length > 6){
		  var datos = new FormData();
		    datos.append('accion','consultatr');
			datos.append('cedulaEscolar',$(this).val());
			enviaAjax(datos,'consultatr');
		}
		else {
			$("#inscribir").prop('disabled', false);
			console.log("slasd");
			limpia2();


		}
	});


	$("#grado").change(function(){
			select_seccion();
	
});



$("#seccion").change(function(){
			
	select_seccion2();
});


//CONTROL DE BOTONES

$("#incluir").on("click",function(){
	if(validarenvio()){
		//console.log("I1")
		var datos = new FormData();
		datos.append('accion','incluir');
		//datos del niño

		datos.append('grado',$("#grado").val());
		datos.append('seccion',$("#seccion").val());
		datos.append('anioe',$("#anioe").val());
		datos.append('maestro',$("#maestro").val());


		llenarLista();
		enviaAjax(datos,'incluir');
		}


});

$("#inscribir").on("click",function(){
	if(validarenvio()){
		//console.log("M1");
		var datos = new FormData();
		datos.append('accion','inscribir');
		//datos del niño
		datos.append('grado',$("#grado").val());
		datos.append('seccion',$("#seccion").val());
		datos.append('turno',$("#turno").val());
		datos.append('anioe',$("#anioe").val());
		datos.append('maestro',$("#maestro").val());
		datos.append('id',$("#id").val());


		datos.append('cedulaEscolar',$("#cedulaEscolar").val());
		
		datos.append('cedula_m',$("#cedula_m").val());

		console.log("asdo");
		llenarLista();
		enviaAjax(datos,'inscribir');


	}
});



$("#eliminar").on("click",function(){

	confirmar();

	$('#si').on('click', function() {

		$('#botones').remove();

	if(validarkeyup(/^[0-9]{7,19}$/,$("#cedulaEscolar"),
		$("#pCedulaEscolar"),"El formato debe ser 28406750")==0){
	    muestraMensaje("La cedulaEscolar debe coincidir con el formato <br/>"+
						"99999999");

	}
	else{

		var datos = new FormData();
		datos.append('accion','eliminar');
		datos.append('cedulaEscolar',$("#cedulaEscolar").val());
		llenarLista();
		enviaAjax(datos,'eliminar');
	}

	});

});

/*

$("#consultar").on("click",function(){
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');
});
//FIN DE CONTROL DE BOTONES


*/


});


//Validación de todos los campos antes del envio
function validarenvio(){

	
	if(validarkeyup(/^[0-9]{7,9}$/,$("#cedulaEscolar"),
		$("#pCedulaEscolar"),"Formato 99999999")==0){
	    muestraMensaje("Seleccionar estudiante valido");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,$("#maestro"),
		$("#smaestro"),"")==0){
	    muestraMensaje("Seccion no esta activa");
		return false;
	}

	return true;
}

function llenarLista() {
	
	var datos1 = new FormData();
	datos1.append('accion','llenargrado');
	llenar(datos1,'llenargrado');
}


//Funcion que muestra el modal con un mensaje
function muestraMensaje(mensaje){

	$("#contenidodemodal").html(mensaje);
			$("#mostrarmodal").modal("show");
			setTimeout(function() {
					$("#mostrarmodal").modal("hide");
			},100000);
			console.log(mensaje);
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
function validarkeyup(er,etiqueta,etiquetamensaje,mensaje){
	a = er.test(etiqueta.val());
	if(a){
		etiquetamensaje.text("");

		return 1;
	}
	else{
		etiquetamensaje.text(mensaje);
		return 0;
	}
}



function llenar(datos,accion){

	$.ajax({
		    async: true,
            url: '',
            type: 'POST',//tipo de envio
			contentType: false,
            data: datos,
			processData: false,
	        cache: false,
            success: function(data) {

 				if(accion=='llenargrado'){
			    	console.log(data);
					 
					  $("#grado").html(data);
				   
			   }
			   else if(accion=='llenarseccion'){
					 console.log(data+"sas");
					  $("#seccion").html(data);
				   
			   }

			   },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

});

}


//funcion que envia y recibe datos por AJAX
function enviaAjax(datos,accion){


	$.ajax({
		    async: true,
            url: '',
            type: 'POST',//tipo de envio
			contentType: false,
            data: datos,
			processData: false,
	        cache: false,
            success: function(respuesta) {
							//si resulto exitosa la transmision

			   if(accion=='consultar'){
				  $("#resultadoconsulta").html(respuesta);

			   }
			   else if(accion=='consultatr'){
					 console.log(respuesta+"aaaaaaaaaaaas");
				   lee = JSON.parse(respuesta);


				  console.log(lee['resultado']);
				   if(lee['resultado']=='encontro'){


						$("#eliminar").prop('disabled', false);
					   $("#apellidoPri").val(lee[0].apellido);
					   $("#nombrePri").val(lee[0].nombre);
						$("#grado").val(lee[0].grado);
						
						if (lee[0].seccion == null) {

							$("#seccion").empty();
						

						}else{
						var datos2 = new FormData();
							alert("sjdioasj");
							datos2.append('accion','llenarseccion');
							datos2.append('grado',$("#grado").val());
							llenar(datos2,'llenarseccion');
						

						$("#seccion").val(lee[0].seccion+"wdkaosdk");
						}

						console.log(lee[0].seccion);
						select_seccion2()

						$("#maestro").val(lee[0].nombres);

						 
					   $("#anioe").val(lee[0].anio_escolar);
					   $("#seccion").val(lee[0].seccion);
					   $("#seccion").val(lee[0].seccion);

					   

							
				   }
					
				   else if(lee['resultado']=='noencontro'){
				   		$("#eliminar").prop('disabled', true);
				   }
				   else {
					   muestraMensaje(lee['resultado']);
				   }


			   }

			   else if(accion=='llenargrado'){
			    	
					$("#grado").html(respuesta + 100010101);
				   
			   }
			   else if(accion=='llenarseccion'){
					
					 $("#seccion").html(respuesta+ 220202020);
				   
			   }





			   else if(accion=='maestro_seccion'){
					
				   lee = JSON.parse(respuesta);

				  console.log(lee['resultado']);
				   if(lee['resultado']=='encontro'){


						
						 $("#maestro").val(lee[0].nombres);
						 $("#id").val(lee[0].id);
						
						

						
				   }
					
				   else if(lee['resultado']=='noencontro'){

				   }
				   else {
					   muestraMensaje(lee['resultado']);
				   }


			   }

			   



				 // Aqui se muestra informacion si se Ingreso la informacion
			   else{
				   all();
					llenarLista();
					muestraMensaje(respuesta);
					$('#contenido').css('display', 'none');
					$('#tableajax').DataTable().ajax.reload();
					if (!$('#formulario').is(":visible")) {
					$('#formulario').css('display', 'block');
				}

			   }
            },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

    });

}


//funcion para pasar de la lista a el formulario



function tabla(){




		var data=$("#tableajax").DataTable({
			ajax:{

			url:'modelo/tablainscripcion.php',
			
			},
			columns: [
			        { data: 0 },
			        { data: 1 },
			        { data: 2 },
			        { data: 3 },
			        { data: 4 },
			        { data: 5 },
		       	       
			   
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

	$("#inscribir").prop('disabled', false);
	$('#contenido').css('display', 'block');

  $("#cedulaEscolar").val(data[0]);
	var datos = new FormData();
	datos.append('accion','consultatr');
	datos.append('cedulaEscolar',data[0]);
	enviaAjax(datos,'consultatr');
 
   
    
    
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
			datos.append('cedulaEscolar',data[0]);
			enviaAjax(datos,'eliminar');
		}

	});

   
    
    
  })
}


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



function select_seccion() {
	// body...

	var datos2 = new FormData();
	datos2.append('accion','llenarseccion');
	datos2.append('grado',$("#grado").val());
	llenar(datos2,'llenarseccion');
}

function select_seccion2() {
	// body...
	var datos = new FormData();
    datos.append('accion','maestro_seccion');
	datos.append('grado',$("#grado").val());
	datos.append('seccion',$("#seccion").val());
	enviaAjax(datos,'maestro_seccion');
}


function inicio() {

	
	// body...
}

function all(){

	$('input:gt(0)').val("");
 
	$('input[type=select]').val('');
	$("#grado").val('');
	$("#seccion").val('');
	$("#anioe").val('');
	

}

function botonOff() {
	$("#modificar").prop('disabled', true);
	$("#eliminar").prop('disabled', true);
}

function botonOn() {

	$("#incluir").prop('disabled', true);
	$("#modificar").prop('disabled', false);
	$("#eliminar").prop('disabled', false);
}



function limpia2(){

	$('input:gt(1)').val("");
 
	$('input[type=select]').val('');
	$("#grado").val('');
	$("#seccion").val('');
	$("#anioe").val('');
	

}
