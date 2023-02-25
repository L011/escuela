
$(document).ready(function(){
	

	$("#add").click();
	desabilita();
//VALIDACION DE DATOS

//DATOS DEL NINO

	$('input').on('keypress', function(e) {
		validarkeypress(/^[A-Za-z0-9-.\b\s]*$/,e);
		/* Act on the event */
	});


	 $("#cedula_r").on("keypress",function(e){
    validarkeypress(/^[A-Z0-9-\b]*$/,e);
    });

  $("#cedula_r").on("keyup",function(){
    validarkeyup(/^[VE]{1}[-]{1}[0-9]{6,8}$/,$(this),
    $("#pcedula_r"),"El formato debe ser V-10123123 ");
    if($("#cedula_r").val().length > 8){
      var datos = new FormData();
        datos.append('accion','consultarepre');
      datos.append('cedula_r',$(this).val());
      enviaAjax(datos,'consultarepre');
    }
    else {
    	$("#representanten").html('');
		$("#representantea").html('');
    	desabilita();
      botonOff();
    	limpia();
    	limpia2();
      $("#incluir").prop('disabled', false);

    }
  });

  $("#cedulaEscolar").on("keypress",function(e){
		validarkeypress(/^[0-9-\b]*$/,e);
	});

	$("#cedulaEscolar").on("keyup",function(){
		validarkeyup(/^[0-9]{7,15}$/,$(this),
		$("#scedula"),"El formato debe ser 9999999 ");
	});


	////CONTROL PARA AHCER LA CEDULA ESCOLAR THX GPT 

		$("#generar").on('click', function(event) {

			var c = $("#cedula_r").val();
			var f = $("#fechaNaciPri").val();
			var n = $("#nacionalidad").val();
			var o = $("#orden").val();
				
			$("#cedulaEscolar").val(generarCombination(c,f,o,n));


			event.preventDefault();
			/* Act on the event */
		});


			$("#c_id").on('change', function(event) {

			if ($("#c_id").val()== 'n') {

				$("#cedula_div").css('display', 'flex');
				$("#col_boton").css('display', 'block');
				$("#cedulaEscolar").prop('disabled', true);
				



			}
			else if ($("#c_id").val()== 's') {

				$("#cedula_div").css('display', 'flex');
				$("#col_boton").css('display', 'none');
				$("#cedulaEscolar").prop('disabled', false);
			}

			event.preventDefault();
			/* Act on the event */
		});


	$("#ciMadre").on("keypress",function(e){
			validarkeypress(/^[A-Z0-9-\b]*$/,e);
		});

		$("#ciMadre").on("keyup",function(){
			validarkeyup(/^[VE]{1}[-]{1}[0-9]{6,8}$/,$(this),
			$("#pCiMadre"),"El formato debe ser V-10123123");
			if($("#ciMadre").val().length > 6){
			  var datos = new FormData();
			    datos.append('accion','consultamama');
				datos.append('ciMadre',$(this).val());
				enviaAjax(datos,'consultamama');
			}

		});

	$("#ciPadre").on("keypress",function(e){
			validarkeypress(/^[A-Z0-9-\b]*$/,e);
		});

		$("#ciPadre").on("keyup",function(){
			validarkeyup(/^[VE]{1}[-]{1}[0-9]{6,8}$/,$(this),
			$("#pCiPadre"),"El formato debe ser V-10123123");
			if($("#ciPadre").val().length > 6){
			  var datosT = new FormData();
			    datosT.append('accion','consultapapa');
				datosT.append('ciPadre',$(this).val());
				enviaAjax(datosT,'consultapapa');
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

//CONTROL DE BOTONES

$("#add").on("click",function(){

	var datos = new FormData();
	datos.append('accion','consultarVacuna');

	enviaAjax(datos,'consultarVacuna');

});



$("#incluir").on("click",function(){
	if(validarenvio()){
		//console.log("I1")
		var datos = new FormData();
		datos.append('accion','incluir');
		//datos del niño

		var checkboxs = $('input[type=checkbox][name="doc[]"]:checked');

		checkboxs.each(function() {

		datos.append('doc[]',$(this).val());
			
		});

		var checkboxLlegar = $('input[type=checkbox][name="llegar[]"]:checked');

		checkboxLlegar.each(function() {

		datos.append('llegar[]',$(this).val());
			
		});


		var checkboxhabito = $('input[type=checkbox][name="habito[]"]:checked');

		checkboxhabito.each(function() {

		datos.append('habito[]',$(this).val());
			
		});

		var checkboxcontrol = $('input[type=checkbox][name="control[]"]:checked');

		checkboxcontrol.each(function() {

		datos.append('control[]',$(this).val());
			
		});

		var checkboxdessarrollo = $('input[type=checkbox][name="desarrollo[]"]:checked');

		checkboxdessarrollo.each(function() {

		datos.append('desarrollo[]',$(this).val());

			
		});


		var checkboxantecedentes = $('input[type=checkbox][name="antece[]"]:checked');

		checkboxantecedentes.each(function() {

		datos.append('antece[]',$(this).val());

			
		});


		var checkboxequilibrio = $('input[type=checkbox][name="equilibrio[]"]:checked');

		checkboxequilibrio.each(function() {

		datos.append('equilibrio[]',$(this).val());

			
		});


		var checkboxfamiliar = $('input[type=checkbox][name="familiar[]"]:checked');

		checkboxfamiliar.each(function() {

		datos.append('familiar[]',$(this).val());

			
		});


		var checkboxenfermedades = $('input[type=checkbox][name="enfermedades[]"]:checked');

		checkboxenfermedades.each(function() {

		datos.append('enfermedades[]',$(this).val());

			
		});


		datos.append('cedulaEscolar',$("#cedulaEscolar").val());
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
		datos.append('orden',$("#orden").val());
		datos.append('nacionalidad',$("#nacionalidad").val());
		datos.append('c_id',$("#c_id").val());

		datos.append('pesoActual',$("#pesoActual").val());
		datos.append('tallaActual',$("#tallaActual").val());
		datos.append('camisa',$("#camisa").val());
		datos.append('pantalon',$("#pantalon").val());
		datos.append('calzado',$("#calzado").val());

		datos.append('personasAuto',$("#personasAuto").val());
		datos.append('telefonoauto',$("#telefonoauto").val());

		datos.append('personasAuto1',$("#personasAuto1").val());
		datos.append('telefonoauto1',$("#telefonoauto1").val());

		// personas en el hogar

		datos.append('n1',$("#n1").val());
		datos.append('a1',$("#a1").val());
		datos.append('sx1',$("#sx1").val());
		datos.append('ed1',$("#ed1").val());
		datos.append('pt1',$("#pt1").val());
		datos.append('oc1',$("#oc1").val());


		datos.append('n2',$("#n2").val());
		datos.append('a2',$("#a2").val());
		datos.append('sx2',$("#sx2").val());
		datos.append('ed2',$("#ed2").val());
		datos.append('pt2',$("#pt2").val());
		datos.append('oc2',$("#oc2").val());

		datos.append('n3',$("#n3").val());
		datos.append('a3',$("#a3").val());
		datos.append('sx3',$("#sx3").val());
		datos.append('ed3',$("#ed3").val());
		datos.append('pt3',$("#pt3").val());
		datos.append('oc3',$("#oc3").val());

		datos.append('n4',$("#n4").val());
		datos.append('a4',$("#a4").val());
		datos.append('sx4',$("#sx4").val());
		datos.append('ed4',$("#ed4").val());
		datos.append('pt4',$("#pt4").val());
		datos.append('oc4',$("#oc4").val());

		//familiar

		datos.append('ingreso_m',$("#ingreso_m").val());
		datos.append('personas_ingreso_dep',$("#personas_ingreso_dep").val());
		datos.append('tipo_vivienda',$("#tipo_vivienda").val());
		datos.append('tenencia_vivienda',$("#tenencia_vivienda").val());

		// habitos

		datos.append('alimento',$("#alimento").val());
		datos.append('come',$("#come").val());
		datos.append('apetito',$("#apetito").val());
		datos.append('comeantes',$("#comeantes").val());
		datos.append('alimento_no',$("#alimento_no").val());
		datos.append('horaSueno',$("#horaSueno").val());
		datos.append('horaLevan',$("#horaLevan").val());
		datos.append('quien_sleep',$("#quien_sleep").val());
		datos.append('sueno_nino',$("#sueno_nino").val());
		datos.append('despierta',$("#despierta").val());
		datos.append('dientes',$("#dientes").val());

		//controlsfinteres
		datos.append('solo_bano',$("#solo_bano").val());
		datos.append('dejoPanalEdad',$("#dejoPanalEdad").val());


		//antecedentes

		datos.append('embarazo',$("#embarazo").val());
		datos.append('embarazo1',$("#embarazo1").val());
		datos.append('trabajoEmbarazoTipo',$("#trabajoEmbarazoTipo").val());
		datos.append('tiempo_trabajo',$("#tiempo_trabajo").val());
		datos.append('partoEdadMadre',$("#partoEdadMadre").val());
		datos.append('partoExplique',$("#partoExplique").val());
		datos.append('pesoNatal',$("#pesoNatal").val());
		datos.append('tallaNatal',$("#tallaNatal").val());
		datos.append('defectosNatalEspe',$("#defectosNatalEspe").val());




		// desarrollo evolutivo

		datos.append('quienLoCuido',$("#quienLoCuido").val());
		datos.append('cuandoGateo',$("#cuandoGateo").val());
		datos.append('caminarSinApoyo',$("#caminarSinApoyo").val());
		datos.append('cuandoHablo',$("#cuandoHablo").val());
		datos.append('tono_voz',$("#tono_voz").val());
		datos.append('mano_u',$("#mano_u").val());

		//equilibrio emocional

		datos.append('nino_obe',$("#nino_obe").val());
		datos.append('formaReprender',$("#formaReprender").val());
		datos.append('jugueteFav',$("#jugueteFav").val());
		datos.append('espacioJuego',$("#espacioJuego").val());
		datos.append('tiempoTv',$("#tiempoTv").val());
		datos.append('programasTv',$("#programasTv").val());
		datos.append('imitaPersonaje',$("#imitaPersonaje").val());
		datos.append('imitaFamiEscen',$("#imitaFamiEscen").val());
		datos.append('orientComo',$("#orientComo").val());
		datos.append('anteriorPreescolar',$("#anteriorPreescolar").val());
		datos.append('tipoJuegoPref',$("#tipoJuegoPref").val());
		datos.append('conQuienJuega',$("#conQuienJuega").val());

		//enferdades

		datos.append('ex_dificultad',$("#ex_dificultad").val());
		datos.append('sol_df',$("#sol_df").val());
		datos.append('psico_pq',$("#psico_pq").val());
		datos.append('afeccion',$("#afeccion").val());
		datos.append('quirurgica',$("#quirurgica").val());
		datos.append('alergia',$("#alergia").val());
		datos.append('despa',$("#despa").val());
		datos.append('fiebre_a',$("#fiebre_a").val());
		





		//datos de la madre
/*
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

		
		datos.append('infom',$("#infom").val());
		datos.append('colab_c',$("#colab_c").val());
		datos.append('observacion',$("#observacion").val());



		//con quien se retira el nino

		datos.append('quienRetirada',$("#quienRetirada").val());
		datos.append('quienTelefono',$("#quienTelefono").val());
		*/

		console.log(datos);
		enviaAjax(datos,'incluir');
		}


});



$("#modificar").on("click",function(){
	if(validarenvio()){
		//console.log("M1");
		var datos = new FormData();
		var checkboxs = $('input[type=checkbox][name="doc[]"]:checked');

		checkboxs.each(function() {

		datos.append('doc[]',$(this).val());
			
		});

		var checkboxLlegar = $('input[type=checkbox][name="llegar[]"]:checked');

		checkboxLlegar.each(function() {

		datos.append('llegar[]',$(this).val());
			
		});


		var checkboxhabito = $('input[type=checkbox][name="habito[]"]:checked');

		checkboxhabito.each(function() {

		datos.append('habito[]',$(this).val());
			
		});

		var checkboxcontrol = $('input[type=checkbox][name="control[]"]:checked');

		checkboxcontrol.each(function() {

		datos.append('control[]',$(this).val());
			
		});

		var checkboxdessarrollo = $('input[type=checkbox][name="desarrollo[]"]:checked');

		checkboxdessarrollo.each(function() {

		datos.append('desarrollo[]',$(this).val());

			
		});


		var checkboxantecedentes = $('input[type=checkbox][name="antece[]"]:checked');

		checkboxantecedentes.each(function() {

		datos.append('antece[]',$(this).val());

			
		});


		var checkboxequilibrio = $('input[type=checkbox][name="equilibrio[]"]:checked');

		checkboxequilibrio.each(function() {

		datos.append('equilibrio[]',$(this).val());

			
		});


		var checkboxfamiliar = $('input[type=checkbox][name="familiar[]"]:checked');

		checkboxfamiliar.each(function() {

		datos.append('familiar[]',$(this).val());

			
		});


		var checkboxenfermedades = $('input[type=checkbox][name="enfermedades[]"]:checked');

		checkboxenfermedades.each(function() {

		datos.append('enfermedades[]',$(this).val());

			
		});


		datos.append('cedulaEscolar',$("#cedulaEscolar").val());
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
		datos.append('orden',$("#orden").val());
		datos.append('nacionalidad',$("#nacionalidad").val());
		datos.append('c_id',$("#c_id").val());

		datos.append('pesoActual',$("#pesoActual").val());
		datos.append('tallaActual',$("#tallaActual").val());
		datos.append('camisa',$("#camisa").val());
		datos.append('pantalon',$("#pantalon").val());
		datos.append('calzado',$("#calzado").val());

		datos.append('personasAuto',$("#personasAuto").val());
		datos.append('telefonoauto',$("#telefonoauto").val());

		datos.append('personasAuto1',$("#personasAuto1").val());
		datos.append('telefonoauto1',$("#telefonoauto1").val());

		// personas en el hogar

		datos.append('n1',$("#n1").val());
		datos.append('a1',$("#a1").val());
		datos.append('sx1',$("#sx1").val());
		datos.append('ed1',$("#ed1").val());
		datos.append('pt1',$("#pt1").val());
		datos.append('oc1',$("#oc1").val());


		datos.append('n2',$("#n2").val());
		datos.append('a2',$("#a2").val());
		datos.append('sx2',$("#sx2").val());
		datos.append('ed2',$("#ed2").val());
		datos.append('pt2',$("#pt2").val());
		datos.append('oc2',$("#oc2").val());

		datos.append('n3',$("#n3").val());
		datos.append('a3',$("#a3").val());
		datos.append('sx3',$("#sx3").val());
		datos.append('ed3',$("#ed3").val());
		datos.append('pt3',$("#pt3").val());
		datos.append('oc3',$("#oc3").val());

		datos.append('n4',$("#n4").val());
		datos.append('a4',$("#a4").val());
		datos.append('sx4',$("#sx4").val());
		datos.append('ed4',$("#ed4").val());
		datos.append('pt4',$("#pt4").val());
		datos.append('oc4',$("#oc4").val());

		//familiar

		datos.append('ingreso_m',$("#ingreso_m").val());
		datos.append('personas_ingreso_dep',$("#personas_ingreso_dep").val());
		datos.append('tipo_vivienda',$("#tipo_vivienda").val());
		datos.append('tenencia_vivienda',$("#tenencia_vivienda").val());

		// habitos

		datos.append('alimento',$("#alimento").val());
		datos.append('come',$("#come").val());
		datos.append('apetito',$("#apetito").val());
		datos.append('comeantes',$("#comeantes").val());
		datos.append('alimento_no',$("#alimento_no").val());
		datos.append('horaSueno',$("#horaSueno").val());
		datos.append('horaLevan',$("#horaLevan").val());
		datos.append('quien_sleep',$("#quien_sleep").val());
		datos.append('sueno_nino',$("#sueno_nino").val());
		datos.append('despierta',$("#despierta").val());
		datos.append('dientes',$("#dientes").val());

		//controlsfinteres
		datos.append('solo_bano',$("#solo_bano").val());
		datos.append('dejoPanalEdad',$("#dejoPanalEdad").val());


		//antecedentes

		datos.append('embarazo',$("#embarazo").val());
		datos.append('embarazo1',$("#embarazo1").val());
		datos.append('trabajoEmbarazoTipo',$("#trabajoEmbarazoTipo").val());
		datos.append('tiempo_trabajo',$("#tiempo_trabajo").val());
		datos.append('partoEdadMadre',$("#partoEdadMadre").val());
		datos.append('partoExplique',$("#partoExplique").val());
		datos.append('pesoNatal',$("#pesoNatal").val());
		datos.append('tallaNatal',$("#tallaNatal").val());
		datos.append('defectosNatalEspe',$("#defectosNatalEspe").val());




		// desarrollo evolutivo

		datos.append('quienLoCuido',$("#quienLoCuido").val());
		datos.append('cuandoGateo',$("#cuandoGateo").val());
		datos.append('caminarSinApoyo',$("#caminarSinApoyo").val());
		datos.append('cuandoHablo',$("#cuandoHablo").val());
		datos.append('tono_voz',$("#tono_voz").val());
		datos.append('mano_u',$("#mano_u").val());

		//equilibrio emocional

		datos.append('nino_obe',$("#nino_obe").val());
		datos.append('formaReprender',$("#formaReprender").val());
		datos.append('jugueteFav',$("#jugueteFav").val());
		datos.append('espacioJuego',$("#espacioJuego").val());
		datos.append('tiempoTv',$("#tiempoTv").val());
		datos.append('programasTv',$("#programasTv").val());
		datos.append('imitaPersonaje',$("#imitaPersonaje").val());
		datos.append('imitaFamiEscen',$("#imitaFamiEscen").val());
		datos.append('orientComo',$("#orientComo").val());
		datos.append('anteriorPreescolar',$("#anteriorPreescolar").val());
		datos.append('tipoJuegoPref',$("#tipoJuegoPref").val());
		datos.append('conQuienJuega',$("#conQuienJuega").val());

		//enferdades

		datos.append('ex_dificultad',$("#ex_dificultad").val());
		datos.append('sol_df',$("#sol_df").val());
		datos.append('psico_pq',$("#psico_pq").val());
		datos.append('afeccion',$("#afeccion").val());
		datos.append('quirurgica',$("#quirurgica").val());
		datos.append('alergia',$("#alergia").val());
		datos.append('despa',$("#despa").val());
		datos.append('fiebre_a',$("#fiebre_a").val());
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

function muestraModalVacuna(mensaje){


	var a ='<div class="row"><table class="table table-striped table-hover"><thead><tr><th>Vacuna</th><th><button type="button" class="btn btn-outline-success" id="add">ADD</button></th></tr></thead><tbody id="resultadoconsulta"></tbody><div class="modal-footer bg-light"><div class="col"></div></div></table></div>';
	$("#contenidodemodal").html(a);
	$("#resultadoconsulta").html(mensaje);
			$("#mostrarmodal").modal("show");
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




function llenar_personas_hogar(datos,accion){

	$.ajax({
		    async: true,
            url: '',
            type: 'POST',//tipo de envio
			contentType: false,
            data: datos,
			processData: false,
	        cache: false,
            success: function(data) {




            	if (accion=='consultahogar') {

			 	alert("aksndkljNADKOABSKJAGSFBASKLFBASJ");

			 	console.log(data);

			 	lee = JSON.parse(data);
            	

				 console.log(lee['resultado']);
					if(lee['resultado']=='encontro'){

						if (lee[0]) {
						
							$("#n1").val(lee[0].nombre);
							$("#a1").val(lee[0].apellido);
							$("#sx1").val(lee[0].sexo);
							$("#ed1").val(lee[0].edad);
							$("#pt1").val(lee[0].parentesco);
							$("#oc1").val(lee[0].ocupacion);
							
							
							
									if (lee[1]) {
										
										$("#n2").val(lee[1].nombre);
										$("#a2").val(lee[1].apellido);
										$("#sx2").val(lee[1].sexo);
										$("#ed2").val(lee[1].edad);
										$("#pt2").val(lee[1].parentesco);
										$("#oc2").val(lee[1].ocupacion);

													if (lee[2]) {
														
														$("#n3").val(lee[2].nombre);
														$("#a3").val(lee[2].apellido);
														$("#sx3").val(lee[2].sexo);
														$("#ed3").val(lee[2].edad);
														$("#pt3").val(lee[2].parentesco);
														$("#oc3").val(lee[2].ocupacion);

																		if (lee[3]) {
																	
																				$("#n4").val(lee[3].nombre);
																				$("#a4").val(lee[3].apellido);
																				$("#sx4").val(lee[3].sexo);
																				$("#ed4").val(lee[3].edad);
																				$("#pt4").val(lee[3].parentesco);
																				$("#oc4").val(lee[3].ocupacion);
																	
																		}
													}
									}
						}





			 }else if(lee['resultado']!='encontro'){


				 	
				 }

				}




 				


			   },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

});

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






// 
function llenar_retira(datos,accion){

	$.ajax({
		    async: true,
            url: '',
            type: 'POST',//tipo de envio
			contentType: false,
            data: datos,
			processData: false,
	        cache: false,
            success: function(data) {


 				if(accion=='consultaretira'){

					lee = JSON.parse(data);
            	

				 console.log(lee['resultado']);
					if(lee['resultado']=='encontro'){

						if (lee[0]) {
						
							$("#personasAuto").val(lee[0].nombre_apellido);
							$("#telefonoauto").val(lee[0].telefono);
							
							
							if (lee[1]) {
								
								$("#personasAuto1").val(lee[1].nombre_apellido);
								$("#telefonoauto1").val(lee[1].telefono);
								

							}
						}

				 }else if(lee['resultado']!='encontro'){


				 	
				 }

			 }


			   },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

});

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


			   if(accion=='consultarVacuna'){
				  $("#resultadoconsulta").html(respuesta);

			   }

			   else if(accion=='consultarepre'){
			   	console.log(respuesta);

			   		lee = JSON.parse(respuesta);

			   		 if(lee['resultado']=='encontro'){

						   		$("#representanten").html(lee[0].nombre);
						   		$("#representantea").html(lee[0].apellido);
						   		console.log(lee[0].nombre);

						   		if (lee[0].nombre != '') {

							   		$("#repre").css({
							   			'background-color': '#59f94847'
							   		});
							   		habilita();

						   		}
						   								   	}
						   	else if (lee['resultado']=='noencontro') {
						   		desabilita();
						   		$("#representanten").html('');
						   		$("#representantea").html('');
						   		$("#repre").css({
							   			'background-color': 'tomato'
							   		});

						   	}
			   		

			    }
			   else if(accion=='consultatr'){

				   lee = JSON.parse(respuesta);


				   if(lee['resultado']=='encontro'){

//control de checkboxssc
				   		//1111
				   		var valor = $('input[name="doc[]"]');
				   		var datos1 = lee[0].doc;

				   		for (var i = 0; i < valor.length; i++) {
				   			if (datos1.includes(valor[i].value)) {
				   				valor[i].checked= true;
				   			}
				   		}
				   			//22222
				   		var valor = $('input[name="llegar[]"]');
				   		var datos2 = lee[0].llegar;

				   		for (var i = 0; i < valor.length; i++) {
				   			if (datos2.includes(valor[i].value)) {
				   				valor[i].checked= true;
				   			}
				   		}

				   		//3333

				   		var valor = $('input[name="habito[]"]');
				   		var datos3 = lee[0].check_habito;


				   		for (var i = 0; i < valor.length; i++) {
				   			if (datos3.includes(valor[i].value)) {
				   				valor[i].checked= true;
				   			}
				   		}

				   		//4444444

				   		var valor = $('input[name="control[]"]');
				   		var datos4 = lee[0].se_orina;


				   		for (var i = 0; i < valor.length; i++) {
				   			if (datos4.includes(valor[i].value)) {
				   				valor[i].checked= true;
				   			}
				   		}

				   		//555555
				   		var valor = $('input[name="desarrollo[]"]');
				   		var datos5 = lee[0].check_desarrollo;


				   		for (var i = 0; i < valor.length; i++) {
				   			if (datos5.includes(valor[i].value)) {
				   				valor[i].checked= true;
				   			}
				   		}

				   		//666666666

				   		var valor = $('input[name="antece[]"]');
				   		var datos6 = lee[0].check_antecedentes;


				   		for (var i = 0; i < valor.length; i++) {
				   			if (datos6.includes(valor[i].value)) {
				   				valor[i].checked= true;
				   			}
				   		}

				   		//77777777

				   		var valor = $('input[name="equilibrio[]"]');
				   		var datos7 = lee[0].check_emocional;


				   		for (var i = 0; i < valor.length; i++) {
				   			if (datos7.includes(valor[i].value)) {
				   				valor[i].checked= true;
				   			}
				   		}

 /////////////////////// QUITAR LUEGO


				   		$("#cedula_div").css('display', 'flex');

/////////////////////// QUITAR LUEGO

						$("#apellidoPri").val(valor);
						$("#cedulaEscolar").val(lee[0].cedula_e);

						$("#cedula_r").val(lee[0].representante);

					   $("#apellidoPri").val(lee[0].apellido);
					   $("#nombrePri").val(lee[0].nombre);
					   $("#sexo").val(lee[0].sexo);
					 	 $("#fechaNaciPri").val(lee[0].fecha_n);
					   $("#estado_p").val(lee[0].estado_n);
					   $("#ciudad_p").val(lee[0].ciudad_n);
					   $("#vive_con").val(lee[0].quien_vive);

					   $("#orden").val(lee[0].orden);
					   $("#nacionalidad").val(lee[0].nacionalidad);
					   $("#c_id").val(lee[0].c_id);

					   $("#canaima").val(lee[0].posee_canai);
						 $("#retirada").val(lee[0].retira_solo);

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

					  // llenar valores sin id

						console.log("asas");
						 var datos1 = new FormData();
					    datos1.append('accion','consultaretira');
						datos1.append('cedulaEscolar',$("#cedulaEscolar").val());
						llenar_retira(datos1,'consultaretira');

						 var datos2 = new FormData();
					    datos2.append('accion','consultahogar');
						datos2.append('cedulaEscolar',$("#cedulaEscolar").val());
						llenar_personas_hogar(datos2,'consultahogar');



						//------------- --------------

								//HABiTOS

						$("#alimento").val(lee[0].comidas_dia);
						$("#come").val(lee[0].come_solo);
						$("#apetito").val(lee[0].buen_apetit);
						$("#comeantes").val(lee[0].antes_escuela);
						$("#alimento_no").val(lee[0].alimento_que_no);
						$("#horaSueno").val(lee[0].hora_domir);
						$("#horaLevan").val(lee[0].hora_levanta);
						$("#quien_sleep").val(lee[0].quien_duerme_niño);
						$("#sueno_nino").val(lee[0].como_es_sueño);
						$("#despierta").val(lee[0].despierta_const);
						$("#dientes").val(lee[0].rechinan_dientes);

						//contrl sfinteres

						$("#solo_bano").val(lee[0].banio_solo);
						$("#dejoPanalEdad").val(lee[0].edad_no_panales);

						//desarrollo

						$("#quienLoCuido").val(lee[0].primeros_meses);
						$("#cuandoGateo").val(lee[0].meses_gateo);
						$("#caminarSinApoyo").val(lee[0].edad_caminar);
						$("#cuandoHablo").val(lee[0].edad_hablar);
						$("#tono_voz").val(lee[0].tono_voz);
						$("#mano_u").val(lee[0].mano_u);

						//antecedentes

						$("#embarazo").val(lee[0].tipo_emparazo1);
						$("#embarazo1").val(lee[0].tipo_emparazo2);
						$("#trabajoEmbarazoTipo").val(lee[0].trabajo_durante);
						$("#tiempo_trabajo").val(lee[0].tiempo_trabajo);
						$("#partoEdadMadre").val(lee[0].edad_madre_parto);
						$("#partoExplique").val(lee[0].problema_en_parto);
						$("#pesoNatal").val(lee[0].peso_a);
						$("#tallaNatal").val(lee[0].talla_a);
						$("#defectosNatalEspe").val(lee[0].padece_defectos);
						
						//equilibrio

						$("#nino_obe").val(lee[0].nino_obe);
						$("#formaReprender").val(lee[0].formaReprender);
						$("#jugueteFav").val(lee[0].jugueteFav);
						$("#espacioJuego").val(lee[0].espacioJuego);
						$("#tiempoTv").val(lee[0].tiempoTv);
						$("#programasTv").val(lee[0].programasTv);
						$("#imitaPersonaje").val(lee[0].imitaPersonaje);
						$("#imitaFamiEscen").val(lee[0].imitaFamiEscen);
						$("#orientComo").val(lee[0].orientComo);
						$("#anteriorPreescolar").val(lee[0].anteriorPreescolar);
						$("#tipoJuegoPref").val(lee[0].tipoJuegoPref);
						$("#conQuienJuega").val(lee[0].conQuienJuega);




						 if($("#ciPadre").val().length > 6) {
								llenarpapa( $("#ciPadre").val());
						 }


					   $("#infom").val(lee[0].inf_medica);
					   $("#colab_c").val(lee[0].colab_comun);
					   $("#observacion").val(lee[0].observ);


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

function limpia2() {
	// body...

	$('input:gt(2)').val("");
	$('textarea').val("");
	$('select').val('Seleccionar');


}

function all() {
	// body...

	$('input').val("");
	$('textarea').val("");
	$('select').val('Seleccionar');


}


// fUNCION QUE RECIVE LOS VALORES DE LOS INPUT Y DEVUELVE LA CEDULA

function generarCombination(cedulam, fechacum, type, nacionalidad){

	var cedu = cedulam.toString().slice(2);
	console.log(cedu);
	console.log(fechacum);

	var ultimos_dos_fecha_cum = fechacum.toString().slice(2,4);
	console.log(ultimos_dos_fecha_cum);
	var gi = '-';
	var cedula_e = nacionalidad+ gi + type + ultimos_dos_fecha_cum + cedu;
	console.log(nacionalidad);
	console.log(cedula_e);
	return cedula_e;
}

function desabilita() {
	// body...
	$('input:gt(5)').prop('disabled', true);
	$('textarea').prop('disabled', true);
	$('select').prop('disabled', true);

}
function habilita() {
	// body...
	$('input:gt(0)').prop('disabled', false);
	$('textarea').prop('disabled', false);
	$('select').prop('disabled', false);

}

function aaa() {
	// body...
	var aass="partida_na,vacuna_c,fotos,copia_ce";

	var valor = $('input[name="doc[]"]');
				   		var datos1 = aass;

				   		for (var i = 0; i < valor.length; i++) {
				   			if (datos1.includes(valor[i].value)) {
				   				valor[i].checked= true;
				   			}
				   		}
}

function llenar_f() {
	// body...

	 var datos = new FormData();
    datos.append('accion','consultatr');
	datos.append('cedulaEscolar','V-21623356299');
	enviaAjax(datos,'consultatr');
	}		
