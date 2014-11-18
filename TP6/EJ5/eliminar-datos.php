<?php
session_start();
include("conexion.php");

$sql = "DELETE FROM formulario WHERE id=".$_SESSION['id'].";";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>