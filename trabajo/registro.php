<?php
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "bbddtrabajo";
		
		$connex = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if (!$connex)
		{
			die("No hay conexión: ".mysqli_connect_error());
		}
		
		$nombre = $_POST["usuario"];
		$pass = $_POST["password"];
		
		$sql = "INSERT INTO usuarios(usuario,password) values ('$nombre','$pass')";
		
		if(mysqli_query($connex,$sql))
		{
			echo "<script> alert('El nuevo usuario ha sido añadido'); window.location='login.html' </script>";
		}
		else
		{
			echo "Error: El usuario ya existe";
		}
?>
