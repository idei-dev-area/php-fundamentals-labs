<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #2
function calcularviatico(int $dias, float $montodiario, float $gastosExtras): float {
    if (($dias <= 0) or ($montodiario <= 0) or ($gastosExtras <= 0)) {
        throw new Exception("Los valores ingresados deben ser mayor que cero.");}
    return $dias * $montodiario + $gastosExtras;
}

try {
    echo "Total Viaticos: " . calcularviatico(7, 20.50, 100.00);
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
}
sleep(5);
