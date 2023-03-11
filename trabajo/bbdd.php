<html>
    <head>
        <title>Crear BBDD</title>
    </head>	
    <body bgcolor="lightgrey">
	<center>
	<?php
	    include 'constants.php';
		echo "<h1>Crear base de datos</h1>";
	    $conector = mysqli_connect(HOST, USER, PASSWORD) or die("No se pudo establecer conexión");

	    if (!mysqli_connect_errno() && $conector) {
	        echo "Conexión creada correctamente. <br>";
			
	    $createDatabase = "CREATE DATABASE ".NOMBRE_BBDD;

		if (mysqli_query($conector, $createDatabase)) {
		    echo "BBDD ".NOMBRE_BBDD. " creada correctamente"."<br>";
  		    
		} else {
		    echo "No se ha podido crear la BBDD. <br>". "Error: " . mysqli_error($conector)."<br><br>";
		}
	        mysqli_select_db($conector, NOMBRE_BBDD);
 
	    if ($result = mysqli_query($conector, "SELECT DATABASE()")) {
	        $row = mysqli_fetch_row($result);
	        echo "Conectado a BBDD: " . $row[0] . "<br><br>";
	        mysqli_free_result($result);
	    }

    		$tabla_alumnos = "CREATE TABLE alumnos (
							Idalumno INT NOT NULL,
							Nombre VARCHAR(50) NOT NULL,
							Apellidos VARCHAR(150) NOT NULL,
							Ciclo ENUM('SMIR','ASIR','DAM','DAW') NOT NULL,
							PRIMARY KEY (Idalumno)
							);";
		
		if (mysqli_query($conector, $tabla_alumnos)) {
		    echo "La tabla  <b> alumnos </b> ha sido  creada correctamente. <br>";
  		    
		} else {
		    echo "No se ha podido crear la tabla.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}
    		$tabla_usuarios = "CREATE TABLE usuarios (
								usuario VARCHAR(50) NOT NULL,
								password VARCHAR(50) NOT NULL,
								PRIMARY KEY (usuario)
								);
								";
		
		if (mysqli_query($conector, $tabla_usuarios)) {
		    echo "La tabla  <b> usuarios </b> ha sido creada correctamente. <br>";
  		    
		} else {
		    echo "No se ha podido crear la tabla.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}

	} else {
	     echo "Ha fallado la conexión con MySQL: " .  mysqli_connect_error();
	     exit();	
	}

	mysqli_close($conector); 

	?>
	</center>
	<br bgcolor="green">    		
	<a style="text-decoration:none; color:Green" href="index.html"><b>Volver a la pagina principal</b></a><br><br>
    </body>
</html>
