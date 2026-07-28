<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1

$alumnos = [
    ['nombre' => 'Mia',
     'edad' => 22,
     'nota' => [8.5, 9.0, 8.0]],

    ['nombre' => 'Alejo',
     'edad' => 21,
     'nota' => [9.3, 8.0, 10]],

    ['nombre' => 'Nicolas',
     'edad' => 22,
     'nota' => [7.0, 7.6, 8.0]],

    ['nombre' => 'Joaquin', 
     'edad' => 22,
     'nota' => [3.0, 5.0, 6.0]]
];

foreach ($alumnos as $alumno) {
    $promedio = array_sum($alumno['nota']) / count($alumno['nota']);
    if ($promedio >= 7) {
        echo "Alumno " . $alumno['nombre'] . ": Aprobado con promedio de " . number_format($promedio, 2) . ".\n";
    } else {
        echo "Alumno " . $alumno['nombre'] . ": Desaprobado." . "\n";
    }
}
