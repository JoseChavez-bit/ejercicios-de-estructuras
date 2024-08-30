<?php
$precio1 = 10;
$cantidad1 = 50;
$precio2 = 15;
$cantidad2 = 30;
$precio3 = 25;
$cantidad3 = 10;

// Calcular el subtotal
$subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

// Definir la tasa de impuesto y el porcentaje de descuento
$tasaImpuesto = 0.15;
$porcentajeDescuento = 0.1;

// Calcular el monto de impuestos y el descuento
$montoImpuesto = $subtotal * $tasaImpuesto;
$montoDescuento = $subtotal * $porcentajeDescuento;

// Calcular el total final
$totalFinal = $subtotal + $montoImpuesto - $montoDescuento;

// Mostrar los resultados
echo "Subtotal de la compra: $" . number_format($subtotal, 2) . "\n";
echo "Monto de impuestos (15%): $" . number_format($montoImpuesto, 2) . "\n";
echo "Descuento aplicado (10%): -$" . number_format($montoDescuento, 2) . "\n";
echo "Total final de la compra: $" . number_format($totalFinal, 2) . "\n";

?>
