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

    public int $tareasCompletas = 0;

    public function __construct(string $nombre, string $rol)
    {
        if ($rol !== "Junior" && $rol !== "Techical Leader") {
            throw new InvalidArgumentException ("Rol inválido. Debe ser 'Junior' o 'Technical Leader'.");
        }

        $this->nombre = $nombre;
        $this->rol = $rol;
    }

    public function completarTareas(): void
    {
        $this->tareasCompletas++;
    }

    public function obtenerPerfil(): string
    {
        return "El miembro {$this->nombre} desempeña el rol de {$this->rol} y ha completado {$this->tareasCompletas} laboratorios.";
    }
}

try{

    $junior = new MiembroEquipo("Alejandro", "Junior");
    $tl = new MiembroEquipo("Fabricio", "Technical Leader");

    //Para forzar el error:
    //$junior = new MiembroEquipo("Alberto", "Semi-Junior");
    //Borrar lo comentado, para que muestre el mensaje sin error.

    $junior->completarTareas();
    $junior->completarTareas();

    $tl->completarTareas();

    echo $junior->obtenerPerfil() . PHP_EOL;
    echo $tl->obtenerPerfil() . PHP_EOL;

} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}
