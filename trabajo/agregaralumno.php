<hmtl>
	<head>
        <title>Alumno añadido (o no)</title>
    </head>
	
    <body bgcolor="lightgrey">
	<center>
	<?php
		include 'conector.php';

		  $Idalumno = $_POST["Idalumno"];
		  $Nombre = $_POST["Nombre"];
		  $Apellidos = $_POST["Apellidos"];
		  $Ciclo = $_POST["Ciclo"];

	    	$insertaralumno = "INSERT INTO alumnos (Idalumno, Nombre, Apellidos, Ciclo) VALUES ('$Idalumno', '$Nombre', '$Apellidos', '$Ciclo')";


	if ($result = mysqli_query($conector, $insertaralumno)) {
	    echo "<h3 class='center'>Alumno/a " . $Nombre ." creado correctamente."."<br></h3>";
	} else { 
	    echo ("No se pudo registrar al alumno/a -> ". mysqli_error($conector))."<br><br>";
	}
	    
	?>
	</center>
	<p><a style="text-decoration:none; color:Green" href="agregaralumno.html"><b>Volver al Formulario</b></a></p>
	<p align="right"><a style="text-decoration:none; color:Red" href="principal.php"><b>Volver al Inicio</b></a></p>
	
	<p align="center"><img src="Imagenes/macaco.jpg" width="50%"></p>
    </body>
</html>
