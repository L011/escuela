$(document).ready(function(){

llenarLista();
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
			limpia2();


		}
	});

	$("#ciMadre").on("keypress",function(e){
			validarkeypress(/^[0-9-\b]*$/,e);
		});

		$("#ciMadre").on("keyup",function(){
			validarkeyup(/^[0-9]{7,15}$/,$(this),
			$("#scedula"),"El formato debe ser 9999999 ");
			if($("#ciMadre").val().length > 6){
			  var datos = new FormData();
			    datos.append('accion','consultamama');
				datos.append('ciMadre',$(this).val());
				enviaAjax(datos,'consultamama');
			}

		});

		$("#ciPadre").on("keypress",function(e){
				validarkeypress(/^[0-9-\b]*$/,e);
			});

			$("#ciPadre").on("keyup",function(){
				validarkeyup(/^[0-9]{7,15}$/,$(this),
				$("#scedula"),"El formato debe ser 9999999 ");
				if($("#ciPadre").val().length > 6){
				  var datos = new FormData();
				    datos.append('accion','consultapapa');
					datos.append('ciPadre',$(this).val());
					enviaAjax(datos,'consultapapa');
				}


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
		datos.append('turno',$("#turno").val());
		datos.append('anioe',$("#anioe").val());
		datos.append('maestro',$("#maestro").val());


		datos.append('cedulaEscolar',$("#cedulaEscolar").val());
		datos.append('cedula_r',$("#cedula_r").val());
		
		datos.append('apellidoPri',$("#apellidoPri").val());
		datos.append('nombrePri',$("#nombrePri").val());
		datos.append('sexo',$("#sexo").val());
		datos.append('fechaNaciPri',$("#fechaNaciPri").val());
		datos.append('estado_p',$("#estado_p").val());
		datos.append('ciudad_p',$("#ciudad_p").val());
		datos.append('vive_con',$("#vive_con").val());
		datos.append('canaima',$("#canaima").val());
		datos.append('retirada',$("#retirada").val());

		datos.append('pesoActual',$("#pesoActual").val());
		datos.append('tallaActual',$("#tallaActual").val());
		datos.append('camisa',$("#camisa").val());
		datos.append('pantalon',$("#pantalon").val());
		datos.append('calzado',$("#calzado").val());

		//datos de la madre
		datos.append('apellidoMadre',$("#apellidoMadre").val());
		datos.append('nombreMadre',$("#nombreMadre").val());
		datos.append('ciMadre',$("#ciMadre").val());
		datos.append('telefonoMadre',$("#telefonoMadre").val());
		datos.append('direccionMadre',$("#direccionMadre").val());
		//datos del padre
		datos.append('apellidoPadre',$("#apellidoPadre").val());
		datos.append('nombrePadre',$("#nombrePadre").val());
		datos.append('ciPadre',$("#ciPadre").val());
		datos.append('telefonoPadre',$("#telefonoPadre").val());
		datos.append('direccionPadre',$("#direccionPadre").val());

		//de tener hermanos en la institucion

		datos.append('nombre_hermano1',$("#nombre_hermano1").val());
		datos.append('grado_hermano1',$("#grado_hermano1").val());
		datos.append('turno_hermano1',$("#turno_hermano1").val());

		datos.append('nombre_hermano2',$("#nombre_hermano2").val());
		datos.append('grado_hermano2',$("#grado_hermano2").val());
		datos.append('turno_hermano2',$("#turno_hermano2").val());

		datos.append('nombre_hermano3',$("#nombre_hermano3").val());
		datos.append('grado_hermano3',$("#grado_hermano3").val());
		datos.append('turno_hermano3',$("#turno_hermano3").val());

		datos.append('nombre_hermano4',$("#nombre_hermano4").val());
		datos.append('grado_hermano4',$("#grado_hermano4").val());
		datos.append('turno_hermano4',$("#turno_hermano4").val());

		datos.append('infom',$("#infom").val());
		datos.append('colab_c',$("#colab_c").val());
		datos.append('observacion',$("#observacion").val());


/*

		//con quien se retira el nino

		datos.append('quienRetirada',$("#quienRetirada").val());
		datos.append('quienTelefono',$("#quienTelefono").val());
		*/

		llenarLista();
		enviaAjax(datos,'incluir');
		}


});

$("#modificar").on("click",function(){
	if(validarenvio()){
		//console.log("M1");
		var datos = new FormData();
		datos.append('accion','modificar');
		//datos del niño
		datos.append('grado',$("#grado").val());
		datos.append('seccion',$("#seccion").val());
		datos.append('turno',$("#turno").val());
		datos.append('anioe',$("#anioe").val());
		datos.append('maestro',$("#maestro").val());


		datos.append('cedulaEscolar',$("#cedulaEscolar").val());
		datos.append('cedula_r',$("#cedula_r").val());
		datos.append('cedula_m',$("#cedula_m").val());
		datos.append('apellidoPri',$("#apellidoPri").val());
		datos.append('nombrePri',$("#nombrePri").val());
		datos.append('sexo',$("#sexo").val());
		datos.append('fechaNaciPri',$("#fechaNaciPri").val());
		datos.append('estado_p',$("#estado_p").val());
		datos.append('ciudad_p',$("#ciudad_p").val());
		datos.append('vive_con',$("#vive_con").val());
		datos.append('canaima',$("#canaima").val());
		datos.append('retirada',$("#retirada").val());

		datos.append('pesoActual',$("#pesoActual").val());
		datos.append('tallaActual',$("#tallaActual").val());
		datos.append('camisa',$("#camisa").val());
		datos.append('pantalon',$("#pantalon").val());
		datos.append('calzado',$("#calzado").val());

		//datos de la madre
		datos.append('apellidoMadre',$("#apellidoMadre").val());
		datos.append('nombreMadre',$("#nombreMadre").val());
		datos.append('ciMadre',$("#ciMadre").val());
		datos.append('telefonoMadre',$("#telefonoMadre").val());
		datos.append('direccionMadre',$("#direccionMadre").val());
		//datos del padre
		datos.append('apellidoPadre',$("#apellidoPadre").val());
		datos.append('nombrePadre',$("#nombrePadre").val());
		datos.append('ciPadre',$("#ciPadre").val());
		datos.append('telefonoPadre',$("#telefonoPadre").val());
		datos.append('direccionPadre',$("#direccionPadre").val());

		//de tener hermanos en la institucion

		datos.append('nombre_hermano1',$("#nombre_hermano1").val());
		datos.append('grado_hermano1',$("#grado_hermano1").val());
		datos.append('turno_hermano1',$("#turno_hermano1").val());

		datos.append('nombre_hermano2',$("#nombre_hermano2").val());
		datos.append('grado_hermano2',$("#grado_hermano2").val());
		datos.append('turno_hermano2',$("#turno_hermano2").val());

		datos.append('nombre_hermano3',$("#nombre_hermano3").val());
		datos.append('grado_hermano3',$("#grado_hermano3").val());
		datos.append('turno_hermano3',$("#turno_hermano3").val());

		datos.append('nombre_hermano4',$("#nombre_hermano4").val());
		datos.append('grado_hermano4',$("#grado_hermano4").val());
		datos.append('turno_hermano4',$("#turno_hermano4").val());

		//Cuarta parte o
		datos.append('infom',$("#infom").val());
		datos.append('colab_c',$("#colab_c").val());
		datos.append('observacion',$("#observacion").val());

		llenarLista();
		enviaAjax(datos,'modificar');


	}
});



$("#eliminar").on("click",function(){

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

/*

$("#consultar").on("click",function(){
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');
});
//FIN DE CONTROL DE BOTONES


*/


});


function llenarpapa(cedula) {
	console.log(cedula);
	var datos = new FormData();
		datos.append('accion','consultapapa');
	datos.append('ciPadre',cedula);
	enviaAjax(datos,'consultapapa');
}


//Validación de todos los campos antes del envio
function validarenvio(){

	/*
	if(validarkeyup(/^[0-9]{7,8}$/,$("#cedulaEscolar"),
		$("#pCedulaEscolar"),"Formato 99999999")==0){
	    muestraMensaje("Formato 99999999");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#apellidoPri"),$("#pApellidoPri"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("APELLIDO <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombrePri"),$("#pNombrePri"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#estadoprimaria"),$("#pestadoprimaria"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#ciudadprimaria"),$("#pciudadprimaria"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#viveConO"),$("#pViveConO"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	//datos del representante legal
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#apellidoRepre"),$("#pApellidoRepre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombreRepre"),$("#pNombreRepre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[0-9]{7,8}$/,$("#ciRepre"),
		$("#pCiRepre"),"Formato 99999999")==0){
	    muestraMensaje("Formato 99999999");
		return false;
	}
	else if(validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$("#telfRepre"),
		 $("#pTelfRepre"),"FORMATO 9999-9999999")==0){
		 muestraMensaje("TELEFONO <br/>9999-9999999");
	     return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#direccionRepre"),$("#pDireccionRepre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#profesionRepre"),$("#pProfesionRepre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Z0-9a-z_\u00f1\u00d1\u00E0-\u00FC-]{3,30}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,3}$/,
		$("#correoRepre"),$("#pCorreoRepre"),"FORMATO alguien@servidor.com")==0){
		muestraMensaje("FORMATO CORREO <br/> alguien@servidor.com");
		 return false;
	}
	else if(validarkeyup(/^[0-9]{20}$/,
		$("#cuentaBancR"),$("#pcuentaBancR"),"FORMATO alguien@servidor.com")==0){
		muestraMensaje("FORMATO CORREO <br/> alguien@servidor.com");
		 return false;
	}
	else if(validarkeyup(/^[0-9]{20}$/,
		$("#codigoCPR"),$("#pcodigoCPR"),"FORMATO alguien@servidor.com")==0){
		muestraMensaje("FORMATO CORREO <br/> alguien@servidor.com");
		 return false;
	}
	else if(validarkeyup(/^[0-9]{20}$/,
		$("#serialCPR"),$("#pserialCPR"),"FORMATO alguien@servidor.com")==0){
		muestraMensaje("FORMATO CORREO <br/> alguien@servidor.com");
		 return false;
	}
	//datos de la madre
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#apellidoMadre"),$("#pApellidoMadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombreMadre"),$("#pNombreMadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[0-9]{7,8}$/,
		$("#ciMadre"),$("#pCiMadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$("#telefonoMadre"),
		 $("#pTelefonoMadre"),"FORMATO 9999-9999999")==0){
		 muestraMensaje("TELEFONO <br/>9999-9999999");
	     return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#direccionMadre"),$("#pDireccionMadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	//datos del padre
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#apellidoPadre"),$("#pApellidoPadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombrePadre"),$("#pNombrePadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[0-9]{7,8}$/,
		$("#ciPadre"),$("#pCiPadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$("#telefonoPadre"),
		 $("#pTelefonoPadre"),"FORMATO 9999-9999999")==0){
		 muestraMensaje("TELEFONO <br/>9999-9999999");
	     return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#direccionPadre"),$("#pDireccionPadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	//de tene hermanos en la institucion
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombre_hermano1"),$("#pnombre_hermano1"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombre_hermano2"),$("#pnombre_hermano2"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombre_hermano3"),$("#pnombre_hermano3"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombre_hermano4"),$("#pnombre_hermano4"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	//con quien se retira el nino
	else if(validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$("#quienRetirada"),
		 $("#pQuienRetirada"),"FORMATO 9999-9999999")==0){
		 muestraMensaje("TELEFONO <br/>9999-9999999");
	     return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#quienTelefono"),$("#pQuienTelefono"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}

	//
	else {
		var f1 = new Date(1920,01,01);
		var f2 = new Date($("#fechaNaciPri").val());
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

	*/


	return true;
}

function llenarLista() {
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');
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
					 console.log(respuesta);
				   lee = JSON.parse(respuesta);


				  console.log(lee['resultado']);
				   if(lee['resultado']=='encontro'){


						
						 $("#cedula_r").val(lee[0].representante);
					   $("#apellidoPri").val(lee[0].apellido);
					   $("#nombrePri").val(lee[0].nombre);
					   $("#sexo").val(lee[0].sexo);
						 $("#fechaNaciPri").val(lee[0].fecha_n);
					   $("#estado_p").val(lee[0].estado_n);
					   $("#ciudad_p").val(lee[0].ciudad_n);
					   $("#vive_con").val(lee[0].viveConO);
					   $("#canaima").val(lee[0].posee_canai);
						 $("#canaima").val(lee[0].posee_canai);

					   $("#pesoActual").val(lee[0].peso);
					   $("#tallaActual").val(lee[0].talla);
					   $("#camisa").val(lee[0].camisa);
					   $("#pantalon").val(lee[0].pantalon);
					   $("#calzado").val(lee[0].calzado);

					   $("#apellidoMadre").val(lee[0].apellido_m);
					   $("#nombreMadre").val(lee[0].nombre_m);
					   $("#ciMadre").val(lee[0].cedula_mama);
					   $("#telefonoMadre").val(lee[0].telefono_m);
					   $("#direccionMadre").val(lee[0].direc_trab);
					   $("#apellidoPadre").val(lee[0].apellidoPadre);

					   $("#ciPadre").val(lee[0].cedula_p);

						 if($("#ciPadre").val().length > 6) {
								llenarpapa( $("#ciPadre").val());
						 }

					   $("#infom").val(lee[0].inf_medica);
					   $("#colab_c").val(lee[0].colab_comun);
					   $("#observacion").val(lee[0].observ);

						  $("#nombre_hermano1").val(lee[0].nombre_hermano4);
							$("#grado_hermano1").val(lee[0].nombre_hermano4);
							$("#turno_hermano1").val(lee[0].nombre_hermano4);

							$("#nombre_hermano1").val(lee[0].nombre_hermano4);
						 $("#grado_hermano1").val(lee[0].nombre_hermano4);
						 $("#turno_hermano1").val(lee[0].nombre_hermano4);

						 $("#nombre_hermano1").val(lee[0].nombre_hermano4);
						 $("#grado_hermano1").val(lee[0].nombre_hermano4);
						 $("#turno_hermano1").val(lee[0].nombre_hermano4);

						 $("#nombre_hermano1").val(lee[0].nombre_hermano4);
						 $("#grado_hermano1").val(lee[0].nombre_hermano4);
						 $("#turno_hermano1").val(lee[0].nombre_hermano4);


					   $("#nombre_hermano4").val(lee[0].nombre_hermano4);
					   $("#quienRetirada").val(lee[0].quienRetirada);
					   $("#quienTelefono").val(lee[0].quienTelefono);

				   }
					 else	if($("#ciPadre").val().length > 6) {
					 	console.log("siiiiiiiiii");
					 }
				   else if(lee['resultado']=='noencontro'){

				   }
				   else {
					   muestraMensaje(lee['resultado']);
				   }


			   }

				 else if(accion=='consultamama'){

					 console.log(respuesta);
					lee = JSON.parse(respuesta);


				 console.log(lee['resultado']);
					if(lee['resultado']=='encontro'){


						$("#apellidoMadre").val(lee[0].apellido_m);
						$("#nombreMadre").val(lee[0].nombre_m);

						$("#telefonoMadre").val(lee[0].telefono_m);
						$("#direccionMadre").val(lee[0].direc_trab);
						$("#apellidoPadre").val(lee[0].apellidoPadre);

				 }
			 }

				 else if(accion=='consultapapa'){

					 console.log(respuesta);
					lee = JSON.parse(respuesta);


				 console.log(lee['resultado']);
					if(lee['resultado']=='encontro'){

						$("#apellidoPadre").val(lee[0].apellido_m);
						$("#nombrePadre").val(lee[0].nombre_m);
						$("#telefonoPadre").val(lee[0].telefono_m);
						$("#direccionPadre").val(lee[0].direc_trab);
						$("#telefonoPadre").val(lee[0].telefono_m);


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


// function limpia(){
// 	$("#cedulaEscolar").val("");
// 	$("#apellidoPri").val("");
// 	$("#nombrePri").val("");
//
//
// 	$("#fechaNaciPri").val("");
// 	$("#estadoprimaria").val("");
// 	$("#ciudadprimaria").val("");
// 	$("#viveConO").val("");
// 	$("#apellidoRepre").val("");
// 	$("#nombreRepre").val("");
// 	$("#ciRepre").val("");
// 	$("#telfRepre").val("");
// 	$("#direccionRepre").val("");
// 	$("#profesionRepre").val("");
// 	$("#correoRepre").val("");
// 	$("#cuentaBancR").val("");
// 	$("#codigoCPR").val("");
// 	$("#serialCPR").val("");
// 	$("#apellidoMadre").val("");
// 	$("#nombreMadre").val("");
// 	$("#ciMadre").val("");
// 	$("#telefonoMadre").val("");
// 	$("#direccionMadre").val("");
// 	$("#apellidoPadre").val("");
// 	$("#nombrePadre").val("");
// 	$("#ciPadre").val("");
// 	$("#telefonoPadre").val("");
// 	$("#direccionPadre").val("");
// 	$("#nombre_hermano1").val("");
// 	$("#nombre_hermano2").val("");
// 	$("#nombre_hermano3").val("");
// 	$("#nombre_hermano4").val("");
// 	$("#quienRetirada").val("");
// 	$("#quienTelefono").val("");
// }
//
// function limpia2(){
//
// 	$("#apellidoPri").val("");
// 	$("#nombrePri").val("");
//
//
// 	$("#fechaNaciPri").val("");
// 	$("#estadoprimaria").val("");
// 	$("#ciudadprimaria").val("");
// 	$("#viveConO").val("");
// 	$("#apellidoRepre").val("");
// 	$("#nombreRepre").val("");
// 	$("#ciRepre").val("");
// 	$("#telfRepre").val("");
// 	$("#direccionRepre").val("");
// 	$("#profesionRepre").val("");
// 	$("#correoRepre").val("");
// 	$("#cuentaBancR").val("");
// 	$("#codigoCPR").val("");
// 	$("#serialCPR").val("");
// 	$("#apellidoMadre").val("");
// 	$("#nombreMadre").val("");
// 	$("#ciMadre").val("");
// 	$("#telefonoMadre").val("");
// 	$("#direccionMadre").val("");
// 	$("#apellidoPadre").val("");
// 	$("#nombrePadre").val("");
// 	$("#ciPadre").val("");
// 	$("#telefonoPadre").val("");
// 	$("#direccionPadre").val("");
// 	$("#nombre_hermano1").val("");
// 	$("#nombre_hermano2").val("");
// 	$("#nombre_hermano3").val("");
// 	$("#nombre_hermano4").val("");
// 	$("#quienRetirada").val("");
// 	$("#quienTelefono").val("");
// }
