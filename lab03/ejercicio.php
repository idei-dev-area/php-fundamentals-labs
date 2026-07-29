<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 03
// Tema: Programación Orientada a Objetos
// ==========================================

// Desarrolla aquí tu solución según el Issue #3

class MiembroEquipo{
    private string $nombre;
    private string $rol;

    public int $tareasCompletadas;
    
    public function __construct(string $nombre, string $rol){
        if (!in_array($rol, ['Junior', 'Technical Leader'])) {
                throw new InvalidArgumentException("Rol inválido. Debe ser 'Junior' o 'Technical Leader'.");
            }
        $this->nombre = $nombre;
        $this->rol = $rol;
        $this->tareasCompletadas = 0;
    }

    public function completarTarea(): void {
        $this->tareasCompletadas++;
    }

    public function obtenerPerfil(): string{
        return "El miembro {$this->nombre} desempeña el rol de {$this->rol} y ha completado {$this->tareasCompletadas} laboratorios.";
    }

}


$miembro1 = new MiembroEquipo("Ana", "Junior");
$miembro2 = new MiembroEquipo("Juan", "Technical Leader");

$miembro1->completarTarea();
$miembro1->completarTarea();
$miembro1->completarTarea();
$miembro1->completarTarea();

$miembro2->completarTarea();
$miembro2->completarTarea();



echo $miembro1->obtenerPerfil() . "\n";
echo $miembro2->obtenerPerfil() . "\n";
