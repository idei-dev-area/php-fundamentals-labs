<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 03
// Tema: Programación Orientada a Objetos
// ==========================================

// Desarrolla aquí tu solución según el Issue #3

class MiembroEquipo {
    private static array $rolesValidos = ["Junior", "Technical leader"];
    private string $nombre;
    private string $rol;
    public int $tareasCompletadas = 0;

    public function __construct(string $nombre, string $rol) {
        //validación de parámetros
        if (empty($nombre)) {
            throw new InvalidArgumentException("El nombre no puede estar vacío");
        }
        if (empty($rol)) {
            throw new InvalidArgumentException("El rol no puede estar vacío");
        }


        //Valores válidos: "Junior" y "Technical leader"
        if (!in_array($rol, self::$rolesValidos)) {
            throw new InvalidArgumentException("Rol inválido. Roles válidos; 'Junior' o 'Technical leader'." );
            }
        $this->nombre = $nombre;
        $this->rol = $rol;
    }
    
    public function obtenerPerfil(): string {
        return "Nombre: {$this->nombre}, Rol: {$this->rol}, Tareas completadas: {$this->tareasCompletadas} \n";
    }

    public function completarTarea(): void {
        $this->tareasCompletadas++;
    }
}

$miembro1 = new MiembroEquipo("Pedro Gonzalez", "Junior");
//$miembro2 = new MiembroEquipo("Ana Lopez", "Product owner");
$miembro3 = new MiembroEquipo("Martin Hernandez", "Technical leader");

$miembro1->completarTarea();
//$miembro2->completarTarea();
$miembro3->completarTarea();
$miembro3->completarTarea();
$miembro3->completarTarea();

echo $miembro1->obtenerPerfil() . PHP_EOL;
echo $miembro3->obtenerPerfil() . PHP_EOL;