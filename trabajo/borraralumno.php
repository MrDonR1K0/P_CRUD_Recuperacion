<html>
	<head>
        <title>Eliminar alumno</title>
    </head>
    <body bgcolor="lightgrey">
	<center>
	<h1>Eliminar alumno</h1>
<?php
include 'conector.php';
$Idalumno = $_POST["Idalumno"];
$consulta = "DELETE FROM alumnos WHERE Idalumno = $Idalumno";

$result = mysqli_query($conector, $consulta);

if ($result) {
  echo "El alumno ha sido correctamente eliminado.";
} else {
  echo "Ha ocurrido un error al borrar al alumno.";
}

mysqli_close($conector);
?>
</center>
	<br><br>
	<p><a style="text-decoration:none; color:Green" href="borraralumno.html"><b>Volver al Formulario</b></a></p>
	<p align="right"><a style="text-decoration:none; color:Red" href="principal.php"><b>Volver al Inicio</b></a></p>
	<p align="center"><img src="Imagenes/macaco2.jpg" width="35%"></p>
    </body>
</html>
