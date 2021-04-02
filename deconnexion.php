<?php

session_start();

$_SESSION['usr_id'];
$_SESSION['nom'];
$_SESSION['prenom'];


session_destroy();

setcookie('$mail', '');
setcookie('$mdp', '');

header('location:index.php');