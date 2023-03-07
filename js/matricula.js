$(document).ready(function(){

	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


$("#generar").prop('disabled', true);


$("#generar").on("click",function(){
	if(validaseccion()){
		console.log("I1")
		var datos = new FormData();
		datos.append('accion','generar');
	
		enviaAjax(datos,'generar');
		}


});

$("#grado").on('change', function() {
	var datos = new FormData();
		datos.append('accion','llenarseccion');
		datos.append('grado',$("#grado").val());
	
		enviaAjax(datos,'llenarseccion');
});

$("#seccion").on('change', function() {

	console.log("amsdasdm");

	$("#generar").prop('disabled', false);
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

				if (accion == "generar") {
					
				}
				else if(accion == "llenarseccion"){
				
				
					$("#seccion").empty();

					$("#seccion").html(respuesta);

				}
            },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

    });

}



});


function validaseccion(){

	if($("#seccion").val()==''){
		return false

	}
}






