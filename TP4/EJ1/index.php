<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$t = date("H");

	if ($t <  "12") {
	     echo "Buenos días!";
	} elseif ($t <  "20") {
	     echo "Buenas Tardes!";
	} else {
	     echo "Buenas noches!";
	}
	?>
</body>
</html>