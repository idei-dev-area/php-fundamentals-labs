<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1

//Arreglo de alumnos con sus respectivas edades y notas
$arregloAlumnos = [['nombre'=>'Juan', 'edad'=>24, 'notas'=>[9.0, 9.0, 7.5]],
                    ['nombre'=>'María', 'edad'=>22, 'notas'=>[7.0, 8.5, 8.5]],
                    ['nombre'=>'Pedro', 'edad'=>21, 'notas'=>[8.0, 6.5, 8.0]],
                    ['nombre'=>'Ana', 'edad'=>23, 'notas'=>[6.5, 6.0, 5.0]]];


foreach($arregloAlumnos as $alumno){
    $promedio = array_sum($alumno['notas']) / count($alumno['notas']);

    if ($promedio >= 7){
        echo "Alumno " . $alumno['nombre'] . ": Aprobado con " . $promedio . "\n";
    }else{
        echo "Alumno " . $alumno['nombre'] . ": Desaprobado" . "\n";
    }
}