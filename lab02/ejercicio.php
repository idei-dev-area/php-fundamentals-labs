<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #2

function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float
{
    if ($dias <= 0 || $montoDiario <= 0) {
        throw new Exception("Los valores ingresados deben ser mayores a cero.");
    }

    if ($gastosExtras <= 0) {
        throw new Exception("Los gastos extras deben ser mayores a cero.");
    }

    return ($dias * $montoDiario) + $gastosExtras;
}

try {
    $total = calcularTotalViaticos(5, 120.50, 300.0);
    echo "Total de viáticos: {$total}\n";
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage() . "\n";
}

try {
    $total = calcularTotalViaticos(-3, 120.50, 300.0);
    echo "Total de viáticos: {$total}\n";
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage() . "\n";
}

try {
    $total = calcularTotalViaticos(5, 120.50, -50.0);
    echo "Total de viáticos: {$total}\n";
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage() . "\n";
}
