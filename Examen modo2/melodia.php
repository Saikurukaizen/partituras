<?php
declare(strict_types=1);

require_once 'notas.php';

class Melodia{
    private array $notas;

    public function __construct(Notas ...$notas){
        $this->notas = $notas;
    }
    public function mostrarMelodia(): string{
       return implode(', ', $this->notas); 
    }       
}
?>