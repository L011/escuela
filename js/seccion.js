$(document).ready(function(){

llenarMaestro();
 tabla();




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
		
		enviaAjax(datos,'eliminar');

	});

});


//FIN DE CONTROL DE BOTONES





});


//Validación de todos los campos antes del envio
function validarenvio(){

	


	return true;
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
            	console.log("evio justo");
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




		var data=$("#tableajax").DataTable({
			ajax:{

			url:'modelo/tabla.php',
			
			},
			columns: [
			        { data: 0 },
			        { data: 1 },
			        { data: 2 },
			        { data: 4 },
			        { data: 5 },
			        { data: 3 },
			    
			    	{"render": function () {
            return '<button type="button" id="ButtonEditar" class="editar edit-modal btn btn-warning botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"> M</span></button><button type="button" id="ButtonEliminar" class="eliminar edit-modal btn btn-warning botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"> E</span></button>';
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

    $("#grado").val(data[0]);
	$("#seccion").val(data[1]);
	$("#anioe").val(data[2]);
	$("#maestro").val(data[3]);

   
    
    
  })
  $(tbody).on("click","button.eliminar", function(){
	console.log("sakdopkaspo");
    if(table.row(this).child.isShown()){
        var data = table.row(this).data();
    }else{
        var data = table.row($(this).parents("tr")).data();
        console.log(data);
    }

    $("#grado").val(data[0]);
	$("#seccion").val(data[1]);
	$("#anioe").val(data[2]);
	$("#maestro").val(data[3]);

   
    
    
  })
}


function llenarMaestro(){
	var datos = new FormData();
		datos.append('accion','consultatr');
		enviaAjax(datos,'consultatr');
}
