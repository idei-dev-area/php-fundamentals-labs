<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

// Desarrolla aquí tu solución según el Issue #2
function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float{
    if ($dias <=0 || $montoDiario <=0 || $gastosExtras <=0) {
        throw new Exception("Los valores ingresados deben ser mayores a cero.");
    }
    return ($dias * $montoDiario) + $gastosExtras;
}

try{
    echo "Total a pagar: " . calcularTotalViaticos(2, 90, 20);
}catch (Exception $e){
        echo "Ocurrio un error: " . $e->getMessage(); 
}