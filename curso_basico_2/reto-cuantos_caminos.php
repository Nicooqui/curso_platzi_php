<?php

// RETO
// De cuantas formas puedo ir a la tienda 1 a la tienda n
// sin retroceder en el camino
// Es decir, yendo siempre de izquierda a derecha

$casas = array(
    "casa2" => 1,
    "casa3" => 2,
    "casa4" => 3,
    "casa5" => 5,
    "casa6" => 8,
    "casa7" => 13,
    "casa8" => 21,
    "casa9" => 11,
);

$userResponse = readline("A que casa le gustaria viajar: ");

foreach ($casas as $key => $value) {

    if ($userResponse == $key) {
        echo "Hay $value caminos posibles para llegar a esa casa.";
    }

}
;
