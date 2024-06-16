<?php 
declare(strict_types=1);
include 'includes/header.php';

/* 
Luego de los parentesis para poner los parametros esta : que sirve para 
especificar el tipo de valor que va o tiene que retornar la funcion.
Tambien puede ser int, float, bool, void (Sirve para cuando la funcion no 
retorna un valor, si no que imprime algo), string, etc... 

Si agregamos un "?" inmediatamente antes del tipo de datos que queremos 
que retorne la funcion, esto vendria a ser como un "Puede retornar un string u 
otra cosa"

Tambien podemos poner un "|" entre dos tipos de datos que puede retornar la 
funcion
*/
function usuarioAutenticado(bool $usuarioAutenticado) : string{
    if($usuarioAutenticado){
        return "Usuario Autenticado";
    }else{
        return "Usuario No Autenticado";
    }
}

echo usuarioAutenticado(true);

include 'includes/footer.php';