<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$t = date("H");

	if ($t <  "12") {
	     echo "<img src='img1.jpg'></img>";
	} elseif ($t <  "20") {
	     echo "<img src='img2.jpg'></img>";
	} else {
	     echo "<img src='img3.jpg'></img>";
	}
	?>
</body>
</html>