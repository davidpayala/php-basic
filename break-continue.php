<?php
$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70,
    "recalentado" => 20
);
foreach($cafes as $cafe => $precio) {
    if($cafe == "recalentado") {
        continue;
    }    
    echo "El café $cafe" . " es muy rico" . "\n";

}