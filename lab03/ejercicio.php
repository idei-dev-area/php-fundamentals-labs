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
		$rolesValidos = ['Junior', 'Technical Leader'];

		if (!in_array($rol, $rolesValidos, true)) {
			throw new InvalidArgumentException('El rol debe ser "Junior" o "Technical Leader".');
		}

		$this->nombre = $nombre;
		$this->rol = $rol;
	}

	public function completarTarea(): void
	{
		$this->tareasCompletadas++;
	}

	public function obtenerPerfil(): string
	{
		return sprintf(
			'El miembro %s desempeña el rol de %s y ha completado %d laboratorios.',
			$this->nombre,
			$this->rol,
			$this->tareasCompletadas
		);
	}
}
$miembro1 = new MiembroEquipo("Laura", "Junior");
$miembro1->completarTarea();
$miembro1->completarTarea();
echo $miembro1->obtenerPerfil();
$miembro2 = new MiembroEquipo("Gustavo", "Technical Leader");
$miembro2->completarTarea();
$miembro2->completarTarea();
$miembro2->completarTarea();
echo $miembro2->obtenerPerfil();
