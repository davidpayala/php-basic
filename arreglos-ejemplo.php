<?php

$escuela = array(

    array(
        "nombre" => "Hakundo",
        "ocupación" => "Caradura",
        "color" => "Moteado",
        "comidas" => array(
            "favoritas" => ["Galletas", "Pescado", "Pollo"],
            "no_favoritas" => ["Queso", "Leche", "Cereal"],
        )
    ),
    array(
        "nombre" => "Cheza",
        "ocupación" => "Matriarca",
        "color" => "Crema moteada",
        "comidas" => array(
            "favoritas" => ["Atún", "Pollo", "Huevos"],
            "no_favoritas" => ["Pescado", "Galletas", "Cereal"],
        )
    ),
    array(
        "nombre" => "Gatilda",
        "ocupación" => "Explorador",
        "color" => "Moteado",
        "comidas" => array(
            "favoritas" => ["carne", "Atún", "Pollo"],
            "no_favoritas" => ["huevos", "Galletas", "Cereal"],
        )
    ),
);
$valor = 0;
echo "La comidas Favoritas de " . $escuela[$valor]["nombre"] . " son " . implode(", ", $escuela[$valor]["comidas"]["favoritas"]) . "\n";