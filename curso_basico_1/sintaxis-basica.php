<?php //etiqueta de apertura para trabajar con php

    // echo "Hola ma, estoy programando con PhP \n";

// Declarar variables con $ (signo pesos)
    // $nombre = "Nicolas";
    // $apellido = "Quinonez";

//hardcode concatenacion --- los "puntos" son lo que se usa para concatenar
    // echo "No, no. Yo me llamo " . $nombre . " " . $apellido . "\n";

// Dentro de las comillas dobles, podemos concatener variables
    // echo "No, no. Yo me llamo $nombre $apellido";

    // echo "El resultado de 4 x 5 es " . (4 * 5);

$personas = [
    "Nicolas" => 25,
    "Tatito Felix" => 6,
    "Clarisa" => 28
];

// var_dump me permite inspeccionar todo el contenido de mi variable
    // var_dump( $personas );

// print_r es mas legible, sirve mejor para verificar, pero var_dump me da mas detalles
    print_r( $personas );

echo "\n";