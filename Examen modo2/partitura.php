<?php
declare(strict_types=1);

class Partitura{
    private string $nombre;
    private array $melodias;
    private array $armonias;
    

    public function __construct(string $nombre, array $melodias, array $armonias){
        $this->nombre = $nombre;
        $this->melodias[] = $melodias;
        $this->armonias[] = $armonias;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function agregarMelodia(Melodia $melodia): void{
        $this->melodias[] = $melodia;
    }

    public function agregarArmonia(Armonia $armonia): void{
        $this->armonias[] = $armonia;
    }

    public function mostrarPartitura(): string{
        $res = "Partitura: " . $this->getNombre() . "\n";
        $res .= "Melodías:\n";
        foreach($this->melodias as $melodia){
            $res .= $melodia->mostrarMelodia(). "\n";
        }
        $res .= "Armonías:\n";
        foreach($this->armonias as $armonia){
            $res .= $armonia->mostrarArmonia() . "\n";
        }
        return $res;
    }
}
?>