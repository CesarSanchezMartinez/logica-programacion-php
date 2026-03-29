<?php
// Crear una base de datos: 

$servername = "localhost";
$username = "nuevo_user";
$password = "platanito23";

// crear conexion
$conexion= mysqli_connect($servername, $username, $password);
// Comprobar conexion
if (!$conexion) {
  die("Conexion fallida: " . mysqli_connect_error());
}

// Crear una nueva base de datos 
$sql = "CREATE DATABASE empresa";
if (mysqli_query($conexion, $sql)) {
  echo "Base de datos creada";
} else {
  echo "Error de creación " . mysqli_error($conn);
}


// Crear una tabla dentro de nuestra base de datos 

$sql = "CREATE TABLE empleados (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
apellidos VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    
if (mysqli_query($conexion, $sql)) {
  echo "Table empleados creada";
} else {
    echo "Error de creacion de tabla: " . mysqli_error($conexion);
}

mysqli_close($conn);


//insertar datos en la tabla 

$servername = "localhost";
$username = "gabsgarcia";
$password = "platanito23";
$dbname = "empresa";

// Nueva conexion
$conexion = mysqli_connect($servername, $username, $password, $dbname);
// Comprobamos conexion
if (!$conexion) {
  die("Fallo: " . mysqli_connect_error());
}

$sql = "INSERT INTO empleados (firstname, lastname, email)
VALUES ('Mariano', 'Calatrava', 'mcalatrava@example.com')";

if (mysqli_query($conexion, $sql)) {
  echo "Nueva entrada creada";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
