$(document).ready(function(){


$('#generar').prop('disabled', true);


$("#generar").on("click",function(){
	$('#generar').prop('disabled', true);
	if(valida()){
		console.log("I1");
		var datos = new FormData();
		datos.append('accion','generar');
		datos.append('cedulaEscolar',$("#cedulaEscolar").val());
		datos.append('user',$("#user").val());
	
		enviaAjax(datos,'generar');
		}


});


$("#cedulaEscolar").on("keypress",function(e){
		validarkeypress(/^[A-Z0-9-\b]*$/,e);
	});

	$("#cedulaEscolar").on("keyup",function(){
		validarkeyup(/^[VE]{1}[-]{1}[0-9]{9,15}$/,$(this),
		$("#scedulaEscolar"),"El formato debe ser V-10123123 ");
		if($("#cedulaEscolar").val().length > 6){
		  var datos = new FormData();
		    datos.append('accion','consultatr');
			datos.append('cedulaEscolar',$(this).val());
			enviaAjax(datos,'consultatr');
		}
		else {
			
			


		}
	});


});




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
            	console.log("evio justo");
				//si resulto exitosa la transmision

				if (accion=='consultatr'){
				   lee = JSON.parse(respuesta);

				  //console.log(lee['resultado']);
				   if(lee['resultado']=='encontro'){
						 //habilita los botones para poder eliminar y modificar


						$("#nombre").val(lee[0].nombre);
						$("#apellido").val(lee[0].apellido);
						$("#grado").val(lee[0].grado);
						$("#seccion").val(lee[0].seccion);
						$('#generar').prop('disabled', false);
						

					}
				   else if(lee['resultado']=='noencontro'){
				   	$('#generar').prop('disabled', true);
				   	limpia();
				   	

				   }
				   else {
					   muestraMensaje(lee['resultado']);
				   }


			   }
			   else{
			   }
				
            },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

    });

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



function valida(){

	if($("#cedulaEscolar").val()==''){
		return false;

	}
	else{
		return true;
	}


}

function limpia() {
	// body...

	$('input:gt(0)').val('');
}






