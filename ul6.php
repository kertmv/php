<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>06 - PHP - tsüklid</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
echo "<h3>Numbrid</h3>";
for ($i = 1; $i <= 100; $i++) {
    echo "$i. ";
    if ($i % 10 === 0) {
        echo "<br>";
    }
}
?>
<?php
echo "<h3>Tärnid1</h3>";
$tärn = 10;

for ($i = 0; $i < $tärn; $i++) {
    echo "* ";
}
?>
<?php
echo "<h3>Tärnid2</h3>";
$tarn2 = 5;

for ($i = 0; $i < $tarn2; $i++) {
    echo "*<br>";
}
?>
<form action="" method="get">
<h3>Ruut</h3>
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
echo "<h3>paarisarv</h3>";
for ($i = 10; $i >= 1; $i--) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>
<?php
echo "<h3>aint 3 jagavad arvud</h3>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . "<br>";
    }
}
?>
<?php
echo "<h3>Tydruk ja poiss</h3>";
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>