<?php
include ("conectar.php"); // tiene que estar en todas la paginas

$sql = "INSERT INTO formulario (nombre,apellido,dni,email,sexo,fecha) VALUES ('nombre_prueba','apellido_prueba','12345678','email@prueba.com','h','1992-12-03')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
} else {
	echo "</br>Se insertaron los datos exitosamente";
}

mysqli_close($con);
?>

