<?php
declare(strict_types=1);

require_once 'notas.php';
require_once 'melodia.php';
require_once 'armonia.php';

$partitura = new Partitura("Mi partitura", [], []);

$melodia = new Melodia(Notas::DO, Notas::RE, Notas::MI);
$doMayor = new Armonia(Notas::DO, Notas::MI, Notas:: SOL);
$laMenor = new Armonia(Notas::LA, Notas::DO, Notas::MI);
$solMayor = new Armonia(Notas::SOL, Notas::SI, Notas::RE);

$partitura->agregarMelodia($melodia);
$partitura->agregarArmonia($doMayor);
$partitura->agregarArmonia($laMenor);
$partitura->agregarArmonia($solMayor);

echo $partitura->mostrarPartitura();
?>