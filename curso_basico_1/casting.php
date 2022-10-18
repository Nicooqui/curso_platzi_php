<?php
// El CASTING es la manera que tenemos en php de forzar un tipado a otro
// Como por ejemplo forzar un string a un booleano, o un numero a un string
// Para poder realizar esto, debemos reasignar nuesta variable ya inicializada e igualarla a: $variable = (INT, BOOL o STRING) $variable


// $numerito = "5";

// $numerito = (int) $numerito;

// var_dump($numerito);

//-------------------------------------------

// $dias = 5.89;
// $dias = (int) $dias;

// var_dump( $dias );

//-------------------------------------------

$banderita = 1;

$banderita = (bool) $banderita;

var_dump($banderita);