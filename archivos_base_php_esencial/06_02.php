<?php
$servername = "localhost";
$username = "gabsgarcia";
$password = "platanito23";

// Create connection
$connection = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connection) {
  die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conectado";
?>