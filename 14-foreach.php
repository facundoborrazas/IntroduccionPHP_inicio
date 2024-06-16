<?php

use function PHPSTORM_META\type;

include 'includes/header.php';

#Array
$cuadros = ["Peñarol", "Nacional", "Boca", "River"];


#Array asociativo
$clientes = [
    "nombre" => "Facundo",
    "edad" => 22,
    "informacion" => [
        "tipo_cliente" => "Premium"
    ]
];

foreach ($cuadros as $cuadro) {
    echo $cuadro . "<br>";
};

echo "<br>";

//Cuandoutilizamos el foreach en un arreglo asociativo podemos hacerlo de la siguiente dos formas:

//Si solo le damos una variable para tomar este va a tomar el valor del atributo:
foreach ($clientes as $value) {
    if (is_array($value)) {
        foreach ($value as $k => $v) {
            echo $k . " - " . $v . "<br>";
        }
    } else {
        echo $value . "<br>";
    }
};

echo "<br>";

//Si ponemos dos este va a tomar el atributo y el valor del arreglo
foreach ($clientes as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $k => $v) {
            echo $k . " - " . $v . "<br>";
        }
    } else {
        echo $key . " - " . $value . "<br>";
    }
};

?>

<p>-----------------------------------------------------------------------------------------</p>
<p>-----------------------------------------------------------------------------------------</p>
<p>-----------------------------------------------------------------------------------------</p>

<?php

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

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto["Nombre"]; ?> </p>
        <p>Precio: <?php echo "USD" . $producto["Precio"]; ?> </p>
        <p>
            <?php
            /* Para no hacer todo este if podemos usar un operador ternario
            if ($producto["Disponible"]) {
                echo "<p>Disponible</p>";
            } else {
                echo "<p>Agotado</p>";
            }; */
            
            //Operador ternario:
            echo ($producto["Disponible"]) ? "Disponible" : "Agotado";
            
            ?>
        </p>
    </li>
    <?php ?>


<?php }

include 'includes/footer.php';
