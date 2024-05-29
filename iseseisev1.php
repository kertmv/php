<?php
echo "Väljasta tekst: Juhan liiv, \"Ääremärkused\"<br>";
?>
<?php
$raha = 2000;
$intress = 0.02;
$aeg = 5;
$loppsumma=$raha * (1 + $intress) ** $aeg;

echo "Lõppsumma 5 aasta pärast: " . number_format($loppsumma, 2) . "€<br>";
?>
<?php
$i = 10;
while ($i >= 1) {
    echo $i . " ";
    $i--;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>01 - PHP - iseseisev</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2>Sisesta oma isikukood:</h2>
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
</body>
</html>
