
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 12</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<p>Auto sõiduaeg</p>
    <form method="get">
        <label for="start">Stardi aeg (hh:mm):</label>
        <input type="text" id="start" name="start" maxlength="5" required pattern="\d{2}:\d{2}">
        <br>
        <label for="end">Lopp aeg (hh:mm):</label>
        <input type="text" id="end" name="end" maxlength="5" required pattern="\d{2}:\d{2}">
        <br>
        <button type="submit">Arvuta sõiduaeg</button>
    </form>

    <?php
    if (!empty($_GET["start"]) && $_GET["end"]) {
        $start = $_GET["start"];
        $end = $_GET["end"];
        if (strlen($start) < 5 || strlen($end) < 5) {
            echo "<p>Sisestatud ajad peavad olema vähemalt viis sümbolit pikad!</p>";
        } else {
            list($starthour, $startminute) = explode(":", $start);
            list($endhour, $endminute) = explode(":", $end);
            $startstamp = $starthour * 60 + $startminute;
            $endstamp = $endhour * 60 + $endminute;
            $diffminutes = ($endstamp - $startstamp + 1440) % 1440;

            $hours = floor($diffminutes / 60);
            $minutes = $diffminutes % 60;
            echo "<p>Sõiduaeg: $hours tundi ja $minutes minutit.</p>";
        }
    }
    ?>
 <?php
$fail="tootajad.csv";
$mpalk= 0;
$npalk= 0;
$marv= 0;
$narv= 0;
$mmax= 0;
$nmax= 0;
$csv = fopen($fail, "r") or die("pole faili");
while(feof($csv)){
$rida = fgetcsv($csv, filesize($fail),";");

if ($rida[1] == "m"){
    $mpalk += $rida[2];
    $marv++;
    $mmax = max($mmax, $rida[2]);
}
else{
    $npalk += $rida[2];
    $narv++;
    $nmax = max($nmax, $rida[2]);
}
}
fclose($csv);
$km= $marv > 0 ? round($mpalk / $marv) : 0;
$kn= $narv > 0 ? round($npalk / $narv) : 0;
echo "Meeste keskmine palk: $km<br>Naiste kesmine palk: $kn<br>";
echo "Meeste suurim palk on: $mmax<br>Naiste suurim palk on<br>";
?>
</body>
</html>
