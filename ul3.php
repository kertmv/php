<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>03 - PHP - Vormid info tootlemine</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Harjutus 03</h1>
        <h2>trapetsi pindala</h2>
        <form action="#" method="get">
            <label for="a">Külg a</label>
            <input type="number" name="a" id="a"><br>
            <label for="b">Külg b</label>
            <input type="number" name="b" id="b"><br>
            <label for="h">Külg h</label>
            <input type="number" name="h" id="h"><br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">
        </form>
        <?php
        if(!empty($_GET)){
            $a=$_GET["a"];
            $b=$_GET["b"] ;
            $h=$_GET["h"];
            $s=(($a+$b)/2)*$h;
            echo "Trapetsi pindala on ".$s."<br>";
        }
        ?>
        <hr>
        <h2>rombi ümbermoot</h2>
        <form action="#" method="get">
            <label form="c">Rombi külg:</label>
            <input type="number" name="c" id="a">
            <input type="submit" class="btn btn-success my-2" value="Arvuta">
        </form>
        <?php
        if(!empty($_GET["c"])){
            $c=$_GET["c"];
            $p=4*$c;
            echo "Rombi umbermoot on ".$p."<br>";
        }
        ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>