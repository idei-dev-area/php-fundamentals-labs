<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #2
function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float {
    //Validación de parámetros
    if ($dias <= 0 || $montoDiario <= 0 || $gastosExtras < 0) {
        throw new Exception("Los valores ingresados deben ser mayores a cero.");
    }
    
    $totalViaticos = ($dias * $montoDiario) + $gastosExtras;
    
    return $totalViaticos;
}

try {
   
    $total= calcularTotalViaticos(-6, 100.0, 50.0);
    echo "Total de viáticos: " . $total . "\n";

    } catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}