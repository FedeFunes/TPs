<?php
session_start();
include("conexion.php");

$query = "SELECT * FROM formulario WHERE id = ".$_SESSION['id'].";";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

echo "</br> nombre: ".$row['nombre'];
echo "</br> apellido: ".$row['apellido'];
echo "</br> dni: ".$row['dni'];
echo "</br> email: ".$row['email'];
echo "</br> fecha: ".$row['fecha'];
echo "</br> id: ".$row['id'];
?>
<html>
<head>
	<title></title>
	<!-- jQueryUI CSS -->
	<link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
</head>
<body>

</br><input type="button" id="btnOpenDialog1" value="eliminar datos" />
</br><input type="button" id="btnOpenDialog2" value="modificar datos" />
<div id="dialog-confirm"></div>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery/jquery-1.11.0.js"></script>
<!-- jQueryUI -->
<script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>

<script type="text/javascript">
	function fnOpenNormalDialog() {
	    $("#dialog-confirm").html("Confirm Dialog Box");

	    // Define the Dialog and its properties.
	    $("#dialog-confirm").dialog({
	        resizable: false,
	        modal: true,
	        title: "Modal",
	        height: 250,
	        width: 400,
	        buttons: {
	            "Yes": function () {
	                $(this).dialog('close');
	                callback1(true);
	            },
	                "No": function () {
	                $(this).dialog('close');
	                callback1(false);
	            }
	        }
	    });
	}

	$('#btnOpenDialog1').click(fnOpenNormalDialog);

	function callback1(value) {
	    if (value) {
			window.location="eliminar-datos.php";	    
		}
	}
</script>
<script type="text/javascript">
	function fnOpenNormalDialog() {
	    $("#dialog-confirm").html("Confirm Dialog Box");

	    // Define the Dialog and its properties.
	    $("#dialog-confirm").dialog({
	        resizable: false,
	        modal: true,
	        title: "Modal",
	        height: 250,
	        width: 400,
	        buttons: {
	            "Yes": function () {
	                $(this).dialog('close');
	                callback2(true);
	            },
	                "No": function () {
	                $(this).dialog('close');
	                callback2(false);
	            }
	        }
	    });
	}

	$('#btnOpenDialog2').click(fnOpenNormalDialog);

	function callback2(value) {
	    if (value) {
	        window.location="modificar-datos.php";	
	    } 
	}
</script>
</body>
</html>