<?php
//dejamos nuestros datos
$servername = "localhost";
$username = "gabsgarcia";
$password = "platanito23";
$dbname = "empresa";

// Creamos conexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Comprobar conexion
if (!$conexion) {
  die("Fallo: " . mysqli_connect_error());
}

$sql = "SELECT firstname, lastname FROM empleados WHERE ID=2";
$result = mysqli_query($conexion, $sql);

mysqli_close($conexion);
?>

