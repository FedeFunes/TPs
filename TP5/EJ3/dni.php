<html>
	<head>
	</head>
	<body>
		<form action="resultados.php" method="post">
			<input type="text" name="dni">
			<?php $nombre = $_POST["nombre"]; ?>
			<?php $apellido = $_POST["apellido"]; ?>
			<?php echo "<input type='hidden' name='nombre' value='$nombre'>"?>
			<?php echo "<input type='hidden' name='apellido' value='$apellido'>"?>
			<input type="submit">
		</form>
		<span>nombre: <?php echo $_POST["nombre"]?></span></br>
		<span>apellido: <?php echo $_POST["apellido"]?></span>
	</body>
</html>