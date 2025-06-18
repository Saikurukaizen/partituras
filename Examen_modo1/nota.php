<!-- armonias y melodias
ambas de componen de una serie de notas.
Cada uno puede ser mostrada para ser practicada.
Mostrar cada parte.
regitrar 4 armonias o melodias
proceso que devolviera la melodia con mas notas -->
<?php
declare(strict_types=1);


abstract class Nota{
    private string $nombre;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
    }

    public function getNota(): string{
        return $this->nombre;
    }

    public abstract function mostrarNotas(): string;
}

?>