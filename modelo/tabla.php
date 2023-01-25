<?php

require_once('modelo/datos.php');

	$co = $this->conecta();
	$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





$data = $co->query("SELECT * FROM `estudiante` e INNER JOIN seccion_estudiante s ON e.cedula_e= s.cedula_es")->fetchAll(PDO::FETCH_ASSOC);

header("content-type:application/json");
echo json_encode(array('data' => $data), JSON_PRETTY_PRINT);


?>
