<?php
include ("conexion.php"); // tiene que estar en todas la paginas

echo "Datos recibidos!</br></br>";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$email = $_POST["email"];
$sexo = $_POST["sexo"];
$fecha = $_POST["fecha"];

$sql = "INSERT INTO formulario (nombre,apellido,dni,email,sexo,fecha) VALUES ('$nombre','$apellido',$dni,'$email','$sexo','$fecha')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?>
