<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #2

function calcular(int $cantidad, float $precio): float {
    if ($cantidad < 0 || $precio < 0) {
        throw new Exception("La cantidad y el precio deben ser valores positivos.");
    }
    return $cantidad * $precio;
}

try {
    echo "Total: " . calcular(5, 120.50) . "\n"; // Ejemplo de uso con valores válidos
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage() . "\n";
}
