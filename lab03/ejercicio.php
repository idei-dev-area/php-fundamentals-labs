<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 03
// Tema: Programación Orientada a Objetos
// ==========================================

// Desarrolla aquí tu solución según el Issue #30

class MiembroEquipo {
    private static array $rolesValidos = ["Junior", "Technical Leader"];
    private string $nombre;
    private string $rol;
    private int $tareasCompletadas = 0;


    public function __construct(string $nombre, string $rol) {
        // Validación de los parámetros
        if (empty($nombre)) {
            throw new InvalidArgumentException("El nombre no puede estar vacío.");
        }
        if (empty($rol)) {
            throw new InvalidArgumentException("El rol no puede estar vacío.");
        }
        // Los únicos roles válidos son: "Junior", "Technical Leader"
        if (!in_array($rol, self::$rolesValidos)) {
            throw new InvalidArgumentException("Rol inválido. Los roles válidos son: 'Junior' o 'Technical Leader'.");
        }
        $this->nombre = $nombre;
        $this->rol = $rol;
    }

    public function obtenerPerfil(): string {
        return "Nombre: {$this->nombre}, Rol: {$this->rol}, Tareas Completadas: {$this->tareasCompletadas}";
    }

    public function completarTarea(): void {
        $this->tareasCompletadas++;
    }
}

$miembro1 = new MiembroEquipo("Juan Pérez", "Junior");
$miembro2 = new MiembroEquipo("María López", "Technical Leader");
// $miembro3 = new MiembroEquipo("Carlos García", "Manager"); // Esto lanzará una excepción debido a un rol inválido

$miembro1->completarTarea();
$miembro2->completarTarea();
$miembro2->completarTarea();
echo $miembro1->obtenerPerfil() . PHP_EOL;
echo $miembro2->obtenerPerfil() . PHP_EOL;