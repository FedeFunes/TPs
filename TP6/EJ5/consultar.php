<?php
session_start();
include("conexion.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$query = "SELECT * FROM formulario WHERE nombre = '$nombre' AND apellido = '$apellido';";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

echo "<a href='formulario.php'>nombre: ".$row['nombre'].", apellido: ".$row['apellido']."</a>";
$_SESSION['id'] = $row['id'];
?>