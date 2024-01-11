<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zals.css">
    <title>Artystycznie</title>
</head>
<body>
<div id="main">
    <div id="baner">
        Zaloguj Się
    </div>
    <a href="index.php"><--- Wróć</a>
    <div id="form">
    <form id="zalform" method="post" action="zal.php">
        <input class="data" type="text" placeholder="Nazwa Użytkownika" name="user"><br>
        <input class="data" type="password" placeholder="Hasło" name="haslo"><br><br>
        <input type="submit" value="Zaloguj">
    </form>
    </div>
</div>
</body>
</html>