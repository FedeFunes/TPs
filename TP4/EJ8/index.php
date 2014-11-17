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
	for ($i=0; $i < 9 ; $i++) { 
		echo "<tr>";
		
		for ($j=0; $j < 9; $j++) { 
			if($j == 0) {
				echo "<td>B</td>";
			} else{
				echo "<td></td>";
			}
		}
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>