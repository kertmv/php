<?php
$pildid = "pildid/";
$pilt = glob($pildid . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
$suvaline = $pilt[array_rand($pilt)];
echo "<img src="" . $suvaline . "" alt="Suvaline pilt">";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pisipildid</title>
    <style>
        .thumbnail {
            width: 200px;
            height: auto;
            margin: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
$pildid = "pildid/";
$pilt = glob($pildid . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
$igakolmas = count($pilt);
if ($pilt) {
    echo "<br>";
    $counter = 0;
    foreach ($pilt as $image) {
        echo "<img src="" . $image . "" class="thumbnail" onclick="showFullImage(this)" alt="Pisipilt">";
        $counter++;
        if ($counter % 3 == 0 && $counter != $igakolmas) {
            echo "<br>";
        }
    }
} else {
    echo "Pilte ei leitud.";
}
?>
<div id="myModal" class="modal">
    <span class="close" onclick="hideFullImage()">&times;</span>
    <img src="" id="fullImage" class="modal-content">
</div>
<script>
    function showFullImage(img) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("fullImage");
        modal.style.display = "block";
        modalImg.src = img.src;
    }
    function hideFullImage() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
</script>



</body>
</html>
