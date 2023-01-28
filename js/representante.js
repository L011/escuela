$(document).ready(function(){


	botonOff();
  llenarLista();
	//DATOS DEL REPRESENTANTE LEGAL
  $("#cedula").on("keypress",function(e){
    validarkeypress(/^[0-9-\b]*$/,e);
    });

  $("#cedula").on("keyup",function(){
    validarkeyup(/^[0-9]{7,8}$/,$(this),
    $("#pCiRepre"),"El formato debe ser 9999999 ");
    if($("#cedula").val().length > 6){
      var datos = new FormData();
        datos.append('accion','consultatr');
      datos.append('cedula',$(this).val());
      enviaAjax(datos,'consultatr');
    }
    else {
      botonOff();
    	limpia();
    	limpia2();
      $("#incluir").prop('disabled', false);

    }
  });

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





//CONTROL DE BOTONES

$("#incluir").on("click",function(){
	if(validarenvio()){

			var datos = new FormData();
		datos.append('accion','incluir');
			//datos del representante legal
    datos.append('cedula',$("#cedula").val());
		datos.append('apellidoRepre',$("#apellidoRepre").val());
		datos.append('nombreRepre',$("#nombreRepre").val());
		datos.append('telfRepre',$("#telfRepre").val());
		datos.append('direccionRepre',$("#direccionRepre").val());
    datos.append('estudio',$("#estudio").val());
    datos.append('religion',$("#religion").val());
    datos.append('civil',$("#civil").val());
    datos.append('nacion',$("#nacion").val());
    datos.append('parentesco_con_niño',$("#parentesco_con_niño").val());
    datos.append('ocupa',$("#ocupa").val());
		datos.append('correoRepre',$("#correoRepre").val());
	  datos.append('cuentaBancR',$("#cuentaBancR").val());
    datos.append('cuenta_bancaria',$("#cuenta_bancaria").val());
    datos.append('id_banco',$("#id_banco").val());

    datos.append('codigoCPR',$("#codigoCPR").val());
		datos.append('serialCPR',$("#serialCPR").val());


		enviaAjax(datos,'incluir');
	}
});
$("#modificar").on("click",function(){
	if(validarenvio()){
    	var datos = new FormData();
		   datos.append('accion','modificar');
			//datos del representante legal
      datos.append('cedula',$("#cedula").val());
  		datos.append('apellidoRepre',$("#apellidoRepre").val());
  		datos.append('nombreRepre',$("#nombreRepre").val());
  		datos.append('telfRepre',$("#telfRepre").val());
  		datos.append('direccionRepre',$("#direccionRepre").val());
      datos.append('estudio',$("#estudio").val());
      datos.append('religion',$("#religion").val());
      datos.append('civil',$("#civil").val());
      datos.append('nacion',$("#nacion").val());
      datos.append('parentesco_con_niño',$("#parentesco_con_niño").val());
      datos.append('ocupa',$("#ocupa").val());
  		datos.append('correoRepre',$("#correoRepre").val());
  	  datos.append('cuentaBancR',$("#cuentaBancR").val());
      datos.append('cuenta_bancaria',$("#cuenta_bancaria").val());
      datos.append('id_banco',$("#id_banco").val());

      datos.append('codigoCPR',$("#codigoCPR").val());
  		datos.append('serialCPR',$("#serialCPR").val());


		enviaAjax(datos,'modificar');

	}
});

$("#eliminar").on("click",function(){

	if(validarkeyup(/^[0-9]{7,8}$/,$("#cedula"),
		$("#pCiRepre"),"El formato debe ser 9999999")==0){
	    muestraMensaje("La cedulaEscolar debe coincidir con el formato <br/>"+
						"99999999");

	}
	else{

		var datos = new FormData();
		datos.append('accion','eliminar');
		datos.append('cedula',$("#cedula").val());
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
	if(validarkeyup(/^[0-9]{7,8}$/,$("#cedula"),
	$("#pCiRepre"),"Formato 99999999")==0){
		muestraMensaje("Formato 99999999");
		return false;
	}
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
	else if(validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$("#telfRepre"),
		 $("#pTelfRepre"),"FORMATO 9999-9999999")==0){
		 muestraMensaje("TELEFONO <br/>9999-9999999");
	     return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#direccionRepre"),$("#pDireccionRepre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("Dirección <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
		$("#profesionRepre"),$("#pProfesionRepre"),"SOLO LETRAS ENTRE 3 Y 30 CARACTERES")==0){
		muestraMensaje("Profesion <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
		return false;
	}
	else if(validarkeyup(/^[A-Z0-9a-z_\u00f1\u00d1\u00E0-\u00FC-]{3,30}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,3}$/,
		$("#correoRepre"),$("#pCorreoRepre"),"FORMATO alguien@servidor.com")==0){
		muestraMensaje("FORMATO CORREO <br/> alguien@servidor.com");
		 return false;
	}
	else if(validarkeyup(/^[0-9]{20}$/,
		$("#cuentaBancR"),$("#pcuentaBancR"),"Ingresar un numero de cuenta valido")==0){
		muestraMensaje("Cuenta Bancaria <br/> Verificar");
		 return false;
	}
	else if(validarkeyup(/^[0-9]{10}$/,
		$("#codigoCPR"),$("#pcodigoCPR"),"Ingresar un codigo valido")==0){
		muestraMensaje("Codigo <br/> Verifique");
		 return false;
	}
	else if(validarkeyup(/^[0-9]{10}$/,
		$("#serialCPR"),$("#pserialCPR"),"Ingresar un codigo valido")==0){
		muestraMensaje("Serial <br/> Verifique");
		 return false;
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

	$("#cedula").val($(linea).find("td:eq(0)").text());
	$("#apellidoRepre").val($(linea).find("td:eq(1)").text());
	$("#nombreRepre").val($(linea).find("td:eq(2)").text());
	$("#telfRepre").val($(linea).find("td:eq(3)").text());
  $("#correoRepre").val($(linea).find("td:eq(4)").text());
	// $("#direccionRepre").val($(linea).find("td:eq(5)").text());
  // $("#parentesco_con_niño").val($(linea).find("td:eq(6)").text());
	// $("#profesionRepre").val($(linea).find("td:eq(7)").text());
	// $("#cuentaBancR").val($(linea).find("td:eq(9)").text());
  // $("#cuenta_bancaria").val($(linea).find("td:eq(10)").text());
  // $("#id_banco").val($(linea).find("td:eq(11)").text());
	// $("#codigoCPR").val($(linea).find("td:eq(12)").text());
	// $("#serialCPR").val($(linea).find("td:eq(13)").text());

  if($("#cedula").val().length > 6){
    var datos = new FormData();
      datos.append('accion','consultatr');
    datos.append('cedula',$("#cedula").val());
    enviaAjax(datos,'consultatr');
  }

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
         	botonOn();
         	 $("#incluir").prop('disabled', true);
            $("#ciRepre").val(lee[0].cedula);
            $("#apellidoRepre").val(lee[0].apellido);
            $("#nombreRepre").val(lee[0].nombre);
            $("#telfRepre").val(lee[0].telefono);
            $("#direccionRepre").val(lee[0].direc);
            $("#estudio").val(lee[0].estudio);
            $("#religion").val(lee[0].religion);
            $("#civil").val(lee[0].civil);
            $("#nacion").val(lee[0].nacion);
            $("#ocupa").val(lee[0].ocupa);
            $("#parentesco_con_niño").val(lee[0].paren_repre);
            $("#correoRepre").val(lee[0].correo);
            $("#cuentaBancR").val(lee[0].cuenta_b);
            $("#cuenta_bancaria").val(lee[0].tipo_c);
            $("#id_banco").val(lee[0].banco);
            $("#codigoCPR").val(lee[0].carnet_p);
            $("#serialCPR").val(lee[0].serial_p);
                          }
				   else if(lee['resultado']=='noencontro'){
              //si no encuentra la cedula puede enviar un mensaje
				   }
				   else {
					   muestraMensaje(lee['resultado']);

				   }


			   }
			   else{
           if (respuesta == "Registro incluido" || "Registro Modificado" || "Registro Eliminado") {
             console.log(respuesta);
             limpia();
              botonOff();
             llenarLista();
           }

				   muestraMensaje(respuesta);


			   }
            },
            error: function(){
            	//console.log("AJX1")
			   muestraMensaje("Error con ajax");
            }

    });

}


function botonOff() {
	$("#modificar").prop('disabled', true);
	$("#eliminar").prop('disabled', true);
}

function botonOn() {

	$("#modificar").prop('disabled', false);
	$("#eliminar").prop('disabled', false);
}


function llenarLista() {
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');
}


function limpia(){
  $('input[type=text]').val("");
  $('input[type=select]').prop("selected",true);


}
