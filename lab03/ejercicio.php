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
        return "El miembro {$this->nombre} desempeña el rol de {$this->rol} y ha completado {$this->tareasCompletadas} laboratorios.";
    }
}

$tl = new MiembroEquipo("Juan", "Technical Leader");
$junior = new MiembroEquipo("Baltazar", "Junior");

$tl->completarTarea();
$tl->completarTarea();

$junior->completarTarea();

echo $tl->obtenerPerfil() . PHP_EOL;
echo $junior->obtenerPerfil() . PHP_EOL;