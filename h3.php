<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
   
    <?php
/*
 01 - PHP - Muutujad
 Kert Markus Vare
 Haapsalu Kutsehariduskeskus
 31.12.2016
*/
//muutujate loomine
 

//lisab vormist saadud andmed muutujasse
$toode1 = $_GET['t1'];
$toode2 = $_GET['t2'];
$toode3 = $_GET['t3'];

echo 'Toode 1: '.$toode1.'tk<br>';
echo 'Toode 2: '.$toode2.'tk<br>';
echo 'Toode 3: '.$toode3.'tk<br>';
?>
   
   
   
    
   
   
   
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>