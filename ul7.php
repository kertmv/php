<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 7</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
echo "<p>Tere paiksekene</p>";
function tervita() {
    echo "Tere paiksekesekene!";
}
tervita();
?>
<?php
echo "<p>Uudiskiri</p>";
function liitum() {
    $vorm ='
    <form action="#" method="GET">
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Sisesta oma e-post" aria-label="Sisesta oma e-post" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Liitu uudiskirjaga</button>
            </div>
        </div>
    </form>';

    echo $vorm;
}
liitum();
?>
<form action="" method="GET">
    <p>kasutaja</p>
        <label for="kasutaja">Sisesta oma kasutaja nimi:</label><br>
        <input type="text" id="kasutaja" name="kasutaja"><br>
        <input type="submit" value="Saada">
    </form>
<?php
function gmail($kasutaja) {
    $kasutajav = strtolower($kasutaja);
    $code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 7);
    $email = $kasutajav . "@"  . "hkhk.edu.ee" . "<br>" . "Loodud Kood: ". $code;
    return $email;
}

if (isset($_GET["kasutaja"])) {
    $kasutaja = $_GET["kasutaja"];
    
    $email = gmail($kasutaja);
    echo "Loodud email: " . $email;
} else {
    echo "Palun sisesta oma kasutaja vormi kaudu.";
}
?>
<form action="" method="get">
        <p>numbrid</p>
        <label for="algus">esimene arv:</label>
        <input type="number" id="algus" name="algus" required><br><br>
        <label for="lopp">viimane arv:</label>
        <input type="number" id="lopp" name="lopp" required><br><br>
        <label for="samm">Samm:</label>
        <input type="number" id="samm" name="samm" value="1" required><br><br>
        <input type="submit" value="Genereeri arvud">
    </form>
    <?php
function genereeri_arvud($algus, $lopp, $samm = 1) {
    if ($samm <= 0) {
        return "samm peab olema positiivne arv";
    }

    if ($algus > $lopp) {
        return "algusarv ei tohi olla suurem kui lõpparv";
    }

    $arvud = [];
    for ($i = $algus; $i <= $lopp; $i += $samm) {
        $arvud[] = $i;
    }
    return $arvud;
}

if (isset($_GET["algus"]) && isset($_GET["lopp"])) {
    $algus = $_GET["algus"];
    $lopp = $_GET["lopp"];
    $samm = isset($_GET["samm"]) ? $_GET["samm"] : 1;

    $tulemus = genereeri_arvud($algus, $lopp, $samm);
    echo "arvud: ";
    echo implode(", ", $tulemus);
} else {
    echo "Palun sisesta nii algus kui ka lõpparv";
}
?>
<p>Ristküliku Pindala</p>
    <form action="" method="get">
        <label for="pikkus">Pikkus:</label>
        <input type="number" id="pikkus" name="pikkus" required><br><br>
        <label for="laius">Laius:</label>
        <input type="number" id="laius" name="laius" required><br><br>
        <input type="submit" value="Arvuta pindala">
    </form>

    <?php
        if (isset($_GET["pikkus"]) && isset($_GET["laius"])) {
            $pikkus = $_GET["pikkus"];
            $laius = $_GET["laius"];

            $pindala = arvuta_ristkylikupindala($pikkus, $laius);
            echo "<p>Ristküliku pindala on: " . $pindala . "</p>";
        }
    function arvuta_ristkylikupindala($pikkus, $laius) {
        if ($pikkus <= 0 || $laius <= 0) {
            return "pikkus ja laius peavad olema positiivsed arvud";
        }
        $pindala = $pikkus * $laius;
        return $pindala;
    }
    ?>
    <p>Sisesta oma isikukood:</p>
    <form action="" method="get">
        <input type="text" name="isikukood" placeholder="Sisesta isikukood">
        <input type="submit" value="Kontrolli">
    </form>
    
    <?php
    if (!empty($_GET["isikukood"])) {
        $isikukood = $_GET["isikukood"];
        
        function kontrollisik($isikukood) {
            if (strlen($isikukood) !== 11) {
                return "Isikukood peab olema 11 numbrit pikk.";
            }
            $paev = substr($isikukood, 5, 2);
            $kuu = substr($isikukood, 3, 2);
            $aasta = substr($isikukood, 1, 2);
            
            $sajandikontroll = intval(substr($isikukood, 1, 2));
            $sajand = ($sajandikontroll < 22) ? "20" : "19";
            
            $sunnikuupaev = $sajand . $aasta . "-" . $kuu . "-" . $paev;
        
            $sugu = (intval(substr($isikukood, 0, 1)) % 2 == 0) ? "Naine" : "Mees";
        
            return "Sugu: $sugu, Sünnikuupäev: $sunnikuupaev";
        }
        
        $tulemus = kontrollisik($isikukood);
        echo "<p>$tulemus</p>";
    }
    ?>
    <?php
function koosta_lause($alus, $oeldis, $sihitis) {
    $valus = $alus[array_rand($alus)];
    $voeldis = $oeldis[array_rand($oeldis)];
    $vsihitis = $sihitis[array_rand($sihitis)];

    $lause = ucfirst($valus) . " " . $voeldis . " " . $vsihitis . ".";
    return $lause;
}
$alus = array("kass", "koer", "hiir", "hunt", "jänes");
$oeldis = array("jookseb", "magab", "sööb", "mängib", "vaatab");
$sihitis = array("õue", "toas", "metsas", "aias", "jõe ääres");
$lause = koosta_lause($alus, $oeldis, $sihitis);
echo "<p>Suvaline lause 3 massiviga alus oeldis ja sihitis</p>";
echo "<p>$lause</p>";
?>



    
</body>
</html>
