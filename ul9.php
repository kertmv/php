
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>09 - PHP - Tekstifunktsioonid</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2>Sisesta oma nimi</h2>
<form action="" method="get">
    <label for="nimi">Nimi:</label>
    <input type="text" id="nimi" name="nimi">
    <button type="submit">Tervita</button>
</form>
<?php

if (isset($_GET["nimi"])) {
    $nimi = $_GET["nimi"];
    $nimi1 = ucfirst(strtolower($nimi));
    echo "<p>Tere, " . $nimi1 . "!</p>";
} else {
    echo "<p>Palun sisesta oma nimi!</p>";
}
?>
<h2>Sisesta oma sonad</h2>
<form action="" method="get">
    <label for="sonad">sonad:</label>
    <input type="text" id="sonad" name="sonad">
    <button type="submit">lisa punktid</button>
</form>
<?php
        $sonad = $_GET["sonad"];
        $tukeldatud_tekst = implode(".", str_split(strtoupper($sonad)));
        echo "<p>" . $tukeldatud_tekst . "</p>";
    ?>



<form method="get" action="">
<h2>Ropp sona tarnideks ropud sonad on noob, loll ja idioot </h2>
    <label for="lause">Sisesta lause:</label><br>
    <textarea id="lause" name="lause" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Korrasta">
</form>

    <?php
    function ropudsonad($lause) {
        $ropp = array("noob", "loll", "idioot");
        foreach ($ropp as $sona) {
            $lause = preg_replace("/\b" . preg_quote($sona, "/") . "\b/i", str_repeat("*", strlen($sona)), $lause);
        }
        return $lause;
    }
        $lause1 = $_GET["lause"];
        $korraslause = ropudsonad($lause1);
        echo "<p>Korras lause: $korraslause</p>";
    ?>
<form method="get" action="">
    <h2>Gmaili tegemine</h2>
    <label for="enimi">Eesnimi:</label><br>
    <input type="text" id="enimi" name="enimi"><br>
    <label for="pnimi">Perenimi:</label><br>
    <input type="text" id="pnimi" name="pnimi"><br><br>
    <input type="submit" value="Loo email">
</form>

<?php
    function gmail($enimi, $pnimi) {
        $enimi = str_replace(["ä", "ö", "ü", "õ"], ["a", "o", "y", "o"], mb_strtolower($enimi));
        $pnimi = str_replace(["ä", "ö", "ü", "õ"], ["a", "o", "y", "o"], mb_strtolower($pnimi));
        $email = $enimi . "." . $pnimi . "@hkhk.edu.ee";
        return $email;
    }
        $enimi = $_GET["enimi"];
        $pnimi = $_GET["pnimi"];
        $email = gmail($enimi, $pnimi);
        echo "<p>Teie loodud emaili aadress: $email</p>";
    ?>
</body>
</html>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
