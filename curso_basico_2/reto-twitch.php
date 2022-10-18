<?php

$saldoMinimo = 100;

$saldoUser = readline("Ingrese el monto a retirar: ");

if ( $saldoUser >= $saldoMinimo ) {
    echo "El retiro fue exitoso !";
} else {
    echo  "Lo sentimos, su saldo actual es de: " . $saldoUser . ", y el minimo para extraccion es de: " . $saldoMinimo;
};