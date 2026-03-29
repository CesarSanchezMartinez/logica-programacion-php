<?php 

/* and o && (se debe dar que las dos condiciones se evaluen como true
para cumplir la condición */

$primera = 10;
$segunda = 20;

if($primera=10 && $segunda<=20) {
    echo 'ambas son verdaderas';
} else {
    echo 'o primera o segunda, o los dos son falsos';
}

/* or o || (se debe dar que la primera, la segunda o ambas 
condiciones se evaluan como true para cumplir la condición */

$primera = 10;
$segunda = 50;

if($primera=10 || $segunda<=20) {
    echo 'Se cumple al menos una';
} else {
    echo 'todo es falso';
}

/* or o || (se debe dar que la primera, la segunda o ambas 
condiciones se evaluan como true para cumplir la condición */

$primera = 10;
$segunda = 50;

if($primera=10 || $segunda<=20) {
    echo 'Se cumple al menos una';
} else {
    echo 'todo es falso';
}

?>