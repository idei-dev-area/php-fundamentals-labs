<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float {
    if ($dias <= 0 || $montoDiario <= 0 || $gastosExtras <= 0) {
        throw new Exception("Los valores ingresados deben ser mayores a cero.\n");
    }    
    $totalViaticos = $dias * $montoDiario;
    return $totalViaticos + $gastosExtras;
}

try {
    echo "Total: $" . calcularTotalViaticos(0, 120.50, 200.00) . "\n";
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
}