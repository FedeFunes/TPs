<?php
include("conexion.php");
session_start();

$dni = $_POST["dni"];
$clave = $_POST["clave"];

#Controlo que el usuario exista en la base de datos y que no haya echo ya la encuesta 

//Primera consulta: existe $dni en la tabla "alumnos"?
$query_1 = "SELECT * FROM alumnos WHERE dni='$dni'";
$result_1 = mysqli_query($con,$query_1);
$row_1 = mysqli_fetch_array($result_1);

//Segunda consulta: existe $dni en la tabla "datos_encuesta"?
$query_2 = "SELECT * FROM datos_encuesta WHERE dni='$dni'";
$result_2 = mysqli_query($con,$query_2);
$row_2 = mysqli_fetch_array($result_2);

//Si se encontro $dni en la tabla "alumnos" entonces $row_1['dni'] deberia ser = a $dni, y sino diferentes 
//Y si el usuario ingreso la clave correcta, es decir, la que esta en la base de datos, $row_1['clave'] deberia ser = a $clave
//Y si se encontro $dni en la tabla "datos_encuesta" entonces $row_2['dni'] deberia ser == $dni, y sino diferentes 
if($row_1['dni'] == $dni && $row_1['clave'] == $clave && $row_2['dni'] != $dni) {
  	//echo $row_1['dni']." ".$row_1['clave'];
	//echo "</br>".$row_2['dni'];
	$_SESSION['dni_user'] = $dni;
	header("location: encuesta.php");
} else {
	//echo $row_1['dni']." ".$row_1['clave'];
	//echo "</br>".$row_2['dni'];
	header("location: index.php");		
}

mysqli_close($con);
?> 