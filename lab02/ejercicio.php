<?php

declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #2

function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float
{
    if ($dias <= 0 || $montoDiario <= 0 || $gastosExtras <= 0) {
        throw new Exception("Los valores deben ser positivos.\n");
    } else {
        return ($dias * $montoDiario) + $gastosExtras;
    }
}

try {
    echo "El total de viáticos es: $" . number_format(calcularTotalViaticos(5, 100.5, 50.75), 2) . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
