<?php

//NULL VS EMPTY

$var; //error - null
echo $var;
var_dump(is_null($var));

$var=""; // no error - empty
echo $var;
var_dump(is_null($var));

//VARIABLE INICIALIZADA

$var2;
echo $var2;
var_dump(isset($var2));

?>
