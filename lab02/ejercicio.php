<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #2

function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float {
    if ($dias <= 0 || $montoDiario <= 0 || $gastosExtras <= 0) {
        throw new Exception("Los valores ingresados deben ser mayores a cero.");
    }

    return ($dias * $montoDiario) + $gastosExtras;
}

// ---------------------------------------------------------
// Prueba 1: Ejemplo con datos válidos
// ---------------------------------------------------------
echo "--- Prueba con Datos Válidos ---\n";
try {
    $total = calcularTotalViaticos(5, 1500.50, 450.00);
    echo "Total de viáticos calculados: $" . $total . "\n\n";
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage() . "\n\n";
}

// ---------------------------------------------------------
// Prueba 2: Ejemplo con datos inválidos (días negativos)
// ---------------------------------------------------------
echo "--- Prueba con Datos Inválidos ---\n";
try {
    $total = calcularTotalViaticos(-2, 1500.50, 450.00);
    echo "Total de viáticos calculados: $" . $total . "\n";
} catch (Exception $e) {
    echo "Error capturado exitosamente: " . $e->getMessage() . "\n";
}
