<?php
//una cadena sencilla sería
echo 'hola caracola';

//php permite registrar una string aunque tenga saltos de línea incluidos, por ejemplo: 
echo 'hola caracola
hoy es un muy bonito día';

/*Hay caracteres como las barras invertidas, las comillas o los apóstrofes, 
que deben ser tratados con especial cuidado para poder trabajar con ellos.
En el caso de las barras invertidas esto se debe a que son el caracter utilizado para "escapar" otros símbolos. 
Es decir, para decir al intérprete
que tome esos símbolos como parte de la string, por ejemplo: */

echo 'Ayer me encontré un limón y pensé "si la vida te da limones, limpia la cocina con ellos"';

echo 'El primer día de clase de inglés dije "I\'m going to the toilet" y me castigaron por no pedir permiso';

echo 'El programa está en C:\\ProgramFiles\Program1'; 

// jugando con strings 

$mi_string = "maricarmen apellido";

// >>> strlen(); nos da la longitud en cantidad de caracteres de la string 
echo strlen($mi_string); 

/* >>> str_word_count(); nos da la cantidad de palabras
(grupos de caracteres separados por espacios)
que hay en una string*/
echo str_word_count($mi_string);

// >>> strrev(); invierte la string 
echo strrev($mi_string);

// >>> strpos(); nos permite buscar un grupo de caracteres concreto en una string. 
//nos devuelve un número que es la posición en la que comienza nuestro texto. 
echo strpos($mi_string, "Maricarmen");

// >>> str_replace(); nos permite reemplazar caracteres dentro de una string
echo str_replace("apellido", "Pérez", $mi_string); // nos da "Maricarmen Pérez" 