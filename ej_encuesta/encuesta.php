<?php
include("conexion.php");
session_start(); // duda: esto necesariamente tiene que estar en todas las paginas. resp: SI, es necesario
//$_SESSION['dni_user'];

if (!isset($_SESSION['dni_user'])) { // isset pregunta si la variable esta seteada o no
	header('location:index.php');
}	
?>

<html>
<head>
</head>

<body>
	<h2>Encuesta UnLaM</h2>
	<div>Hola, <?php echo $_SESSION['dni_user'];?></div>

	<form method="post" action="muestra.php"> 
		<div>ingrese nombre</div>
		<div><input type="text" name="nombre"/></div>
		<div>ingrese apellido</div>
		<div><input type="text" name="apellido"/></div>
		<div>frase dedicatoria unlam</div>
		<div><textarea name="frase" cols="20" rows="10" ></textarea></div>
		<div>seleccione producto</div>
		
		<?php
			$query = "SELECT * FROM productos";
			$result = mysqli_query($con,$query);
		?>

		<div>
			<select name="producto"> 
			<?php
				while($row = mysqli_fetch_array($result)) {
				  echo "<option value='".$row['descripcion']."'>".$row['descripcion']."</option>";
				}
			?>
			</select>  
		</div>				   
		<div><input type="submit" value="aceptar"/></div>
	</form>
</body>
</html>