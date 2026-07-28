<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

$alumnos = [
    ['nombre' => 'Martin', 'edad' => 23,  'notas' => [8.4, 9.1, 4.5]],
    ['nombre' => 'Marcelo', 'edad' => 22, 'notas' => [9.0, 8.5, 9.5]],
    ['nombre' => 'Ana', 'edad' => 24, 'notas' => [8.3, 4.5, 8.6]],
    ['nombre' => 'Lucas', 'edad' => 19, 'notas' => [6.0, 5.5, 6.0]],
    ['nombre' => 'Florencia', 'edad' => 21, 'notas' => [10.0, 7.7, 9.8]],
    ['nombre' => 'Nicolas', 'edad' => 20, 'notas' => [7.0, 7.5, 8.0]],
];

foreach ($alumnos as $alumno) {
  $sumaNotas = 0;
  foreach ($alumno['notas'] as $nota) {
    $sumaNotas += $nota;
  }

  $promedio = round($sumaNotas / count($alumno['notas']), 2);

    if ($promedio >= 7) {
      echo "Alumno {$alumno['nombre']}: Aprobado con {$promedio}\n";
    } else {
      echo "Alumno {$alumno['nombre']}: Desaprobado\n";
    }
}