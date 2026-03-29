<?php

// leer un archivo
echo readfile ("nombre_archivo");

// mejor forma de leer un archivo: abrir - leer -cerrar

$miarchivo = fopen("archivo.txt", r) or die ("No se puede abrir");

echo fread($miarchivo, filesize("archivo.txt"));
fclose($miarchivo); 


?>
