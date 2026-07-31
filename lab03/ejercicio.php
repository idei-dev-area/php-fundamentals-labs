<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 03
// Tema: Programación Orientada a Objetos
// ==========================================

class MiembroEquipo {
    private string $nombre;
    private string $rol;
    public int $tareasCompletadas;

    public function __construct(string $nombre, string $rol) {
        if ($rol !== "Junior" && $rol !== "Technical Leader") {
            throw new Exception("El rol debe ser 'Junior' o 'Technical Leader'.\n");
        }

        $this->nombre = $nombre;
        $this->rol = $rol;
        $this->tareasCompletadas = 0;
    }

    public function completarTarea(): void {
        $this->tareasCompletadas++;
    }

    public function obtenerPerfil(): string {
        return "El miembro " . $this->nombre . " desempeña el rol de " . $this->rol . " y ha completado " . $this->tareasCompletadas . " laboratorios.\n";
    }
}

try {
    //Crear usuarios
    $usuario01 = new MiembroEquipo("Florencia", "Junior");
    $usuario02 = new MiembroEquipo("Gustavo", "Technical Leader");

    //Completar tareas
    for ($i = 0; $i < 3; $i++) {
        $usuario01->completarTarea();
    }
    $usuario02->completarTarea();

    //Mostrar perfiles
    echo $usuario01->obtenerPerfil();
    echo $usuario02->obtenerPerfil();
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
}
