<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #2

function calcularTotalViaticos (int $dias, float $montoDiario, float $gastosExtras): float {
    if ($dias <= 0 || $montoDiario <= 0 || $gastosExtras <= 0) {
        throw new Exception ("Los valores ingresados deben ser mayor o igual a cero.");
    } 
    return ($dias * $montoDiario) + $gastosExtras;
}

try {
    echo "Total: " . calcularTotalViaticos (-5, 1250, 350);
} catch (Exception $e) {
    echo "Ocurrio un error: " . $e->getMessage();
}