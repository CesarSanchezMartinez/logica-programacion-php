<?php

// ARRAY SIMPLE

$frutas = array("mango", "fresa", "naranja");
echo "Me encanta desayunar " . $frutas[0] . ", " . $frutas[1] . " o " . $frutas[2] . ".";

// ARRAY INDEXADO (personalizando índices)

$frutas = array("mango", "fresa", "naranja");
//podemos asignar el índice numérico manualmente aunque ya viene por defecto
$frutas[0] = "mango";
$frutas[1] = "fresa";
$frutas[2] = "naranja";
//y acceder a cada posición por su índice. 
echo  "la fruta del día es ". $frutas[1];

//ARRAYS ASOCIATIVOS

$edad = array("Jorge"=>"42", "Mario"=>"35", "Lola"=>"56");

//otra forma igualmente válida de hacer lo mismo es igualar cada clave con su valor
//por separado 
$edad['Jorge'] = "42";
$edad['Mario'] = "35";
$edad['Lola'] = "56";

echo "Lola tiene " . $edad['Lola'] . "años. "; 

// ARRAYS MULTIDIMENSIONALES 

$frutas1 = array (
    array("Mango",22,18),
    array("Sandía",15,13),
    array("Naranja",5,2),
    array("Fresa",17,15)
  );
  
  echo "tenemos" .$frutas1[0][0].": vendidas: ".$frutas1[0][1]."y disponibles: ".$frutas1[0][2].".<br>";
  echo "tenemos" .$frutas1[1][0].": vendidas: ".$frutas1[1][1]."y disponibles: ".$frutas1[1][2].".<br>";
  echo "tenemos" .$frutas1[2][0].": vendidas: ".$frutas1[2][1]."y disponibles: ".$frutas1[2][2].".<br>";
  echo "tenemos" .$frutas1[3][0].": vendidas: ".$frutas1[3][1]."y disponibles: ".$frutas1[3][2].".<br>";
  

// FUNCIONES CON ARRAYS 

//sort 

$frutas = array("mango", "fresa", "naranja");
sort($frutas);
print_r($frutas)

// reverse sort

$frutas = array("mango", "fresa", "naranja");
rsort($frutas);
print_r($frutas)

?>