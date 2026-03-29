<?php

$a = 100; 
$b = 25; 

// suma 

echo $a + $b;

// resta

echo $a - $b;

// multiplicacion

echo $a * $b;

// division 

echo $a / $b;

// módulo

echo $a % $b;

// exponente

echo $a ** $b;

// asignación - reasignación

$a = 200; 
echo $a; 
$a = 100;
echo $a; 

// comparación del valor de 2 variables

$a = "25";

if ($a==$b){

    echo "true";
}

else {
    echo "not";
}

// comparación de valor Y TIPO DE DATO de dos variables
//recuerda que a = "25" ahora

if ($a==$b){

    echo "true";
}

else {
    echo "not";
}

// operador NOT

$a = "25";

if ($a != $b){

    echo "true";
}

else {
    echo "not";
}

// desigualdad

if ($a<>$b){

    echo "true";
}

else {
    echo "not";
}

// NOT para valores Y TIPOS de dato

$a = "25";

if ($a !== $b){

    echo "true";
}

else {
    echo "not";
}

// mayor que 

$a = "100";

if ($a > $b){

    echo "true";
}

else {
    echo "not";
}

// menor que 

if ($a < $b){

    echo "true";
}

else {
    echo "not";
}

//mayor o igual que 

if ($a >= $b){

    echo "true";
}

else {
    echo "not";
}

// menor o igual que

if ($a <= $b){

    echo "true";
}

else {
    echo "not";
}


// post-incremento 

for ($a = 0; $a <= 10; $a++){
    echo $a;
   }

// pre-incremento

for ($a = 0; $a <= 10; ++$a){
    echo $a;
   }

// post-decremento

for ($a = 20; $a <= 10; $a--){
    echo $a;
   }

// pre-decremento 

for ($a = 20; $a <= 10; --$a){
    echo $a;
   }

