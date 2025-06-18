<?php
declare(strict_types=1);

class Armonia{
    private string $nombre;
    private array $notasArmonia;

    public function __construct(string $nombre, array $notasArmonia){
        $this->nombre = $nombre;
        $this->notasArmonia[] = $notasArmonia;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function mostrarNotas(): string{
       return implode(', ', $this->notasArmonia);
    }
}
?>