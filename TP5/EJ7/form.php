<?php
	session_start();
	
	$usuario = $_POST["usuario"];
	$password = $_POST["password"];

	if($usuario == "facu" && $password == "1234") {
		$_SESSION['idUsuario'] = $usuario; // seteo la variable "idUsuario" en $_SESSION['']
		echo "$usuario";
	} else {
		header('location:index.html'); // redirecciono a la misma pag	
	}
?>
 