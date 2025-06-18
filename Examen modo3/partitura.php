<?php
declare(strict_types=1);

require_once 'piezaMusicalInterface.php';
require_once 'armonia.php';
require_once 'melodia.php';

class Partitura{
    private string $nombre;
    private array $piezas;

    public function __construct(string $nombre, PiezaMusicalInterface ...$piezas) {
        $this->nombre = $nombre;
        $this->piezas = $piezas;
    }

    public function agregarPieza(PiezaMusicalInterface $pieza): void {
        $this->piezas[] = $pieza;
    }

    public function mostrarPartitura(): void{
        echo "Partitura: ".$this->nombre."\n";

        echo "Melodia: \n";
        foreach($this->piezas as $pieza){
            if($pieza instanceOf Melodia){
                echo "Melodia: " . $pieza->mostrarNotas() . "\n";
            }
        }

        echo "Armonia: \n";
        foreach($this->piezas as $pieza){
            if($pieza instanceOf Armonia){
                echo "Armonia: " . $pieza->mostrarNotas() . "\n";
            }
        }    
    }
}
?>