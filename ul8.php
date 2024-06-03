<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 8</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
echo "<p>aeg ja kuupaev</p>";
date_default_timezone_set("Europe/Tallinn");
$aeg = date("d.m.Y H:i");
echo $aeg;
?>
<p>Sisesta oma sünniaasta, -kuu ja -kuupäev:</p>
    <form method="GET">
        <input type="number" name="sunniaasta" placeholder="Aasta" required min="1900" max="<?php echo date("Y"); ?>"><br><br>
        <select name="sunnikuu" required>
            <option value="">Kuu</option>
            <?php
            for ($kuu = 1; $kuu <= 12; $kuu++) {
                echo "<option value=\"$kuu\">$kuu</option>";
            }
            ?>
        </select>
        <input type="number" name="sunnikuupaev" placeholder="Kuupäev" required min="1" max="31">
    <button type="submit">Kontrolli vanust</button>
</form>
<?php
if (!empty($_GET["sunniaasta"]) && !empty($_GET["sunnikuu"]) && !empty($_GET["sunnikuupaev"])) {

    $sunniaasta = $_GET["sunniaasta"];
    $sunnikuu = $_GET["sunnikuu"];
    $sunnikuupaev = $_GET["sunnikuupaev"];
    $aeg = time();
    $synnipaev = strtotime("$sunniaasta-$sunnikuu-$sunnikuupaev");

    if ($synnipaev > $aeg) {
        echo "<p>Sünnikuupäev ei saa olla tulevikus!</p>";
        exit();
}

            $vanusseeaasta = date("Y") - $sunniaasta;

            if (date("md", $synnipaev) < date("md")) {
                $vanustana = $vanusseeaasta;
            } else {
                $vanustana = $vanusseeaasta - 1;
            }

            echo "See aasta saad: " . $vanusseeaasta . " aastaseks.". "</br>";
            echo "Sinu vanus praegu: " . $vanustana . " aastane.";
        }
    ?>
<?php
$koolilopp = strtotime("24 June 2024");
$aeg = time();
$paevalles = ceil(($koolilopp - $aeg) / (60 * 60 * 24));

echo "<p>Mitu Päeva Kooli aasta lõpuni</p>";
echo "2022 kooliaasta lõpuni on jäänud $paevalles päeva!";
?>
<p>Vali aastaaja järgi pilt</p>
    <form action="" method="get">
        <label for="aastaaeg">Vali aastaaja järgi:</label>
        <select name="aastaaeg" id="aastaaeg">
            <option value="kevad">Kevad</option>
            <option value="suvi">Suvi</option>
            <option value="sygis">Sügis</option>
            <option value="talv">Talv</option>
        </select>
        <button type="submit">Submit</button>
    </form>
<?php
$aastaaeg = $_GET["aastaaeg"];

switch ($aastaaeg) {
    case "kevad":
        $imageSource = "kevad.jpg";
        break;
    case "suvi":
        $imageSource = "suvi.jpg";
        break;
    case "sygis":
        $imageSource = "sygis.jpg";
        break;
     case "talv":
        $imageSource = "talv.jpg";
        break;
    default:
        $imageSource = "";
        break;
}

if ($imageSource) {
    echo "<img src="" . $imageSource . "" alt="#">";
} else {
    echo "Vali aastaaeg";
}
    ?>

</body>
</html>
