<?php
session_start();
include("conexion.php");

echo "Datos recibidos!</br></br>";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$email = $_POST["email"];
$sexo = $_POST["sexo"];
$fecha = $_POST["fecha"];

$sql = "INSERT INTO formulario (nombre,apellido,dni,email,sexo,fecha) VALUES ('$nombre','$apellido',$dni,'$email','$sexo','$fecha')";


$sql = "UPDATE formulario SET nombre='$nombre', apellido='$apellido', $dni=$dni, email='$email', sexo='$sexo', fecha='$fecha' WHERE id=".$_SESSION['id'].";";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
