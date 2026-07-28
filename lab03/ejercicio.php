<?php
declare(strict_types=1);

// ==========================================
// TALLER PHP - LABORATORIO 03
// Tema: Programación Orientada a Objetos
// ==========================================

// Desarrolla aquí tu solución según el Issue #3


class MiembroEquipo {
    private string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function presentarse(): string {
        return "Hola, soy " . $this->nombre;
    }
}


$persona = new MiembroEquipo("Mara Brizuela");

echo $persona->presentarse() . "\n";
