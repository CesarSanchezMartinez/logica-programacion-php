<!DOCTYPE html>
<html>
<body>

<?php
function registro($a, $b) {
  $reg = "Se llama " .$a. " y apellida " .$b;
  return $reg;
}

echo  registro("Gabriela","García"). "<br>";
echo  registro("Maricarmen", "Pérez"). "<br>";
echo  registro("Jennifer" , "Lawpes");
?>

</body>
</html>