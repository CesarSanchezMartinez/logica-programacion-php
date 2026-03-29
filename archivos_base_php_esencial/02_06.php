<?php 

    $var1=24;
    var_dump(is_finite($var1));

    $var2=1.8e956;
    var_dump(is_finite($var2));

    $variable1 = acos(8);
    var_dump(is_nan($variable1));

    $nombre = "Gabriela";
    $edad = 24;
    $telefono = "922323435";

    echo(is_numeric($nombre)); // false
    echo(is_numeric($edad)); // true
    echo(is_numeric($telefono));// true

    //casteamos de float a integer 
	$num = 22.47;
	$int_cast=(int)$num;
	echo $int_cast;

    //otro modo
	$num = 22.47;
	$int_cast(intval($num));
	echo $int_cast;

    //casteamos de string numérica a entero
	$str = "99.59";
    $str_cast=(int)$str;
    echo $str_cast; 

?>