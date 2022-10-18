<?php

// Nos permite definir una serie de condiciones, desde donde queremos comenzar hasta donde queremos terminar
// Nosotros somos quien le dice EXPLICITAMENTE cuantas iteraciones hara, este es un ciclo DEFINIDO

// for(/* parametros iniciales */; /* Condicion */; /* Acciones */){
//     // El codigo a repetir;
// }

// for ($i = 0; $i < 10; $i++) {
//     echo $i . "\n";
// }

// echo "\n";

// -----------------------------------------------------------

$pokemon = array(
    "Bulbasaur",
    "Ivysaur",
    "Venusaur",
    "Charmander",
    "Charmeleon",
    "Charizard",
    "Squirtle",
    "Wartortle",
    "Blastoise",
);

// para mostrar el arreglo en el for hay que llamar al arreglo JUNTO con la variable iniciada en el for
// de esta manera es que el ciclo funciona, porque lo que cambia es la variable iniciada en el for, no en el arreglo ESTATICO
// la variable iniciada es el for es la que, al final del for, incrementa o decrementa.

for ($i = 0; $i < count($pokemon); $i++) {
    echo "Los primeros pokemon son: $pokemon[$i] \n";
}
;
