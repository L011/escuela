$(document).ready(function(){

llenarLista();


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
			limpia2();


		}
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
		datos.append('turno',$("#turno").val());
		datos.append('anioe',$("#anioe").val());
		datos.append('maestro',$("#maestro").val());


		llenarLista();
		enviaAjax(datos,'incluir');
		}


});

$("#actualizar").on("click",function(){
	if(validarenvio()){
		//console.log("M1");
		var datos = new FormData();
		datos.append('accion','actualizar');
		//datos del niño
		datos.append('grado',$("#grado").val());
		datos.append('seccion',$("#seccion").val());
		datos.append('turno',$("#turno").val());
		datos.append('anioe',$("#anioe").val());
		datos.append('maestro',$("#maestro").val());


		
		
		

		console.log("asdo");
		llenarLista();
		enviaAjax(datos,'actualizar');


	}
});



$("#eliminar").on("click",function(){
	confirmar();

	$('#si').on('click', function() {

		$('#botones').remove();
		

	

		var datos = new FormData();
		datos.append('accion','eliminar');
		datos.append('maestro',$("#maestro").val());
		llenarLista();
		enviaAjax(datos,'eliminar');

	});

});


//FIN DE CONTROL DE BOTONES





});


//Validación de todos los campos antes del envio
function validarenvio(){

	


	return true;
}

function llenarLista() {
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');
	var datos2 = new FormData();
		    datos2.append('accion','consultatr');
			enviaAjax(datos2,'consultatr');
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
					 
					  $("#maestro").html(respuesta);
				   
			   }

				 // Aqui se muestra informacion si se Ingreso la informacion
			   else{
				   //limpia();
					 llenarLista();
				   muestraMensaje(respuesta);

			   }
            },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

    });

}

function tabla(){

	$.fn.dataTable.ext.errMode = 'throw';


	console.log("nhaiusd");
    		$("#json_data").DataTable({
        "order": [[ 1, "asc" ]],
        ajax: 'modelo/tabla.php',
        'aLengthMenu': [[100, 250, 500, -1], [100, 250, 500, 'All']],
        'iDisplayLength': 100,
        "columns": [
            { "data": "cedula_e" },
            { "data": "nombre" },
            { "data": "number_of_people" }
        ]
    });




}






//funcion para pasar de la lista a el formulario
function coloca(linea){

	$("#grado").val($(linea).find("td:eq(0)").text());
	$("#seccion").val($(linea).find("td:eq(1)").text());
	$("#anioe").val($(linea).find("td:eq(2)").text());
	$("#maestro").val($(linea).find("td:eq(5)").text());
	

}

