<?php
echo "Datos recibidos!</br></br>";
echo "Nombre: ".$_POST["nombre"]."</br>";
echo "Apellido: ".$_POST["apellido"]."</br>";
echo "Dni: ".$_POST["dni"]."</br>";
echo "Email: ".$_POST["email"]."</br>";
echo "Sexo: ".$_POST["sexo"]."</br>";
echo "Fecha: ".$_POST["fecha"]."</br>";
?>

<?php
include ("conexion.php"); // tiene que estar en todas la paginas
$id=$_SESSION['dni_user'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$frase = $_POST['frase'];
$producto = $_POST['producto'];

$sql = "INSERT INTO datos_encuesta (dni,nombre,apellido,frase,producto) VALUES ('$id','$nombre','$apellido','$frase','$producto')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

echo "Gracias por completar el formulario</br>";
echo "<a href='logout.php'>Cerrar Sesion</a></br>";

$query = "SELECT * FROM datos_encuesta WHERE dni='$id'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

echo "ID para retirar el producto: ".$row['id'];
mysqli_close($con);
?>
