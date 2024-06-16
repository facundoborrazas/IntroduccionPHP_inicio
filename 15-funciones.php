<?php 
/* 
Esta funcion hace que sea mas estricto al marcar los errores que cometemos al 
escribir codigo 
*/
declare(strict_types=1);
include 'includes/header.php';

/* A la funcion se le puede especificar el tipo de dato que 
queremos que se le ingrese, en este caso ambos parametros tienen que ser INT
y tambien podemos darles un valor por default, en este caso es 0 */
function sumar(int $numero1= 0, int $numero2= 0){
    echo $numero1 + $numero2;
};

sumar(23,6553);

function sumar2(int $numero1= 0, int $numero2= 0){
    echo $numero1;
    echo "<br>";
    echo $numero1 + $numero2;
    echo "<br>";
};

sumar2(numero2:23,numero1:6553);
sumar2(numero1:23,numero2:6553);


include 'includes/footer.php';