<?php

//código 1

$x = 5; // global scope

function prueba() {
  echo "<p>El valor de x dentro la función es: $x</p>"; //error
}
prueba();

echo "<p>El valor de x fuera de la función es: $x</p>";

// Código 2 


$x2 = 10; // global scope

function prueba2() {
	global $x2;
  echo "<p>El valor de x2 dentro la función es: $x2</p>"; 
}
prueba2();

echo "<p>El valor de x2 fuera de la función es: $x2</p>";
?>
