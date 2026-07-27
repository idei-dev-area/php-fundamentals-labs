<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #2
function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float{
    if ( $dias <= 0 or $montoDiario <=0 or $gastosExtras <=0){
        throw new Exception("Valos ingresados tienen que ser mayores a 0");
    }
    $total=($dias*$montoDiario)+$gastosExtras;
    return $total;
}
try {
    $total = calcularTotalViaticos(-5, 1000.0, 500.0);
    echo "Total de viáticos: $" . $total;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

echo PHP_EOL . "El programa se ejecuta";