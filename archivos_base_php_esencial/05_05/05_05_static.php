<!DOCTYPE html>
<html>
<body>

<?php
function prueba() {
  static $a = 0;
  echo $a;
  $a++;
}

prueba();
echo "<br>";
prueba();
echo "<br>";
prueba();

/*para poder incrementar el valor en cada llamada debemos 
guardar el valor de a desde dentro de la función*/

?> 

</body>
</html>