<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1

$alumnos = [
    [
        "nombre" => "Sofía Pilar",
        "edad" => "21",
        "notas" => [8.1, 9.2, 9.8]
    ],
    [
        "nombre" => "Martín Ignacio",
        "edad" => "23",
        "notas" => [8.8, 8.3, 10.0]
    ],
    [
        "nombre" => "Juan Lorenzo",
        "edad" => "28",
        "notas" => [6.1, 7.2, 6.9]
    ]
];

// Recorrer lista de almunos
foreach ($alumnos as $alumno){
    echo "Alumno: " . $alumno['nombre'] . "\n";
    echo "Edad: " . $alumno['edad'] . " años\n";

    // calculo del promedio
    $promedio = array_sum($alumno['notas']) / count($alumno['notas']);
    echo "Promedio " . number_format($promedio, 2) . "\n";

    //condición académica del alumno
    if ($promedio >= 7.0) {
        echo "Alumno " . $alumno['nombre'] . ": Aprobado con " . number_format($promedio, 2) . "\n\n";
    } else {
        echo "Alumno " . $alumno['nombre'] . ": Desaprobado\n\n";
    }
}