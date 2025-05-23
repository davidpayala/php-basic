<?php

$contador = 1;

while($contador <= 10) {
    echo "Actualmente estamos en la iteración $contador \n";
    $contador++;
}

echo "\n";







$usernames = ["Pepito123", "Mr.Michi", "RetaxMain"];

do {
    
    $user = readline("Por favor, ingresa tu nuevo nombre de usuario: ");

    echo "\n";

} while( in_array($user, $usernames) );

echo "\n";