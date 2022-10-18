<?php

// Nombre
// Ocupacion
// Color
// Comida
    // Favoritas
    // Que no les gusta


$michis = [

    array (
        "nombre" => "Tatito",
        "ocupacion" => "Javascript Developer",
        "color" => "negro",
        "comidas" => array(
            "favorita" => "jamon",
            "noFavorita" => "brocoli"
        )
    ),

    array (
            "nombre" => "Shico Mico",
            "ocupacion" => "Tecnico",
            "color" => "naranja",
            "comidas" => array(
                "favorita" => "pescado",
                "noFavorita" => "fruta"
            )
    ),

    array(
        "nombre" => "Sinior Mi",
        "ocupacion" => "Arquitecto",
        "color" => "naranja oscuro",
        "comidas" => array(
            "favorita" => "carne",
            "noFavorita" => "pescado"
        )
    )
];

$tatito = $michis[0];

echo "En la casa de Claru y Nico viven 3 gatos, sus nombres son " . $tatito['nombre'] . ", " . $michis[1]['nombre'] . " y " . $michis[2]['nombre'];

?>