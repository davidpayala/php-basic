<?php
$n = readline("Ingrese la tienda que quiere llegar: ");
// Definiré X como la cantidad cruces por tierra que haga 
//Dependiendo de la tienda que elija, podría realizar el tipo de ruta con saltos con esta distribución
// Si X=0 - No hago cruces por tierra - Tengo una ruta posible
// Si X=1 - Hago un cruce por tierra - tengo n-2 rutas posibles
// Si X=2 - Hago 2 cruces por tierra - tengo n-4 rutas posibles
// Entonces, Si Hago X>0 cruces por tierra - tengo n-2*x rutas posibles
$i = 1; // El numero de Ruta
$rutas = array();
// Definimos la primera ruta
for ($j = 1; $j <= $n; $j++) {//sea j la tienda que paso
    $rutas[$i][$j] = $j;
}
// Definimos las demas rutas
$x=1;
while (2*$x < $n) {
    for ($k = 1; $k <= $n-2*$x; $k++){// Sea k la ruta que pasará con x cruces por tierra
        $i++;
        for ($j = 1; $j <= $n; $j++) {//sea j la tienda que paso
        $rutas[$i][$j] = $j;
        if ($j == $k) $j++;
        }
    }
    $x++;
}
for ($l = 1; $l <= $i; $l++) {
    echo implode(",", $rutas[$l]) . "\n";}


    // Definimos las demas rutas
while (2*$x < $n) {
    $k = 1; 
    while ($k <= $n-2*$x){// Sea k la ruta que pasará con x cruces por tierra
        $i++;
        for ($j = 1; $j <= $n; $j++) {//sea j la tienda que paso
        $rutas[$i][$j] = $j;
        if ($j == $k) $j++;
        $k++;
        }
    }
    $x++;
}

$x=1; // Cantidad de Saltos que realizará en esta ruta
$salto[$i][1] = 0;
$i=2;
while ($n>2*$x){
    $kk=-1;
    $j=1;
    while ($kk <= $x) {
        $kk=$kk+2;
        $salto[$i][$j] = $kk;
        $j++;
    }
    $x++;    
}
