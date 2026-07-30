<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #23
function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float {
    if ($dias <= 0 || $montoDiario <= 0 || $gastosExtras <= 0) {
        throw new Exception("Los valores ingresados deben ser mayor a cero \n\n");
    }
    return ($dias * $montoDiario) + $gastosExtras;
}

try {
    echo "Total de viáticos " . calcularTotalViaticos(3, 0, 5) . "\n\n";
} catch (Exception $e){
    echo "Ocurrió un error: " . $e->getMessage();
}