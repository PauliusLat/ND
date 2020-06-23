<?php


require __DIR__.'/bootsrap.php';

if(!isset($_SESSION['login']) || $_SESSION['login'] !=1){
    header('Location:/BIT_PHP/ND/Pages/LogIn/login.php');
    die();
}

echo '<a href="/BIT_PHP/ND/Pages/LogIn/login.php?logout">Atsijungti</a><br><br>';


echo 'Slaptas.';

