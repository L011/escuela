$(document).ready(function(){

llenarLista();


inicio();

//tabla();

	//alert("at1");
	//console.log("Main")
	//para obtener la fecha del servidor y calcular la
	//edad de nacimiento que debe ser mayor a 18
//	var datos = new FormData();
	//	datos.append('accion','obtienefecha');
		//enviaAjax(datos,'obtienefecha');
	//fin de colocar fecha en input fecha de nacimiento


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








	

/*


	$("#cedulaEscolar").on("keypress",function(e){
		validarkeypress(/^[0-9-\b]*$/,e);
	});

	$("#cedulaEscolar").on("keyup",function(){
		validarkeyup(/^[0-9]{7,8}$/,$(this),
		$("#pCedulaEscolar"),"El formato debe ser 9999999 ");
		if($("#cedulaEscolar").val().length > 7){
		  var datos = new FormData();
		    datos.append('accion','consultatr');
			datos.append('cedulaEscolar',$(this).val());
			enviaAjax(datos,'consultatr');
		}
	});


	$("#apellidoPri").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#apellidoPri").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pApellidoPri"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#nombrePri").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#nombrePri").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pNombrePri"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#fechaNaciPri").on("keyup",function(){
		validarkeyup(/^(?:(?:1[6-9]|[2-9]\d)?\d{2})(?:(?:(\/|-|\.)(?:0?[13578]|1[02])\1(?:31))|(?:(\/|-|\.)(?:0?[13-9]|1[0-2])\2(?:29|30)))$|^(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(\/|-|\.)0?2\3(?:29)$|^(?:(?:1[6-9]|[2-9]\d)?\d{2})(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:0?[1-9]|1\d|2[0-8])$/,
		$(this),$("#pFechaNaciPri"),"Ingrese una fecha valida");
	});

    $("#estadoprimaria").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#estadoprimaria").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pestadoprimaria"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#ciudadprimaria").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#ciudadprimaria").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pciudadprimaria"),"Solo letras  entre 3 y 30 caracteres");
	});

    $("#viveConO").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#viveConO").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pViveConO"),"Solo letras  entre 3 y 30 caracteres");
	});
    //FIN DE DATOS DEL NINO

    //DATOS DEL REPRESENTANTE LEGAL

    $("#apellidoRepre").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#apellidoRepre").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pApellidoRepre"),"Solo letras  entre 3 y 30 caracteres");
	});

    $("#nombreRepre").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#nombreRepre").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pNombreRepre"),"Solo letras  entre 3 y 30 caracteres");
	});

    $("#ciRepre").on("keypress",function(e){
		validarkeypress(/^[0-9]*$/,e);
	});

	$("#ciRepre").on("keyup",function(){
		validarkeyup(/^[0-9]{7,8}$/,
		$(this),$("#pCiRepre"),"El formato debe ser 9999999");
	});

    $("#telfRepre").on("keypress",function(e){
		validarkeypress(/^[0-9\b-]*$/,e);
	});

	$("#telfRepre").on("keyup",function(){
	    validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#pTelfRepre"),"(9999)-9999999");
	});

    $("#direccionRepre").on("keypress",function(e){
		validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#direccionRepre").on("keyup",function(){
		validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pDireccionRepre"),"Solo letras  entre 3 y 30 caracteres");
	});

    $("#profesionRepre").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#profesionRepre").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pProfesionRepre"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#correoRepre").on("keypress",function(e){
		validarkeypress(/^[0-9A-Za-z@_.\b\u00f1\u00d1\u00E0-\u00FC-]*$/,e);
	});

	$("#correoRepre").on("keyup",function(){
		validarkeyup(/^[A-Z0-9a-z_\u00f1\u00d1\u00E0-\u00FC-]{3,15}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,3}$/,
		$(this),$("#pCorreoRepre"),"Correo Valido alguien@servidor.com");
	});

	$("#cuentaBancR").on("keypress",function(e){
		validarkeypress(/^[0-9]*$/,e);
	});

	$("#cuentaBancR").on("keyup",function(){
		validarkeyup(/^[0-9]{20}$/,
		$(this),$("#pcuentaBancR"),"Ingresar un numero de cuenta valido");
	});

	$("#codigoCPR").on("keypress",function(e){
		validarkeypress(/^[0-9]*$/,e);
	});

	$("#codigoCPR").on("keyup",function(){
		validarkeyup(/^[0-9]{10}$/,
		$(this),$("#pcodigoCPR"),"Ingresar un codigo valido");
	});

	$("#serialCPR").on("keypress",function(e){
		validarkeypress(/^[0-9]*$/,e);
	});

	$("#serialCPR").on("keyup",function(){
		validarkeyup(/^[0-9]{10}$/,
		$(this),$("#pserialCPR"),"Ingresar un codigo valido");
	});

//FIN DE DATOS DEL REPRESENTANTE

//DATOS DE LA MADRE

$("#apellidoMadre").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#apellidoMadre").on("keyup",function(){
	validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pApellidoMadre"),"Solo letras  entre 3 y 30 caracteres");
});

$("#nombreMadre").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#nombreMadre").on("keyup",function(){
	validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pNombreMadre"),"Solo letras  entre 3 y 30 caracteres");
});

$("#ciMadre").on("keypress",function(e){
	validarkeypress(/^[0-9]*$/,e);
});

$("#ciMadre").on("keyup",function(){
	validarkeyup(/^[0-9]{7,8}$/,
	$(this),$("#pCiMadre"),"El formato debe ser 9999999");
});

$("#telefonoMadre").on("keypress",function(e){
	validarkeypress(/^[0-9\b-]*$/,e);
});

$("#telefonoMadre").on("keyup",function(){
	validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#pTelefonoMadre"),"(9999)-9999999");
});

$("#direccionMadre").on("keypress",function(e){
	validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#direccionMadre").on("keyup",function(){
	validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pDireccionMadre"),"Solo letras  entre 3 y 30 caracteres");
});

//FIN DE DATOS DE LA MADRE

//DATOS DEL PADRE

$("#apellidoPadre").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#apellidoPadre").on("keyup",function(){
	validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pApellidoPadre"),"Solo letras  entre 3 y 30 caracteres");
});

$("#nombrePadre").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#nombrePadre").on("keyup",function(){
	validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pNombrePadre"),"Solo letras  entre 3 y 30 caracteres");
});

$("#ciPadre").on("keypress",function(e){
	validarkeypress(/^[0-9]*$/,e);
});

$("#ciPadre").on("keyup",function(){
	validarkeyup(/^[0-9]{7,8}$/,
	$(this),$("#pCiPadre"),"El formato debe ser 9999999");
});

$("#telefonoPadre").on("keypress",function(e){
	validarkeypress(/^[0-9\b-]*$/,e);
});

$("#telefonoPadre").on("keyup",function(){
	validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#pTelefonoPadre"),"(9999)-9999999");
});

$("#direccionPadre").on("keypress",function(e){
	validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#direccionPadre").on("keyup",function(){
	validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pDireccionPadre"),"Solo letras  entre 3 y 30 caracteres");
});

//FIN DE DATOS DEL PADRE

//DE TENER HERMANOS EN LA INSTITUCIÓN

$("#nombre_hermano1").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#nombre_hermano1").on("keyup",function(){
	validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pnombre_hermano1"),"Solo letras  entre 3 y 30 caracteres");
});

$("#nombre_hermano2").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#nombre_hermano2").on("keyup",function(){
	validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pnombre_hermano2"),"Solo letras  entre 3 y 30 caracteres");
});

$("#nombre_hermano3").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#nombre_hermano3").on("keyup",function(){
	validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pnombre_hermano3"),"Solo letras  entre 3 y 30 caracteres");
});

$("#nombre_hermano4").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#nombre_hermano4").on("keyup",function(){
	validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pnombre_hermano4"),"Solo letras  entre 3 y 30 caracteres");
});



//FIN DE TENER HERMANOS EN LA INSTITUCIÓN

//CON QUIEN SE RETIRA EL NINO

$("#quienRetirada").on("keypress",function(e){
	validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
});

$("#quienRetirada").on("keyup",function(){
	validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
	$(this),$("#pQuienRetirada"),"Solo letras  entre 3 y 30 caracteres");
});

$("#quienTelefono").on("keypress",function(e){
	validarkeypress(/^[0-9\b-]*$/,e);
});

$("#quienTelefono").on("keyup",function(){
	validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#pQuienTelefono"),"(9999)-9999999");
});

//FIN DE CON QUIEN SE RETIRA

//FIN DE VALIDACION DE DATOS

*/

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

	
	if(validarkeyup(/^[0-9]{7,8}$/,$("#cedulaEscolar"),
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
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');

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



//funcion para pasar de la lista a el formulario


function coloca(linea){
/*
	$("#cedulaEscolar").val($(linea).find("td:eq(0)").text());
	$("#apellidoPri").val($(linea).find("td:eq(1)").text());
	$("#nombrePri").val($(linea).find("td:eq(2)").text());
	$("#fechaNaciPri").val($(linea).find("td:eq(3)").text());
	$("#estadoprimaria").val($(linea).find("td:eq(4)").text());
	$("#ciudadprimaria").val($(linea).find("td:eq(5)").text());
	$("#viveConO").val($(linea).find("td:eq(6)").text());
	$("#apellidoRepre").val($(linea).find("td:eq(7)").text());
	$("#nombreRepre").val($(linea).find("td:eq(8)").text());
	$("#ciRepre").val($(linea).find("td:eq(9)").text());
	$("#telfRepre").val($(linea).find("td:eq(10)").text());
	$("#direccionRepre").val($(linea).find("td:eq(11)").text());
	$("#profesionRepre").val($(linea).find("td:eq(12)").text());
	$("#correoRepre").val($(linea).find("td:eq(13)").text());
	$("#cuentaBancR").val($(linea).find("td:eq(14)").text());
	$("#codigoCPR").val($(linea).find("td:eq(15)").text());
	$("#serialCPR").val($(linea).find("td:eq(16)").text());
	$("#apellidoMadre").val($(linea).find("td:eq(17)").text());
	$("#nombreMadre").val($(linea).find("td:eq(18)").text());
	$("#ciMadre").val($(linea).find("td:eq(19)").text());
	$("#telefonoMadre").val($(linea).find("td:eq(20)").text());
	$("#direccionMadre").val($(linea).find("td:eq(21)").text());
	$("#apellidoPadre").val($(linea).find("td:eq(22)").text());
	$("#nombrePadre").val($(linea).find("td:eq(23)").text());
	$("#ciPadre").val($(linea).find("td:eq(24)").text());
	$("#telefonoPadre").val($(linea).find("td:eq(25)").text());
	$("#direccionPadre").val($(linea).find("td:eq(26)").text());
	$("#nombre_hermano1").val($(linea).find("td:eq(27)").text());
	$("#nombre_hermano2").val($(linea).find("td:eq(28)").text());
	$("#nombre_hermano3").val($(linea).find("td:eq(29)").text());
	$("#nombre_hermano4").val($(linea).find("td:eq(30)").text());
	$("#quienRetirada").val($(linea).find("td:eq(31)").text());
	$("#quienTelefono").val($(linea).find("td:eq(32)").text());

	*/
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


						
					   $("#apellidoPri").val(lee[0].apellido);
					   $("#nombrePri").val(lee[0].nombre);
						$("#grado").val(lee[0].grado);
						
						if (lee[0].seccion == null) {

							$("#seccion").empty();
						

						}else{
							$("#seccion").append($("<option>", {
								value: lee[0].seccion,
								text:   lee[0].seccion
							}))
						}
						$("#seccion").val(lee[0].seccion);
						select_seccion2()

						$("#maestro").val(lee[0].nombres);

						 
					   $("#anioe").val(lee[0].anio_escolar);
					   $("#seccion").val(lee[0].seccion);
					   $("#seccion").val(lee[0].seccion);

					   

						
				   }
					
				   else if(lee['resultado']=='noencontro'){

				   }
				   else {
					   muestraMensaje(lee['resultado']);
				   }


			   }

			   else if(accion=='llenargrado'){
			    	console.log(respuesta);
					$("#grado").html(respuesta);
				   
			   }
			   else if(accion=='llenarseccion'){
					 console.log(respuesta+"sas");
					 $("#seccion").html(respuesta);
				   
			   }





			   else if(accion=='maestro_seccion'){
					 console.log(respuesta);
				   lee = JSON.parse(respuesta);

				  console.log(lee['resultado']);
				   if(lee['resultado']=='encontro'){


						
						 $("#maestro").val(lee[0].nombres);
						 $("#id").val(lee[0].id);
						 console.log($("#id").val());
						

						
				   }
					
				   else if(lee['resultado']=='noencontro'){

				   }
				   else {
					   muestraMensaje(lee['resultado']);
				   }


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

	$("#cedulaEscolar").val($(linea).find("td:eq(0)").text());
	var datos = new FormData();
	datos.append('accion','consultatr');
	datos.append('cedulaEscolar',$(linea).find("td:eq(0)").text());
	enviaAjax(datos,'consultatr');



}

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





function limpia2(){

	$('input:gt(1)').val("");
 
	$('input[type=select]').val('');
	$("#grado").val('');
	$("#seccion").val('');
	$("#anioe").val('');
	

}
