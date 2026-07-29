<?php

declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 03
// Tema: Programación Orientada a Objetos
// ==========================================

// Desarrolla aquí tu solución según el Issue #3

class MiembroEquipo
{
    private string $nombre;
    private string $rol;
    public int $tareasCompletadas = 0;

    function __construct(string $nombre, string $rol)
    {
        $this->nombre = $nombre;
        $rolesValidos = ["Junior", "Technical Leader"];
        if (!in_array($rol, $rolesValidos)) {
            throw new Exception("Rol no válido.\n");
        } else {
            $this->rol = $rol;
        }
    }

    function completarTarea(): void
    {
        $this->tareasCompletadas++;
    }

    function obtenerPerfil(): string
    {
        return "El miembro del equipo " . $this->nombre . " tiene rol de " . $this->rol . " y ha completado " . $this->tareasCompletadas . " tareas.\n";
    }
}

try {
    $miembro1 = new MiembroEquipo("Mia", "Junior");
    $miembro1->completarTarea();
    $miembro1->completarTarea();
    echo $miembro1->obtenerPerfil();

    $miembro2 = new MiembroEquipo("Alejo", "Technical Leader");
    $miembro2->completarTarea();
    echo $miembro2->obtenerPerfil();

    $miembro3 = new MiembroEquipo("Nicolas", "Intern");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
