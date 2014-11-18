<?php
session_start();
include("conexion.php");

$query = "SELECT * FROM formulario WHERE id = ".$_SESSION['id'].";";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

echo "</br> nombre: ".$row['nombre'];
echo "</br> apellido: ".$row['apellido'];
echo "</br> dni: ".$row['dni'];
echo "</br> email: ".$row['email'];
echo "</br> fecha: ".$row['fecha'];
echo "</br> id: ".$row['id'];

?>