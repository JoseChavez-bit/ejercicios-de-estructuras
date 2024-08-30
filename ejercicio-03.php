<?php
$N = 10;
// Verifica si N es mayor que 1
if ($N > 1) {
    echo "Números primos del 1 hasta el $N:\n";
    for ($i = 1; $i <= $N; $i += 2) {
        echo $i . "\n";
    }
} 
