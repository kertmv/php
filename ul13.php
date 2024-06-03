
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 13</title>
<style>
        .thumbnail {
            max-width: 300px;
            margin: 10px;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.9);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        .modal-content img {
            width: 100%;
        }
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $lfail = array("image/jpeg", "image/jpg");
    $failtyp = $_FILES["image"]["type"];

    if (in_array($failtyp, $lfail)) {
        $image_data = file_get_contents($_FILES["image"]["tmp_name"]);
        $base64_image = base64_encode($image_data);
        echo "<img src="data:" . $failtyp . ";base64," . $base64_image . "" class="thumbnail" onclick="openModal(this)">";
        echo "<div id="myModal" class="modal">
                  <span class="close" onclick="closeModal()">&times;</span>
                  <img class="modal-content" id="img01">
              </div>";
    } else {
        echo "<p>Palun laadige üles ainult JPG või JPEG formaadis pilte.</p>";
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    Valige pilt üleslaadimiseks (JPG või JPEG): <br>
    <input type="file" name="image" accept="image/jpeg, image/jpg" required>
    <br><br>
    <input type="submit" value="Üles laadida pilt">
</form>

<script>
    function openModal(img) {
        document.getElementById("myModal").style.display = "block";
        document.getElementById("img01").src = img.src;
    }
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWpIMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
