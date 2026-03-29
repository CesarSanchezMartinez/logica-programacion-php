<!DOCTYPE html>
<html>
<body>

<?php
function registro($a, $b) {
  $reg = "Se llama " .$a. " y apellida " .$b;
  return $reg;
}
echo "prueba1";
echo  registro("Gabriela","García"). "<br>";
echo "prueba2";
echo  registro("Maricarmen", "Pérez"). "<br>";
echo "prueba3";
echo  registro("Jennifer" , "Lawpes");
?>

</body>
</html>