<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1

$alumnos=[
    [
        "nombre" => "Juan",
        "edad" => 20,
        "notas" => [8.0, 7.5, 9.0]
    ],
    [
        "nombre" => "Alejo",
        "edad" => 20,
        "notas" => [8.0, 9.5, 10.0] 
    ],
    [
        "nombre" => "Mia",
        "edad" => 20,
        "notas" => [9.0, 8.5, 6.5] 
    ],
    [
        "nombre" => "Baltazar",
        "edad" => 20,
        "notas" => [8.0, 9.5, 6.0] 
    ]
];


foreach ($alumnos as $alumno){
    $promedio = array_sum($alumno['notas']) / count($alumno['notas']);
    if ($promedio >= 7){
        echo "Alumno " . $alumno["nombre"] . ": Aprobado con " . number_format($promedio, 2) . "\n";
    }else{
        echo "Alumno " . $alumno["nombre"] . ": Desaprobado" ."\n";
    }
}