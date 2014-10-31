<html>
	<head>
	</head>
	<body>
		<form action="dni.php" method="post">
			<span>Apellido</span>			
			<input type="text" name="apellido">
			<input type="submit">
			<?php $nombre = $_POST["nombre"]; ?>
			<?php echo "<input type='hidden' name='nombre' value='$nombre'>"?>
		</form>
		<span>nombre: <?php echo "$nombre"; ?></span>
	</body>
</html>