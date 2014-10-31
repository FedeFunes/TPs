<?php
	session_start();
	if (!isset($_SESSION['idUsuario'])) { // isset pregunta si la variable esta seteada o no
		header('location:index.html');
	}

	echo "hola facu";
?> 