<?php
declare(strict_types=1);

require_once 'piezaMusicalInterface.php';

class Melodia implements PiezaMusicalInterface {
    private array $notas;

    public function __construct(Notas ...$notas) {
        $this->notas = $notas;
    }

    public function mostrarNotas(): string {
        return implode(', ', array_map(fn($nota) => $nota->value, $this->notas));
    }
}
?>