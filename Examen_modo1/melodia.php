<?php
declare(strict_types=1);

class Melodia{
    private string $nombre;
    private array $notasMelodia;

    public function __construct(string $nombre, array $notasMelodia){
        $this->nombre = $nombre;
        $this->notasMelodia = $notasMelodia;
    }

    public function getNombre(): string{
        return $this->nombre;
    }
    
    public function mostrarNotas(): string{
       return implode(', ', $this->notasMelodia); 
    }       
}
?>