<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>04 - PHP - Tingimuslaused</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1>Harjutus 04</h1>
        <h2>Jagamine</h2>
        <form action="#" method="get">
            <label for="a">Sisesta Esimene number</label>
            <input type="number" name="a" id="a"><br>
            <label for="b">Sisesta teine number</label>
            <input type="number" name="b" id="b"><br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">
        </form>
        <?php

        if(!empty($_GET["a"]) && !empty($_GET["b"])){
            $a=$_GET["a"];
            $b=$_GET["b"] ;
            $s=$a/$b;
            echo "Jagatis on ".$s."<br>";
        }elseif($_GET["a"] == 0 or $_GET["b"] == 0 ){echo "Sisesta midagi õiget";}
        ?>



        <h2>Vanuse vordlemine</h2>
        <form action="#" method="get">
            <label for="y">Sisesta Esimene vanus</label>
            <input type="number" name="y" id="y"><br>
            <label for="x">Sisesta teine vanus</label>
            <input type="number" name="x" id="x"><br>
            <input type="submit" class="btn btn-success my-2" value="Leia kumb on vanem">
        </form>
        <?php

    if(!empty($_GET["x"]) && !empty($_GET["y"])) {
        $x = intval($_GET["y"]);
        $y = intval($_GET["x"]);
        if($x > $y) {
            echo "Esimene vanus ($x) on vanem kui teine vanus ($y).";
        } elseif($y < $x) {
            echo "Teine vanus ($y) on vanem kui esimene vanus ($x).";
        } else {
         echo "Mõlemad on ühevanused ($x).";
        }
        } else {
            echo "Palun täitke mõlemad vanuse lahtrid.";
        }

    ?>


    <h2>Ruut Või ristkülik</h2>
        <form action="#" method="get">
            <label for="g">Sisesta Esimene külg</label>
            <input type="number" name="g" id="g"><br>
            <label for="f">Sisesta teine külg</label>
            <input type="number" name="f" id="f"><br>
            <input type="submit" class="btn btn-success my-2" value="Leia kas on ruut või ristkülik">
        </form>
        
        <?php
        if(!empty($_GET["g"]) && !empty($_GET["f"])) {
            $g = intval($_GET["g"]);
            $f = intval($_GET["f"]);
            if($g == $f) {
                echo "Tegemist on ruuduga, sest mõlemad küljed on võrdsed ($g x $f).";
                echo "<img src=en17-600x600.jpg>";
            } else {
                echo "Tegemist on ristkülikuga, sest küljed ei ole võrdsed ($g x $f).";
                echo "<img src=unnamed.gif>";
            }
        } else {
            echo "Palun täitke mõlemad külgede lahtrid.";
        }
    
    ?>

    <h2>Juubel voi ei</h2>
        <form action="#" method="get">
            <label for="n">Sisesta oma synniaasta</label>
            <input type="number" name="n" id="n"><br>
            <input type="submit" class="btn btn-success my-2" value="Leia kas sul on juubeli aasta">
        </form>

        <?php
        if(!empty($_GET["n"])) {
            $n = intval($_GET["n"]);
            if(($n % 5) == 0) {
                echo "Palju õnne! Aasta $n on juubeliaasta.";
            } else {
                echo "Aasta $n ei ole juubeliaasta.";
            }
        } else {
            echo "Palun sisestage sünniaasta enne kontrollimist.";
        }
    ?>
    


    <h2>Hinne</h2>
        <form action="#" method="get">
            <label for="b">Sisesta oma punktisumma</label>
            <input type="number" name="b" id="b"><br>
            <input type="submit" class="btn btn-success my-2" value="Leia kas hinne on hea voi mitte">
        </form>

        <?php
         if(!empty($_GET["b"])) {
            $b = intval($_GET["b"]);
            switch(true) {
                case $b >= 10:
                    echo "SUPER!";
                    break;
                case $b >= 5 && $b <= 9:
                    echo "TEHTUD!";
                    break;
                case $b < 5:
                    echo "KASIN!";
                    break;
                default:
                    echo "SISESTA OMA PUNKTID!";
            }
        } else {
            echo "SISESTA OMA PUNKTID!";
        }
    ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>