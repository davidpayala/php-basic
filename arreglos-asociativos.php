<?php
$edades = array(
    "Carlos" => 20,
    "Mr Michi" => 18,
    "Juan" => 40);
//echo "la edad de Carlos es " . $edades["Carlos"] . " años" . "\n";

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

//echo "El precio del cafe Americano es de {$cafes['Americano']}" . " soles" ."\n";
$personas = array(

    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),

    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    ),

);

echo "La informacion de Mr. Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . " Apellido: " . $personas["Mr.Michi"]["apellido"];

echo "\n";