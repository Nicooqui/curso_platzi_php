<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == IGUAL
    // var_dump( $a == $b ); //TRUE
    // var_dump( $a == $b2 ); //TRUE


// === IDENTICO
    // var_dump( $a === $b ); //TRUE
    // var_dump( $a === $b2 ); //FALSE


// != DIFERENTE
    // var_dump( $a != $b ); //FALSE
    // var_dump( $a != $b2 ); //FALSE


// !== DIFERENTE
    // var_dump( $a !== $b ); //FALSE
    // var_dump( $a !== $b2 ); //TRUE


// < MENOR QUE
    // var_dump( $a < $b ); //FALSE
    // var_dump( $c < $b ); //TRUE
    // var_dump( $d < $b ); //TRUE


// > MAYOR QUE
    // var_dump( $a > $b ); //FALSE
    // var_dump( $c > $b ); //TRUE
    // var_dump( $d > $b ); //FALSE


// >= MAYOR O IGUAL QUE
    // var_dump( $a >= $b ); //TRUE
    // var_dump( $c >= $b ); //FALSE
    // var_dump( $d >= $b ); //FALSE


// <= MENOR O IGUAL QUE
    // var_dump( $a <= $b ); //TRUE
    // var_dump( $c <= $b ); //FALSE
    // var_dump( $d <= $b ); //TRUE



// <=> NAVE ESPACIAL
    // Si el numero de la izquierda es MENOR al de la derecha, el operador nave espacial me va a dar como resultado: 1 (uno, numero entero)
    // Si el numero de la derecha es MENOR al de la izquierda, el operador nave espacial me va a dar como resultado> -1 (menos uno, numero negativo)
        // echo 2 <=> 1;   // 1
        // echo 1 <=> 1;   // 0
        // echo -50 <=> 1; // -1


// ?? FUSION DE NULL
    // $edad_de_pepito = 23;
    // echo $edad_de_juanito ?? $edad_de_pepito; // 23
// Si la edad de juanito no esta definida, usa la edad de pepito