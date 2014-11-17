<?php
$pepe = array('gato','perro','caballo','pez','tomate');
$valor_a_encontrar = $_POST['valor_a_encontrar'];
for ($i=0; $i < 5; $i++) { 
	if ($pepe[$i]==$valor_a_encontrar) {
		$posicion = $i;
	}
}

echo "posicion: $posicion";
?>