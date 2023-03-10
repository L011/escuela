
$(document).ready(function(){
	
	tabla();
	$("#add").click();
	desabilita();
	llena_vacuna();
	botonOff();


 //habilita tooltips
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//DATOS DEL NINO
//VALIDACION DE DATOS

	$('input').on('keypress', function(e) {
		validarkeypress(/^[A-Za-z0-9-.\b\s]*$/,e);
		/* Act on the event */
	});

	$("#vacuna_name").keyup(function(event) {
	/* Act on the event */
	$("#vacuna_name").removeClass('is-invalid');
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


$('input.no_A').on("keypress",function(e){
		validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	}); //letas

$('input.no_A').on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#sapellidos"),"Solo letras  entre 3 y 30 caracteres");
	});


$('input.no_B').on("keypress",function(e){
		validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	}); //letras y numeros corto

$('input.no_B').on("keyup",function(){
		validarkeyup(/^[A-Z 0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$(this),$("#sapellidos"),"Solo letras  entre 3 y 30 caracteres");
	});


$('input.nu_1').on("keypress",function(e){
		validarkeypress(/^[0-9\b\s-.]*$/,e);
}); // solo numeros corto

$('input.nu_1').on("keyup",function(){
	    validarkeyup(/^[0-9]{1,12}$/,$(this),$("#pTelefonoMadre"),"00000000000");
	});


$('input.tele_A').on("keypress",function(e){
		validarkeypress(/^[0-9\b-]*$/,e); // nuemro de telefono
});

$('input.tele_A').on("keyup",function(){
	    validarkeyup(/^[0-9]{11,12}$/,$(this),$("#pTelefonoMadre"),"00000000000");
	});

$('textarea.tx_1').on("keypress",function(e){
		validarkeypress(/^[A-Z0-9a-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/,e);
	}); //texto

$('textarea.tx_1').on("keyup",function(){
		validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,70}$/,
		$(this),$("#sapellidos"),"Solo letras  entre 3 y 30 caracteres");
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

$("#add_v").on("click", function(event) {
		event.preventDefault();

	
		var datos = new FormData();
		    datos.append('accion','consultarVacuna');
				enviaAjax(datos,'consultarVacuna');
	});

	$("#agregar_vacuna").on("click", function(event) {
		event.preventDefault();
		if ($("#vacuna_name").val() != '') {

		console.log("as,dls,");
		var datos = new FormData();
		    datos.append('accion','vacuna_name');
		    datos.append('vacuna_name',$("#vacuna_name").val());
				enviaAjax(datos,'vacuna_name');
				$("#add_v").click();
		}
		else{
			$("#vacuna_name").addClass('is-invalid');
		}

	});



$("#incluir").on("click",function(){
	if(validarenvio()){
		//console.log("I1")
		var datos = new FormData();
		datos.append('accion','incluir');
		//datos del ni??o

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

			var checkboxdiaColaborar = $('input[type=checkbox][name="diaColaborar[]"]:checked');

		checkboxdiaColaborar.each(function() {

		datos.append('diaColaborar[]',$(this).attr('id'));

			
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
		datos.append('blood',$("#blood").val());
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

		datos.append('id_1',$("#id_1").val());
		datos.append('id_2',$("#id_2").val());
		datos.append('id_3',$("#id_3").val());
		datos.append('id_4',$("#id_4").val());

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

		// vacuna

		datos.append('vacuna1',$("#vacuna1").val());
		datos.append('dosis1',$("#dosis1").val());

		datos.append('vacuna2',$("#vacuna2").val());
		datos.append('dosis2',$("#dosis2").val());

		datos.append('vacuna3',$("#vacuna3").val());
		datos.append('dosis3',$("#dosis3").val());

		datos.append('vacuna4',$("#vacuna4").val());
		datos.append('dosis4',$("#dosis4").val());

		datos.append('vacuna5',$("#vacuna5").val());
		datos.append('dosis5',$("#dosis5").val());

		datos.append('vacuna6',$("#vacuna6").val());
		datos.append('dosis6',$("#dosis6").val());

		datos.append('vacuna7',$("#vacuna7").val());
		datos.append('dosis7',$("#dosis7").val());

		datos.append('vacuna8',$("#vacuna8").val());
		datos.append('dosis8',$("#dosis8").val());

		datos.append('vacuna9',$("#vacuna9").val());
		datos.append('dosis9',$("#dosis9").val());

		datos.append('vacuna10',$("#vacuna10").val());
		datos.append('dosis10',$("#dosis10").val());

		// colab 
		datos.append('colaboracionInicial',$("#colaboracionInicial").val());
		datos.append('horarioColaborar',$("#horarioColaborar").val());
		





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


confirmar();

	$('#si').on('click', function() {

		$('#botones').remove();

	if(validarenvio()){
		//console.log("M1");
		var datos = new FormData();
		datos.append('accion','modificar');

		var checkboxs = $('input[type=checkbox][name="doc[]"]:checked');

		checkboxs.each(function() {

		datos.append('doc[]',$(this).attr('id'));
			
		});

		var checkboxLlegar = $('input[type=checkbox][name="llegar[]"]:checked');

		checkboxLlegar.each(function() {

		datos.append('llegar[]',$(this).attr('id'));
			
		});


		var checkboxhabito = $('input[type=checkbox][name="habito[]"]:checked');

		checkboxhabito.each(function() {

		datos.append('habito[]',$(this).attr('id'));
			
		});

		var checkboxcontrol = $('input[type=checkbox][name="control[]"]:checked');

		checkboxcontrol.each(function() {

		datos.append('control[]',$(this).attr('id'));
			
		});

		var checkboxdessarrollo = $('input[type=checkbox][name="desarrollo[]"]:checked');

		checkboxdessarrollo.each(function() {

		datos.append('desarrollo[]',$(this).attr('id'));

			
		});


		var checkboxantecedentes = $('input[type=checkbox][name="antece[]"]:checked');

		checkboxantecedentes.each(function() {

		datos.append('antece[]',$(this).attr('id'));

			
		});


		var checkboxequilibrio = $('input[type=checkbox][name="equilibrio[]"]:checked');

		checkboxequilibrio.each(function() {

		datos.append('equilibrio[]',$(this).attr('id'));

			
		});


		var checkboxfamiliar = $('input[type=checkbox][name="familiar[]"]:checked');

		checkboxfamiliar.each(function() {

		datos.append('familiar[]',$(this).attr('id'));

			
		});


		var checkboxenfermedades = $('input[type=checkbox][name="enfermedades[]"]:checked');

		checkboxenfermedades.each(function() {

		datos.append('enfermedades[]',$(this).attr('id'));

			
		});

			var checkboxdiaColaborar = $('input[type=checkbox][name="diaColaborar[]"]:checked');

		checkboxdiaColaborar.each(function() {

		datos.append('diaColaborar[]',$(this).attr('id'));

			
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
		datos.append('blood',$("#blood").val());
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

		datos.append('id_1',$("#id_1").val());
		datos.append('id_2',$("#id_2").val());
		datos.append('id_3',$("#id_3").val());
		datos.append('id_4',$("#id_4").val());

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

		//vacuna
		datos.append('vacuna1',$("#vacuna1").val());
		datos.append('dosis1',$("#dosis1").val());

		datos.append('vacuna2',$("#vacuna2").val());
		datos.append('dosis2',$("#dosis2").val());

		datos.append('vacuna3',$("#vacuna3").val());
		datos.append('dosis3',$("#dosis3").val());

		datos.append('vacuna4',$("#vacuna4").val());
		datos.append('dosis4',$("#dosis4").val());

		datos.append('vacuna5',$("#vacuna5").val());
		datos.append('dosis5',$("#dosis5").val());

		datos.append('vacuna6',$("#vacuna6").val());
		datos.append('dosis6',$("#dosis6").val());

		datos.append('vacuna7',$("#vacuna7").val());
		datos.append('dosis7',$("#dosis7").val());

		datos.append('vacuna8',$("#vacuna8").val());
		datos.append('dosis8',$("#dosis8").val());

		datos.append('vacuna9',$("#vacuna9").val());
		datos.append('dosis9',$("#dosis9").val());

		datos.append('vacuna10',$("#vacuna10").val());
		datos.append('dosis10',$("#dosis10").val());

		//colab

		datos.append('colaboracionInicial',$("#colaboracionInicial").val());
		datos.append('horarioColaborar',$("#horarioColaborar").val());

		enviaAjax(datos,'modificar');

	}

});

});

$("#eliminar").on("click",function(){

	confirmar();

	$('#si').on('click', function() {

		$('#botones').remove();

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

});

$("#consultar").on("click",function(){
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');
});
//FIN DE CONTROL DE BOTONES




});

//Validaci??n de todos los campos antes del envio
function validarenvio(){
if(validarkeyup(/^[VE]{1}[-]{1}[0-9]{8,15}$/,$("#cedulaEscolar"),
		$("#pCedulaEscolar"),"Formato 12345678")==0){
	    muestraMensaje("Revisar Cedula");
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

	else if ($("#sexo").val() == '0') {
		muestraMensaje("Sexo <br/>Seleccionar una opcion");
		return false;
	}

	else if(validarkeyup(/^(?:(?:1[6-9]|[2-9]\d)?\d{2})(?:(?:(\/|-|\.)(?:0?[13578]|1[02])\1(?:31))|(?:(\/|-|\.)(?:0?[13-9]|1[0-2])\2(?:29|30)))$|^(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(\/|-|\.)0?2\3(?:29)$|^(?:(?:1[6-9]|[2-9]\d)?\d{2})(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:0?[1-9]|1\d|2[0-8])$/,
		$("#fechaNaciPri"),$("#pFechaNaciPri"),"Ingrese una fecha valida")==0){
		muestraMensaje("FECHA MAYOR A 1920-01-01 Y MENOR A LA FECHA ACTUAL");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#estado_p"),$("#estadoprimaria"),"SOLO LETRAS 3 Y 30 CARACTERES")==0){
		muestraMensaje("Estado de nacimiento <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#ciudad_p"),$("#pciudadprimaria"),"SOLO LETRAS 3 Y 30 CARACTERES")==0){
		muestraMensaje("Ciudad de nacimiento <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if ($("#vive_con").val() == '0') {
		muestraMensaje("Vive en casa <br/>Seleccionar una opcion");
		return false;
	}
	else if ($("#canaima").val() == '0') {
		muestraMensaje("Posee canaima <br/>Seleccionar una opcion");
		return false;
	}
	else if ($("#retirada").val() == '0') {
		muestraMensaje("Retirada <br/>Seleccionar una opcion");
		return false;
	}


	else if(validarkeyup(/^[0-9]{1,3}[.]{1}[0-9]{1,2}$/,$("#pesoActual"),
		$("#ppesoActual"),"Formato 001.00")==0){
	    muestraMensaje("Revisar campo peso");
		return false;
	}
	else if(validarkeyup(/^[0-9]{1,3}[.]{1}[0-9]{1,2}$/,$("#tallaActual"),
		$("#ptallaActual"),"Formato 001.00")==0){
	    muestraMensaje("Revisar campo talla");
		return false;
	}

	else if(validarkeyup(/^[A-Z0-9]{1,3}$/,$("#camisa"),
		$("#pcamisa"),"Formato 'S', 'M', '12'")==0){
	    muestraMensaje("Revisar campo camisa");
		return false;
	}

	else if(validarkeyup(/^[A-Z0-9]{1,3}$/,$("#pantalon"),
		$("#ppantalon"),"Formato 'S', 'M', '12'")==0){
	    muestraMensaje("Revisar campo pantalon");
		return false;
	}
	else if(validarkeyup(/^[0-9]{1,2}$/,$("#calzado"),
		$("#pcalzado"),"Formato '00'")==0){
	    muestraMensaje("Revisar campo calzado");
		return false;
	}
	else if (validarkeyup(/^[VE]{1}[-]{1}[0-9]{6,8}$/,$("#ciMadre"),
    $("#pCiMadre"),"El formato debe ser V-10123123 ") == 0) {
    	muestraMensaje("Revisar campo cedula madre");
		return false;

    }
    else if (validarkeyup(/^[VE]{1}[-]{1}[0-9]{6,8}$/,$("#ciPadre"),
    $("#pCiPadre"),"El formato debe ser V-10123123 ") == 0) {
    	muestraMensaje("Revisar campo cedula padre");
		return false;

    }
    else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#apellidoMadre"),$("#pApellidoMadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("APELLIDO <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombreMadre"),$("#pNombreMadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("APELLIDO <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#apellidoPadre"),$("#pApellidoPadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("APELLIDO <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(!$('input[type=checkbox][name="llegar[]"]').is(':checked')){

		muestraMensaje("Seleccionar opcion en <u> Medios utilizados para llegar al preescolar</u> - Secci??n Datos Ni??o");
		return false;
	}

	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#nombrePadre"),$("#pNombrePadre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("APELLIDO <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}



	return true;
}

function llenarpapa(cedula) {
	console.log(cedula);
	var datos = new FormData();
		datos.append('accion','consultapapa');
	datos.append('ciPadre',cedula);
	enviaAjax(datos,'consultapapa');
}

function llena_crud_vacuna(cedula) {
	console.log(cedula);
	var datos = new FormData();
		datos.append('accion','llenavacuna');
	datos.append('cedulaEscolar',cedula);
	enviaAjax(datos,'llenavacuna');
}


//Funcion que muestra el modal con un mensaje
function muestraMensaje(mensaje){

	$("#contenidodemodal").html(mensaje);
			$("#mostrarmodal").modal("show");
			setTimeout(function() {
					$("#mostrarmodal").modal("hide");
			},500000);
}


function modal_vacuna(mensaje){

	$("#contenidodemodal_v").html(mensaje);
			$("#mostrarmodal_v").modal("show");
			setTimeout(function() {
					$("#mostrarmodal_v").modal("hide");
			},100000);
			console.log(mensaje);
}


//Funci??n para validar por Keypress
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

			 	lee = JSON.parse(data);
            	

				 console.log(lee['resultado']);
					if(lee['resultado']=='encontro'){

						if (lee[0]) {
							
							$("#id_1").val(lee[0].id);
							
							$("#n1").val(lee[0].nombre);
							$("#a1").val(lee[0].apellido);
							$("#sx1").val(lee[0].sexo);
							$("#ed1").val(lee[0].edad);
							$("#pt1").val(lee[0].parentesco);
							$("#oc1").val(lee[0].ocupacion);
							
							
							
									if (lee[1]) {
										
										$("#id_2").val(lee[1].id);
										
										$("#n2").val(lee[1].nombre);
										$("#a2").val(lee[1].apellido);
										$("#sx2").val(lee[1].sexo);
										$("#ed2").val(lee[1].edad);
										$("#pt2").val(lee[1].parentesco);
										$("#oc2").val(lee[1].ocupacion);

													if (lee[2]) {
														
														$("#id_3").val(lee[2].id);
														
														$("#n3").val(lee[2].nombre);
														$("#a3").val(lee[2].apellido);
														$("#sx3").val(lee[2].sexo);
														$("#ed3").val(lee[2].edad);
														$("#pt3").val(lee[2].parentesco);
														$("#oc3").val(lee[2].ocupacion);

																		if (lee[3]) {
																	
																				$("#id_4").val(lee[3].id);
																				
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



//Funci??n para validar por keyup
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



//Funci??n para validar por keyup
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
			   	console.log("ldakds");
				  $("#contenidodemodal_v").html(respuesta);
				  modal_vacuna(respuesta)

			   }
			   else if(accion=='vacuna_name'){
			   	$("#add_v").click();
			   	llena_vacuna();

			   }

			   else if(accion=='consultarVacuna2'){
			   	console.log(respuesta);

			   		lee = JSON.parse(respuesta);

			   		 if(lee['resultado']=='encontro'){

			   		 	console.log("vacunas");
			   		 			$('select.vacuna').empty();



									$('select.vacuna').append($('<option>', {
								    value: "",
								    text: 'Seleccionar'

								}));

									if (lee[0]) {


											$('select.vacuna').append($('<option>', {
										    value: lee[0][0],
										    text: lee[0][1]

										}));

												if(lee[1]) {

													$('select.vacuna').append($('<option>', {
												  	 value: lee[1][0],
												    text: lee[1][1]

												}));

													if(lee[2]) {

														$('select.vacuna').append($('<option>', {
													    value: lee[2][0],
													    text: lee[2][1]

													}));

												}
														if(lee[3]) {

															$('select.vacuna').append($('<option>', {
														   value: lee[3][0],
														    text: lee[3][1]

															}));

															if(lee[4]) {

																	$('select.vacuna').append($('<option>', {
																    value: lee[4][0],
																    text: lee[4][1]

																}));

																	if (lee[5]) {

																			$('select.vacuna').append($('<option>', {
																		    value: lee[5][0],
																		    text: lee[5][1]

																		}));


																			if (lee[6]) {

																					$('select.vacuna').append($('<option>', {
																				    value: lee[6][0],
																				    text: lee[6][1]

																				}));

																					if (lee[7]) {

																							$('select.vacuna').append($('<option>', {
																						    value: lee[7][0],
																						    text: lee[7][1]

																						}));

																							if (lee[8]) {

																									$('select.vacuna').append($('<option>', {
																								    value: lee[8][0],
																								    text: lee[8][1]

																								}));

																										if (lee[9]) {

																												$('select.vacuna').append($('<option>', {
																											    value: lee[9][0],
																											    text: lee[9][1]

																											}));
																										}

																							}

																					}

																			}

																	}

															}

													}

											}

									}
						   								   	}
						   	else if (lee['resultado']=='noencontro') {
						   		

						   	}
			   		

			    }

			    else if(accion=='llenavacuna'){
			   	

			   		lee = JSON.parse(respuesta);

			   		console.log(lee);

			   		 if(lee['resultado']=='encontro'){

			   		 	console.log("vacunas");

			   		 	if (lee[0]) {

			   		 		
			   		 		$("#vacuna1").val(lee[0][0]);
			   		 		$("#dosis1").val(lee[0][1]);

				   		 	if (lee[1]) {
				   		 		$("#vacuna2").val(lee[1][0]);
				   		 		$("#dosis2").val(lee[1][1]);

					   		 	if (lee[2]) {
					   		 		$("#vacuna3").val(lee[2][0]);
					   		 		$("#dosis3").val(lee[2][1]);

						   		 	if (lee[3]) {
						   		 		$("#vacuna4").val(lee[3][0]);
						   		 		$("#dosis4").val(lee[3][1]);

							   		 	if (lee[4]) {
							   		 		$("#vacuna5").val(lee[4][0]);
							   		 		$("#dosis5").val(lee[4][1]);

								   		 	if (lee[5]) {
								   		 		$("#vacuna6").val(lee[5][0]);
								   		 		$("#dosis6").val(lee[5][1]);

									   		 	if (lee[6]) {
									   		 		$("#vacuna7").val(lee[6][0]);
									   		 		$("#dosis7").val(lee[6][1]);

										   		 	if (lee[7]) {
										   		 		$("#vacuna8").val(lee[7][0]);
										   		 		$("#dosis8").val(lee[7][1]);

											   		 	if (lee[8]) {
											   		 		$("#vacuna9").val(lee[8][0]);
											   		 		$("#dosis9").val(lee[8][1]);

												   		 	if (lee[9]) {
												   		 		$("#vacuna10").val(lee[9][0]);
												   		 		$("#dosis10").val(lee[9][1]);

												   		 	}
											   		 	}	
										   		 	}	
									   		 	}	
								   		 	}	
							   		 	}
						   		 	}
					   		 	}
				   		 	}
			   		 	}






								
						   								   	}
						   	else if (lee['resultado']=='noencontro') {
						   		

						   	}
			   		

			    }

			   else if(accion=='consultarepre'){
			   	console.log(respuesta);

			   		lee = JSON.parse(respuesta);

			   		 if(lee['resultado']=='encontro'){

						   		$("#representanten").html(lee[0].nombre_r);
						   		$("#representantea").html(lee[0].apellido_r);
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
				   console.log("respuestaaaaaaaaaaa");


				   if(lee['resultado']=='encontro'){

				   	botonOn();

							//control de checkboxssc
				   		//1111
				   		var valor = $('input[name="doc[]"]');
				   		var datos1 = lee[0].doc;

				   		console.log(lee[0].doc);
				   		console.log(valor.length);

				   							
				   		for (var i = 0; i < valor.length; i++) {
				   			if (datos1.includes(valor[i].id)) {
				   				console.log(valor);
				   				valor[i].checked= true;
				   			}
				   		}
				   			//22222
				   		var valor2 = $('input[name="llegar[]"]');
				   		var datos2 = lee[0].llegar;

				   		for (var i = 0; i < valor2.length; i++) {
				   			if (datos2.includes(valor2[i].id)) {
				   				valor2[i].checked= true;
				   			}
				   		}

				   		//3333

				   		var valor3 = $('input[name="habito[]"]');
				   		var datos3 = lee[0].check_habito;


				   		for (var i = 0; i < valor3.length; i++) {
				   			if (datos3.includes(valor3[i].id)) {
				   				valor3[i].checked= true;
				   			}
				   		}

				   		//4444444

				   		var valor4 = $('input[name="control[]"]');
				   		var datos4 = lee[0].se_orina;


				   		for (var i = 0; i < valor4.length; i++) {
				   			if (datos4.includes(valor4[i].id)) {
				   				valor4[i].checked= true;
				   			}
				   		}

				   		//555555
				   		var valor5 = $('input[name="desarrollo[]"]');
				   		var datos5 = lee[0].check_desarrollo;


				   		for (var i = 0; i < valor5.length; i++) {
				   			if (datos5.includes(valor5[i].id)) {
				   				valor5[i].checked= true;
				   			}
				   		}

				   		//666666666

				   		var valor6 = $('input[name="antece[]"]');
				   		var datos6 = lee[0].check_antecedentes;


				   		for (var i = 0; i < valor6.length; i++) {
				   			if (datos6.includes(valor6[i].id)) {
				   				valor6[i].checked= true;
				   			}
				   		}

				   		//77777777

				   		var valor7 = $('input[name="equilibrio[]"]');
				   		var datos7 = lee[0].check_emocional;


				   		for (var i = 0; i < valor7.length; i++) {
				   			if (datos7.includes(valor7[i].id)) {
				   				valor7[i].checked= true;
				   			}
				   		}

				   		//88888888888

				   		var valor8 = $('input[name="enfermedades[]"]');
				   		var datos8 = lee[0].check_enfermedad;


				   		for (var i = 0; i < valor8.length; i++) {
				   			if (datos8.includes(valor8[i].id)) {
				   				valor8[i].checked= true;
				   			}
				   		}

				   		//9999999999999

				   		var valor9 = $('input[name="familiar[]"]');
				   		var datos9 = lee[0].check_familiar;


				   		for (var i = 0; i < valor9.length; i++) {
				   			if (datos9.includes(valor9[i].id)) {
				   				valor9[i].checked= true;
				   			}
				   		}
						//101001010100100101

				   		var valor10 = $('input[name="diaColaborar[]"]');
				   		var datos10 = lee[0].dia_disp;


				   		for (var i = 0; i < valor10.length; i++) {
				   			if (datos10.includes(valor10[i].id)) {
				   				valor10[i].checked= true;
				   			}	
				   		}


						///////////// QUITAR LUEGO


				   		$("#cedula_div").css('display', 'flex');

							///////////// QUITAR LUEGO

						$("#cedulaEscolar").val(lee[0].cedula_e);

						$("#cedula_r").val(lee[0].representante);

						llena_crud_vacuna($("#cedulaEscolar").val());
					   $("#apellidoPri").val(lee[0].apellido);
					   $("#nombrePri").val(lee[0].nombre);
					   $("#sexo").val(lee[0].sexo);
					 	 $("#fechaNaciPri").val(lee[0].fecha_n);
					   $("#estado_p").val(lee[0].estado_n);
					   $("#ciudad_p").val(lee[0].ciudad_n);
					   $("#vive_con").val(lee[0].quien_vive);
					   $("#blood").val(lee[0].tipo_sangre);

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
						$("#quien_sleep").val(lee[0].quien_duerme_ni??o);
						$("#sueno_nino").val(lee[0].como_es_sue??o);
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

						//enfermedad

						$("#ex_dificultad").val(lee[0].ex_dificultad);
						$("#sol_df").val(lee[0].sol_df);

						$("#psico_pq").val(lee[0].psico_pq);
						$("#afeccion").val(lee[0].afeccion);
						$("#quirurgica").val(lee[0].quirurgica);
						$("#alergia").val(lee[0].alergia);
						$("#despa").val(lee[0].despa);
						$("#fiebre_a").val(lee[0].fiebre_a);

						//familiar

						$("#ingreso_m").val(lee[0].ingreso_m);
						$("#personas_ingreso_dep").val(lee[0].personas_ingreso_dep);
						$("#tipo_vivienda").val(lee[0].tipo_vivienda);
						$("#tenencia_vivienda").val(lee[0].tenencia_vivienda);

						//padres 
						$("#apellidoMadre").val(lee[0].apellido_m);
					   $("#nombreMadre").val(lee[0].nombre_m);
					   $("#ciMadre").val(lee[0].cedula_mama);
					   $("#telefonoMadre").val(lee[0].telefono_m);
					   $("#direccionMadre").val(lee[0].direc_trab);
					   $("#apellidoPadre").val(lee[0].apellidoPadre);




					   $("#ciPadre").val(lee[0].cedula_p);
					   console.log("siiiiiiiiii");
					   llena_crud_vacuna( $("#cedulaEscolar").val());

						 if($("#ciPadre").val().length > 6) {
								llenarpapa( $("#ciPadre").val());
						 }





					//		 if($("#ciPadre").val().length > 6) {
					//				llenarpapa( $("#ciPadre").val());
					//		 }


					   $("#infom").val(lee[0].inf_medica);
					   $("#observacion").val(lee[0].observ);

					   $("#horarioColaborar").val(lee[0].horario);
					   $("#colaboracionInicial").val(lee[0].colab_comun);
			}


					// else	if($("#ciPadre").val().length > 6) {
					// 	console.log("siiiiiiiiii");
					// }
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




function tabla(){

	



		var data=$("#tableajax").DataTable({
			ajax:{

			url:'modelo/tablaingresopreescolar.php',
			
			},
			columns: [
			        { data: 0 },
			        { data: 1 },
			        { data: 2 },
			        { data: 3 },
			       
			       	       
			   
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

	all();
		$("#incluir").prop('disabled', true);

		console.log

	  $("#cedulaEscolar").val(data[0]);
	  $('#contenido').css('display', 'block');
	  $('#formulario').css('display', 'none');

      $("#cedula_div").css('display', 'flex');
      $("#col_boton").css('display', 'none');


	  var datos0 = new FormData();
    	datos0.append('accion','consultatr');
	    datos0.append('cedulaEscolar',data[0]);
	    enviaAjax(datos0,'consultatr');

	    console.log(data[0]);
    
      var datos2 = new FormData();
        datos2.append('accion','consultarepre');
      datos2.append('cedula_r',data[3]);
      enviaAjax(datos2,'consultarepre');
      $("#cedula_r").val(data[3]);

    


	 
	 
   
    
    
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
	$('input:checkbox').prop('checked', false);
	
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
	$('input:gt(6)').prop('disabled', true);
	$('textarea').prop('disabled', true);
	$('select').prop('disabled', true);
	$('input:last()').prop('disabled', false);
	$('select[name=tableajax_length]').prop('disabled', false);


}
function habilita() {
	// body...
	$('input:gt(0)').prop('disabled', false);
	$('textarea').prop('disabled', false);
	$('select').prop('disabled', false);

}

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

function aaa() {
	// body...
	var aass="partida_na,vacuna_c,fotos,copia_ce";

	var valor = $('input[name="doc[]"]');
	console.log(valor);
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

	function llena_vacuna() {

	 var datos = new FormData();
        datos.append('accion','consultarVacuna2');
      enviaAjax(datos,'consultarVacuna2');


}


