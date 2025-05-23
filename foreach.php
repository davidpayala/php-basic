<?php
$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);
foreach($cafes as $cafe => $precio) {
    echo "El precio del cafe {$cafe} es de {$precio} soles" . "\n";
}