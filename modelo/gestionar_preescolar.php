<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('modelo/datos.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class preescolar extends datos{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private


	private $doc;
	
	
	private $cedulaEscolar;
	private $cedula_r;
	private $cedula_m;
	private $ci;
	private $apellidoPri;
	private $nombrePri;
	private $sexo;
	private $fechaNaciPri;
	private $estado_p;
	private $ciudad_p;
	private $vive_con;
	private $infom;
	private $observacion;
	private $blood;

	private $orden;
	private $nacionalidad;
	private $c_id;

	private $pesoActual;
	private $tallaActual;
	private $camisa;
	private $pantalon;
	private $calzado;

	private $personasAuto;
	private $telefonoauto;
	private $personasAuto1;
	private $telefonoauto1;

	//persona hogar

	
	private $id_1;
	private $id_2;
	private $id_3;
	private $id_4;
	
	private $n1;
	private $n2;
	private $n3;
	private $n4;

	private $a1;
	private $a2;
	private $a3;
	private $a4;

	private $sx1;
	private $sx2;
	private $sx3;
	private $sx4;

	private $ed1;
	private $ed2;
	private $ed3;
	private $ed4;

	private $pt1;
	private $pt2;
	private $pt3;
	private $pt4;

	private $oc1;
	private $oc2;
	private $oc3;
	private $oc4;

	// familiar

	private $ingreso_m;
	private $personas_ingreso_dep;
	private $tipo_vivienda;
	private $tenencia_vivienda;
	private $familiar;

	//-------

	private $alimento;
	private $come;
	private $apetito;
	private $comeantes;
	private $alimento_no;
	private $horaSueno;
	private $horaLevan;
	private $quien_sleep;
	private $sueno_nino;
	private $despierta;
	private $dientes;

	private $habito;

	private $control;

	private $solo_bano;
	private $dejoPanalEdad;

	private $desarrollo;

	private $quienLoCuido;
	private $cuandoGateo;
	private $caminarSinApoyo;
	private $cuandoHablo;
	private $tono_voz;
	private $mano_u;

	private $antece;

	private $embarazo;
	private $embarazo1;
	private $trabajoEmbarazoTipo;
	private $tiempo_trabajo;
	private $partoEdadMadre;
	private $partoExplique;
	private $pesoNatal;
	private $tallaNatal;
	private $defectosNatalEspe;

	private $equilibrio;

	private $nino_obe;
	private $formaReprender;
	private $jugueteFav;
	private $espacioJuego;
	private $tiempoTv;
	private $programasTv;
	private $imitaPersonaje;
	private $imitaFamiEscen;
	private $orientComo;
	private $anteriorPreescolar;
	private $tipoJuegoPref;
	private $conQuienJuega;


	//enfermedades

	private $enfermedades;
	private $ex_dificultad;
	private $sol_df;
	private $psico_pq;
	private $afeccion;
	private $quirurgica;
	private $alergia;
	private $despa;
	private $fiebre_a;

	//vacunas
	private $vacuna1;
	private $dosis1;
	private $vacuna2;
	private $dosis2;
	private $vacuna3;
	private $dosis3;
	private $vacuna4;
	private $dosis4;
	private $vacuna5;
	private $dosis5;
	private $vacuna6;
	private $dosis6;
	private $vacuna7;
	private $dosis7;
	private $vacuna8;
	private $dosis8;
	private $vacuna9;
	private $dosis9;
	private $vacuna10;
	private $dosis10;

	// colaboracion


	private $diaColaborar;
	private $colaboracionInicial;
	private $horarioColaborar;

	//padres

	private $apellidoMadre;
	private $nombreMadre;
	private $ciMadre;
	private $telefonoMadre;
	private $direccionMadre;
	private $apellidoPadre;
	private $nombrePadre;
	private $ciPadre;
	private $telefonoPadre;
	private $direccionPadre;

/*



	

	
*/ 

	function set_colaboracionInicial($valor){
		$this->colaboracionInicial =$valor;
	}
	function set_horarioColaborar($valor){
		$this->horarioColaborar = $valor;
	}

	function set_diaColaborar($valor){
		$this->diaColaborar = $valor;
	}

//2

	function set_vacuna1($valor){
		$this->vacuna1 = $valor;
	}
	function set_vacuna2($valor){
		$this->vacuna2 = $valor;
	}
	function set_vacuna3($valor){
		$this->vacuna3 = $valor;
	}
	function set_vacuna4($valor){
		$this->vacuna4 = $valor;
	}
	function set_vacuna5($valor){
		$this->vacuna5 = $valor;
	}
	function set_vacuna6($valor){
		$this->vacuna6 = $valor;
	}
	function set_vacuna7($valor){
		$this->vacuna7 = $valor;
	}
	function set_vacuna8($valor){
		$this->vacuna8 = $valor;
	}
	function set_vacuna9($valor){
		$this->vacuna9 = $valor;
	}
	function set_vacuna10($valor){
		$this->vacuna10 = $valor;
	}

	function set_dosis1($valor){
		$this->dosis1 = $valor;
	}
	function set_dosis2($valor){
		$this->dosis2 = $valor;
	}
	function set_dosis3($valor){
		$this->dosis3 = $valor;
	}
	function set_dosis4($valor){
		$this->dosis4 = $valor;
	}
	function set_dosis5($valor){
		$this->dosis5 = $valor;
	}
	function set_dosis6($valor){
		$this->dosis6 = $valor;
	}
	function set_dosis7($valor){
		$this->dosis7 = $valor;
	}
	function set_dosis8($valor){
		$this->dosis8 = $valor;
	}
	function set_dosis9($valor){
		$this->dosis9 = $valor;
	}
	function set_dosis10($valor){
		$this->dosis10 = $valor;
	}
	



	//vacuna

	function set_agregar_v($valor){
		$this->vacuna_name = $valor;
	}


	//enfermedades

	function set_enfermedades($valor){
		$this->enfermedades =$valor;
	}
	function set_ex_dificultad($valor){
		$this->ex_dificultad =$valor;
	}
	function set_sol_df($valor){
		$this->sol_df =$valor;
	}
	function set_psico_pq($valor){
		$this->psico_pq =$valor;
	}
	function set_afeccion($valor){
		$this->afeccion =$valor;
	}
	function set_quirurgica($valor){
		$this->quirurgica =$valor;
	}
	function set_alergia($valor){
		$this->alergia =$valor;
	}
	function set_despa($valor){
		$this->despa =$valor;
	}
	function set_fiebre_a($valor){
		$this->fiebre_a =$valor;
	}


	//familiar
	function set_ingreso_m($valor){
		$this->ingreso_m=$valor;
	}
	function set_personas_ingreso_dep($valor){
		$this->personas_ingreso_dep=$valor;
	}
	function set_tipo_vivienda($valor){
		$this->tipo_vivienda=$valor;
	}
	function set_tenencia_vivienda($valor){
		$this->tenencia_vivienda=$valor;
	}
	function set_familiar($valor){
		$this->familiar=$valor;
	}

	//equilibrio
	function set_equilibrio($valor){
		$this->equilibrio= $valor;

	}
	function set_nino_obe($valor){
		$this->nino_obe = $valor;
	}
	function set_formaReprender($valor){
		$this->formaReprender = $valor;
	}
	function set_jugueteFav($valor){
		$this->jugueteFav = $valor;
	}
	function set_espacioJuego($valor){
		$this->espacioJuego = $valor;
	}
	function set_tiempoTv($valor){
		$this->tiempoTv = $valor;
	}
	function set_programasTv($valor){
		$this->programasTv = $valor;
	}
	function set_imitaPersonaje($valor){
		$this->imitaPersonaje = $valor;
	}
	function set_imitaFamiEscen($valor){
		$this->imitaFamiEscen = $valor;
	}
	function set_orientComo($valor){
		$this->orientComo = $valor;
	}
	function set_anteriorPreescolar($valor){
		$this->anteriorPreescolar = $valor;
	}
	function set_tipoJuegoPref($valor){
		$this->tipoJuegoPref = $valor;
	}
	function set_conQuienJuega($valor){
		$this->conQuienJuega = $valor;
	}



	//antecedentes

	function set_antece($valor){
		$this->antece = $valor;
	}
	function set_embarazo($valor){
		$this->embarazo = $valor;
	}
	function set_embarazo1($valor){
		$this->embarazo1 = $valor;
	}
	function set_trabajoEmbarazoTipo($valor){
		$this->trabajoEmbarazoTipo = $valor;
	}
	function set_tiempo_trabajo($valor){
		$this->tiempo_trabajo = $valor;
	}
	function set_partoEdadMadre($valor){
		$this->partoEdadMadre = $valor;
	}
	function set_partoExplique($valor){
		$this->partoExplique = $valor;
	}
	function set_pesoNatal($valor){
		$this->pesoNatal = $valor;
	}
	function set_tallaNatal($valor){
		$this->tallaNatal = $valor;
	}
	function set_defectosNatalEspe($valor){
		$this->defectosNatalEspe = $valor;
	}

	//desarrollo evolutivo


	function set_desarrollo($valor){

		$this->desarrollo = $valor;
	}

		function set_quienLoCuido($valor){

		$this->quienLoCuido = $valor;
	}
		function set_cuandoGateo($valor){

		$this->cuandoGateo = $valor;
	}
		function set_caminarSinApoyo($valor){

		$this->caminarSinApoyo = $valor;
	}
		function set_cuandoHablo($valor){

		$this->cuandoHablo = $valor;
	}
		function set_tono_voz($valor){

		$this->tono_voz = $valor;
	}
		function set_mano_u($valor){

		$this->mano_u = $valor;
	}
	
	//controlsfinteres

	function set_control($valor){

		$this->control = $valor;
	}
	function set_solo_bano($valor){

		$this->solo_bano = $valor;
	}
	function set_dejoPanalEdad($valor){

		$this->dejoPanalEdad = $valor;
	}

	// habitos

	


	
	function set_alimento($valor){

		$this->alimento = $valor;
	}

	function set_come($valor){

		$this->come = $valor;
	}

	function set_apetito($valor){

		$this->apetito = $valor;
	}

	function set_comeantes($valor){

		$this->comeantes = $valor;
	}

	function set_alimento_no($valor){

		$this->alimento_no = $valor;
	}

	function set_horaSueno($valor){

		$this->horaSueno = $valor;
	}

	function set_horaLevan($valor){

		$this->horaLevan = $valor;
	}

	function set_quien_sleep($valor){

		$this->quien_sleep = $valor;
	}

	function set_sueno_nino($valor){

		$this->sueno_nino = $valor;
	}

	function set_despierta($valor){

		$this->despierta = $valor;
	}

	function set_dientes($valor){

		$this->dientes = $valor;
	}

	function set_habito($valor){

		$this->habito = $valor;
	}





	//persona hogar

		//id persona

	function set_id_1($valor){
		$this->id_1 = $valor;
	}
	function set_id_2($valor){
		$this->id_2 = $valor;
	}
	function set_id_3($valor){
		$this->id_3 = $valor;
	}
	function set_id_4($valor){
		$this->id_4 = $valor;
	}

	//-------1


	function set_n1($valor){
		$this->n1 = $valor;
	}

	function set_a1($valor){
		$this->a1 = $valor;
	}

	function set_sx1($valor){
		$this->sx1 = $valor;
	}

	function set_ed1($valor){
		$this->ed1 = $valor;
	}

	function set_pt1($valor){
		$this->pt1 = $valor;
	}

	function set_oc1($valor){
		$this->oc1 = $valor;
	}

	//-------2

	function set_n2($valor){
		$this->n2 = $valor;
	}

	function set_a2($valor){
		$this->a2 = $valor;
	}

	function set_sx2($valor){
		$this->sx2 = $valor;
	}

	function set_ed2($valor){
		$this->ed2 = $valor;
	}

	function set_pt2($valor){
		$this->pt2 = $valor;
	}

	function set_oc2($valor){
		$this->oc2 = $valor;
	}

	//-------3

	function set_n3($valor){
		$this->n3 = $valor;
	}

	function set_a3($valor){
		$this->a3 = $valor;
	}

	function set_sx3($valor){
		$this->sx3 = $valor;
	}

	function set_ed3($valor){
		$this->ed3 = $valor;
	}

	function set_pt3($valor){
		$this->pt3 = $valor;
	}

	function set_oc3($valor){
		$this->oc3 = $valor;
	}

	//-------4

	function set_n4($valor){
		$this->n4 = $valor;
	}

	function set_a4($valor){
		$this->a4 = $valor;
	}

	function set_sx4($valor){
		$this->sx4 = $valor;
	}

	function set_ed4($valor){
		$this->ed4 = $valor;
	}

	function set_pt4($valor){
		$this->pt4 = $valor;
	}

	function set_oc4($valor){
		$this->oc4 = $valor;
	}


	//-------------


	function set_personasAuto($valor){
		$this->personasAuto = $valor;
	}
	function set_telefonoauto($valor){
		$this->telefonoauto = $valor;
	}
	function set_personasAuto1($valor){
		$this->personasAuto1 = $valor;
	}
	function set_telefonoauto1($valor){
		$this->telefonoauto1 = $valor;
	}

	function set_llegar($valor){
		$this->llegar = $valor;
	}


	function set_doc($valor){
		$this->doc = $valor;
	}

	function set_cedulaEscolar($valor){
		$this->cedulaEscolar = $valor; //fijencen como se accede a los elementos dentro de una clase
	}

	function set_cedula_r($valor){
		$this->cedula_r = $valor;
	}

	function set_cedula_m($valor){
		$this->cedula_m = $valor;
	}

	function set_apellidoPri($valor){
		$this->apellidoPri = $valor;
	}

	function set_nombrePri($valor){
		$this->nombrePri = $valor;
	}

	function set_sexo($valor){
		$this->sexo = $valor;
	}

	function set_fechaNaciPri($valor){
		$this->fechaNaciPri = $valor;
	}

	function set_estado_p($valor){
		$this->estado_p = $valor;
	}

	function set_orden($valor){
		$this->orden = $valor;
	}
	function set_nacionalidad($valor){
		$this->nacionalidad = $valor;
	}
	function set_c_id($valor){
		$this->c_id = $valor;
	}

	function set_ciudad_p($valor){
		$this->ciudad_p = $valor;
	}

	function set_vive_con($valor){
		$this->vive_con = $valor;
	}
	function set_blood($valor){
		$this->blood = $valor;
	}
	function set_retirada($valor){
		$this->retirada = $valor;
	}
	function set_canaima($valor){
		$this->canaima = $valor;
	}

	function set_pesoActual($valor){
		$this->pesoActual = $valor;
	}
	function set_tallaActual($valor){
		$this->tallaActual = $valor;
	}
	function set_camisa($valor){
		$this->camisa = $valor;
	}
	function set_pantalon($valor){
		$this->pantalon = $valor;
	}
	function set_calzado($valor){
		$this->calzado = $valor;
	}


		//tercera partee

	function set_apellidoMadre($valor){
		$this->apellidoMadre = $valor;
	}

	function set_nombreMadre($valor){
		$this->nombreMadre = $valor;
	}

	function set_ciMadre($valor){
		$this->ciMadre = $valor;
	}

	function set_telefonoMadre($valor){
		$this->telefonoMadre = $valor;
	}

	function set_direccionMadre($valor){
		$this->direccionMadre = $valor;
	}

	function set_apellidoPadre($valor){
		$this->apellidoPadre = $valor;
	}

	function set_nombrePadre($valor){
		$this->nombrePadre = $valor;
	}

	function set_ciPadre($valor){
		$this->ciPadre = $valor;
	}

	function set_telefonoPadre($valor){
		$this->telefonoPadre = $valor;
	}

	function set_direccionPadre($valor){
		$this->direccionPadre = $valor;
	}

	//		CUARTA PARTEE

	function set_nombre_hermano1($valor){
		$this->nombre_hermano1 = $valor;
	}

	function set_nombre_hermano2($valor){
		$this->nombre_hermano2 = $valor;
	}

	function set_nombre_hermano3($valor){
		$this->nombre_hermano3 = $valor;
	}

	function set_nombre_hermano4($valor){
		$this->nombre_hermano4 = $valor;
	}

	function set_grado_hermano1($valor){
		$this->grado_hermano1 = $valor;
	}

	function set_grado_hermano2($valor){
		$this->grado_hermano2 = $valor;
	}

	function set_grado_hermano3($valor){
		$this->set_grado_hermano3 = $valor;
	}

	function set_grado_hermano4($valor){
		$this->grado_hermano4 = $valor;
	}

	function set_turno_hermano1($valor){
		$this->turno_hermano1 = $valor;
	}

	function set_turno_hermano2($valor){
		$this->turno_hermano2 = $valor;
	}

	function set_turno_hermano3($valor){
		$this->turno_hermano3 = $valor;
	}

	function set_turno_hermano4($valor){
		$this->turno_hermano4 = $valor;
	}

	function set_quienRetirada($valor){
		$this->quienRetirada = $valor;
	}

	function set_quienTelefono($valor){
		$this->quienTelefono = $valor;
	}

			//  		Quinta parte

			function set_infom($valor){
				$this->infom = $valor;
			}

			function set_colab_c($valor){
				$this->colab_c = $valor;
			}

			function set_observacion($valor){
				$this->observacion = $valor;
			}




	//ahora la misma cosa pero para leer, es decir get

	function get_cedulaEscolar(){
		return $this->cedulaEscolar;
	}

	function get_apellidoPri(){
		return $this->apellidoPri;
	}

	function get_nombrePri(){
		return $this->nombrePri;
	}

	function get_fechaNaciPri(){
		return $this->fechaNaciPri;
	}

	function get_estadoprimaria(){
		return $this->estadoprimaria;	
	}

	function get_ciudadprimaria(){
		return $this->ciudadprimaria;
	}

	function get_viveConO(){
		return $this->viveConO;
	}

	function get_apellidoRepre(){
		return $this->apellidoRepre;
	}

	function get_nombreRepre(){
		return $this->nombreRepre;
	}

	function get_ciRepre(){
		return $this->ciRepre;
	}

	function get_telfRepre(){
		return $this->telfRepre;
	}

	function get_direccionRepre(){
		return $this->direccionRepre;
	}

	function get_profesionRepre(){
		return $this->profesionRepre;
	}

	function get_correoRepre(){
		return $this->correoRepre;
	}

	function get_cuentaBancR(){
		return $this->cuentaBancR;
	}

	function get_codigoCPR(){
		return $this->codigoCPR;
	}

	function get_serialCPR(){
		return $this->serialCPR;
	}

	function get_apellidoMadre(){
		return $this->apellidoMadre;
	}

	function get_nombreMadre(){
		return $this->nombreMadre;
	}

	function get_ciMadre(){
		return $this->ciMadre;
	}

	function get_telefonoMadre(){
		return $this->telefonoMadre;
	}

	function get_direccionMadre(){
		return $this->direccionMadre;
	}

	function get_apellidoPadre(){
		return $this->apellidoPadre;
	}

	function get_nombrePadre(){
		return $this->nombrePadre;
	}

	function get_ciPadre(){
		return $this->ciPadre;
	}

	function get_telefonoPadre(){
		return $this->telefonoPadre;
	}

	function get_direccionPadre(){
		return $this->direccionPadre;
	}

	function get_nombre_hermano1(){
		return $this->nombre_hermano1;
	}

	function get_nombre_hermano2(){
		return $this->nombre_hermano2;
	}

	function get_nombre_hermano3(){
		return $this->nombre_hermano3;
	}

	function get_nombre_hermano4(){
		return $this->nombre_hermano4;
	}

	function get_quienRetirada(){
		return $this->quienRetirada;
	}

	function get_quienTelefono(){
		return $this->quienTelefono;
	}



	//Lo siguiente que demos hacer es crear los metodos para incluir, consultar y eliminar

	function incluir(){
		//Ok ya tenemos la base de datos y la funcion conecta dentro de la clase
		//datos, ahora debemos ejecutar las operaciones para realizar las consultas

		//Lo primero que debemos hacer es consultar por el campo clave
		//en este caso la cedula, para ello se creo la funcion existe
		//que retorna true en caso de exitir el registro

	//if(   !$this->existe($this->cedulaEscolar)	){
		if(   true	){

			//si estamos aca es porque la cedula no existe es decir se puede incluir
			//los pasos a seguir son
			//1 Se llama a la funcion conecta



			$co = $this->conecta();
			$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



			//2 Se ejecuta el sql
			try {


				


/*


				
				*/

			if (!$this->existemama($this->ciMadre)) {
					// code...
					$co->query("insert into padres(
						cedula_m,
						nombre_m,
						apellido_m,
						telefono_m,
						direc_trab
						)
						Values(
							'$this->ciMadre',
							'$this->nombreMadre',
							'$this->apellidoMadre',
							'$this->telefonoMadre',
							'$this->direccionMadre'

							)
							");
				}
				if (!$this->existepapa($this->ciPadre)) {
					// code...
					$co->query("insert into padres(
						cedula_m,
						nombre_m,
						apellido_m,
						telefono_m,
						direc_trab
						)
						Values(
							'$this->ciPadre',
							'$this->nombrePadre',
							'$this->apellidoPadre',
							'$this->telefonoPadre',
							'$this->direccionPadre'

							)
							");
				}

				$co->query("insert into estudiante(
					cedula_e,
					nombre,
					apellido,
					sexo,
					fecha_n,
					estado_n,
					ciudad_n,
					quien_vive,
					cedula_mama,
					cedula_p,				
					retira_solo,
					posee_canai,
					inf_medica,
					observ,
					orden,
					nacionalidad,
					c_id,
					llegar,
					tipo_sangre


					)
					Values(
						'$this->cedulaEscolar',
						'$this->nombrePri',
						'$this->apellidoPri',
						'$this->sexo',
						'$this->fechaNaciPri',
						'$this->estado_p',
						'$this->ciudad_p',
						'$this->vive_con',
						'$this->ciMadre',
						'$this->ciPadre',
						
						'$this->retirada',
						'$this->canaima',
						'$this->infom',
						'$this->observacion',
						'$this->orden',
						'$this->nacionalidad',
						'$this->c_id',
						'$this->llegar',
						'$this->blood'

						)
				");

					$co->query("insert into documentos(
					cedula_est,
					doc
					)
					Values(
						'$this->cedulaEscolar',	
						'$this->doc'
						)
				");


				$co->query("insert into seccion_estudiante(
					
					representante,
					cedula_es,
					talla,
					peso,
					calzado,
					camisa,
					pantalon,
					colab_comun,
					dia_disp,
					horario
					)
					Values(
						'$this->cedula_r',
						'$this->cedulaEscolar',
						'$this->tallaActual',
						'$this->pesoActual',
						'$this->calzado',
						'$this->camisa',
						'$this->pantalon',
						'$this->colaboracionInicial',
						'$this->diaColaborar',
						'$this->horarioColaborar'

						)
				");

				$co->query("insert into persona_retira(
					
					nombre_apellido,
					telefono
					)
					Values(
						'$this->personasAuto',
						'$this->telefonoauto'
						)
				");

				$co->query("insert into persona_retira(
					
					nombre_apellido,
					telefono
					)
					Values(
						'$this->personasAuto1',
						'$this->telefonoauto1'
						)
				");


				$co->query("insert into personas_en_casa(
					
					nombre,
					apellido,
					sexo,
					edad,
					parentesco,
					ocupacion
					)
					Values(
						'$this->n1',
						'$this->a1',
						'$this->sx1',
						'$this->ed1',
						'$this->pt1',
						'$this->oc1'
						)
				");

				$co->query("insert into personas_en_casa(
					
					nombre,
					apellido,
					sexo,
					edad,
					parentesco,
					ocupacion
					)
					Values(
						'$this->n2',
						'$this->a2',
						'$this->sx2',
						'$this->ed2',
						'$this->pt2',
						'$this->oc2'
						)
				");

				$co->query("insert into personas_en_casa(
					
					nombre,
					apellido,
					sexo,
					edad,
					parentesco,
					ocupacion
					)
					Values(
						'$this->n3',
						'$this->a3',
						'$this->sx3',
						'$this->ed3',
						'$this->pt3',
						'$this->oc3'
						)
				");

				$co->query("insert into personas_en_casa(
					
					nombre,
					apellido,
					sexo,
					edad,
					parentesco,
					ocupacion
					)
					Values(
						'$this->n4',
						'$this->a4',
						'$this->sx4',
						'$this->ed4',
						'$this->pt4',
						'$this->oc4'
						)
				");

				$co->query("insert into habitos(
					
					cedula_e,
					comidas_dia,
					come_solo,
					buen_apetit,
					antes_escuela,
					alimento_que_no,
					hora_domir,
					hora_levanta,
					quien_duerme_niño,
					como_es_sueño,
					despierta_const,
					rechinan_dientes,
					check_habito
					)
					Values(
						'$this->cedulaEscolar',
						'$this->alimento',
						'$this->come',
						'$this->apetito',
						'$this->comeantes',
						'$this->alimento_no',
						'$this->horaSueno',
						'$this->horaLevan',
						'$this->quien_sleep',
						'$this->sueno_nino',
						'$this->despierta',
						'$this->dientes',
						'$this->habito'
						)
				");


				$co->query("insert into control_esfinteres(
					
					cedula_e,
					se_orina,
					banio_solo,
					edad_no_panales
					)
					Values(
						'$this->cedulaEscolar',
						'$this->control',
						'$this->solo_bano',
						'$this->dejoPanalEdad'
					
						)
				");

				$co->query("insert into desarrollo_evolutivo(
					
					cedula_e,
					primeros_meses,
					meses_gateo,
					edad_caminar,
					edad_hablar,
					tono_voz,
					mano_u,
					check_desarrollo
					)
					Values(
						'$this->cedulaEscolar',
						'$this->quienLoCuido',
						'$this->cuandoGateo',
						'$this->caminarSinApoyo',
						'$this->cuandoHablo',
						'$this->tono_voz',
						'$this->mano_u',
						'$this->desarrollo'
					
						)
				");

				$co->query("insert into antecedentes_prenatales_postnatales(
					
					cedula_e,
					tipo_emparazo1,
					tipo_emparazo2,
					trabajo_durante,
					tiempo_trabajo,
					edad_madre_parto,
					problema_en_parto,
					peso_a,
					talla_a,
					padece_defectos,
					check_antecedentes
					)
					Values(
						'$this->cedulaEscolar',
						'$this->embarazo',
						'$this->embarazo1',
						'$this->trabajoEmbarazoTipo',
						'$this->tiempo_trabajo',
						'$this->partoEdadMadre',
						'$this->partoExplique',
						'$this->pesoNatal',
						'$this->tallaNatal',
						'$this->defectosNatalEspe',
						'$this->antece'
					
						)
				");

				$co->query("insert into equilibrio_emocional(
					
					cedula_e,
					nino_obe,
					formaReprender,
					jugueteFav,
					espacioJuego,
					tiempoTv,
					programasTv,
					imitaPersonaje,
					imitaFamiEscen,
					orientComo,
					anteriorPreescolar,
					tipoJuegoPref,
					conQuienJuega,
					check_emocional

																)
					Values(
						'$this->cedulaEscolar',
						'$this->nino_obe',
						'$this->formaReprender',
						'$this->jugueteFav',
						'$this->espacioJuego',
						'$this->tiempoTv',
						'$this->programasTv',
						'$this->imitaPersonaje',
						'$this->imitaFamiEscen',
						'$this->orientComo',
						'$this->anteriorPreescolar',
						'$this->tipoJuegoPref',
						'$this->conQuienJuega',
						'$this->equilibrio'
					
						)
				");

				$co->query("insert into familiar(
					
					cedula_e,
					ingreso_m,
					personas_ingreso_dep,
					tipo_vivienda,
					tenencia_vivienda,
					check_familiar
					

							)
					Values(
						'$this->cedulaEscolar',
						'$this->ingreso_m',
						'$this->personas_ingreso_dep',
						'$this->tipo_vivienda',
						'$this->tenencia_vivienda',
						'$this->familiar'
						
					
						)
				");

				$co->query("insert into enfermedad_estudiante(
					
					cedula_e,
					ex_dificultad,
					sol_df,
					psico_pq,
					afeccion,
					quirurgica,
					alergia,
					despa,
					fiebre_a,
					check_enfermedad
					

							)
					Values(
						'$this->cedulaEscolar',
						'$this->ex_dificultad',
						'$this->sol_df',
						'$this->psico_pq',
						'$this->afeccion',
						'$this->quirurgica',
						'$this->alergia',
						'$this->despa',
						'$this->fiebre_a',
						'$this->enfermedades'
						
					
						)
				");

				if ($this->vacuna1) {
					
				$co->query("insert into vacunacion(
						id_vacuna,
						cedula_e,
						dosis
					)
					Values(
						'$this->vacuna1',
						'$this->cedulaEscolar',
						'$this->dosis1'
						)
				");

					if ($this->vacuna2) {
						
					$co->query("insert into vacunacion(
							id_vacuna,
							cedula_e,
							dosis
						)
						Values(
							'$this->vacuna2',
							'$this->cedulaEscolar',
							'$this->dosis2'
							)
					");
						if ($this->vacuna3) {
						
						$co->query("insert into vacunacion(
								id_vacuna,
								cedula_e,
								dosis
							)
							Values(
								'$this->vacuna3',
								'$this->cedulaEscolar',
								'$this->dosis3'
								)
						");

							if ($this->vacuna4) {
						
							$co->query("insert into vacunacion(
									id_vacuna,
									cedula_e,
									dosis
								)
								Values(
									'$this->vacuna4',
									'$this->cedulaEscolar',
									'$this->dosis4'
									)
							");

							if ($this->vacuna5) {
						
								$co->query("insert into vacunacion(
										id_vacuna,
										cedula_e,
										dosis
									)
									Values(
										'$this->vacuna5',
										'$this->cedulaEscolar',
										'$this->dosis5'
										)
								");

										if ($this->vacuna6) {
							
										$co->query("insert into vacunacion(
												id_vacuna,
												cedula_e,
												dosis
											)
											Values(
												'$this->vacuna6',
												'$this->cedulaEscolar',
												'$this->dosis6'
												)
										");

											if ($this->vacuna7) {
							
											$co->query("insert into vacunacion(
													id_vacuna,
													cedula_e,
													dosis
												)
												Values(
													'$this->vacuna7',
													'$this->cedulaEscolar',
													'$this->dosis7'
													)
											");

											if ($this->vacuna8) {
							
												$co->query("insert into vacunacion(
														id_vacuna,
														cedula_e,
														dosis
													)
													Values(
														'$this->vacuna8',
														'$this->cedulaEscolar',
														'$this->dosis8'
														)
												");
													if ($this->vacuna9) {
							
													$co->query("insert into vacunacion(
															id_vacuna,
															cedula_e,
															dosis
														)
														Values(
															'$this->vacuna9',
															'$this->cedulaEscolar',
															'$this->dosis9'
															)
													");
														if ($this->vacuna10) {
							
														$co->query("insert into vacunacion(
																id_vacuna,
																cedula_e,
																dosis
															)
															Values(
																'$this->vacuna10',
																'$this->cedulaEscolar',
																'$this->dosis10'
																)
														");
														
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



				/*

//////////////////////////////////////////////
				

				$co->query("insert into hermanos(
						nom_ape,
						grado,
						turno
					)
					Values(
						'$this->nombre_hermano1',
						'$this->grado_hermano1',
						'$this->turno_hermano1'
						)
				");
				$co->query("insert into hermanos(
						nom_ape,
						grado,
						turno
					)
					Values(
						'$this->nombre_hermano2',
						'$this->grado_hermano2',
						'$this->turno_hermano2'
						)
				");
				$co->query("insert into hermanos(
						nom_ape,
						grado,
						turno
					)
					Values(
						'$this->nombre_hermano3',
						'$this->grado_hermano3',
						'$this->turno_hermano3'
						)
				");
				$co->query("insert into hermanos(
						nom_ape,
						grado,
						turno
					)
					Values(
						'$this->nombre_hermano4',
						'$this->grado_hermano4',
						'$this->turno_hermano4'
						)
				");

*/
				/*
					$co->query("Insert into registrar_maestro(
						cedulaEscolar,
						apellidoPri,
						nombrePri,
						fechaNaciPri,
						estadoprimaria,
						ciudadprimaria,
						telefono,
						viveConO,
						apellidoRepre,
						nombreRepre,
						ciRepre,
						telfRepre,
						direccionRepre,
						profesionRepre,
						correoRepre,
						cuentaBancR,
						codigoCPR,
						serialCPR,
						apellidoMadre,
						nombreMadre,
						ciMadre,
						telefonoMadre,
						direccionMadre,
						apellidoPadre,
						nombrePadre,
						ciPadre,
						telefonoPadre,
						direccionPadre,
						nombre_hermano1,
						nombre_hermano2,
						nombre_hermano3,
						nombre_hermano4,
						quienRetirada,
						quienTelefono
						)
						Values(
						'$this->cedulaEscolar',
						'$this->apellidoPri',
						'$this->nombrePri',
						'$this->fechaNaciPri',
						'$this->estadoprimaria',
						'$this->ciudadprimaria',
						'$this->viveConO'
						'$this->apellidoRepre'
						'$this->nombreRepre'
						'$this->ciRepre'
						'$this->telfRepre'
						'$this->direccionRepre'
						'$this->profesionRepre'
						'$this->correoRepre'
						'$this->cuentaBancR'
						'$this->codigoCPR'
						'$this->serialCPR'
						'$this->apellidoMadre'
						'$this->nombreMadre'
						'$this->ciMadre'
						'$this->telefonoMadre'
						'$this->direccionMadre'
						'$this->apellidoPadre'
						'$this->nombrePadre'
						'$this->ciPadre'
						'$this->telefonoPadre'
						'$this->direccionPadre'
						'$this->nombre_hermano1'
						'$this->nombre_hermano2'
						'$this->nombre_hermano3'
						'$this->nombre_hermano4'
						'$this->quienRetirada'
						'$this->quienTelefono'
						)");

						*/
						return "Registro exitoso";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "Ya existe la cedula que desea ingresar";
		}

		//Listo eso es todo y es igual para el resto de las operaciones
		//incluir, modificar y eliminar
		//solo cambia para buscar
	}

	function modificar(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->cedulaEscolar)){
			try {
					
					$co->query("UPDATE estudiante SET
					cedula_e = '$this->cedulaEscolar',
					nombre = '$this->nombrePri',
					apellido = '$this->apellidoPri',
					sexo = '$this->sexo',
					fecha_n = '$this->fechaNaciPri',
					estado_n = '$this->estado_p',
					ciudad_n = '$this->ciudad_p',
					quien_vive = '$this->vive_con',
					cedula_mama = 'V-12876890',
					cedula_p = 'V-12876890',				
					retira_solo = '$this->retirada',
					posee_canai = '$this->canaima',
					inf_medica = '$this->infom',
					observ = '$this->observacion',
					orden = '$this->orden',
					nacionalidad = '$this->nacionalidad',
					c_id = '$this->c_id',
					llegar = '$this->llegar',
					tipo_sangre = '$this->blood'

					where
					cedula_e = '$this->cedulaEscolar'

					
					
				");


					$co->query("Update padres set
						cedula_m='$this->ciMadre',
						nombre_m=	'$this->nombreMadre',
						apellido_m='$this->apellidoMadre',
						telefono_m='$this->telefonoMadre',
						direc_trab='$this->direccionMadre'
						where
						cedula_m = '$this->ciMadre'
					");

					$co->query("Update padres set
						cedula_m=	'$this->ciPadre',
						nombre_m=	'$this->nombreMadre',
						apellido_m='$this->apellidoMadre',
						telefono_m='$this->telefonoMadre',
						direc_trab='$this->direccionMadre'
						where
						cedula_m = '$this->ciPadre'
					");

					$co->query("UPDATE documentos SET
					cedula_est ='$this->cedulaEscolar',
					doc ='$this->doc'
					where
					cedula_est = '$this->cedulaEscolar'
					
					
				");


				$co->query(" UPDATE seccion_estudiante SET
					
					representante = '$this->cedula_r',
					cedula_es = '$this->cedulaEscolar',
					talla = '$this->tallaActual',
					peso = '$this->pesoActual',
					calzado = '$this->calzado',
					camisa = '$this->camisa',
					pantalon = '$this->pantalon',
					colab_comun= '$this->colaboracionInicial',
					dia_disp= '$this->diaColaborar',
					horario= '$this->horarioColaborar'

					where
					cedula_es = '$this->cedulaEscolar'

				");

				$co->query("UPDATE persona_retira SET 
					
					nombre_apellido= '$this->personasAuto',
					telefono= '$this->telefonoauto'
					where
					id_persona = (SELECT id_persona FROM retira_estudiantes WHERE cedula_e = '$this->cedulaEscolar' LIMIT 1);
					

					
				");

				$co->query("UPDATE persona_retira SET 
					
					nombre_apellido= '$this->personasAuto1',
					telefono = '$this->telefonoauto1'
					where
					id_persona = (SELECT MAX(id_persona) FROM retira_estudiantes WHERE cedula_e = '$this->cedulaEscolar');

						
				");


				$co->query("UPDATE personas_en_casa SET 
					
					nombre= '$this->n1',
					apellido= '$this->a1',
					sexo= '$this->sx1',
					edad= '$this->ed1',
					parentesco= '$this->pt1',
					ocupacion= '$this->oc1'
					where
					id = '$this->id_1'

				");

				$co->query("UPDATE personas_en_casa SET
					
					nombre='$this->n2',
					apellido='$this->a2',
					sexo='$this->sx2',
					edad='$this->ed2',
					parentesco='$this->pt2',
					ocupacion='$this->oc2'
					where
					id = '$this->id_2'
					
					
				");

				$co->query("UPDATE personas_en_casa SET
					
					nombre= '$this->n3',
					apellido= '$this->a3',
					sexo= '$this->sx3',
					edad= '$this->ed3',
					parentesco= '$this->pt3',
					ocupacion ='$this->oc3'
					where
					id = '$this->id_2'
				

						
				");

				$co->query("UPDATE personas_en_casa SET
					
					nombre='$this->n4',
					apellido='$this->a4',
					sexo='$this->sx4',
					edad='$this->ed4',
					parentesco='$this->pt4',
					ocupacion='$this->oc4'
					where
					id = '$this->id_2'
				

						
				");

				$co->query("UPDATE habitos SET 
					
					cedula_e= '$this->cedulaEscolar',
					comidas_dia= '$this->alimento',
					come_solo= '$this->come',
					buen_apetit= '$this->apetito',
					antes_escuela= '$this->comeantes',
					alimento_que_no= '$this->alimento_no',
					hora_domir= '$this->horaSueno',
					hora_levanta= '$this->horaLevan',
					quien_duerme_niño= '$this->quien_sleep',
					como_es_sueño= '$this->sueno_nino',
					despierta_const= '$this->despierta',
					rechinan_dientes= '$this->dientes',
					check_habito= '$this->habito'
					where
					cedula_e = '$this->cedulaEscolar'

						
				");


				$co->query("UPDATE control_esfinteres SET 
					
					cedula_e= '$this->cedulaEscolar',
					se_orina= '$this->control',
					banio_solo= '$this->solo_bano',
					edad_no_panales= '$this->dejoPanalEdad'
					where
					cedula_e = '$this->cedulaEscolar'
					

					

				");

				$co->query("UPDATE desarrollo_evolutivo SET 
					
					cedula_e='$this->cedulaEscolar',
					primeros_meses='$this->quienLoCuido',
					meses_gateo='$this->cuandoGateo',
					edad_caminar='$this->caminarSinApoyo',
					edad_hablar='$this->cuandoHablo',
					tono_voz='$this->tono_voz',
					mano_u='$this->mano_u',
					check_desarrollo='$this->desarrollo'
					where
					cedula_e = '$this->cedulaEscolar'
					

					
						
				");

				$co->query("UPDATE antecedentes_prenatales_postnatales SET 
					
					cedula_e='$this->cedulaEscolar',
					tipo_emparazo1='$this->embarazo',
					tipo_emparazo2='$this->embarazo1',
					trabajo_durante='$this->trabajoEmbarazoTipo',
					tiempo_trabajo='$this->tiempo_trabajo',
					edad_madre_parto='$this->partoEdadMadre',
					problema_en_parto='$this->partoExplique',
					peso_a='$this->pesoNatal',
					talla_a='$this->tallaNatal',
					padece_defectos='$this->defectosNatalEspe',
					check_antecedentes='$this->antece'

					where
					cedula_e = '$this->cedulaEscolar'
					

					
						
				");

				$co->query("UPDATE equilibrio_emocional SET 
					
					cedula_e= '$this->cedulaEscolar',
					nino_obe= '$this->nino_obe',
					formaReprender= '$this->formaReprender',
					jugueteFav= '$this->jugueteFav',
					espacioJuego= '$this->espacioJuego',
					tiempoTv= '$this->tiempoTv',
					programasTv= '$this->programasTv',
					imitaPersonaje= '$this->imitaPersonaje',
					imitaFamiEscen= '$this->imitaFamiEscen',
					orientComo= '$this->orientComo',
					anteriorPreescolar= '$this->anteriorPreescolar',
					tipoJuegoPref= '$this->tipoJuegoPref',
					conQuienJuega= '$this->conQuienJuega',
					check_emocional= '$this->equilibrio'

					where
					cedula_e = '$this->cedulaEscolar'
				

					
				");


				$co->query("UPDATE enfermedad_estudiante SET 

					cedula_e = '$this->cedulaEscolar',
					ex_dificultad = '$this->ex_dificultad',
					sol_df = '$this->sol_df',
					psico_pq = '$this->psico_pq',
					afeccion = '$this->afeccion',
					quirurgica = '$this->quirurgica',
					alergia = '$this->alergia',
					despa = '$this->despa',
					fiebre_a = '$this->fiebre_a',
					check_enfermedad = '$this->enfermedades'

					where
					cedula_e = '$this->cedulaEscolar'
					


				");

				$co->query("UPDATE familiar SET 

				
					cedula_e= '$this->cedulaEscolar',
					ingreso_m= '$this->ingreso_m',
					personas_ingreso_dep= '$this->personas_ingreso_dep',
					tipo_vivienda= '$this->tipo_vivienda',
					tenencia_vivienda= '$this->tenencia_vivienda',
					check_familiar= '$this->familiar'		

					where
					cedula_e = '$this->cedulaEscolar'
					


				");

				if ($this->vacuna1) {
					
				$co->query("Update vacunacion set
						id_vacuna='$this->vacuna1',
						cedula_e='$this->cedulaEscolar',
						dosis='$this->dosis1'
						where
						id_vacuna='$this->vacuna1' AND cedula_e='$this->cedulaEscolar'					
					
				");

					if ($this->vacuna2) {
						
					$co->query("Update vacunacion set
						id_vacuna='$this->vacuna2',
						cedula_e='$this->cedulaEscolar',
						dosis='$this->dosis2'
						where
						id_vacuna='$this->vacuna2' AND cedula_e='$this->cedulaEscolar'					
					");
					
						if ($this->vacuna3) {
						
						$co->query("Update vacunacion set
							id_vacuna='$this->vacuna3',
							cedula_e='$this->cedulaEscolar',
							dosis='$this->dosis3'
							where
							id_vacuna='$this->vacuna3' AND cedula_e='$this->cedulaEscolar'					
						
						");

							if ($this->vacuna4) {
						
							$co->query("Update vacunacion set
									id_vacuna='$this->vacuna4',
									cedula_e='$this->cedulaEscolar',
									dosis='$this->dosis4'
									where
									id_vacuna='$this->vacuna4' AND cedula_e='$this->cedulaEscolar'					
								
							");

							if ($this->vacuna5) {
						
								$co->query("Update vacunacion set
										id_vacuna='$this->vacuna5',
										cedula_e='$this->cedulaEscolar',
										dosis='$this->dosis5'
										where
										id_vacuna='$this->vacuna5' AND cedula_e='$this->cedulaEscolar'					
									
								");

										if ($this->vacuna6) {
							
										$co->query("Update vacunacion set
												id_vacuna='$this->vacuna6',
												cedula_e='$this->cedulaEscolar',
												dosis='$this->dosis6'
												where
												id_vacuna='$this->vacuna6' AND cedula_e='$this->cedulaEscolar'					
											
										");

											if ($this->vacuna7) {
							
											$co->query("Update vacunacion set
													id_vacuna='$this->vacuna7',
													cedula_e='$this->cedulaEscolar',
													dosis='$this->dosis7'
													where
													id_vacuna='$this->vacuna7' AND cedula_e='$this->cedulaEscolar'					
												
											");

											if ($this->vacuna8) {
							
												$co->query("Update vacunacion set
														id_vacuna='$this->vacuna8',
														cedula_e='$this->cedulaEscolar',
														dosis='$this->dosis8'
														where
														id_vacuna='$this->vacuna8' AND cedula_e='$this->cedulaEscolar'					
													
												");
													if ($this->vacuna9) {
							
													$co->query("Update vacunacion set
															id_vacuna='$this->vacuna9',
															cedula_e='$this->cedulaEscolar',
															dosis='$this->dosis9'
															where
															id_vacuna='$this->vacuna9' AND cedula_e='$this->cedulaEscolar'					
														
													");
														if ($this->vacuna10) {
							
														$co->query("Update vacunacion set
																id_vacuna='$this->vacuna10',
																cedula_e='$this->cedulaEscolar',
																dosis='$this->dosis10'
																where
																id_vacuna='$this->vacuna10' AND cedula_e='$this->cedulaEscolar'					
															
														");
														
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

				
						return "Registro Modificado";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "Cedula no registrada";
		}

	}


		private function existe($cedulaE){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from estudiante where cedula_e='$cedulaE'");


			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				return true;

			}
			else{

				return false;
			}

		}catch(Exception $e){
			return false;
		}
	}


		function agregar_v(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$co->query("insert into vacuna(
						vacuna
						
						)
						Values(
							'$this->vacuna_name'				

							)
							");

		}catch(Exception $e){
			return false;
		}
	}

		function consultarVacuna(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from vacuna");

			if($resultado){

				$respuesta = '';
					$a="1";
				foreach($resultado as $r){
					$respuesta = $respuesta."<tr>";

						$respuesta = $respuesta."
						<td scope='row'>";
							$respuesta = $respuesta.$a;
							$a++;
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['vacuna'];
						$respuesta = $respuesta."</td>";

					$respuesta = $respuesta."</tr>";
				}
				return $respuesta;

			}
			else{
				return '';
			}

		}catch(Exception $e){
			return $e->getMessage();
		}

	}

	function consultarVacuna2(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select id, vacuna from vacuna");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}
			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}

	function llenavacuna(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT id_vacuna, dosis FROM `vacunacion` WHERE cedula_e = '$this->cedulaEscolar'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}
			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}

	function eliminar(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->cedulaEscolar)){

			if ($this->ver_seccion($this->cedulaEscolar)) {
				// code...

				try {
						$co->query("delete from estudiante
							where
							cedula_e = '$this->cedulaEscolar'
							");
							return "Registro Eliminado";
				} catch(Exception $e) {
					return $e->getMessage();
				}
			}
			else{
				return "Estudiante esta inscrito, no se puede eliminar. Primero de debe eliminar la inscripcion";
			}
		}
		else{
			return "Cedula no registrada";
		}
	}


	private function existemama($cedula){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from padres where cedula_m='$cedula'");


			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				return true;

			}
			else{

				return false;
			}

		}catch(Exception $e){
			return false;
		}
	}

	private function ver_seccion($cedula){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select seccion_1 from seccion_estudiante where cedula_es='$cedula'");


			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila[0][0] == NULL){

				return true;

			}
			else{

				return false;
			}

		}catch(Exception $e){
			return false;
		}
	}

	private function existepapa($cedula){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from padres where cedula_m='$cedula'");


			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				return true;

			}
			else{

				return false;
			}

		}catch(Exception $e){
			return false;
		}
	}





		function consultarepre(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select nombre_r, apellido_r from representante where cedula='$this->cedula_r'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}
			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}


	function consultatr(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT estudiante.*, seccion_estudiante.*, padres.*, documentos.doc, habitos.*, control_esfinteres.*, desarrollo_evolutivo.*, antecedentes_prenatales_postnatales.*, equilibrio_emocional.*, enfermedad_estudiante.*, familiar.*
	FROM seccion_estudiante
			INNER JOIN estudiante ON estudiante.cedula_e = seccion_estudiante.cedula_es
			INNER JOIN padres ON estudiante.cedula_mama = padres.cedula_m
            INNER JOIN documentos ON documentos.cedula_est = estudiante.cedula_e
            INNER JOIN habitos ON habitos.cedula_e = estudiante.cedula_e
            INNER JOIN control_esfinteres ON control_esfinteres.cedula_e = estudiante.cedula_e
            INNER JOIN desarrollo_evolutivo ON desarrollo_evolutivo.cedula_e = estudiante.cedula_e
            INNER JOIN antecedentes_prenatales_postnatales ON antecedentes_prenatales_postnatales.cedula_e = estudiante.cedula_e
            INNER JOIN equilibrio_emocional ON equilibrio_emocional.cedula_e = estudiante.cedula_e
            INNER JOIN enfermedad_estudiante ON enfermedad_estudiante.cedula_e = estudiante.cedula_e
            INNER JOIN familiar ON familiar.cedula_e = estudiante.cedula_e
			WHERE estudiante.cedula_e='$this->cedulaEscolar'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia, JSON_FORCE_OBJECT);

			}

			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}


	function consultamama(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT `cedula_m`, `nombre_m`, `apellido_m`, `telefono_m`,
				 `direc_trab`, `parentesco` FROM `padres` WHERE cedula_m='$this->ciMadre'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}

			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}

	function consultapapa(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT `cedula_m`, `nombre_m`, `apellido_m`, `telefono_m`,
				 `direc_trab`, `parentesco` FROM `padres` WHERE cedula_m='$this->ciPadre'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}

			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}

	function consultaretira(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT p.nombre_apellido, p.telefono FROM persona_retira p 
			INNER JOIN retira_estudiantes r ON p.id_persona= r.id_persona 
            WHERE r.cedula_e = '$this->cedulaEscolar'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia, JSON_FORCE_OBJECT);

			}

			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}

		function consultahogar(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("SELECT p.id , p.nombre, p.apellido, p.sexo, p.edad, p.parentesco, p.ocupacion FROM personas_en_casa p INNER JOIN personas_estudiante r ON p.id= r.id_persona WHERE r.cedula_e = '$this->cedulaEscolar'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);

			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia, JSON_FORCE_OBJECT);

			}

			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}


	function obtienefecha(){
		$f = date('Y-m-d');
		$f1 = strtotime ('-18 year' , strtotime($f));
		$f1 = date ('Y-m-d',$f1);
		return $f1;
	}




}
?>
