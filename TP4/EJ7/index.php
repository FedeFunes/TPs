<?php
$pepe = array(23,35,54,12,34);

$max = $pepe[0];
$min = $pepe[0];
for ($i=0; $i < 5 ; $i++) { 
	if ($pepe[$i] > $max) {
		$max = $pepe[$i];
	}
	if ($pepe[$i] < $min) {
		$min = $pepe[$i];
	}
}
echo "valor maximo:".$max;
echo "</br>valor min:".$min;
$resultado = $max*$min;
echo "</br>valor min * max: ".$resultado;

?>
