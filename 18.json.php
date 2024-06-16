<?php include 'includes/header.php';

$productos = [
    [
        "Nombre" => "Tablet",
        "Precio" => 200,
        "Disponible" => true
    ],
    [
        "Nombre" => "Televisor 45 pulgadas",
        "Precio" => 300,
        "Disponible" => true
    ],
    [
        "Nombre" => "Televisor curvo",
        "Precio" => 400,
        "Disponible" => false
    ]
];

//Snippet para ver el array:
echo "<pre>";
var_dump($productos);

//Convierte un array en un string:
$json = json_encode($productos,JSON_UNESCAPED_UNICODE);
var_dump($json);

//Convierte un string en un array:
$json_array = json_decode($json);
var_dump($json_array);

echo "</pre>";




include 'includes/footer.php';