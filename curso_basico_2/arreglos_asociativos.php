<?php

// $edades = [
//     "Carlos" => 20,
//     "Mr.Michi" => 18,
//     "Juan" => 40
// ];

// echo "La edad de Mr.Michi es " . $edades["Mr.Michi"];

// $cafes = [
//     "Capuccino" => 50,
//     "Latte" => 49,
//     "Americano" => 70
// ];

// Entre comillas dobles se pueden incluir arrays, solo si los encerramos entre LLAVES, juntos con la variable donde estas guardadas
//  echo "El precio del cafe Americano es de {$cafes["Americano"]} pesos.";

$personas = [
    "Carlos" => [
        "edad" => 20,
        "apellido" => "Santana"
    ],
    "Mr.Michi" => [
        "edad" => 18,
        "apellido" => "Michisancio"
    ],
];

echo "La info de Mr. Michi es: Edad: " . $personas["Mr.Michi"]["edad"];