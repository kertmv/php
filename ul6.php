<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 6</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
echo "<p>Numbrid</p>";
for ($i = 1; $i <= 100; $i++) {
    echo "$i. ";
    if ($i % 10 === 0) {
        echo "<br>";
    }
}
?>
<?php
echo "<p>Tärnid1</p>";
$tärn = 10;

for ($i = 0; $i < $tärn; $i++) {
    echo "* ";
}
?>
<?php
echo "<p>Tärnid2</p>";
$tarn2 = 5;

for ($i = 0; $i < $tarn2; $i++) {
    echo "*<br>";
}
?>
<form action="" method="get">
<p>Ruut</p>
        <label for="suurus">Sisesta ruudu suurus:</label>
        <input type="number" id="suurus" name="suurus" min="1" required>
        <button type="submit">tee ruut</button>
</form>
<?php

if (isset($_GET["suurus"])) {
    $suurus = intval($_GET["suurus"]);

    for ($i = 0; $i < $suurus; $i++) {
        for ($j = 0; $j < $suurus; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
} else {
    echo "Palun sisesta ruudu suurus.";
}
?>
<?php
echo "<p>paarisarv</p>";
for ($i = 10; $i >= 1; $i--) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>
<?php
echo "<p>aint 3 jagavad arvud</p>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . "<br>";
    }
}
?>
<?php
echo "<p>Tydruk ja poiss</p>";
$poisid = array("Jaan", "Peeter", "Marko", "Andres", "Tõnu");
$tudrukud = array("Kati", "Mari", "Liis", "Anna", "Eva");

if (count($poisid) == count($tudrukud)) {
      for ($i = 0; $i < count($poisid); $i++) {
        echo $poisid[$i] . " ja " . $tudrukud[$i] . "<br>";
    }
} else {
    echo "Massiivid ei ole võrdsed!";
}
?>



</body>
</html>
