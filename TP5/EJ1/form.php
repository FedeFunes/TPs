
<?php 
	$text = $_POST["texto"];
	echo "$text";
 
	$radio = $_POST["radio"];
	echo "<br>$radio";

	$checkboxs = $_POST["checkboxs"];
	foreach ($checkboxs as $checkbox) 
		echo "<br>$checkbox";

	echo "<br>";
	echo $_POST["hidden"];

	echo "<br>";
	echo $_POST["password"];

	$opciones = $_POST["opciones"];
	foreach ($opciones as $opcion) {
		echo "<br>$opcion";
	}

	echo "<br>";
	echo $_POST["select"];

	echo "<br>";
	echo $_POST["textarea"];

	$submit = $_POST["consultar"];
	if($submit) echo "<br> Ha enviado su consulta!"
?>


