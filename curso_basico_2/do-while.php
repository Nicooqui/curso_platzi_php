<?php

// El do...while es util para que no se repitan cosas en nuestra base de datos, evitar que se dupliquen registros

$usernames = ["Pepito123", "Mr.Michi", "RetaxMain"];

do {
    
    $username = readline("Por favor ingresa tu nuevo nombre de usuario: ");
    echo "\n";

} while( in_array($username, $usernames) ); 
// in_array() f: Checks if a value exists in an array