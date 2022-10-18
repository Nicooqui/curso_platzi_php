<?php

$asientos_disponibles = 0;
$es_hijo_de_Tom_Holland = true;

if ( $asientos_disponibles > 0 ) {
    echo "Puedes ver la pelicula de Spidey";
}elseif ($es_hijo_de_Tom_Holland == true) {
    echo "No te creo, pero puedes ver la pelicula.";
}else {
    echo " Lo sentimos, te tocara spoilearte";
};