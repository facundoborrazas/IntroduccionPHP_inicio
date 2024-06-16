<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

//Para usar las condiciones con un o debemos utilizar el (||) y para una condicion con y se debe usar (&&)
if($autenticado){
    echo "El usuario fue autenticado correctamente";
}else{
    echo "El usuario no fue autenticado correctamente";
}

echo "<br>";

//If anidados:
$cliente = [
    "nombre" => "Facundo",
    "edad" => 22,
    "informacion" => [
        "tipo_cliente" => "Premium"
    ]
];

if(!empty($cliente)){
    echo "El cliente no esta vacio";
    echo "<br>";
    if($cliente["edad"]>18){
        echo "El cliente es mayor de edad";
    }else{
        echo "El cliente es menor de edad";
    }
}


echo "<br>";

//Elseif
if($cliente["informacion"]["tipo_cliente"] === "Premium"){
    echo "El cliente es Premium";
}elseif ($cliente["edad"]>18){
    echo "El cliente es mayor de edad";
}else{
    echo "El cliente es regular";
}

echo "<br>";

// Switch
$tecnologia = "PHP";

switch ($tecnologia){
    case "PHP":
        echo "Un maravilloso lenguaje";
        break;
    case "JavaScript":
        echo "El lenguaje de la web";
        break;
    case "HTML":
        echo "Mmm...";
        break;
    default:
        echo "No sé cual es el lenguaje";
        break;
}


include 'includes/footer.php';