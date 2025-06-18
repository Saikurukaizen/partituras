<?php
declare(strict_types=1);

require_once 'notas.php';

class Armonia{
    private array $notas; 

    public function __construct(Notas ...$notas){
        $this->notas = $notas;
    }

    public function mostrarArmonia(): string{
       return implode(', ', $this->notas);
    }
}
?>