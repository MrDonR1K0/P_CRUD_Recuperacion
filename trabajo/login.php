<?php
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "bbddtrabajo";
		
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if (!$conn)
		{
			die("No hay conexión: ".mysqli_connect_error());
		}
		
		$nombre = $_POST["usuario"];
		$pass = $_POST["password"];
		
		$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and password = '".$pass."'");
		$nr = mysqli_num_rows($query);
		
		if($nr == 1)
		{
			echo "<script> alert('Bienvenido $nombre'); window.location='principal.php' </script>";
		}
		else if ($nr == 0)
		{
			echo "<script> alert('El usuario $nombre no existe o el password es incorrecto'); window.location='login.html' </script>";
		}
?>
