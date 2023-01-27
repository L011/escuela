
$(document).ready(function(){
	//console.log("Main")
	//para obtener la fecha del servidor y calcular la
	//edad de nacimiento que debe ser mayor a 18

//VALIDACION DE DATOS

//DATOS DEL NINO
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
	});*/

/*

	$("#apellidoPreescolar").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#apellidoPreescolar").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#papellidoPreescolar"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#nombrePreescolar").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#nombrePreescolar").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pnombrePreescolar"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#fechNaciPreesco").on("keyup",function(){
		validarkeyup(/^(?:(?:1[6-9]|[2-9]\d)?\d{2})(?:(?:(\/|-|\.)(?:0?[13578]|1[02])\1(?:31))|(?:(\/|-|\.)(?:0?[13-9]|1[0-2])\2(?:29|30)))$|^(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(\/|-|\.)0?2\3(?:29)$|^(?:(?:1[6-9]|[2-9]\d)?\d{2})(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:0?[1-9]|1\d|2[0-8])$/,
		$(this),$("#pfechNaciPreesco"),"Ingrese una fecha valida");
	});

    $("#direccionPreescolar").on("keypress",function(e){
		validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#estadopreescolar").on("keyup",function(){
		validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pestadopreescolar"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#ciudadPreescolar").on("keyup",function(){
		validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#pciudadPreescolar"),"Solo letras  entre 3 y 30 caracteres");
	});


    $("#telefonoPreescolar").on("keypress",function(e){
		validarkeypress(/^[0-9\b-]*$/,e);
	});

	$("#telefonoPreescolar").on("keyup",function(){
	    validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#ptelefonoPreescolar"),"9999-9999999");
	});

    $("#otraDireccionPreescolar").on("keypress",function(e){
		validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#otraDireccionPreescolar").on("keyup",function(){
		validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#potraDireccionPreescolar"),"Solo letras  entre 3 y 30 caracteres");
	});

    $("#otroTelfPreesco").on("keypress",function(e){
		validarkeypress(/^[0-9\b-]*$/,e);
	});

	$("#otroTelfPreesco").on("keyup",function(){
	    validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#potroTelfPreesco"),"9999-9999999");
	});


	//				Persona 1

	$("#personasAutorizadas").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#personasAutorizadas").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#ppersonasAutorizadas"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#telefonoautorizado").on("keypress",function(e){
	validarkeypress(/^[0-9\b-]*$/,e);
	});



	$("#telefonoautorizado").on("keyup",function(){
			validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#ptelefonoautorizado"),"9999-9999999");
	});


	//			Persona 2

	$("#personasAutorizada1").on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	});

	$("#personasAutorizadas1").on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#ppersonasAutorizadas1"),"Solo letras  entre 3 y 30 caracteres");
	});

	$("#telefonoautorizado1").on("keypress",function(e){
	validarkeypress(/^[0-9\b-]*$/,e);
	});

	$("#telefonoautorizado1").on("keyup",function(){
		validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#ptelefonoautorizado1"),"9999-9999999");
	});

	    //FIN DE DATOS DEL NINO

		//DATOS DEL REPRESENTANTE
		$("#nombreRepresentante").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#nombreRepresentante").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pnombreRepresentante"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#profesionRepresentante").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#profesionRepresentante").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pprofesionRepresentante"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#cedulaRepresentante").on("keypress",function(e){
			validarkeypress(/^[0-9]*$/,e);
		});

		$("#cedulaRepresentante").on("keyup",function(){
			validarkeyup(/^[0-9]{7,8}$/,
			$(this),$("#pcedulaRepresentante"),"El formato debe ser 9999999");
		});

		$("#direccionRepresentante").on("keypress",function(e){
			validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#direccionRepresentante").on("keyup",function(){
			validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pdireccionRepresentante"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#telefonoRepresentante").on("keypress",function(e){
			validarkeypress(/^[0-9\b-]*$/,e);
		});

		$("#telefonoRepresentante").on("keyup",function(){
		    validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#ptelefonoRepresentante"),"9999-9999999");
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

		//fin de datos del representante

		//datos familiares

		$("#nombresFamili1").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#nombresFamili1").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pnombresFamili1"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#nombresFamili2").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#nombresFamili2").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pnombresFamili2"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#nombresFamili3").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#nombresFamili3").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pnombresFamili3"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#nombresFamili4").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#nombresFamili4").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pnombresFamili4"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#apellidosFamili1").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#apellidosFamili1").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#papellidosFamili1"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#apellidosFamili2").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#apellidosFamili2").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#papellidosFamili2"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#apellidosFamili3").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#apellidosFamili3").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#papellidosFamili3"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#apellidosFamili4").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#apellidosFamili4").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#papellidosFamili4"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#parentescoFamiliares1").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#parentescoFamiliares1").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pparentescoFamiliares1"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#parentescoFamiliares2").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#parentescoFamiliares2").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pparentescoFamiliares2"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#parentescoFamiliares3").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#parentescoFamiliares3").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pparentescoFamiliares3"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#parentescoFamiliares4").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#parentescoFamiliares4").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pparentescoFamiliares4"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#ocupacionFamiliares1").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#ocupacionFamiliares1").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pocupacionFamiliares1"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#ocupacionFamiliares2").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#ocupacionFamiliares2").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pocupacionFamiliares2"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#ocupacionFamiliares3").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#ocupacionFamiliares3").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pocupacionFamiliares3"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#ocupacionFamiliares4").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#ocupacionFamiliares4").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pocupacionFamiliares4"),"Solo letras  entre 3 y 30 caracteres");
		});

		//fin de datos familiares

		//salud

		$("#interQueTipo").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#interQueTipo").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pinterQueTipo"),"Solo letras  entre 3 y 30 caracteres");
		});


		$("#alergiasAQue").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#alergiasAQue").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#palergiasAQue"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#desparTiempo").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#desparTiempo").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pdesparTiempo"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#fiebreAltMed").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#fiebreAltMed").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pfiebreAltMed"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#alimNoConsCual").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#alimNoConsCual").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#palimNoConsCual"),"Solo letras  entre 3 y 30 caracteres");
		});



		//fin de salud

		//habitos

		$("#conQuienDuerme").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#conQuienDuerme").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pconQuienDuerme"),"Solo letras  entre 3 y 30 caracteres");
		});


		//fin de habitos

		//equilibrio emocional

		$("#jugueteFav").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#jugueteFav").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pjugueteFav"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#espacioJuego").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#espacioJuego").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pespacioJuego"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#tiempoTv").on("keypress",function(e){
			validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#tiempoTv").on("keyup",function(){
			validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ptiempoTv"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#programasTv").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#programasTv").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pprogramasTv"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#imitaPersonaje").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#imitaPersonaje").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pimitaPersonaje"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#imitaFamiEscen").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#imitaFamiEscen").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pimitaFamiEscen"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#personasDepIngre").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#personasDepIngre").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ppersonasDepIngre"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#cuidadorEspecificar").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#cuidadorEspecificar").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pcuidadorEspecificar"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#anteriorPreecolar").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#anteriorPreecolar").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#panteriorPreecolar"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#orientComo").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#orientComo").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#porientComo"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#tipoJuegoPref").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#tipoJuegoPref").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ptipoJuegoPref"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#conQuienJuega").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#conQuienJuega").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pconQuienJuega"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#lugJugEsp").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#lugJugEsp").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#plugJugEsp"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#trabajoEmbarazoTipo").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#trabajoEmbarazoTipo").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ptrabajoEmbarazoTipo"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#trabajoEmbarazoTiempo").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#trabajoEmbarazoTiempo").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ptrabajoEmbarazoTiempo"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#partoEdadMadre").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#partoEdadMadre").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ppartoEdadMadre"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#partoExplique").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#partoExplique").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ppartoExplique"),"Solo letras  entre 3 y 30 caracteres");
		});
		// fin equilibrio emocional
		//posnatal
		$("#pesoNatal").on("keypress",function(e){
			validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#pesoNatal").on("keyup",function(){
			validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ppesoNatal"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#tallaNatal").on("keypress",function(e){
			validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#tallaNatal").on("keyup",function(){
			validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ptallaNatal"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#defectosNatalEspe").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#defectosNatalEspe").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pdefectosNatalEspe"),"Solo letras  entre 3 y 30 caracteres");
		});
	//fin postnatal

	//Desarrollo evolutivo

		$("#quienLoCuido").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#quienLoCuido").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pquienLoCuido"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#chupaDedoCual").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#chupaDedoCual").on("keyup",function(){
			validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#pchupaDedoCual"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#pesoActual").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#pesoActual").on("keyup",function(){
			validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ppesoActual"),"Solo letras  entre 3 y 30 caracteres");
		});

		$("#tallaActual").on("keypress",function(e){
			validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
		});

		$("#tallaActual").on("keyup",function(){
			validarkeyup(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
			$(this),$("#ptallaActual"),"Solo letras  entre 3 y 30 caracteres");
		});




	//fin de desarrollo evolutivo






	//FIN DE VALIDACION DE DATOS
*/


//CONTROL DE BOTONES

$("#incluir").on("click",function(){
	console.log("sad");

	if(validarenvio()){
		//console.log("I1")
		var datos = new FormData();

		datos.append('accion','incluir');
		datos.append('grado',$("#grado").val());
		datos.append('seccion',$("#seccion").val());
		datos.append('turno',$("#turno").val());
		datos.append('anioe',$("#anioe").val());
		datos.append('maestro',$("#maestro").val());

		datos.append('partidaNacimiento',$("#partidaNacimiento").val());
		datos.append('certificadoVacuna',$("#certificadoVacuna").val());
		datos.append('fotos',$("#fotos").val());
		datos.append('copiasCedulaRepre',$("#copiasCedulaRepre").val());
		datos.append('constanciaNinoSano',$("#constanciaNinoSano").val());

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

		datos.append('pesoActual',$("#pesoActual").val());
		datos.append('tallaActual',$("#tallaActual").val());
		datos.append('camisa',$("#camisa").val());
		datos.append('pantalon',$("#pantalon").val());
		datos.append('calzado',$("#calzado").val());

		datos.append('personasAuto',$("#personasAuto").val());
		datos.append('telefonoauto',$("#telefonoauto").val());
		datos.append('personasAuto1',$("#personasAuto1").val());
		datos.append('telefonoauto1',$("#telefonoauto1").val());





		enviaAjax(datos,'incluir');
	}
});
$("#modificar").on("click",function(){
	if(validarenvio()){
		//console.log("M1");
		var datos = new FormData();
		datos.append('accion','modificar');
		datos.append('cedulaEscolar',$("#cedulaEscolar").val());
		datos.append('apellidoPreescolar',$("#apellidoPreescolar").val());
		datos.append('nombrePreescolar',$("#nombrePreescolar").val());
		datos.append('fechNaciPreesco',$("#fechNaciPreesco").val());
		datos.append('sexo',$("#sexo").val());
		datos.append('correo',$("#correo").val());
		datos.append('telefono',$("#telefono").val());
		enviaAjax(datos,'modificar');

	}
});

$("#eliminar").on("click",function(){

	if(validarkeyup(/^[0-9]{7,8}$/,$("#cedulaEscolar"),
		$("#pCedulaEscolar"),"El formato debe ser 9999999")==0){
	    muestraMensaje("La cedulaEscolar debe coincidir con el formato <br/>"+
						"99999999");

	}
	else{

		var datos = new FormData();
		datos.append('accion','eliminar');
		datos.append('cedulaEscolar',$("#cedulaEscolar").val());
		enviaAjax(datos,'eliminar');
	}

});

$("#consultar").on("click",function(){
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');
});
//FIN DE CONTROL DE BOTONES




});

//Validación de todos los campos antes del envio
function validarenvio(){
/*

	if(validarkeyup(/^[0-9]{7,8}$/,$("#cedulaEscolar"),
		$("#pCedulaEscolar"),"Formato 99999999")==0){
	    muestraMensaje("Formato 99999999");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#apellidoPreescolar"),$("#papellidoPreescolar"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("APELLIDO <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombrePreescolar"),$("#pnombrePreescolar"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("NOMBRE <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if ($("#sexo").val() == null) {
		muestraMensaje("Sexo <br/> Seleccionar Sexo");
		return false;
	}
	else if(validarkeyup(/^(?:(?:1[6-9]|[2-9]\d)?\d{2})(?:(?:(\/|-|\.)(?:0?[13578]|1[02])\1(?:31))|(?:(\/|-|\.)(?:0?[13-9]|1[0-2])\2(?:29|30)))$|^(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(\/|-|\.)0?2\3(?:29)$|^(?:(?:1[6-9]|[2-9]\d)?\d{2})(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:0?[1-9]|1\d|2[0-8])$/,
		$("#fechNaciPreesco"),$("#pfechNaciPreesco"),"Ingrese una fecha valida")==0){
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
	else {
		var f1 = new Date(1920,01,01);
		var f2 = new Date($("#fechNaciPreesco").val());
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


//Funcion que muestra el modal con un mensaje
function muestraMensaje(mensaje){

	$("#contenidodemodal").html(mensaje);
			$("#mostrarmodal").modal("show");
			setTimeout(function() {
					$("#mostrarmodal").modal("hide");
			},500000);
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
	$("#cedulaEscolar").val($(linea).find("td:eq(0)").text());
	$("#apellidoPreescolar").val($(linea).find("td:eq(1)").text());
	$("#nombrePreescolar").val($(linea).find("td:eq(2)").text());
	$("#fechNaciPreesco").val($(linea).find("td:eq(3)").text());
	$("#sexo").val($(linea).find("td:eq(4)").text());
	$("#correo").val($(linea).find("td:eq(5)").text());
	$("#telefono").val($(linea).find("td:eq(6)").text());

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
				  $("#modal1").modal("show");
			   }
			   else if(accion=='consultatr'){
				   lee = JSON.parse(respuesta);

				  //console.log(lee['resultado']);
				   if(lee['resultado']=='encontro'){
					   $("#apellidoPreescolar").val(lee[0].apellidoPreescolar);
					   $("#nombrePreescolar").val(lee[0].nombrePreescolar);
					   $("#fechNaciPreesco").val(lee[0].fechNaciPreesco);
					   $("#sexo").val(lee[0].sexo);
					   $("#correo").val(lee[0].correo);
					   $("#telefono").val(lee[0].telefono);
				   }
				   else if(lee['resultado']=='noencontro'){

				   }
				   else {
					   muestraMensaje(lee['resultado']);
				   }


			   }
			   else if(accion=='obtienefecha'){
				   $("#fechNaciPreesco").val(respuesta);
			   }
			   else{
				//   limpia();
				   muestraMensaje(respuesta);

			   }
            },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

    });

}

function limpia(){
	$("#cedulaEscolar").val("");
	$("#apellidoPreescolar").val("");
	$("#nombrePreescolar").val("");
	$("#sexo").prop("selectedIndex",0);
	var datos = new FormData();
		datos.append('accion','obtienefecha');
		enviaAjax(datos,'obtienefecha');
	$("#correo").val("");
	$("#telefono").val("");
}
