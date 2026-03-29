<?php

//VARIABLES 

//las variables son sensibles a mayúsculas y minúsculas

$variable = 'David';
$Variable = 'Rosa';

echo $variable, $Variable // imprime David y Rosa


// las variables no pueden comenzar con número 

$2variable = "Little David"; 
echo $2variable;

// Pero sí pueden comenzar con un guión bajo

$_2variable = "Big David";
echo $_2variable; 


/*
PHP es débilmente tipado, con lo que no hace falta 
declarar el tipo de datos al declarar una vaariable
sin embargo al no declarar tipos puede pasar esto: 
*/

$primera = "2"; //string
$segunda = 3; //número

echo $primera + $segunda //nos devuelve 5


/* además podemos asignar como valor de una variable
a otra variable */

$a = 5; 
$b = $a;

echo $b; //nos devuelve 5


// CONSTANTES 

define("SALUDO", "hola!"); // importan las mayúsculas
echo SALUDO;
define("SALUDO2", "hola tú!", true); // no importan las mayúsculas
echo saludo2;