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
        "notas" => [8.0, 7.5, 6.0]
    ],
    [
        "nombre" => "Savall",
        "edad" => 21,
        "notas" => [8.0, 7.5, 9.0]
    ],
    [
        "nombre" => "Alejo",
        "edad" => 18,
        "notas" => [10.0, 10.0, 9.0]
    ],
    [
        "nombre" => "Carlos",
        "edad" => 20,
        "notas" => [8.0, 6.0, 9.0]
    ]
];

foreach ($alumnos as $alu){
    $prom=0;
    $cant=0;
    foreach ($alu["notas "] as $nota){
        $prom+=$nota;
        $cant+=1;
    }
    $promedio=$prom/$cant;
    if($promedio>=7){
        echo "Alumno " . $alu["nombre"] . ": Aprobado con " . $promedio . "\n";
    } else {
        echo "Alumno " . $alu["nombre"] . ": Desaprobado\n";
    }
}