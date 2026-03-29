1. Hola mundo:
<?php
echo "Hola mundo";
?>
<br>
2. Suma de dos números:
<?php
$num1 = 5;
$num2 = 8;
$suma = $num1 + $num2;
echo "La suma es: " . $suma;
?>
<br>
3. Generar un número aleatorio:
<?php
$num_aleatorio = rand(1, 10);
echo "El número aleatorio es: " . $num_aleatorio;
?>
<br>
4. Imprimir todos los elementos de una matriz:
<?php
$frutas = array("manzana", "pera", "naranja");
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>
<br>
5. Validar si un número es par o impar:
<?php
$num = 6;
if ($num % 2 == 0) {
    echo "El número es par.";
} else {
    echo "El número es impar.";
}
?>
<br>
6. Obtener la longitud de una cadena:
<?php
$cadena = "Hola";
$longitud = strlen($cadena);
echo "La longitud de la cadena es: " . $longitud;
?>
<br>
7. Convertir una cadena a mayúsculas:
<?php
$cadena = "hola";
$cadena_mayusculas = strtoupper($cadena);
echo $cadena_mayusculas;
?>
<br>
8. Convertir una cadena a minúsculas:
<?php
$cadena = "HOLA";
$cadena_minusculas = strtolower($cadena);
echo $cadena_minusculas;
?>
<br>
9. Ordenar una matriz alfabéticamente:
<?php
$frutas = array("manzana", "pera", "naranja");
sort($frutas);
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>
<br>
10. Eliminar elementos duplicados de una matriz:
<?php
$frutas = array("manzana", "pera", "naranja", "manzana");
$frutas_sin_duplicados = array_unique($frutas);
foreach ($frutas_sin_duplicados as $fruta) {
    echo $fruta . "<br>";
}

?>
<br>
11. Validar si una cadena contiene otra cadena:
<?php
$cadena = "Hola mundo";
if (strpos($cadena, "mundo") !== false) {
    echo "La cadena contiene 'mundo'.";
} else {
    echo "La cadena no contiene 'mundo'.";
}

?>
<br>
12. Reemplazar una cadena por otra en una cadena:
<?php
$cadena = "Hola mundo";
$cadena_reemplazada = str_replace("mundo", "amigo", $cadena);
echo $cadena_reemplazada;

?>
<br>
13. Obtener la fecha y hora actual:
<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual = date("d-m-Y");
$horaActual = date ("H:i:s");
echo "LA fecha es:$fecha_actual y la hora es $horaActual";

?>
<br>
14. Crear una función que sume dos números:
<?php
function sumar($num1, $num2) {
    return $num1 + $num2;
}
echo sumar(5, 8);
?>
<br>
15. Crear una función que calcule el cubo de un número:
<?php
function cubo($num) {
    return $num * $num * $num;
}
echo cubo(3);

?>
<br>
16. Validar si un número es positivo, negativo o cero:
<?php
$num = -5;
if ($num > 0) {
    echo "El número es positivo.";
} elseif ($num < 0) {
    echo "El número es negativo.";
} else {
    echo "El número es cero.";
}
?>
<br>
17. Obtener el máximo y mínimo de una matriz:
<?php
$nums = array(5, 8, 3, 2);
echo "El número máximo es: " . max($nums) . "<br>";
echo "El número mínimo es: " . min($nums); 
?>
<br>
18. Validar si una cadena es un palíndromo:
<?php
$cadena = "reconocer";
if (strrev($cadena) == $cadena) {
    echo "La cadena es un palíndromo.";
} else {
    echo "La cadena no es un palíndromo.";
}
?>
<br>
19. Obtener el número de elementos en una matriz:
<?php
$frutas = array("manzana", "pera", "naranja");
$num_elementos = count($frutas);
echo "El número de elementos es: " . $num_elementos;

?>
<br>
20. Obtener la posición de un elemento en una matriz:
<?php
$frutas = array("manzana", "pera", "naranja");
$posicion = array_search("pera", $frutas);
echo "La pera está en la posición: " . $posicion;
?>
<br>
21. Obtener información del servidor:
<?php
echo "Dirección IP del servidor: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
?>
<br>
22. Crear un archivo y escribir en él:
<?php
$archivo = fopen("archivo.txt", "w");
fwrite($archivo, "Hola mundo");
fclose($archivo);

?>
<br>
23. Leer el contenido de un archivo:
<?php
$contenido = file_get_contents("archivo.txt");
echo $contenido;
?>
<br>
24. Validar si un archivo existe:
<?php
if (file_exists("archivo.txt")) {
    echo "El archivo existe.";
} else {
    echo "El archivo no existe.";
}
?>
<br>
25. Obtener el tamaño de un archivo:
<?php
$tamano = filesize("archivo.txt");
echo "El tamaño del archivo es: " . $tamano;
?>
<br>
26. Sumatoria:
<?php
$a=40;
$b=30;
echo "la suma es:", $a+$b;
?>
<br>
27. Obtener una edad:
 <?php
 $edad=25;
echo "La edad es", $edad;
 ?>
 <br>
<br>
28. Eliminar una cookie:
<?php
setcookie("nombre", "", time() - 3600);
echo "Cookie eliminada.";
?>
<br>
29. Convertir una cadena a un número entero:
<?php
$cadena = "5";
$num = intval($cadena);
echo $num;
?>
<br>
30. Concatenar dos cadenas:
<?php
$cadena1 = "Hola";
$cadena2 = "mundo";
$cadena_concatenada = $cadena1 . " " . $cadena2;
echo $cadena_concatenada;
?>