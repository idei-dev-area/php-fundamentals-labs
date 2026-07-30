<?php
// ==========================================
// TALLER PHP - LABORATORIO 02
// Tema: Funciones y Tipado Estricto
// ==========================================

declare(strict_types=1);

function calcularTotalViaticos(int $dias, float $montoDiario, float $gastosExtras): float
{
    if ($dias <= 0 || $montoDiario <= 0 || $gastosExtras <= 0) {
        throw new InvalidArgumentException('Los valores ingresados deben ser mayores a cero.');
    }

    return (float) (($dias * $montoDiario) + $gastosExtras);
}

$casos = [
    ['etiqueta' => 'Caso válido', 'dias' => 5, 'montoDiario' => 120.50, 'gastosExtras' => 200],
    ['etiqueta' => 'Caso inválido', 'dias' => -5, 'montoDiario' => 120.50, 'gastosExtras' => 200],
];

foreach ($casos as $caso) {
    try {
        $total = calcularTotalViaticos($caso['dias'], $caso['montoDiario'], $caso['gastosExtras']);
        echo $caso['etiqueta'] . ': ' . $total . PHP_EOL;
    } catch (InvalidArgumentException $e) {
        echo $caso['etiqueta'] . ': ' . $e->getMessage() . PHP_EOL;
    }
}