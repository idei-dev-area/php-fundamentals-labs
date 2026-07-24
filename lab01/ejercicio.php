<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1
$alumnos = [
    [
        "nombre" => "Juan",
        "edad" => 20,
        "notas" => [8.0, 7.5, 9.0]
    ],
    [
        "nombre" => "María",
        "edad" => 22,
        "notas" => [6.0, 7.0, 8.0]
    ],
    [
        "nombre" => "Pedro",
        "edad" => 19,
        "notas" => [5.0, 6.5, 7.0]
    ],
    [
        "nombre" => "Ana",
        "edad" => 21,
        "notas" => [9.0, 8.5, 9.5]
    ]
];

foreach ($alumnos as $alumno) {
    $promedio = 0;
    $nombre = $alumno['nombre'];
    $edad = $alumno['edad'];
    $promedio = array_sum($alumno['notas']) / count($alumno['notas']);
    $promedio = round($promedio, 2);
    if ($promedio >= 7.0) {
        echo "{$alumno['nombre']}\tAPROBADO\tcon {$promedio}.\n";
    } else {
        echo "{$alumno['nombre']}\tREPROBADO\tcon {$promedio}.\n";
    }
}