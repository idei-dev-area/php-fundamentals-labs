<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 03
// Tema: Programación Orientada a Objetos
// ==========================================

// Desarrolla aquí tu solución según el Issue #3
class MiembroEquipo {
    private string $nombre;
    private string $rol;
    public int $tareasCompletadas = 0;

    public function __construct(string $nombre, string $rol){
        if ($rol !== 'Junior' && $rol !== 'Technical Leader') {
            throw new InvalidArgumentException("El rol debe ser Junior o Technical Leader");
        }
        $this->nombre = $nombre;
        $this->rol = $rol;
    } 

    public function completarTarea(): void{
        $this->tareasCompletadas++;
    }

    public function obtenerPerfil(): string{
        return "El miembro " . $this->nombre . " desempeña el rol de " . $this->rol . " y ha completado " . $this->tareasCompletadas . " laboratorios. " . "\n";
    }

}

$miembro = new MiembroEquipo("Alejo", "Junior");
$miembro2 = new MiembroEquipo("Mia", "Technical Leader");

$miembro->completarTarea();
$miembro->completarTarea();

$miembro2->completarTarea();

echo $miembro->obtenerPerfil() . "\n";
echo $miembro2->obtenerPerfil() . "\n";

try {
    $miembro3 = new MiembroEquipo("Baltazar", "Technical");
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}