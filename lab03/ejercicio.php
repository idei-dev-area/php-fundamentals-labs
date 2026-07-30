<?php
// ==========================================
// TALLER PHP - LABORATORIO 03
// Tema: Programación Orientada a Objetos
// ==========================================

// Desarrolla aquí tu solución según el Issue #3

declare(strict_types=1);

// 1. Creación de la Clase: Diseña una clase llamada MiembroEquipo.
// 2. Encapsulamiento:
//   - Define las siguientes propiedades privadas: string $nombre y string $rol (los únicos roles válidos serán "Junior" o "Technical Leader").
//   - Define una propiedad pública: int $tareasCompletadas e inicialízala en 0.
// 3. Constructor: Agrega el método mágico __construct para obligar a que se definan el nombre y el rol al instanciar el objeto.
// 4. Métodos Públicos:
//   - completarTarea(): void -> Debe incrementar en 1 el contador de $tareasCompletadas.
//   - obtenerPerfil(): string -> Debe retornar un texto formal, por ejemplo: "El miembro [nombre] desempeña el rol de [rol] y ha completado [tareasCompletadas] laboratorios."
// 5. Prueba en Consola: Instancia al menos dos objetos (uno para un TL y otro para un Junior), ejecuta el método de completar tareas un par de veces e imprime en la consola el resultado de sus perfiles.

class MiembroEquipo {
    private string $nombre;
    private string $rol;
    private int $tareasCompletadas;

    public function __construct(string $nombre, string $rol) {
        // Validar que rol sea solo Junior o Technical Leader
        if ($rol !== "Junior" && $rol !== "Technical Leader") {
            throw new InvalidArgumentException("El rol debe ser 'Junior' o 'Technical Leader'");
        }

        // Validar que el nombre no sea vacio y sea una cadena alfabetica
        if (empty($nombre) || !ctype_alpha($nombre)) {
            throw new InvalidArgumentException("El nombre debe ser una cadena alfabetica y no puede estar vacio");
        }

        $this->nombre = $nombre;
        $this->rol = $rol;
        $this->tareasCompletadas = 0;
    }

    public function completarTarea(): void {
        $this->tareasCompletadas++;
    }

    public function obtenerPerfil(): string {
        return "El miembro " . $this->nombre . " desempeña el rol de " . $this->rol . " y ha completado " . $this->tareasCompletadas . " laboratorios.";
    }
}

// Pruebas:

$personas = [
    [
        "nombre" => "Juan",
        "rol" => "",
    ],
    [
        "nombre" => "123",
        "rol" => "Junior",
    ],
    [
        "nombre" => "Sofia",
        "rol" => "Technical Leader",
    ],
    [
        "nombre" => "Pedro",
        "rol" => "Junior",
    ]
];

foreach($personas as $persona){
    try {
        $miembro = new MiembroEquipo($persona['nombre'], $persona['rol']);
        $miembro->completarTarea();
        $miembro->completarTarea();
        echo $miembro->obtenerPerfil() . "\n";
    } catch (InvalidArgumentException $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}