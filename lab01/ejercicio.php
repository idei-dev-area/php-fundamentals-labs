<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1


$alumnos = [
    [
        "nombre" => "Mara Brizuela",
        "edad" => 22,
        "notas" => [8.0, 7.5, 9.0]
    ],
    [
        "nombre" => "María Gómez",
        "edad" => 22,
        "notas" => [6.0, 5.5, 7.0]
    ],
    [
        "nombre" => "Carlos López",
        "edad" => 21,
        "notas" => [9.5, 8.5, 10.0]
    ],
    [
        "nombre" => "Ana Rodríguez",
        "edad" => 19,
        "notas" => [5.0, 6.5, 4.0]
    ]
];


foreach ($alumnos as $alumno) {
    
    $sumaNotas = array_sum($alumno['notas']);
    $promedio = $sumaNotas / count($alumno['notas']);
    $promedioFormateado = round($promedio, 2);

    if ($promedio >= 7) {
        echo "Alumno " . $alumno['nombre'] . ": Aprobado con " . $promedioFormateado . "\n";
    } else {
        echo "Alumno " . $alumno['nombre'] . ": Desaprobado\n";
    }
}
