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

$sql = UPDATE empleados SET lastname='Pérez' WHERE id=2;
if (mysqli_query($conexion, $sql)) {
  echo "Actualizado";
} else {
  echo "Error de actualización: " . mysqli_error($conn);
}
mysqli_close($conexion);
?>