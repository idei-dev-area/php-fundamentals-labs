<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 01
// Tema: Sintaxis y Estructuras de Control
// ==========================================

// Desarrolla aquí tu solución según el Issue #1

/**
 * Lee una cadena no vacia desde consola.
 */
function leerTexto(string $mensaje): string
{
	do {
		echo $mensaje;
		$valor = trim((string) fgets(STDIN));

		if ($valor === '') {
			echo "Entrada invalida. Intenta de nuevo.\n";
		}
	} while ($valor === '');

	return $valor;
}

/**
 * Lee un entero desde consola.
 */
function leerEntero(string $mensaje): int
{
	do {
		echo $mensaje;
		$valor = trim((string) fgets(STDIN));

		if (filter_var($valor, FILTER_VALIDATE_INT) === false) {
			echo "Corregir debe debe ingresar un numero entero valido.\n";
			continue;
		}

		return (int) $valor;
	} while (true);
}

/**
 * Lee un numero decimal (float) desde consola.
 */
function leerFloat(string $mensaje): float
{
	do {
		echo $mensaje;
		$valor = trim((string) fgets(STDIN));

		if (!is_numeric($valor)) {
			echo "Corregir debe ingresar una calificacion numerica valida.\n";
			continue;
		}

		return (float) $valor;
	} while (true);
}

$alumnos = [];

for ($i = 1; $i <= 4; $i++) {
	echo "\n--- Alumno {$i} ---\n";

	$nombre = leerTexto('Nombre: ');
	$edad = leerEntero('Edad: ');

	$notas = [];
	for ($j = 1; $j <= 3; $j++) {
		$notas[] = leerFloat("Nota {$j}: ");
	}

	$alumnos[] = [
		'nombre' => $nombre,
		'edad' => $edad,
		'notas' => $notas,
	];
}

echo "\nArreglo asociativo multidimensional generado:\n";
print_r($alumnos);
