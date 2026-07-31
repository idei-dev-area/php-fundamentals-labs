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

    public function __construct(string $nombre, string $rol)
    {
    $this->nombre = $nombre;
    $this->rol = $rol;
    }

public function completarTarea(): void
    {
        $this->tareasCompletadas++;
    }

    public function obtenerPerfil(): string
    {
    $textoLaboratorio = "laboratorios";

    if ($this->tareasCompletadas == 1) {
        $textoLaboratorio = "laboratorio";
    }

    return "El miembro " . $this->nombre .
            " desempeña el rol de " . $this->rol .
            " y ha completado " . $this->tareasCompletadas .
            " " . $textoLaboratorio . ".";
    }
}
$junior = new MiembroEquipo("Micaela", "Junior");
$tl = new MiembroEquipo("Emiliano", "Technical Leader");

$junior->completarTarea();
$junior->completarTarea();

$tl->completarTarea();
echo $junior->obtenerPerfil() . "\n";
echo $tl->obtenerPerfil() . "\n";