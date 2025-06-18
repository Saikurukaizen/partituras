<?php
declare(strict_types=1);

require_once 'Nota.php';
require_once 'Melodia.php';
require_once 'Armonia.php';

$acorde1 = new Armonia('Mi menor', ['E', 'G', 'B']);
$acorde2 = new Armonia('Re mayor', ['D', 'F', 'A']);
$acorde3 = new Armonia('Do Mayor', ['C', 'E', 'G']);
$acorde4 = new Armonia('Si Mayor', ['B', 'D#', 'F#']);

$melodia1 = new Melodia('Melodia 1', ['C', 'E', 'G', 'B']);



echo "Acorde 1: " . $acorde1->getNombre() ."->".$acorde1->mostrarNotas() . PHP_EOL;
echo "Acorde 2: " . $acorde2->getNombre() ."->".$acorde2->mostrarNotas() . PHP_EOL;
echo "Acorde 3: " . $acorde3->getNombre() ."->".$acorde3->mostrarNotas() . PHP_EOL;
echo "Acorde 4: " . $acorde4->getNombre() ."->".$acorde4->mostrarNotas() . PHP_EOL;
echo "Melodia 1: " . $melodia1->getNombre() ."->".$melodia1->mostrarNotas() . PHP_EOL;
echo "Acorde 5: " . $acorde5->getNombre() ."->".$acorde5->mostrarNotas() . PHP_EOL;
?>