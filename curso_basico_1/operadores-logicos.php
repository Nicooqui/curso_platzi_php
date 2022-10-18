<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_PHP = false;

// And --> &&
    // var_dump($michis_felinos && $michis_4_patas); ---> TRUE

// Or --> ||
    // var_dump($michis_4_patas && $michis_vuelan); --> TRUE (porque una de las condiciones es verdadera)

// Not --> !$variable
    // var_dump(!$michis_4_patas);



//Experimento que te va a hacer decir WHATTTTTTT

    // $resultado = $michis_4_patas and $michis_programan_con_PHP;
    // var_dump($resultado);


// -----------------------------
// Ejercicio

$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// Cual es el resultado ?

$es_un_michi_grande && $le_gusta_comer; //TRUE

$es_un_michi_grande || $sabe_volar; //TRUE

$sabe_volar || $tiene_2_patas; //FALSE

!$le_gusta_comer; //FALSE

!$le_gusta_comer || $es_un_michi_grande; //TRUE

// var_dump();