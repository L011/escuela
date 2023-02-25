<?php

//llamada al archivo que contiene la clase
//usuarios, en ella estara el codigo que me //permitirá
//guardar, consultar y modificar dentro de mi base //de datos


//lo primero que se debe hacer es verificar al //igual que en la vista que exista el archivo
if (!is_file("modelo/".$pagina.".php")){
	//alli pregunte que si no es archivo se niega //con !
	//si no existe envio mensaje y me salgo
	echo "Falta definir la clase ".$pagina;
	exit;
}
require_once("modelo/".$pagina.".php");
  if(is_file("vista/".$pagina.".php")){

	  //bien si estamos aca es porque existe la //vista y la clase
	  //por lo que lo primero que debemos hace es //realizar una instancia de la clase
	  //instanciar es crear una variable local, //que contiene los metodos de la clase
	  //para poderlos usar


	  $o = new preescolar(); //ahora nuestro objeto //se llama $o y es una copia en memoria de la
	  //clase primaria

	  if(!empty($_POST)){

		  //como ya sabemos si estamos aca es //porque se recibio alguna informacion
		  //de la vista, por lo que lo primero que //debemos hacer ahora que tenemos una
		  //clase es guardar esos valores en ella //con los metodos set
		  $accion = $_POST['accion'];

		  if($accion=='consultarVacuna'){
			 echo  $o->consultarVacuna();
		  }

		  elseif($accion=='consultarepre'){
			 $o->set_cedula_r($_POST['cedula_r']);
			 echo  $o->consultarepre();
		  }

		  elseif($accion=='consultatr'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->consultatr();
		  }

			elseif($accion=='consultamama'){
			 $o->set_ciMadre($_POST['ciMadre']);
			 echo  $o->consultamama();
		  }

			elseif($accion=='consultapapa'){
			 $o->set_ciPadre($_POST['ciPadre']);
			 echo  $o->consultapapa();
		  }
		  elseif($accion=='consultaretira'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->consultaretira();
		  }
		  elseif($accion=='consultahogar'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->consultahogar();
		  }
		  elseif($accion=='eliminar'){
			 $o->set_cedulaEscolar($_POST['cedulaEscolar']);
			 echo  $o->eliminar();
		  }
		  else{
		  	$a= $_POST['doc'];
				$b = implode(",", $a);
				$o->set_doc($b);


				$c= $_POST['llegar'];
				$d = implode(",", $c);
				$o->set_llegar($d);


				$e= $_POST['habito'];
				$f = implode(",", $e);
				$o->set_habito($f);

				$g= $_POST['control'];
				$h = implode(",", $g);
				$o->set_control($h);

				$i= $_POST['desarrollo'];
				$j = implode(",", $i);
				$o->set_desarrollo($j);

				$k= $_POST['antece'];
				$l = implode(",", $k);
				$o->set_antece($l);

				$m= $_POST['equilibrio'];
				$n = implode(",", $m);
				$o->set_equilibrio($n);

				$p= $_POST['familiar'];
				$q = implode(",", $p);
				$o->set_familiar($q);

				$p1= $_POST['enfermedades'];
				$q1 = implode(",", $p1);
				$o->set_enfermedades($q1);


			  $o->set_cedulaEscolar($_POST['cedulaEscolar']);
				$o->set_cedula_r($_POST['cedula_r']);
			  $o->set_apellidoPri($_POST['apellidoPri']);
			  $o->set_nombrePri($_POST['nombrePri']);
				$o->set_sexo($_POST['sexo']);
			  $o->set_fechaNaciPri($_POST['fechaNaciPri']);
			  $o->set_estado_p($_POST['estado_p']);
			  $o->set_ciudad_p($_POST['ciudad_p']);
			  $o->set_vive_con($_POST['vive_con']);
				$o->set_retirada($_POST['retirada']);
				$o->set_canaima($_POST['canaima']);

				$o->set_orden($_POST['orden']);
				$o->set_nacionalidad($_POST['nacionalidad']);
				$o->set_c_id($_POST['c_id']);

				$o->set_pesoActual($_POST['pesoActual']); //agregarrr set
				$o->set_tallaActual($_POST['tallaActual']); //agregarrr set
				$o->set_camisa($_POST['camisa']); //agregarrr set
				$o->set_pantalon($_POST['pantalon']); //agregarrr set
				$o->set_calzado($_POST['calzado']); //agregarrr set

				$o->set_personasAuto($_POST['personasAuto']);
				$o->set_telefonoauto($_POST['telefonoauto']);
				$o->set_personasAuto1($_POST['personasAuto1']);
				$o->set_telefonoauto1($_POST['telefonoauto1']);

				//personas en hogar

				$o->set_n1($_POST['n1']);
				$o->set_a1($_POST['a1']);
				$o->set_sx1($_POST['sx1']);
				$o->set_ed1($_POST['ed1']);
				$o->set_pt1($_POST['pt1']);
				$o->set_oc1($_POST['oc1']);

				$o->set_n2($_POST['n2']);
				$o->set_a2($_POST['a2']);
				$o->set_sx2($_POST['sx2']);
				$o->set_ed2($_POST['ed2']);
				$o->set_pt2($_POST['pt2']);
				$o->set_oc2($_POST['oc2']);

				$o->set_n3($_POST['n3']);
				$o->set_a3($_POST['a3']);
				$o->set_sx3($_POST['sx3']);
				$o->set_ed3($_POST['ed3']);
				$o->set_pt3($_POST['pt3']);
				$o->set_oc3($_POST['oc3']);

				$o->set_n4($_POST['n4']);
				$o->set_a4($_POST['a4']);
				$o->set_sx4($_POST['sx4']);
				$o->set_ed4($_POST['ed4']);
				$o->set_pt4($_POST['pt4']);
				$o->set_oc4($_POST['oc4']);

				//familar

				$o->set_ingreso_m($_POST['ingreso_m']);
				$o->set_personas_ingreso_dep($_POST['personas_ingreso_dep']);
				$o->set_tipo_vivienda($_POST['tipo_vivienda']);
				$o->set_tenencia_vivienda($_POST['tenencia_vivienda']);


				// habitos

				$o->set_alimento($_POST['alimento']);
				$o->set_come($_POST['come']);
				$o->set_apetito($_POST['apetito']);
				$o->set_comeantes($_POST['comeantes']);
				$o->set_alimento_no($_POST['alimento_no']);
				$o->set_horaSueno($_POST['horaSueno']);
				$o->set_horaLevan($_POST['horaLevan']);
				$o->set_quien_sleep($_POST['quien_sleep']);
				$o->set_sueno_nino($_POST['sueno_nino']);
				$o->set_despierta($_POST['despierta']);
				$o->set_dientes($_POST['dientes']);

				//conrol sfinteres
				$o->set_solo_bano($_POST['solo_bano']);
				$o->set_dejoPanalEdad($_POST['dejoPanalEdad']);

				//antecedentes

				$o->set_embarazo($_POST['embarazo']);
				$o->set_embarazo1($_POST['embarazo1']);
				$o->set_trabajoEmbarazoTipo($_POST['trabajoEmbarazoTipo']);
				$o->set_tiempo_trabajo($_POST['tiempo_trabajo']);
				$o->set_partoEdadMadre($_POST['partoEdadMadre']);
				$o->set_partoExplique($_POST['partoExplique']);
				$o->set_pesoNatal($_POST['pesoNatal']);
				$o->set_tallaNatal($_POST['tallaNatal']);
				$o->set_defectosNatalEspe($_POST['defectosNatalEspe']);



				//desarrollo evolutivo

				$o->set_quienLoCuido($_POST['quienLoCuido']);
				$o->set_cuandoGateo($_POST['cuandoGateo']);
				$o->set_caminarSinApoyo($_POST['caminarSinApoyo']);
				$o->set_cuandoHablo($_POST['cuandoHablo']);
				$o->set_tono_voz($_POST['tono_voz']);
				$o->set_mano_u($_POST['mano_u']);

				//equilibrio

				$o->set_nino_obe($_POST['nino_obe']);
				$o->set_formaReprender($_POST['formaReprender']);
				$o->set_jugueteFav($_POST['jugueteFav']);
				$o->set_espacioJuego($_POST['espacioJuego']);
				$o->set_tiempoTv($_POST['tiempoTv']);
				$o->set_programasTv($_POST['programasTv']);
				$o->set_imitaPersonaje($_POST['imitaPersonaje']);
				$o->set_imitaFamiEscen($_POST['imitaFamiEscen']);
				$o->set_orientComo($_POST['orientComo']);
				$o->set_anteriorPreescolar($_POST['anteriorPreescolar']);
				$o->set_tipoJuegoPref($_POST['tipoJuegoPref']);
				$o->set_conQuienJuega($_POST['conQuienJuega']);

				//enfermedades

				$o->set_ex_dificultad($_POST['ex_dificultad']);
				$o->set_sol_df($_POST['sol_df']);
				$o->set_psico_pq($_POST['psico_pq']);
				$o->set_afeccion($_POST['afeccion']);
				$o->set_quirurgica($_POST['quirurgica']);
				$o->set_alergia($_POST['alergia']);
				$o->set_despa($_POST['despa']);
				$o->set_fiebre_a($_POST['fiebre_a']);








			  



/*

			  $o->set_nombre_hermano1($_POST['nombre_hermano1']);
			  $o->set_nombre_hermano2($_POST['nombre_hermano2']);
			  $o->set_nombre_hermano3($_POST['nombre_hermano3']);
			  $o->set_nombre_hermano4($_POST['nombre_hermano4']);
			  $o->set_quienRetirada($_POST['quienRetirada']);
			  $o->set_quienTelefono($_POST['quienTelefono']);

				$o->set_infom($_POST['infom']);
				$o->set_colab_c($_POST['colab_c']);
				$o->set_observacion($_POST['observacion']);
*/

			  if($accion=='incluir'){
				echo  $o->incluir();
			  }
			  elseif($accion=='modificar'){
				echo  $o->modificar();
			  }
		  }
		  exit;
	  }


	  require_once("vista/".$pagina.".php");
  }
  else{
	  echo "pagina en construccion";
  }
?>
