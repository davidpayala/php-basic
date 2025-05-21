<?php
$a = readline("Ingrese el monto Ingresado: ");
if (!is_numeric($a)) {
    echo "Ingrese un monto válido" . "\n";
} elseif ($a < 100) {
    echo "Debes tener 100 o más para retirar" . "\n";
} else {
    echo "Puede retirar el monto" . "\n";
}