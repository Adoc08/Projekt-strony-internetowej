<?php
require_once 'connection.php';
session_start();

@$imie = $_POST['imie'];
@$nazwisko = $_POST['nazwisko'];
@$user = $_POST['user'];
@$haslo = $_POST['haslo'];
@$phaslo = $_POST['phaslo'];

$ok = true;

if (strlen($imie)<=1 || strlen($imie)>=15) {
    $_SESSION['im_err'] = '<span style="color: red; font-size: 12px">Imię musi mieć więcej niż 1 znak i nie może przekraczać 15</span><br>';
    $ok = false;
}
if (strlen($nazwisko)<=1 || strlen($nazwisko)>=15) {
    $_SESSION['naz_err'] = '<span style="color: red; font-size: 12px">Nazwisko musi mieć więcej niż 1 znak i nie może przekraczać 15</span><br>';
    $ok = false;
}
if (strlen($user)<=3 || strlen($user)>=15) {
    $_SESSION['nazu_err'] = '<span style="color: red; font-size: 12px">Nazwa Użytkownika musi mieć więcej niż 3 znaki i nie może przekraczać 15</span><br>';
    $ok = false;
}
if (strlen($haslo)<=8 || strlen($haslo)>=20) {
    $_SESSION['pass_err'] = '<span style="color: red; font-size: 12px">Hasło musi mieć więcej niż 8 znaków i nie może przekraczać 20</span><br>';
    $ok = false;
}
if ($haslo!== $phaslo) {
    $_SESSION['conpass_err'] = '<span style="color: red; font-size: 12px">Hasło niezgadza się</span><br>';
    $ok = false;
}
?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zajs.css">
    <title>Artystycznie</title>
</head>
<body>
<div id="main">
    <div id="baner">
        Zajerestruj Się
    </div>
    <a href="index.php"><--- Wróć</a>
    <div id="form">
    <form id="zajform" method="post" action="zaj.php">
        <input class="data" type="text" placeholder="Imie" name="imie">
        <input class="data" type="text" placeholder="Nazwisko" name="nazwisko"><br>
        <?php
       if (isset($_SESSION['im_err'])) {
        echo $_SESSION['im_err'];
        unset($_SESSION['im_err']);
       }
       if (isset($_SESSION['naz_err'])) {
        echo $_SESSION['naz_err'];
        unset($_SESSION['naz_err']);
       }
        ?>
        <input class="data" type="text" placeholder="Nazwa Użytkownika" name="user"><br>
        <?php
        if (isset($_SESSION['nazu_err'])) {
            echo $_SESSION['nazu_err'];
            unset($_SESSION['nazu_err']);
           }
        ?>
        <input class="data" type="password" placeholder="Hasło" name="haslo">
        <input class="data" type="password" placeholder="Potwierdź Hasło" name="phaslo"><br>
        <?php
        if (isset($_SESSION['pass_err'])) {
            echo $_SESSION['pass_err'];
            unset($_SESSION['pass_err']);
           }
           if (isset($_SESSION['conpass_err'])) {
            echo $_SESSION['conpass_err'];
            unset($_SESSION['conpass_err']);
           }
        ?>
        <br><br>
        <input type="submit" value="Prześlij">
    </form>
    </div>
</div>
</body>
</html>