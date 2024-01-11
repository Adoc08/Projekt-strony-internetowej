<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="in.css">
    <title>Artystycznie</title>
</head>
<body>

    <div id="baner">
        <h1 id="logo">ARTYSTYCZNIE</h1>
    </div>

   <div id="nav">
            <a href="zal.php"><div id="b1">ZALOGUJ</div></a>
            <a href="galeria.php"><div id="b2">GALERIA</div></a>
            <a href="placeholder.php"><div id="b3">placeholder</div></a>
   </div>
   <div id="main">
    <div id="rozpocznij">
        <?php
        if (@$_SESSION['zalog'] == "tak"){
            echo '<a href="galeria.php">ROZPOCZNIJ TERAZ!</a>';
        } else {
            echo '<a href="zaj.php">ROZPOCZNIJ TERAZ!</a>';
        }
        ?>
    </div>
   </div>

</body>
</html>