<html>
<head>
	<title></title>
	<style>
	table, th, td {
	    border: 1px solid black;
	    border-collapse: collapse;
	}
	th, td {
	    padding: 15px;
	}
	</style>
</head>
<body>
	
	<table>
	<?php
	for ($i=1; $i < 10 ; $i++) { 
		echo "<tr>";
		
		for ($j=1; $j < 10; $j++) { 
			echo "<td>".$i*$j."</td>";
		
		}
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>