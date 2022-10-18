<?php

$tienda_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24,
);

foreach ($tienda_de_cafes as $cafe => $precio) {

    if ($cafe == "Recalentado") {
        continue;
    }

    echo "El cafe $cafe es muy rico \n";

}
