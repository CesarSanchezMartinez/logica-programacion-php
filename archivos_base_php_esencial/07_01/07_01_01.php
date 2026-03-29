<?php
$servername = "localhost";
$username = "nuevo_user";
$password = "platanito23";

// crear conexion
$conexion= mysqli_connect($servername, $username, $password);
// Comprobar conexion
if (!$conexion) {
  die("Conexion fallida: " . mysqli_connect_error());
}

?> 