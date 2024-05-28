<?php
$a = 10;
$b = 3;

$Liitmine = $a + $b;
echo "$a + $b = $Liitmine\n <br>";

$lahutamine = $a - $b;
echo "$a - $b = $lahutamine\n<br>";

$korrutamine = $a * $b;
echo "$a * $b = $korrutamine\n<br>";

$jagamine = $a / $b;
echo "$a / $b = $jagamine\n<br>";

$jaak = $a % $b;
echo "$a % $b = $jaak\n<br>";

$millimeetrid = 1000;

$sentimeetrid = $millimeetrid / 10;

$meetrid = $millimeetrid / 1000;

$sentimeetrid2 = number_format($sentimeetrid, 2, '.', '');
$meetrid2 = number_format($meetrid, 2, '.', '');

echo "$millimeetrid mm on $sentimeetrid2 cm ja $meetrid2 m.<br>";

$a = 3; 
$b = 4;

$c = sqrt($a**2 + $b**2);

$umbermoot = $a + $b + $c;

$pindala = ($a * $b) / 2;

$umbermoottaisarv = round($umbermoot);
$pindalataisarv = round($pindala);

echo "Täisnurkse kolmnurga ümbermõõt on $umbermoottaisarv meetrit ja pindala on $pindalataisarv ruutmeetrit.<br>";
