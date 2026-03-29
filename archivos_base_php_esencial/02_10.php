<?php  

// string a integer 

$var = "14.19";
settype($var, 'int');
var_dump($var); // int(14)

// string a float 

$var = "14.19";
settype($var, 'float');
var_dump($var); // float(14.19)

//string a array

$var = "14.19";
settype($var, 'array');
var_dump($var); // array(1) { [0]=> string(5) "14.19" }


//string a object

$var = "14.19";
settype($var, 'object');
var_dump($var); // object(stdClass)#4 (1) { ["scalar"]=> string(5) "14.19" }

//string a boolean

$var = "14.19";
settype($var, 'boolean');
var_dump($var); // bool(true)

//integer a string 

$var = 14;
settype($var, 'string');
var_dump($var); // string(2) "14"

//integer a float 

$var = 14;
settype($var, 'float');
var_dump($var); // float(14)

//integer a array

$var = 14;
settype($var, 'array');
var_dump($var); // array(1) { [0]=> int(14) }

//integer a object

$var = 14;
settype($var, 'object');
var_dump($var); // object(stdClass)#4 (1) { ["scalar"]=> int(14) }

//integer a boolean

$var = 14;
settype($var, 'boolean');
var_dump($var); // bool(true)

?>