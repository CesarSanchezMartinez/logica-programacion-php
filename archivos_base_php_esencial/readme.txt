####cap: 01_03

Descarga de XAMPP : https://www.apachefriends.org/

###cap: 01_04 

php CLI (comando de activación):
php -a

###cap 01_08 

documentación del lenguaje:  https://www.php.net/

###capítulo 02_04 

funciones predefinidas de los números enteros: 

PHP_INT_MAX // nos muestra el mayor entero que soporta nuestra versión de php
PHP_INT_MIN // hace lo mismo con el menor entero soportado
PHP_INT_SIZE // nos da el tamaño de un integer en bytes 

Funciones para preguntar si un número es entero: 

is_int(); 
is_integer();
is_long(); 
//los tres significan lo mismo 

###capítulo 02_05

Funciones para preguntar si un número es float: 

is_float();
is_double();

###capítulo 03_02

if (expr){
  sentencia;
}

##capítulo 03_05

while (expr) {
    sentencia; 
}

###capítulo 03_06

Pasos para construir bucles for: 

1. inicializamos la variable
2. exponemos la condición
3. incrementamos/decrementamos la variable
4. establecemos qué va a pasar si se dan las condiciones

### capítulo 04_02 

Parámetros del fopen()


    "r" - Read only (Sólo lectura). Comienza al inicio del archivo
    "r+" - Read/Write (Lectura/escritura). Comienza al inicio del archivo
    "w" - Write only (sólo escritura). Abre y trunca o vacía el archivo. Desplaza el puntero al inicio del archivo
    "w+" - Read/Write (lectura escritura). Abre y vacía el archivo o crea un archivo que no existe. Mueve el puntero al inicio del archivo
    "a" - Write only. (sólo escritura) Abre y escribe al final del archivo o crea uno nuevo si este no existe
    "a+" - Read/Write (lectura/escritura). Preserva el contenido del archivo escribiendo al final de su contenido
    "x" - Write only. (sólo escritura) Crea un nuevo archivo y devuelve un error y un FALSE si el archivo ya existe
    "x+" - Read/Write. (lectura/escritura) Crea un nuevo archivo o devuelve un error y un FALSE si el archivo ya existe
    "c" - Write only. (sólo escritura) Abre el archivo o crea uno nuevo si este ya existe. Mueve el puntero al inicio del archivo
    "c+" - Read/Write. (lectura/escritura) Abre el archivo o crea uno si este no existe. Desplaza el puntero al inicio del archivo

### capítulo 06_02

instrucciones de instalación de MySQLi: 

https://www.php.net/manual/en/mysqli.installation.php