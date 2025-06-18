<?php
declare(strict_types=1);

require_once 'piezaMusicalInterface.php';
require_once 'notas.php';
require_once 'melodia.php';
require_once 'armonia.php';
require_once 'partitura.php';

$melodia = new Melodia(Notas::DO, Notas::RE, Notas::MI);
$melodia2 = new Melodia(Notas::FA, Notas::SOL, Notas::LA);

$doMayor = new Armonia(Notas::DO, Notas::MI, Notas::SOL);
$solMayor = new Armonia(Notas::SOL, Notas::SI, Notas::RE);
$laMenor = new Armonia(Notas::LA, Notas::DO, Notas::MI);
$reMenor = new Armonia(Notas::RE, Notas::FA, Notas::LA);

echo "Melodia 1: " .$melodia->mostrarNotas(). "\n";
echo "Melodia 2: " .$melodia2->mostrarNotas(). "\n";
echo "Armonia Do Mayor: " .$doMayor->mostrarNotas(). "\n";
echo "Armonia Sol Mayor: " .$solMayor->mostrarNotas(). "\n";
echo "Armonia La Menor: " .$laMenor->mostrarNotas(). "\n";
echo "Armonia Re Menor: " .$reMenor->mostrarNotas(). "\n";

$partitura1 = new Partitura('Mi primera partitura');
$partitura1->agregarPieza($melodia);
$partitura1->agregarPieza($melodia2);
$partitura1->agregarPieza($doMayor);
$partitura1->agregarPieza($solMayor);
$partitura1->agregarPieza($laMenor);
$partitura1->agregarPieza($reMenor);

echo "Partitura: " .$partitura1->mostrarPartitura(). "\n";


?>