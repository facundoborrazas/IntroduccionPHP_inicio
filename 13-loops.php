<?php include 'includes/header.php';

//While
$i = 0;

while($i<10){
    echo $i . "<br>";
    $i++;
}

echo "<br>";

//Do while
$i = 100;

do{
    echo $i . "<br>";
    $i++;
}
while($i<10);

echo "<br>";

//For Loop 
for(/*Iniciador:*/$i=0;/*Condicion:*/$i<10;/*Incremento:*/$i++){
    echo $i . "<br>";
}

echo "<br>";

//Ejemplo de ejercicio de prueba tecnica:
for($i=1;$i<50;$i++){
    if($i%3===0&&$i%5===0){
        echo "Fizz-Buzz" . "<br>";
    }elseif($i%5===0){
        echo "Buzz" . "<br>";
    }elseif($i%3===0){
        echo "Fizz" . "<br>";
    }else{
        echo $i . "<br>";
    }
}

include 'includes/footer.php';