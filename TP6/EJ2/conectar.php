<?php
$con=mysqli_connect("localhost","root","","tp6_pw2");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "Conexion exitosa.";
}
?>
