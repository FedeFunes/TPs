<?php
session_start();
include("conexion.php");
?>

<html>
<head>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
	<form action="registracion.php" method="post" onsubmit="return validar();">
		<div>Nombre</div>
		<div><input type="text" name="nombre" id="nombre"></div>
		<div>Apellido</div>
		<div><input type="text" name="apellido" id="apellido"></div>
		<div>DNI</div>
		<div><input type="text" name="dni" id="dni"></div>
		<div>Email</div>
		<div><input type="text" name="email" id="email"></div>
		<div>Sexo</div>
		<label><input type="radio" name="sexo" value="m" id="sexo">Mujer</label>
		<label><input type="radio" name="sexo" value="h" id="sexo">Hombre</label>
		<div>Fecha</div>
		<div><input type="text" name="fecha" id="fecha" placeholder="xx-xx-xxxx"></div></br>
		<input type="submit">
		<input type="reset">
	</form>
</body>
</html>