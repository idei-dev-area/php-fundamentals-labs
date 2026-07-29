<?php
declare(strict_types=1);

// Desarrolla aquí tu solución según el Issue #1

$alumnos = [
    [
        "nombre" => "Juan",
        "edad" => 25,
        "notas" => [8.7, 7.2, 9.0]
    ],

    [
        "nombre" => "Mariana",
        "edad" => 23,
        "notas" => [8.2, 7.8, 9.1]
    ],

    [
        "nombre" => "Nicolas",
        "edad" => 18,
        "notas" => [7.7, 6.2, 10.0]
    ],

    [
        "nombre" => "Micaela",
        "edad" => 22,
        "notas" => [6.7, 5.2, 8.4]
    ],
];

foreach ($alumnos as $alumnos) {
    $promedio = array_sum($alumnos["notas"]) / count($alumnos["notas"]);

    if ($promedio >= 7) {
        echo "El/la Alumno/a {$alumnos['nombre']}: Aprobado con nota: " . number_format($promedio, 2) . PHP_EOL;
    } else {
        echo "El/la Alumno/a {$alumnos['nombre']}: Desaprobado/a con nota: "  . number_format($promedio, 2) . PHP_EOL;
    }
}