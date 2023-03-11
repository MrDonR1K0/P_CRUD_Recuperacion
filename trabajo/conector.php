<?php
	include 'constants.php';
	mysqli_report(MYSQLI_REPORT_OFF);
	$estado_de_la_conexion = "";
    $conector = @mysqli_connect(HOST, USER, PASSWORD, NOMBRE_BBDD);
    if (mysqli_connect_errno()) {
	  $estado_de_la_conexion = -1;
    }
	else
		$estado_de_la_conexion = 0;
	

?>
