<?php
	session_start();
	
	$usuario = $_POST["usuario"];
	$password = $_POST["password"];

	if($usuario == "facu" && $password == "1234") {
		$_SESSION['idUsuario'] = $usuario; // seteo la variable "idUsuario" en $_SESSION['']
		header('location:segunda_pagina.php'); // redirecciono a la segunda pag
	} else {
		header('location:index.html'); // redirecciono a la misma pag	
	}
?>
