<?php
// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1

// 1. Tipado Estricto: Mantén declare(strict_types=1); en la primera línea.
declare(strict_types=1);

// 2. Definición de Función: Crea la función calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float. Debe retornar obligatoriamente un valor de tipo float.

function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float {
    if ($dias <= 0 || $montoDiario <= 0 || $gastosExtras <= 0) {
        throw new Exception("Los valores ingresados deben ser mayores a cero.");
    }
    $totalViaticos = ($dias * $montoDiario) + $gastosExtras;
    return (float) $totalViaticos;
}

// 3. Manejo de Errores (try/catch):
// - Si los $dias, el $montoDiario o los $gastosExtras son menores o iguales a cero, la función debe lanzar una excepción: throw new Exception("Los valores ingresados deben ser mayores a cero.");
// - Invoca a la función fuera de su definición dentro de un bloque try/catch.
// - Prueba ingresar un dato inválido (como días negativos) para comprobar en consola que el bloque catch capture el error limpiamente sin romper la ejecución del script.

try {
    echo "Total: " . calcularTotalViaticos(5, 120.50, 200) . "\n";
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
}

try {
    echo "Total: " . calcularTotalViaticos(-5, 120.50, 200) . "\n";
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
}