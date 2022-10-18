<?php

// Este nos permite recorrer cualquier elemento que sea iterable
// sin tener que contar los elementos del mismo
// El por si solo detecta cuantos elementos tiene dicho elemento.

$tienda_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24,
);

// foreach ($tienda_de_cafes as $price) {
//     echo "El cafe en cuestion cuesta: $$price USD \n";
// }
// ;

// con key
foreach ($tienda_de_cafes as $cafe => $price) {
    echo "El cafe $cafe cuesta $$price USD \n";
}
;
