<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1

$alumnos = [
    [
        "nombre" => "Ana",
        "edad" => 22,
        "notas" => [8.0, 7.5, 9.0],
    ],
    [
        "nombre" => "Bruno",
        "edad" => 24,
        "notas" => [5.0, 6.0, 6.5],
    ],
    [
        "nombre" => "Carla",
        "edad" => 21,
        "notas" => [7.0, 7.0, 7.0],
    ],
    [
        "nombre" => "Diego",
        "edad" => 23,
        "notas" => [4.0, 5.5, 6.0],
    ],
];

foreach ($alumnos as $alumno) {
    $promedio = array_sum($alumno["notas"]) / count($alumno["notas"]);

    if ($promedio >= 7) {
        echo "Alumno {$alumno['nombre']}: Aprobado con {$promedio}\n";
    } else {
        echo "Alumno {$alumno['nombre']}: Desaprobado\n";
    }
}
