<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1

// 2. Estructura de Datos: Crea un arreglo asociativo multidimensional que contenga la información de al menos 4 alumnos. Cada alumno debe contar con: nombre (string), edad (int) y notas (un arreglo indexado con 3 calificaciones tipo float).


$alumnos = [
    [
        'nombre' => 'Juan',
        'edad' => 20,
        'notas' => [7.4, 8.2, 9.0]
    ],
    [
        'nombre' => 'Maria',
        'edad' => 21,
        'notas' => [4.2, 5.3, 6.4]
    ],
    [
        'nombre' => 'Pedro',
        'edad' => 22,
        'notas' => [5.1, 6.3, 4.5]
    ],
    [
        'nombre' => 'Ana',
        'edad' => 23,
        'notas' => [9.5, 9.2, 10.7]
    ]
];

// 3. Lógica con Ciclos: Implementa un ciclo foreach para recorrer la lista de alumnos.

foreach ($alumnos as $alumno) {
    // 4. Cálculo: Dentro del ciclo, calcula el promedio de las 3 notas de cada alumno.
    $total=0;
    for ($i=0; $i < count($alumno['notas']); $i++) {
        $total += $alumno['notas'][$i];
    }

    // 5a. Si la nota es mayor o igual a 7, mostrar por consola: Alumno "Alumno [Nombre]: Aprobado con [Promedio]"
    // 5b. Sino si es menor a 7, mostrar: "Alumno [Nombre]: Desaprobado"
    if (($total / 3) >= 7) {
        echo "Alumno " . $alumno['nombre'] . ": Aprobado con " . ($total / 3) . "\n";
    } else {
        echo "Alumno " . $alumno['nombre'] . ": Desaprobado\n";
    }
}