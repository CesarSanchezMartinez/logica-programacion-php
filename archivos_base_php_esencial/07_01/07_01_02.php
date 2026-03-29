<?php

//mi función 
function manejaErrores ($errnum, $errstr) {
  echo "<b>Error:</b> [$errnum] $errstr<br>";
  echo "Terminando";
  die();
}
//establecer la mía como predeterminada
set_error_handler("manejaErrores");

//desencadenar el error para probar
echo($test);

?>